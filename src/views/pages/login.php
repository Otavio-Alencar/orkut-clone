<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base?>/assets/css/login.css">
    <title>Orkut</title>
</head>

<body>
    <article class="container">
        <aside class="sidebar-login">
            <div class="content">
                <h1>Welcome Back</h1>
                <div class="signin">
                    <form action="" method="POST" class="signin-form">
                        <label for="email" class="label-input">
                            <p>E-mail</p>
                            <input class="input" type="text" name="email" placeholder="user@orkut.com" autofocus>
                        </label>
                        <label for="password" class="label-input">
                            <p>Password</p>
                            <input class="input" type="password" name="password" placeholder="mypassword1234">
                        </label>
                        <div class="links-login">
                            <a class="submit-signin" href="">Login</a>
                            <a class="register-signin" href="">Create an account</a>
                        </div>
                           
                    </form>


                </div>
            </div>
        </aside>
        <div class="logo">
            <img src="<?=$base?>/assets/images/pngwing.com.png" alt="">
        </div>
    </article>
</body>

</html>