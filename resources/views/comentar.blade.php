<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <table class="styles">
        <h4>Ver Admin</h4>
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>direccion</th>
            <th>puntuacion</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>        
            <td>{{$place->id}}</td>
            <td>{{$place->placename}}</td>
            <td>{{$place->direccion}}</td>
            <td>{{$place->puntuacion}}</td>
           
        </tr>
        </tbody>
    </table>





    <h1>FOrmulariuo comentario</h1>
    
    <form action="{{route('coment.create')}}" method="POST">>

    @csrf

    <label for="">Ingrese Titulo</label>
    <input type="text" name="titulo" id="titulo">
    <label for="">Ingrese Cuerpo</label>
    <input type="text" name="cuerpo" id="cuerpo">
    <label for="">Ingrese Puntuacion</label>
    <input type="number" name="puntuacion" id="puntuacion">

    <button type="submit">Comentar</button>

</body>
</html>