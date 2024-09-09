<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
        <div class="mx-auto" style="width: 500px">
            <h1>DashBoard</h1>
            
        </div>
        <table class="border border-primary mx-auto" style="width: 1000px">
            <tr>
                <th>Nombre</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$user->email}}</td>
            </tr>
        </table>
        <hr>
        <div class="mx-auto" style="width: 500px">
            <h3>Mantenedores</h3>
        </div>
        <div class="mx-auto" style="width: 1000px">
            <ul>
                <li>
                    <a href="{{route('proyectos.index')}}">proyectos</a>
                </li>
            </ul>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>-->

@extends('backoffice.layouts.app')

@section('title', 'Proyecto EV3 | Dashboard')

@section('page-title', 'Dashboard | PROYECTOS')

@section('css')
    <!-- Custom CSS files here -->
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
    <style>
        .swal2-styled.swal2-confirm {
            margin-top: 5px !important;
            background-color: var(--success);
            width: 100%;
        }

        .swal2-styled.swal2-confirm:hover {
            background-color: var(--green);
        }
    </style>
@endsection

@section('content')
        <div class="container-fluid">
            <div class="row">   
                <div class="col-12">
                    No hay proyectos registrados
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title">{titulo}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <p>{contenido}</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> 
@endsection

@section('scripts')
        <!-- SweetAlert2 -->
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>

@endsection
