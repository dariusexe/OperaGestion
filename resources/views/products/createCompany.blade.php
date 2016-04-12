@extends('layouts.dashboard')
@section('page_heading','Nueva Compañia')
@section('section')
    <div class="col-sm-12">
        <div class="row">
            <div class="col-xs-4">
                @include('errors.showErrors')
                <form role="form" method="post" action="{{url('products/company/create')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>





                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>

            </div>
        </div>

@stop