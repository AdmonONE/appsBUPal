
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


<?php
	$registronuevo = DB::table('registros')->max('numero');
?>




<form class="col-md-4" action="/home" method="post">

	
	<input class="form-control" type="text" name="numero" value="<?php echo ($registronuevo+1)?>" placeholder="Numero de Oficio" style="visibility:hidden">
	<h5>{{ ($errors->has('numero')) ? $errors->first('numero') : '' }} </h5>

	Numero de Oficio: <input type="text" name="date" class="form-control" value="<?php echo ($registronuevo+1)?>" disabled><br>

	Fecha:<input class="tcal form-control" type="text" name="fecha" value="" placeholder="Fecha" autocomplete="off">
	<h5>{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }} </h5>

	Área:<input class="form-control" type="text" name="" value="{{ Auth::user()->area }} " disabled><br>

	Destinatario:<input class="form-control" type="text" name="destinatario" value="" placeholder="Destinatario">
	<h5>{{ ($errors->has('destinatario')) ? $errors->first('destinatario') : '' }} </h5>

	Asunto:<input class="form-control" type="text" name="asunto" value="" placeholder="Asunto">
	<h5>{{ ($errors->has('asunto')) ? $errors->first('asunto') : '' }} </h5>

	<input class="form-control" type="text" name="usuario" value="{{ Auth::user()->name }}" placeholder="" style="visibility:hidden">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input class="btn btn-primary" type="submit" name="name" value="Agregar">
	<a href="/home" class="btn btn-warning">Regresar</a>

	<input class="form-control" type="text" name="area" value="{{ Auth::user()->area }} " placeholder="Area" style="visibility:hidden">
	<h5>{{ ($errors->has('area')) ? $errors->first('area') : '' }} </h5>
</form>

@stop