@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <h1>Bienvenido a TuOpinionCuenta</h1>

                    <table class="styles"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre:</th>
                    <th>direccion:</th>
                    <th>puntuacion:</th> 
                    <th>Mostrar</th> 
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($places as $place) 
                <tr>
                <td>{{$place->id}}</td>
                    <td>{{$place->placename}}</td>
                    <td>{{$place->direccion}}</td>
                    <td>{{$place->puntuacion}}</td>
                    <td> 
                        <a href="{{route('place.show', $place->id)}}" class="btn btn-outline-info">Mostrar</a> 
                    </td>
                    <td>

                    </td>
                    <td>
                        <form action="{{route('place.destroy',$place->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-delete" type="submit">Eliminar</button> 
                        </form>  
                 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
