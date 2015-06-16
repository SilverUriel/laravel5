<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@section('title')Binder  @show</title>

	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css')!!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css')!!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css')!!}
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@if (count($errors) > 0)
	<div class="alert alert-info alert-dismissable">
  	<button type="button" class="close" data-dismiss="alert">&times;</button>
  	<strong>¡Cuidado!
		<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		 @endforeach
		</ul>
	</strong> 
	</div>
	@endif

	{!! Form::open(['url'=>'/acceso'])!!}
	<!--Formulario-->
    <div class="container">

      		<div class="reg-block">
				<br>	<br>	<br>
        		<div style="width: 100%; text-align: center; padding-bottom: 10px">
		        <h1>Ingresa tus datos</h1>
        		</div>

        
        		<div class="form-group">
				{!! Form::text('nit', null, ['class'=>'form-control floating-label','placeholder' =>'No. de Empresa:']) !!}
				</div>
        		<br>
        
        		<div class="form-group">
          		{!! Form::text('nombre', null, ['class'=>'form-control floating-label','placeholder' =>'Usuario']) !!}
        		</div>
        		<br>
        
        		<div class="form-group">
          		<input name="pass" type="password" id="PasswordTxt" class="form-control floating-label" placeholder="Contraseña" />
          		</div>

          		<div class="checkbox">
 					<label>
 					<input type="checkbox"> Recordarme
	 				</label>
	 			</div>

				<br>
        
        		<div style="width: 100%; text-align: center; padding-bottom: 10px">
					{!! Form::button('Guardar', ['type'=>'submit', 'class' => 'btn btn-success'])!!}
      			
      				<a class="btn btn-success" href="{{ route('acceso.show') }}" role="button">
				            Ver Registros
				    </a>

				    <a class="btn btn-success" href="{{ route('acceso.show') }}" role="button">
				            Editar Registros
				    </a>

				 </div> 

    		</div>
    </div>
    {!! Form::close()	!!}
  <!--=== End Content Part ===-->
	{!! Html::script('bower_components/jquery/dist/jquery.min.js')!!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js')!!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js')!!}
	<script type="text/javascript">
		$(document).on('ready', function(){
			$.material.init();
		});
	</script>
</body>
</html>
