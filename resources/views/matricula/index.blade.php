<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Matricula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            @include('components.nav')
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('matricula.index')}}" method="get">
                    <div class="row align-items-start my-2">
                        <div class="col-sm-4">
                            <input type="text" class="form-control my-1" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-primary my-1" value="Buscar">
                        </div>
                        <div class="col-auto">
                           <a href="{{route('centros.index')}}" class="btn btn-success my-1">
                                Nuevo
                           </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                        <table class="table  table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Id</th>                                     
                                    <th>Centro Educativo</th>
                                    <th>Codigo unico</th>
                                    <th>Turno</th>
                                    <th>Modalidad</th>
                                    <th>AS</th>
                                    <th>F</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($matriculas)<=0)
                                    <tr>
                                        <td colspan=6>No hay registros</td>
                                    </tr>
                                @else
                                    @php
                                        $totalAs = 0;
                                        $totalF = 0;
                                    @endphp
                                    @foreach($matriculas as $matricula)
                                    <tr>
                                        <td class="align-items-start"> 
                                            <a href="{{route('matricula.edit', $matricula->id_Matricula)}}" class="btn btn-warning btn-sm">Edit</a>  
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$matricula->id_Matricula}}"> 
                                                X                                           
                                            </button>
                                        </td>
                                        <td>{{$matricula->id_Matricula}}</td>
                                        <td>{{$matricula->Nombre}}</td>
                                        <td>{{$matricula->CodigoUnico}}</td>
                                        <td>{{$matricula->Turno}}</td>
                                        <td>{{$matricula->Modalidad}}</td>
                                        <td>{{$matricula->AmbosSexos}}</td>
                                        <td>{{$matricula->Femenino}}</td>                                  
                                    </tr>
                                    @php
                                        $totalAs += $matricula->AmbosSexos;
                                        $totalF += $matricula->Femenino;
                                    @endphp
                                    @include('matricula.delete')
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="total row text-end">
                        <p>Total de matricula -> AS: {{$totalAs}} F: {{$totalF}} </p>
                    </div>
                    {{$matriculas->render()}}              
            </div>
        </div>  
      <!--  @include('matricula.mostrarCentro')  --> 
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html> 