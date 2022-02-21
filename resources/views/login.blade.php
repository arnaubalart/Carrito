<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <script defer src="css/fontawesome/js/all.js"></script>
    <script src="../public/js/code.js"></script>
    <title></title>
</head>
<body class="p-4">
    <div class="titulo">
        <h1>LOGIN</h1>
    </div>
    <br>
    <br>
    <div class="login">
        <form action="{{url('login')}}" method="POST" onsubmit="return validar();">
            @csrf
        <div class="form-group">
            <br>
            <label>Usuario: </label>
            <input class="form-control" type="email" name="email_user" id="email_user" placeholder="Dirección de correo electrónico">
        </div>
        <div class="form-group">
            <br>
            <label>Contraseña: </label>
            <input class="form-control" type="password" name="password_user" id="password_user" placeholder="Contraseña">
        </div>
        <br>
            <div class="login-div">
                <input type="submit" value="Login" class="login-btn">
            </div>
        </form>
        <br>
            <div id="mensaje">
            </div>
    </div>
</body>
</html>