<table class="display" id="list" style="width: 100%">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>e-mail</th>
            <th>Teléfono</th>
           <!-- <th>Eliminar</th>
            <th>Modificar</th> -->
            
		</tr>
	</thead>
	<tbody>
        @foreach($data as $data2)

		<tr href="{{route('clients.show', $data2->id)}}" style="cursor: pointer;">

            <td >{{$data2->getFullName()}}</td>
			<td >{{$data2->email}}</td>
            <td>{{$data2->phone}}</td>

		</tr>
        @endforeach
	</tbody>
</table>
