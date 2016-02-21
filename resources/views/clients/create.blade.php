@extends('layouts.dashboard')
@section('page_heading','Nuevo Cliente')
@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-xs-4">
         @include('errors.showErrors')            
        <form role="form" method="post" action="{{route('clients.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input class="form-control" name="lastName">
            </div>
            <div class="form-group">
                <label>CIF/NIF</label>
                <input class="form-control" name="identification">
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" name="type">
                <option>
                    Pyme
                </option>
                <option>
                    Residencial
                </option>
                </select> 
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input class="form-control" name="phone">
            </div>
             <div class="form-group">
                <label>E-mail</label>
                <input class="form-control"  name="email">
            </div>
             <div class="form-group">
                <label>Representante Legal</label>
                <input class="form-control"  name="legalPartner">
            </div>
            <div class="form-group">
                <label>CIF/NIF Representante Legal</label>
                <input class="form-control"  name="CIFLegalPartner">
            </div>
            
            
            </div>
        <div class="col-xs-4 col-xs-offset-2">
        
            <div class="form-group">
                <label>Provincia</label>
                <input class="form-control" name="country">
            </div>
            <div class="form-group">
                <label>Localidad</label>
                <input class="form-control" name="city">
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Código Postal</label>
                <input class="form-control" name="PC">
            </div>
            <div class="form-group">
                <label>IBAN Cuenta Bancaria</label>
                <input class="form-control" name="IBAN">
            </div>
            <div class="form-group">
                <label>Persona de contacto</label>
                <input class="form-control" name="contactPerson">
            </div>
            <div class="form-group">
                <label>Teléfono Contacto</label>
                <input class="form-control" name="contactPhone">
            </div>
            <div class="form-group">
                <label>Comentarios</label>
                <textarea class="form-control" name="comentary"></textarea>
            </div>
    </div>
    <div class="col-xs-12">
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    </div>
    </form>
    
</div>
</div>           
            
@stop
