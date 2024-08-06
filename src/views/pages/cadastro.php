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
                <h1>Sign Up</h1>
                <div class="signin">
                    <form action="" class="signin-form">
                        <label for="name" class="label-input">
                            <p>name</p>
                            <input class="input" type="text" name="name" placeholder="user">
                        </label>
                        <label for="email" class="label-input">
                            <p>E-mail</p>
                            <input class="input" type="text" name="email" placeholder="user@orkut.com">
                        </label>
                        <label for="password" class="label-input">
                            <p>Password</p>
                            <input class="input" type="password" name="password" placeholder="mypassword1234">
                        </label>
                        <label for="birthdate" class="label-input">
                            <p>Birthdate</p>
                            <input class="input" type="text" name="birthdate" placeholder="00/00/0000">
                        </label>
                        <div class="links-login" >
                            <a class="submit-signin" href="">Register</a>
                            <a class="register-signin" href="register-signin">I have an account</a>
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