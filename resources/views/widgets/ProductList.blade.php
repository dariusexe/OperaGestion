<table class="display table" id="list" style="width: 100%">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Compañia</th>
			<th>Clase</th>
			<th>Tipo</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Precio con I.V.A.</th>
			<th>Eliminar</th>
			<th>Modificar</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($product as $data2)

		<tr>
			<td>@if (!empty($data2->url_photo))<img src="{{'/photo/'.$data2->url_photo}}" width="100px" height="100px">@endif </td>
            <td>{{$data2->getCompany->name}}</td>
			<td>{{$data2->getClass->name}}</td>
			<td>{{$data2->getType($data2->type)}}</td>
			<td>{{$data2->name}}</td>
            <td>{{$data2->price.' €'}}</td>
			<td>{{round($data2->price*1.21, 2).' €'}}</td>
			<td><button type="button" data-toggle="modal" data-target="#sureProduct" class="btn btn-danger" data-id="{{$data2->id}}" data-name="{{$data2->name}}" id="btn-delete">Eliminar</button></td>
			<td><a class="btn btn-primary" href="{{Request::url().'/'.$data2->id.'/edit'}}">Modificar</a></td>
		</tr>
        @endforeach
	</tbody>
</table>
