<table class="display table" id="list" style="width: 100%">
	<thead>
		<tr>
			<th>Clase</th>
			<th>Nombre</th>
			<th>Precio</th>

           <!-- <th>Eliminar</th>
            <th>Modificar</th> -->
            
		</tr>
	</thead>
	<tbody>
        @foreach($product as $data2)

		<tr>

            <td >{{$data2->getClass->name}}</td>
			<td >{{$data2->name}}</td>
            <td>{{$data2->price.' €'}}</td>

		</tr>
        @endforeach
	</tbody>
</table>
