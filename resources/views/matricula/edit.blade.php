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
        <div class="row">
            @include('components.nav')
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('matricula.update',$matricula->Id_Matricula)}}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-grop">
                         <label for="nombre">Centro Educativo</label>
                         <input type="text" class="form-control" name="nombre" required maxlength="100" value="{{$matricula->Nombre}}">
                    </div>

                    <div class="form-grop">
                         <label for="codigounico">Codigo Unico de Centro</label>
                         <input type="numeric" class="form-control" name="codigounico" required maxlength="5" value="{{$matricula->CodigoUnico}}">
                    </div>

                    <div class="form-grop">
                         <label for="departamento">Departamento</label>
                         <input type="text" class="form-control" name="departamento" required maxlength="100" value="{{$matricula->Departamento}}">
                    </div>

                    <div class="form-grop">
                         <label for="muicipio">Municipio</label>
                         <input type="text" class="form-control" name="municipio" required maxlength="100" value="{{$matricula->Municipio}}">
                    </div>

                    <div class="form-grop">
                         <input type="submit" class="btn btn-primary" value="Guardar">
                         <input type="reset" class="btn btn-default" value="cancelar">
                         <a href="javascript:history.back()">Ir al Listado</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>