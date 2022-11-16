 <link rel="stylesheet" href="Style.css">

   <!-- USUÁRIO ADMINISTRADOR:
        NOME: Prog401
        EMAIL: progweb@401.com
        SENHA: 1234
    -->
<?php
    if (isset($_POST['email'], $_POST['password']) && $_POST['email'] != "" && $_POST['password'] != ""){
        include './connection.php';
        $db = getConexao();
        $sql = "SELECT * FROM usuarios WHERE email = :email AND pass = :pass";    
        $statement = $db->prepare($sql);
        $pass_md5 = md5($_POST['password']);
        $valores = array(
            'email'=>$_POST['email'],
            'pass'=>$pass_md5,
        );
       
        $statement->execute($valores);
        if ($statement->rowCount() > 0){
            $row = $statement->fetch();
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['adm'] = $row['adm'];
            if($_SESSION['adm']== true)
            {
                header('Location: menuAdmin.php'); 
                echo $_SESSION['adm'] = $row['adm'];
            }
            else
            {
                header('Location: menu.php'); 
            }
             
        } else 
        {
            header('Location: form_login.php');
        }
    } else {
        echo '<p>Dados incompletos.</p>';
    }
?>