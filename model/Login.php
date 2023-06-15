<?php
class Login{
	private $pdo;

	public function __CONSTRUCT() {
		try{
			$this->pdo = Conexao::Conectar();
		}
		catch(Throwable $t){
			die($t->getMessage());
		}
	}

	public function Entrar($usuario, $senha){
		try{
			$sql = $this->pdo->prepare("SELECT * FROM login WHERE user = ? AND pass = ?");
			$sql->execute(array($usuario, $senha));
			return $sql->fetch(PDO::FETCH_OBJ);
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
	public function Sessao($entrar){
		try{
			if (!$entrar) {
				header("Location: ?c=".base64_encode('Login'). "&m=".base64_encode("loginerrado"));
			}else{
				$_SESSION['id'] = $entrar->id;
				$_SESSION['usuario'] = $entrar->usuario;

				header("Location: ?c=".base64_encode('Home'). "&a=".base64_encode("Index"));
			}
			
		}catch(Throwable $t){
			die($t->getMessage());
		}
	}
	public function adicionarUsuario($user, $pass){
		try{
			$sql = $this->pdo->prepare("INSERT INTO login (user, pass) VALUES (?, ?)");

			$sql->execute(array($user, $pass));
			header("Location: ?c=".base64_encode("Login"));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
}

?>