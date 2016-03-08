@extends('layouts.dashboard')
@section('page_heading','Nuevo Usuario')
@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
         @include('errors.showErrors')            
        <form role="form" method="post" action="{{route('users.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <p><label>Correo electrónico</label></p>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input class="form-control" name="lastName">
            </div>
            <div class="form-group">
                <label>Teléfono de contacto</label>
                <input class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input class="form-control" type="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</div>
</div>           
            
@stop
