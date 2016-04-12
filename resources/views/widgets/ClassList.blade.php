<table class="table"  style="width: 100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Eliminar</th>


    </tr>
    </thead>
    <tbody>
    @foreach($data as $data2)

        <tr>
            <td >{{$data2->id}}</td>
            <td >{{$data2->name}}</td>
            <td><button type="button" data-toggle="modal" @if(Request::is('*/class'))data-target ="#sureProductClass"@else  data-target ="#sureProductCompany"@endif class="btn btn-danger" data-id="{{$data2->id}}" data-name="{{$data2->name}}" id="btn-delete">Eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>
