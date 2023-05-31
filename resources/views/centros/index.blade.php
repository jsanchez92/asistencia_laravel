<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de centros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            @include('components.nav')
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('centros.index')}}" method="get">
                    <div class="row align-items-start my-2">
                        <div class="col-sm-4">
                            <input type="text" class="form-control my-1" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-primary my-1" value="Buscar">
                        </div>
                        <div class="col-auto">
                            <a href="{{route('centros.create')}}" class="btn btn-success my-1">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                        <table class="table table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Id</th>                                    
                                    <th>Nombre</th>
                                    <th>Codigo unico</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($centros)<=0)
                                    <tr>
                                        <td colspan=6>No hay registros</td>
                                    </tr>
                                @else
                                    @foreach($centros as $centro)
                                    <tr>
                                        <td class="align-items-start"> 
                                            <a href="{{route('centros.edit', $centro->IdCentro)}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{route('matricula.show', $centro->IdCentro)}}" class="btn  btn-primary btn-sm">Matricula</a>  
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$centro->IdCentro}}">
                                                X
                                            </button>
                                        </td>
                                        <td>{{$centro->IdCentro}}</td>
                                        <td>{{$centro->Nombre}}</td>
                                        <td>{{$centro->CodigoUnico}}</td>
                                        <td>{{$centro->Departamento}}</td>
                                        <td>{{$centro->Municipio}}</td>                                   
                                    </tr>
                                    @include('centros.delete')
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{$centros->render()}}              
            
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html> 