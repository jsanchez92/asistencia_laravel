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
        <h4>Nuevo Centro Educativo</h4>
        <div class="row">
        @include('components.nav')
            <div class="col-xl-12">
                <form action="{{route('centros.store')}}" method="post">
                @csrf
                    <div class="form-grop">
                         <label for="nombre">Centro Educativo</label>
                         <input type="text" class="form-control" name="nombre" required maxlength="100">
                    </div>

                    <div class="form-grop">
                         <label for="codigounico">Codigo Unico de Centro</label>
                         <input type="numeric" class="form-control" name="codigounico" required maxlength="5">
                    </div>

                    <div class="form-grop">
                         <label for="departamento">Departamento</label>
                         <input type="text" class="form-control" name="departamento" required maxlength="100">
                    </div>

                    <div class="form-grop">
                         <label for="muicipio">Municipio</label>
                         <input type="text" class="form-control" name="municipio" required maxlength="100">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>