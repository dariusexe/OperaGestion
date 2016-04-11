@extends('layouts.dashboard')
@section('page_heading','Nuevo Producto')
@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-xs-4">
         @include('errors.showErrors')            
        <form role="form" method="post" action="{{route('products.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Precio</label>
                <input class="form-control" name="price">
            </div>
            <div class="form-group">
                <label>Compañia</label>
                <select class="form-control" name="company_id">
                <option>
                    Jazztel
                </option>
                <option>
                    Vodafone
                </option>
                    <option>
                        Movistar
                    </option>
                </select> 
            </div>
            <div class="form-group">
                <label  >Descripcion</label>
                <textarea class="form-control" name="description">

                </textarea>
            </div>



    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    
</div>
</div>           
            
@stop
