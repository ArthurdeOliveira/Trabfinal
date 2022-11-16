<?php
    if (isset($_POST['nome'], $_POST['texto'], $_POST['data'], $_POST['image']) && $_POST['nome'] != "" && $_POST['texto'] != "" && $_POST['data'] != "" && $_GET['id'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "UPDATE blog SET blog_nome = :nome, blog_desc = :desc, blog_texto = :texto, blog_data = :data, blog_image = :image WHERE blog_id = :id";
        $statement = $db->prepare($sql);
        $valores = array(
            'nome'=>$_POST['nome'],
            'desc'=>$_POST['desc'],
            'texto'=>$_POST['texto'],
            'data'=>$_POST['data'],
            'image'=>$_POST['image'],
            'id'=>$_GET['id']
        );
        $statement->execute($valores);
        echo 'Artigo atualizado.';
        header('Location: páginas.php?msg=atualizado');
    } else {
        echo '<p>Dados incompletos! O artigo não foi alterado.</p>';
    }
?>