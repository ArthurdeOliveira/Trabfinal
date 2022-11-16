<?php
    if (isset($_POST['nome'], $_POST['desc'], $_POST['texto'], $_POST['data'], $_POST['image']) && $_POST['nome'] != "" && $_POST['desc'] != "" && $_POST['texto'] != "" && $_POST['data'] != ""&& $_POST['image'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "INSERT INTO blog (blog_nome, blog_desc, blog_texto, blog_data, blog_image) VALUES (:nome, :desc, :texto, :data, :image)";
        $statement = $db->prepare($sql);
        $valores = array(
            'nome'=>$_POST['nome'],
            'desc'=>$_POST['desc'],
            'texto'=>$_POST['texto'],
            'data'=>$_POST['data'],
            'image'=>$_POST['image']
        );
        $statement->execute($valores);
        echo 'Artigo Publicado.';
        header('Location: páginas.php?msg=publicado');
    } else {
        echo '<p>Dados incompletos! O artigo não foi publicado.</p>';
    }
?>