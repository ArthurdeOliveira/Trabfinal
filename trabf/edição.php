<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Administrador</title>
</head>
<body>
    <?php
        include './connection.php';
        $db = getConexao();
        $sql = "SELECT * FROM blog WHERE blog_id = :id";
        $statement = $db->prepare($sql);
        $valores = array(
            'id'=>$_GET['id']
        );
        $statement->execute($valores);
        $artigo = $statement->fetch();
    ?>
    <h1>Editar artigo</h1>

        <?php echo "<form class='form' action='editar.php?id=" . $_GET['id'] ."' method='post'>" ?>
            <p>
            <label for="nome">Nome: </label>
            <?php echo "<input id='nome' type='text' name='nome' value='". $artigo['blog_nome'] ."'>" ?>
            </p>
            <p>
            <label for="desc">Descrição: </label>
            <?php echo "<input id='texto' type='text' name='desc' value='". $artigo['blog_desc'] ."'>" ?>
            </p>
            <p>
            <label for="texto">Texto: </label>
            <?php echo "<input id='texto' type='text' name='texto' value='". $artigo['blog_texto'] ."'>" ?>
            </p>
            <p>
            <label for="data">Data: </label>
            <?php echo "<input id='data' type='date' name='data'  value='". $artigo['blog_data'] ."'>" ?>
            </p>
            <p>
            <label for="image">Imagem: </label>
            <?php echo "<input id='image' type='text' name='image'  value='". $artigo['blog_image'] ."'>" ?>
            </p>
            <a id="voltar" href="publicações.php"><button>Alterar</button></a>
            <a id="voltar" href="publicações.php"><button>Voltar</button></a>
        </form>
    </div>
</body>
</html>