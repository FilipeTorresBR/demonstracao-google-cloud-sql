<?php
require_once "model/Home.php";

class HomeController{
	private $model;

	public function __CONSTRUCT(){
		$this->model = new Home();
	}

	public function Index(){
		require_once "view/home/home.php";
	}

	public function InserirAluno(){
		$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$turma = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);

		$this->model->adicionarAluno($nome, $turma);

	}
}
?>