<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de centros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">       
        @include('components.nav')
        <h4 class="m-3">Asignacion de centro educativo</h4>
                <form class="row g-3" action="{{route('asignaciones.store')}}" method="post">
                @csrf
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-grop">
                         <label class ="form-label"for="iddirector">Nombre del Director</label>

                         <select class="form-control form-select selectpicker" name="iddirector" data-live-search="true">
                              @foreach($directores as $director)
                                   <option value="{{$director->Id_Director}}">
                                   {{$director->Nombres}} {{$director->Apellidos}}
                                   </option >
                              @endforeach
                         </select>
                    </div>
               </div>
               <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-grop">
                         <label class ="form-label"for="idcentro">Centro educativo</label>

                         <select class="form-control form-select selectpicker" name="idcentro" data-show-subtext="true" data-live-search="true">
                              @foreach($centros as $centro)
                                   <option value="{{$centro->IdCentro}}">
                                   {{$centro->Nombre}}
                                   </option >
                              @endforeach
                         </select>
                    </div>
               </div>
               
                    <div class="form-grop">
                         <input type="submit" class="btn btn-primary" value="Guardar">
                         <input type="reset" class="btn btn-default" value="cancelar">
                         <a href="javascript:history.back()">Ir al Listado</a>
                    </div>
             

                </form>
            
        </div>
        @push ('scripts')
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
               $(document).ready(function() {
                     $('.selectpicker').selectpicker();
               });
          </script>

        @endpush
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>