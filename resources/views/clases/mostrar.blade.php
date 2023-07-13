@extends('adminlte::page')

@section('title', 'Cursos Online')

@section('content_header')
    <h1>Listado de cursos</h1>
@stop

@section('content')

   <a href="registrar" class="btn btn-primary mb-3">registrar</a>

   <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

      <thead class="bg-primary text-white">
         <tr>
            <td>nombre</td>
            <td>descripcion</td>
            <td>instructor</td>
            <td>precio</td>
            <td>leccion</td>
            <td>categoria</td>            
         </tr>
      </thead>

      <tbody>
         @foreach($curso as $curso)
         <tr>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->descripcion}}</td>
            <td>{{$curso->instructor}}</td>
            <td>{{$curso->precio}}</td>
            <td>{{$curso->leccion}}</td>
            <td>{{$curso->categoria}}</td>
            
         </tr>
         @endforeach
      </tbody>

   </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop