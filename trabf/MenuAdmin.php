<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Blog</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['id'])){
            header('location: form_login.php');
        }
    ?>
    <nav class="artigos">
    <h1>Politica.com</h1>
    </nav>

    <div class="navbar">
    <?php
        include './botoesAdm.php'
    ?>  
    </div>

    <?php
    include './connection.php';
    $db = getConexao();
    $sql = "SELECT * FROM blog ORDER BY 'date'";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch()){
        echo "<div class='artigo'>
                <div class='conteudo'>
                    <p id='titulo'>" . $row['blog_nome'] . "</p> 
                    <p id='desc'>" . $row['blog_desc'] . " </p>
                    <p id='img'><img src='./img/". $row['blog_image'] ."'></p>
                    <p>" . $row['blog_data'] . "</p>
                </div>
               <a href='paginaArtigo.php?id=".$row['blog_id']."'><button>Abrir o artigo</button></a>
              </div>";
    }
    ?> 
    <a href="páginas.php"><button id="publicar">Administração</button></a>

</body>
</html>