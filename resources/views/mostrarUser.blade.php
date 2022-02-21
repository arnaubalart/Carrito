<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <script defer src="css/fontawesome/js/all.js"></script>
    <title></title>
</head>
<body class="p-4">
    <div class="header">
        <div class="filtro">
            <h1>USUARIOS</h1>
        </div>
        <div class="crear">
            <form action="{{url('mostrar')}}" method="GET">
                <button class="cambiar-btn" type="submit">Productos</button>
            </form>
        </div>
        <div class="crear">
            <form action="{{url('crearUser')}}" method="GET">
                <button class="crear-btn" type="submit" name="Crear" value="Crear">Crear</button>
            </form>
        </div>
        <div class="crear">
            <form action="{{url('logout')}}" method="GET">
                <button class="logout-btn" type="submit" name="logout" value="logout"></i>Logout</button>
            </form>
        </div>
    </div>
    <div>
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CORREO</th>
                <th scope="col">TIPO</th>
                <th scope="col">CONTRASEÑA</th>
            </tr>
            @foreach($listaUser as $usuario)
                <tr>
                    <td>{{$usuario->id_usuario}}</td>
                    <td><b>{{$usuario->nombre_usuario}}</b></td>
                    <td>{{$usuario->correo_usuario}}</td>
                    <td>{{$usuario->tipo_usuario}}</td>
                    <td>{{$usuario->contraseña_usuario}}</td>
                    <td><form action="{{url('modificarUser/'.$usuario->id_usuario)}}" method="GET">
                        <button class= "btn btn-secondary" type="submit" value="Edit">Modificar</button>
                    </form></td>
                    <td><form action="{{url('eliminarUser/'.$usuario->id_usuario)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class= "btn btn-danger" type="submit" value="Delete">Borrar</button>
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>