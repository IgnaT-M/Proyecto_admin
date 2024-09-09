<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
        
        <div class="mx-auto mt-5" style="width: 500px">
            <h1 class="mx-auto">Inicio de Sesion</h1>
        </div >
        @if ($errors->any())
            <div class="border border-danger mx-auto mt-5" style="width: 1000px">
                <ul>
                @foreach ($errors->all() as $errors)
                    <li>
                        {{$errors}}
                    </li>
                @endforeach
                </ul>
            </div>
            
        @endif
        @if (session('success'))
            <div class="border border-primary mx-auto mt-5" style="width: 1000px">
                <li>{{session('success')}}</li>
            </div>
        @endif
        <div class="mx-auto mt-5" style="width: 1000px">
            <form action="{{route('user.validate')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Email@generico.cl">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Terminos y Condiciones</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>  
            <hr>
            <a href="{{route('usuarios.register')}}">registrarse</a>
        </div>
          



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>