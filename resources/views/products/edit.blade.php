@extends('layouts.dashboard')
@section('page_heading','Modificar Producto')
@section('section')
    <div class="col-sm-12">
        <div class="row">
            <div class="col-xs-4">
                @include('errors.showErrors')
                <form role="form" method="post" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT"></input>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <label>Foto</label>
                        <input type="file" class="file" name="photo">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input class="form-control" name="price" placeholder="Los precios se ponen con punto" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="type">
                            <option value="1" @if ($product->type == 1)selected="selected" @endif>Resindecial</option>
                            <option value="2" @if ($product->type == 2)selected="selected" @endif>Micropymes</option>
                            <option value="3" @if ($product->type == 3)selected="selected" @endif>Pymes</option>

                        </select>
                    <div class="form-group">
                        <label>Clase</label>
                        <select class="form-control" name="class_id">
                            @foreach($productClass as $item)
                                @if($product->class_id == $item->id)<option value="{{$item->id}}" selected="selected">{{$item->name}}</option>
                                @else <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Compañia</label>
                        <select class="form-control" name="company_id">
                            @foreach($company as $item)
                                @if($product->company_id == $item->id)<option value="{{$item->id}}" selected="selected">{{$item->name}}</option>
                                @else <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label  >Descripcion</label>
                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>

            </div>
        </div>

@stop
