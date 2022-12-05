<?php
    if (isset($_GET['id']) && $_GET['id'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "DELETE FROM produtos WHERE prod_id = :id";
        $statement = $db->prepare($sql);
        $valores = array(
            'id'=>$_GET['id']
        );
        $statement->execute($valores);
        echo 'Artigo deletado.';
        header('Location: menuAdm.php?msg=apagado');
    } else {
        echo '<p>O artigo não foi deletado.</p>';
    }
?>