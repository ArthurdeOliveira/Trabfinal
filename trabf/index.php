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
        <a href="index.php" class="logo"><i class="fas fa-shopping-bag"></i>Santé Store</a>
        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
           
        <?php
        include './botoes.php'
        ?>  
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h1>Santé Store</h1>
            <hr>
            <h3>Registre-se ou faça login para continuar
            </h3>
           
            <a href="form_login.php" class="btn">Login</a>
            <a href="form_registrar.php" class="btn">Registre-se</a>
        </div>
    </section>
</body>

<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<script src="script.js"></script>
</html>