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
        <h4>Nuevo Director</h4>
                <form class="row g-3" action="{{route('directores.store')}}" method="post">
                @csrf
                    <div class="form-grop">
                         <label clas ="form-label"for="nombres">Nombre del Director</label>
                         <input type="text" class="form-control" name="nombres" required maxlength="100">
                    </div>

                    <div class="form-grop">
                         <label for="apellidos">Apellidos</label>
                         <input type="text" class="form-control" name="apellidos" required maxlength="50">
                    </div>

                    <div class="form-grop">
                         <label for="pass">Usuario</label>
                         <input type="text" class="form-control" name="user" required maxlength="20">
                    </div>

                    <div class="form-grop">
                         <label for="pass">Password</label>
                         <input type="Password" class="form-control" name="pass" required maxlength="15">
                    </div>

                    <div class="form-grop  text-end">
                         <input type="submit" class="btn btn-primary" value="Guardar">
                         <input type="reset" class="btn btn-default" value="cancelar">
                         <a href="javascript:history.back()">Ir al Listado</a>
                    </div>

                </form>
            
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>