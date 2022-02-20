<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <script defer src="css/fontawesome/js/all.js"></script>    
    <title>Crear Usuario</title>
</head>
<body class="p-4">
    <h1>CREAR USUARIO</h1>
    <form action="{{url('crearUser')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre_usuario">
        </div>
        <br>
        <div class="form-group">
            <label>Correo</label>
            <input class="form-control" type="text" name="correo_usuario">
        </div>
        <br>
        <div class="form-group">
            <label>Tipo usuario</label>
            <select class="form-control" name="tipo_usuario">
                <option value="admin">Admin</option>
                <option value="user" selected>User</option>
              </select>
        </div>
        <br>
        <div class="form-group">
            <label>Contraseña</label>
            <input class="form-control" type="password" name="contraseña_usuario">
        </div>
        <br> 
        
        <br>
        <input class="btn btn-success" type="submit" value="Crear">
    </form><br>
    <form action="{{url('mostrarUser')}}" method="GET">
        <input class="btn btn-secondary" type="submit" value="Volver">
    </form>
</body>
</html>