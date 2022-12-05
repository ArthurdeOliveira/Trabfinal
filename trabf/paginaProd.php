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
        include './botoes.php'
        ?>  
        </nav>
    </header>
    <div class='subtitulo'>
                
                <!------------------------------------- RESTO ------------------------------------->     
    <section class='produtos'>
    <div class='box-container'>

<?php
    include './connection.php';
    $db = getConexao();
    $art = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE prod_id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$art);
    $statement->execute();

    $banco = $statement->fetchAll();
    foreach ($banco as $value) {
        echo "
        
                <div class='produtos'>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <div class='box'>
                <h1 id='titulo-art'>" . $value['prod_nome'] . " </h1>
                <p id='img'><img src='./img/". $value['prod_image'] ."'></p>
                <h1 id='desc'>" . $value['prod_desc'] . " </h1>
                <h1>" . $value['prod_val'] . " </h1>
                <a class='btn' href=''>Comprar</a>
                <a class='btn' href='menu.php'>Voltar</a>
                </div>
              </div>";
    }
    ?>
            </div>
        </section>
    </div>       
        

</body>
</html>