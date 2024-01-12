<!DOCTYPE html>
<html>
    <head>
        <title>myPerpus</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="content-login">
            <table align="center" cellspacing="0" width="70%" style="margin: auto; padding: 16px;">
                <form action="cek-login.php" method="post">
                    <tr>
                        <td colspan="2"><h1 align="center">Login</h1></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" class="input"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" class="input"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-bottom: 16px;">
                            <input type="reset" class="submit" value="Reset">
                            <input type="submit" class="submit" value="Masuk">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>