@extends('app')

@section('content')

	<h1>Ingresar</h1>

	 {!! Form::open(['route' => 'acceso.store'])!!}

	 	@include('acceso.forms.form')

		
		<div class="form-group">
	 		{!! Form::button('Guargar', ['type' => 'submit', 'class' => 'btn btn-primary'])!!}
	 	</div>

	 {!!  Form::close()!!}


@endsection