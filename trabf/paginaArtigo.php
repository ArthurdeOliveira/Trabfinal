<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Artigo</title>
</head>
<body>
    <nav class='artigos'>
    <h1>Artigo</h1>
    </nav>
       
    </a>
    <?php
    include './connection.php';
    $db = getConexao();
    $art = $_GET['id'];
    $sql = "SELECT * FROM blog WHERE blog_id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id',$art);
    $statement->execute();

    $banco = $statement->fetchAll();
    foreach ($banco as $value) {
        echo "<div class='artigo'>
        <p>" . $value['blog_data'] . " </p>
                <p id='titulo-art'>" . $value['blog_nome'] . " </p>
                <p id='img'><img src='./img/". $value['blog_image'] ."'></p>
                <p id='texto'>" . $value['blog_texto'] . " </p>
                <a id='voltar' href='index.php'><button>Voltar</button></a>
              </div>";
    }
    ?>
</body>
</html>