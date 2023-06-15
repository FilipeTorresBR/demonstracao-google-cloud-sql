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
            <span>Google Cloud SQL</span>
        </div>
        <div class="cadastro">
            <form action="?c=<?php echo base64_encode('Home'); ?>&a=<?php echo base64_encode('InserirAluno'); ?>" method="POST" enctype="multipart/form-data">
                <h2>Cadastro de alunos</h2>
                <label for="nome">Nome</label>
                <input type="text" id="name" name="name">
                <label for="class">Turma</label>
                <input type="text" id="class" name="class">
                <input type="submit" value="Salvar">
            </form>
        </div>
        <div class="listar">
            <?php foreach($this->model->Listar() as $r): ?>
            <table>                
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome completo</th>
                        <th>Turma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $r->id ?></td>
                        <td><?php echo $r->nome; ?></td>
                        <td><?php echo $r->turma; ?></td>
                    </tr>
                </tbody>
            </table>
            
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>