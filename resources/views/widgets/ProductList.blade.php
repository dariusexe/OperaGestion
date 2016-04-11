<table class="display table" id="list" style="width: 100%">
	<thead>
		<tr>
			<th>Compañia</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Precio con I.V.A.</th>
			<th>Eliminar</th>

           <!-- <th>Eliminar</th>
            <th>Modificar</th> -->
            
		</tr>
	</thead>
	<tbody>
        @foreach($product as $data2)

		<tr>
            <td >{{$data2->company_id}}</td>
			<td >{{$data2->name}}</td>
            <td>{{$data2->price.' €'}}</td>
			<td>{{round($data2->price*1.21, 2).' €'}}</td>
			<td><button type="button" data-toggle="modal" data-target="#sureProduct" class="btn btn-danger" data-id="{{$data2->id}}" data-name="{{$data2->name}}" id="btn-delete">Eliminar</button></td>
		</tr>
        @endforeach
	</tbody>
</table>
