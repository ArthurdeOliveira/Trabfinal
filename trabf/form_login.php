<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
            <a href="index.html" class="logo"><i class="fas fa-shopping-bag"></i>Santé Store</a>
            <div id="menu-bar" class="fas fa-bars">
            </div>
            <nav class="navbar">
                    <ul>
                        <a href="index.html">Pagina Inicial</a>
                        <a href="#sobre">Sobre</a>
                        <a href="form_login.php">Login</a>
                        <a href="form_registrar.php">Cadastro</a>
                        <a href="favs.html">Favoritos</a>
                        <a href="car.html">Meu carrinho</a>
                    </ul>
            </nav>
        </header> 

        <section class="home" id="home">
        <div class="content">
            <h1>Login</h1>
            <form class='form' action="login.php" method="post">
                <input type="text" name="email" placeholder="e-mail"><br><br>
                <input type="password" name="password" placeholder="password"><br><br>
                <button>Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>