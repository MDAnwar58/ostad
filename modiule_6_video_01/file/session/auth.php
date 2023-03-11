<?php
session_start( [
    'cookie_lifetime' => 300, // 5min auth system
] );

$error = false;

// session_destroy();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ('admin' == $_POST['username'] && 'a51e47f646375ab6bf5dd2c42d3e6181' == md5($_POST['password'])) {
        $_SESSION['loggedin'] = true;
    } else {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}
if(isset($_POST['logout']))
{
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                if (true == $_SESSION['loggedin']) {
                    echo "Hello Admin, Welcome Here!";
                } else {
                    echo "Hello Stranger, Login Begin";
                }
                ?>
            </div>
        </div>
        <div class="row" style="margin-top: 3rem;">
            <div class="column column-60 column-offset-20">
                <?php
                echo "sha1: ", sha1("rabbit");
                echo "<br>";
                echo "sha256: ", hash("sha256", "rabbit");
                echo "<br>";
                echo "sha256: ", hash("sha512", "rabbit");
                echo "<br>";
                echo "md5: ", md5("rabbit");
                if($error)
                {
                    echo "<blockquote>Username and Password didn't match</blockquote>";
                }
                if (false == $_SESSION['loggedin']) :
                ?>
                    <form action="" method="POST">
                        <label for="">Username</label>
                        <input type="text" name="username" id="username">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password">
                        <button type="submit" class="button-primary" name="submit">Log in</button>
                    </form>
                <?php
                else :
                ?>
                    <form action="auth.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="button-primary" name="submit">Logout</button>
                    </form>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</body>

</html>