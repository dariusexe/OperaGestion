@extends('layouts.dashboard')
@section('page_heading','Nuevo Producto')
@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-xs-4">
         @include('errors.showErrors')            
        <form role="form" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
            <label>Foto</label>
            <input type="file" class="file" name="photo">
            </div>
                <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Precio</label>
                <input class="form-control" name="price" placeholder="Los precios se ponen con punto">
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" name="type">
                    <option value="1">Resindecial</option>
                    <option value="2">Micropymes</option>
                    <option value="3">Pymes</option>
                </select>
            </div>
            <div class="form-group">
                <label>Clase</label>
                <select class="form-control" name="class_id">
                    @foreach($productClass as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Compañia</label>
                <select class="form-control" name="company_id">
               @foreach($company as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label  >Descripcion</label>
                <textarea class="form-control" name="description"></textarea>
            </div>



    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    
</div>
</div>           
            
@stop
