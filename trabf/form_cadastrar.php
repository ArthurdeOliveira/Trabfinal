<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Santé Store</title>
</head>
<body>
    <header>
        <?php
        session_start();
            if (!isset($_SESSION['id'])){
                header('location: form_login.php');
            }
        ?>
        
        <a href="index.php" class="logo"><i class="fas fa-shopping-bag"></i>Santé Store</a>
        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
           
        <?php
        include './botoesAdm.php'
        ?>  
        </nav>
    </header>
    
    <section class="home" id="home">
        <div class="content">
        <form action="cadastrar.php" method="post">
            <p>
            <label for="nome">Nome: </label>
            <input id="nome" type="text" name="nome">
            </p>
            <p>
            <label for="id">ID: </label>
            <input id="id" type="number" name="id">
            </p>
            <p>
             <label for="desc">Descrição: </label>
             <input id="desc" type="text" name="desc">
            </p>
            <p>
            <label for="val">Valor: </label>
            <input id="val" type="text" name="val">
            </p>
            <p>
            <label for="image">Imagem: </label>
            <input id="image" type="text" name="image">
            </p>
            <button class='btn'>Publicar</button>
        </form>
        </div>
    </section>
</body>

<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<script src="script.js"></script>
</html>