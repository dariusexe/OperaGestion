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
            <td><button type="button" data-toggle="modal" data-target="#sure" class="btn btn-danger" data-whatever="{{$user->email}}">Eliminar</button></td>
            <td><a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Modificar</a></td>
		</tr>
        @endforeach
	</tbody>
</table>
