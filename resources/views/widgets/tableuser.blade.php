<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>e-mail</th>
            <th>Teléfono</th>
            <th>Eliminar</th>
            <th>Modificar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($users as $user)
		<tr>
            <td>{{$user->name}}</td>
			<td>{{$user->lastName}}</td>
			<td>{{$user->email}}</td>
            <td>{{$user->tlf}}</td>
            <td><a class="btn btn-danger" href="{{url("delete/".$user->id)}}">Eliminar</a></td>
            <td><a class="btn btn-primary" href="{{url("delete/".$user->id)}}">Modificar</a></td>
		</tr>
        @endforeach
	</tbody>
</table>