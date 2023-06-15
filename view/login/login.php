<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Cloud SQL</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <div class="title-card ">
            <img src="img/google-cloud-logo.svg" width="300">
            <span>Demonstração</span>
        </div>
        <form action="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Entrar'); ?>" method="POST" enctype="multipart/form-data">
            <h2>Login</h2>
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" required>
            <label for="pass">Senha</label>
            <input type="password" id="pass" name="pass" required>
            <a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('ViewCriar'); ?>">Criar usuario</a><br>
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>