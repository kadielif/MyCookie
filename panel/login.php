

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .form {
                position: absolute;
                top:30%;
                left:40%;
            }
        </style>
    </head>
    <body>
        <form class="form" action="kontrol.php" method="post" name="loginForm">
            <table>
                <tr>
                    <td colspan="2">
                        <img src="login.jpg" width="300" />
                    </td>
                </tr>
                <tr>
                    <td>Kullanıcı Adı</td>
                    <td><input type="text" name="kad" /></td>
                </tr>
                <tr>
                    <td>Parola</td>
                    <td><input type="password" name="parola" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value = "GİRİŞ YAP" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                        if(isset($_GET["hata"])){
                            if($_GET["hata"]==1)
                                echo "HATA : Kullanıcı Adı ve ya Parola Hatalı!";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
