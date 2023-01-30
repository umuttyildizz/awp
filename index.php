<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Login Page</title>
</head>
<div class="container">
    <div class="modal-dialog-centered">
        <div class="loginmodal-container"
        <body style="margin:50px">
        <form action="giris.php" method="post">
            <table align="center" style="height:200px; width:400px; background-color:#FFFFFF;">
                <tr>
                    <td class="tittle" align="center" colspan="2">
                        LOGIN PAGE
                    </td>
                </tr>
                <tr>
                    <td>
                        Username :
                    </td>
                    <td>
                        <input name="username" class="form-control" required="required" type="text"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input name="password" class="form-control" required="required" type="password"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="ok" value="login"></input>
                    </td>
                </tr>
            </table>

        </form>

        </body>
    </div>
</div>
</html>