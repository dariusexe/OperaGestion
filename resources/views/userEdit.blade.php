@extends('layouts.dashboard')
@section('page_heading','Editar Usuario')
@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
         @include('errors.showErrors')            
        <form role="form" method="post" action="{{route('update', $user->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <p><label>Correo electrónico</label></p>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input class="form-control" name="lastName" value="{{$user->lastName}}">
            </div>
            <div class="form-group">
                <label>Teléfono de contacto</label>
                <input class="form-control" name="tlf" value="{{$user->tlf}}">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" name="role" >
                    @foreach ($roleChild as $role))
                    @if($user->role == $role) <option selected="selected">{{$role}}</option>@else <option>{{$role}}</option>@endif
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</div>
</div>           
            
@stop
