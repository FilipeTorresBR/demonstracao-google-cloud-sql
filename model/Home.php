<?php 
class Home {
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Listar(){
		try{
			$sql = $this->pdo->prepare("SELECT * FROM fecomp20 ORDER BY(id)");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function adicionarAluno($nome, $turma){
		try{
			$sql = $this->pdo->prepare("INSERT INTO fecomp20 (nome, turma) VALUES (?, ?)");
			$sql->execute(array($nome, $turma));
			header("Location: ?c=".base64_encode("Home"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
