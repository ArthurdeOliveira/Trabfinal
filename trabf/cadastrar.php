<?php
    if (isset($_POST['id'], $_POST['nome'], $_POST['desc'], $_POST['val'], $_POST['image']) && $_POST['id'] != "" && $_POST['nome'] != "" && $_POST['desc'] != "" && $_POST['val'] != "" && $_POST['image'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "INSERT INTO produtos (prod_id, prod_nome, prod_desc, prod_val, prod_image) VALUES (:id, :nome, :desc, :val, :image)";
        $statement = $db->prepare($sql);
        $valores = array(
            'id'=>$_POST['id'],
            'nome'=>$_POST['nome'],
            'desc'=>$_POST['desc'],
            'val'=>$_POST['val'],
            'image'=>$_POST['image']
        );
        $statement->execute($valores);
        echo 'Artigo Publicado.';
        header('Location: produtos.php?msg=publicado');
    } else {
        echo '<p>Dados incompletos! O artigo não foi publicado.</p>';
    }
?>