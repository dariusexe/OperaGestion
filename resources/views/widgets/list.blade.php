<table class="display table" id="list" style="width: 100%">
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

        <tr style="cursor: pointer">

            <td id="link"
                href="@if (Request::is('users')){{route('users.show', $data2->id) }}@elseif(Request::is('clients')){{route('clients.show', $data2->id) }}@endif">{{$data2->getFullName()}}</td>
            <td id="link"
                href="@if (Request::is('users')){{route('users.show', $data2->id) }}@elseif(Request::is('clients')){{route('clients.show', $data2->id) }}@endif">{{$data2->email}}</td>
            <td id="link"
                href="@if (Request::is('users')){{route('users.show', $data2->id) }}@elseif(Request::is('clients')){{route('clients.show', $data2->id) }}@endif">{{$data2->phone}}</td>
            <td>
                <button type="button" data-toggle="modal" data-target="#sure" class="btn btn-danger"
                        data-id="{{$data2->id}}" data-name="{{$data2->getFullName()}}" data-source="{{Request::url()}}"
                        id="btn-delete">Eliminar
                </button>
            </td>
            <td><a class="btn btn-primary" href="{{Request::url().'/'.$data2->id.'/edit'}}">Modificar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
