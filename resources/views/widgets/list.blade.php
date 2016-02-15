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
        @foreach($data as $data2)
		<tr>
            <td>{{$data2->name}}</td>
			<td>{{$data2->lastName}}</td>
			<td>{{$data2->email}}</td>
            <td>{{$data2->tlf}}</td>
            <td><button type="button" data-toggle="modal" data-target="#sure" class="btn btn-danger" data-whatever="{{$data2->id}}" id="btn-delete">Eliminar</button></td>
            <td><a class="btn btn-primary" href="{{route('users.edit', $data2->id)}}">Modificar</a></td>
		</tr>
        @endforeach
	</tbody>
</table>
