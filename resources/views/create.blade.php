
<!--@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif-->
@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

<h2>Nuevo Registro</h2>


<form class="col-md-4" action="/home" method="post">


	<input class="form-control" type="text" name="numero" value="" placeholder="Numero de Oficio">
	<h5>{{ ($errors->has('numero')) ? $errors->first('numero') : '' }} </h5>


	<input class="form-control" type="text" name="fecha" value="" placeholder="Fecha">
	<h5>{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }} </h5>

	<input class="form-control" type="text" name="area" value="" placeholder="Area">
	<h5>{{ ($errors->has('area')) ? $errors->first('area') : '' }} </h5>

	<input class="form-control" type="text" name="destinatario" value="" placeholder="Destinatario">
	<h5>{{ ($errors->has('destinatario')) ? $errors->first('destinatario') : '' }} </h5>

	<input class="form-control" type="text" name="asunto" value="" placeholder="Asunto">
	<h5>{{ ($errors->has('asunto')) ? $errors->first('asunto') : '' }} </h5>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input class="btn btn-primary" type="submit" name="name" value="Agregar">
	<a href="/home" class="btn btn-warning">Regresar</a>
</form>

@stop