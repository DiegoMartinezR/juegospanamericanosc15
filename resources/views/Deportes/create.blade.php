@extends('layouts.app')
@section('content')
<div class="row">
<section class="content">
<div class="col-md-8 col-md-offset-2">
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Error!</strong> Revise los campos obligatorios.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-info">
{{Session::get('success')}}
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Nuevo Deporte</h3>
</div>
<div class="panel-body">
<div class="table-container">
<form method="POST"
action="{{ route('producto.store') }}" role="form">
{{ csrf_field() }}
<div class="row">

<div class="col-xs-6 col-sm-6 col-
md-6">

<div class="form-group">
<input type="text"
name="deporte" id="deporte" class="form-control input-sm" placeholder="Nombre del Deporte">
</div>
</div>

</div>

<div class="form-group">
<input type="text"
name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripcion">
</div>

<div class="row">

<div class="col-xs-6 col-sm-6 col-
md-6">

<div class="form-group">
<input type="text"
name="historia" id="historia" class="form-control input-sm" placeholder="Historia">
</div>
</div>

<div class="col-xs-6 col-sm-6 col-
md-6">

<div class="form-group">
<input type="text"
name="imagen" id="imagen" class="form-control input-sm" placeholder="Url de imagen">
</div>
</div>
</div>


<div class="row">

<div class="col-xs-12 col-sm-12 col-
md-12">

<input type="submit"
value="Guardar" class="btn btn-success btn-block">

<a
href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
</div>

</div>

</form>
</div>
</div>
</div>
</div>
</section>
@endsection