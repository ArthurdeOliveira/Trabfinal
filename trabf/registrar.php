  <!-- USUÁRIO ADMINISTRADOR:
        NOME: Prog401
        EMAIL: progweb@401.com
        SENHA: 1234
    -->

<?php
    if (isset($_POST['nome'], $_POST['email'], $_POST['password']) 
    && $_POST['nome'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "SELECT * FROM usuarios WHERE email = :email";    
        $statement = $db->prepare($sql);
        $valores = array(
            'email'=>$_POST['email']
        );
        $statement->execute($valores);
        if ($statement->rowCount() > 0){
            echo '<p>Já existe um usuário cadastrado com esse e-mail.</p><br>
            <a href="form_register.php">Voltar</a>';
        } else {
            $sql = "INSERT INTO usuarios (nome, email, pass) VALUES (:nome, :email, :pass)";    
            $statement = $db->prepare($sql);
            $pass_md5 = md5($_POST['password']);
            $valores = array(
                'nome'=>$_POST['nome'],
                'email'=>$_POST['email'],
                'pass'=>$pass_md5
            );
            $statement->execute($valores);
            header('Location: form_login.php');
        }       
    } else {
        echo '<p>Dados incompletos. Usuário não foi cadastrado.</p><br>
              <a href="form_register.php">Voltar</a>';
    }
?>

