<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Hoteles</title>
</head>
<body>
    <div class="header">
        <div class="filtro">
            @csrf
                {{method_field('GET')}}
            <form action="{{url('mostrar')}}" method="POST">
                <input class="filtro-input" type="text" name="filtro">
            </form>
        </div>
        <div class="crear">
            <form action="{{url('crear')}}" method="GET">
                <button class= "btn btn-secondary" type="submit" name="Crear" value="Crear">Crear</button>
            </form>
        </div>
        <div class="carrito">
            <form action="" method="GET">
                <button class= "btn btn-secondary" type="submit" name="carrito" value="carrito"><i class="fa-solid fa-cart-shopping"></i>Carrito</button>
            </form>
        </div>
    </div>
    <div>
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MARCA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">PRECIO</th>
                <th scope="col">FOTO</th>
                <th scope="col"></th>
            </tr>
            @foreach($lista as $producto)
                <tr>
                    <td>{{$producto->id_producto}}</td>
                    <td>{{$producto->marca_producto}}</td>
                    <td><b>{{$producto->nombre_producto}}</b></td>
                    <td>{{$producto->descripcion_producto}}</td>
                    <td>{{$producto->precio_producto}}</td>
                    <td>{{$producto->foto_producto}}</td>
                    <td><form action="{{url('modificarHotel/'.$producto->id_producto)}}" method="GET">
                        <button class= "btn btn-secondary" type="submit" value="Edit">Edit</button>
                    </form></td>
                    <td><form action="{{url('eliminarHotel/'.$producto->id_producto)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class= "btn btn-danger" type="submit" value="Delete">Delete</button>
                    </form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>