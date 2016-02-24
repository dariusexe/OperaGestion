<table class="table {{ $class }}">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>e-mail</th>
            <th>Teléfono</th>
            <th>Eliminar</th>
            <th>Modificar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($data as $data2)
		<tr data-id="{{$data2->id}}">
            <td>{{$data2->getFullName()}}</td>
			<td>{{$data2->email}}</td>
            <td>{{$data2->phone}}</td>
            <td><button type="button" data-toggle="modal" data-target="#sure" class="btn btn-danger" data-id="{{$data2->id}}" data-name="{{$data2->getFullName()}}" id="btn-delete">Eliminar</button></td>
            <td><a class="btn btn-primary" href="{{route('users.edit', $data2->id)}}">Modificar</a></td>
		</tr>
        @endforeach
	</tbody>
</table>
