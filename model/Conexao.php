<?php
class Conexao {
	public static function Conectar() {
		$pdo = new PDO('mysql:host=localhost;dbname=fecomp;charset=utf8', 'user', 'pass');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
?>
