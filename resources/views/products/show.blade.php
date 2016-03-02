@extends('layouts.dashboard')
@section('page_heading','Producto')
@section('section')
    <div class="col-sm-6">
        @section ('panel1_panel_title', 'Nombre')
        @section ('panel1_panel_body')
            {{$product->name}}
        @endsection


        @section ('panel2_panel_title', 'Descripción')
        @section ('panel2_panel_body')
            {{$product->description}}
        @endsection

        @section ('panel3_panel_title', 'Clase')
        @section ('panel3_panel_body')
            {{$product->getClass->name}}
        @endsection

        @section ('panel4_panel_title', 'Precio')
        @section ('panel4_panel_body')
            {{$product->price.' €'}}
        @endsection


        @for ($i = 1; $i < 5; $i++)
            @include('widgets.panel', array('header'=>true, 'as'=>'panel'.$i))
        @endfor


    </div>



@stop
