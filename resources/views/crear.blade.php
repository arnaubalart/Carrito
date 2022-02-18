<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <script defer src="css/fontawesome/js/all.js"></script>    
    <title>Crear Energetica</title>
</head>
<body class="p-4">
    <h1>CREAR PRODUCTO</h1>
    <form action="{{url('crear')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Marca</label>
            <input class="form-control" type="text" name="marca_producto">
        </div>
        <br>
        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre_producto">
        </div>
        <br>
        <div class="form-group">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion_producto">
        </div>
        <br>
        <div class="form-group">
            <label>Precio</label>
            <input class="form-control" type="number" name="precio_producto">
        </div>
        <br> 
        <div class="form-group">
            <label>Foto</label>
            <input class="form-control" type="" name="foto_producto">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Crear">
    </form><br>
    <form action="{{url('mostrar')}}" method="GET">
        <input class="btn btn-secondary" type="submit" value="Volver">
    </form>
</body>
</html>