<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Registre-se</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>

    <div class='navbar'>
        <?php
            include './botoesAdm.php'
        ?>
    </div>
    <form class='form' action="registrarAdm.php" method="post">
       
        <input type="text" name="nome" placeholder="nome"><br><br>
        <input type="text" name="email" placeholder="e-mail"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <label for="adm">Administrador</label>
        <input type="checkbox" name="adm" id="adm">
        <button>Enviar</button>
    </form>
    <br>
    
</body>
</html>