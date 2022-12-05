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
            <h1>Santé Store</h1>
            <hr>
            <h3>Bem-Vindo Administrador</h3>
            <p>Produtos Fitness</p>
           
            <a href="form_cadastrar.php" class="btn">Cadastrar Produtos</a>
        </div>
    </section>
    
    <section class='produtos'>
        <div class='box-container'>
    <?php
    include './connection.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();
    
    while($row = $statement->fetch()){
        echo "
        
                <div class='box'>
                <h1 id='nome'>" . $row['prod_nome'] . " </h1>
                <br>
                <h2>" . $row['prod_desc'] . " </h2>
                <br>
                <br>
                <p id='img'><img src='./img/". $row['prod_image'] ."'></p>
                <br>
                <br>
                <h1>" . $row['prod_val'] . " </h1>
                <br>
                <br>
                <a href='edição.php?id=". $row['prod_id'] ."'class='btn'>Editar</a>
                <a href='excluir.php?id=". $row['prod_id'] ."'class='btn'>Apagar</a>
                </div>
              ";
            }
            ?>
              </div>
                </section>
    <a href="cadastrar.html"><button id="publicar">Publicar</button></a>
    <a href="index.php"><button>Página index</button></a>
</body>
</html>
   