<table class="table table-condensed table-striped table-bordered">
    <tr>
   		<th>#</th>
    	<th>Usuario</th>
		<th>NIT</th>
    </tr>
    
    @if($usuarios)
   <ul>
      @foreach($usuarios as $usuario)

         <th>{{ $usuario->nombre }}  </th>        
         <th>{{ $usuario->nit }}  </th> 
      @endforeach
   </ul>
@else
   <p> No hay usuarios cargados </p>
@endif
 </table>