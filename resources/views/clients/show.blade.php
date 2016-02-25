@extends('layouts.dashboard')
@section('page_heading','Cliente')
@section('section')
    <div class="col-sm-6">
        @section ('panel1_panel_title', 'Nombre')
        @section ('panel1_panel_body')
            {{$client->getFullName()}}
        @endsection


        @section ('panel2_panel_title', 'DNI/NIF')
        @section ('panel2_panel_body')
            {{$client->identification}}
        @endsection

        @section ('panel3_panel_title', 'Tipo')
        @section ('panel3_panel_body')
            {{$client->getType()}}
        @endsection

        @section ('panel4_panel_title', 'Teléfono')
        @section ('panel4_panel_body')
            {{$client->phone}}
        @endsection

        @section ('panel5_panel_title', 'E-mail')
        @section ('panel5_panel_body')
            {{$client->email}}
        @endsection

        @section ('panel6_panel_title', 'Representante Legal')
        @section ('panel6_panel_body')
            {{$client->legalPartner}}
        @endsection

        @section ('panel7_panel_title', 'DNI/NIF Representante Legal')
        @section ('panel7_panel_body')
            {{$client->CIFLegalPartner}}
        @endsection




        @for ($i = 1; $i < 8; $i++)
            @include('widgets.panel', array('header'=>true, 'as'=>'panel'.$i))
        @endfor


    </div>
    <div class="col-sm-6">
        @section ('panel8_panel_title', 'Provincia')
        @section ('panel8_panel_body')
            {{$client->country}}
        @endsection
        @section ('panel9_panel_title', 'Localidad')
        @section ('panel9_panel_body')
            {{$client->city}}
        @endsection
        @section ('panel10_panel_title', 'Dirección')
        @section ('panel10_panel_body')
            {{$client->address}}
        @endsection
        @section ('panel11_panel_title', 'Código Postal')
        @section ('panel11_panel_body')
            {{$client->PC}}
        @endsection

        @section ('panel12_panel_title', 'IBAN')
        @section ('panel12_panel_body')
            {{$client->IBAN}}
        @endsection
        @section ('panel13_panel_title', 'Persona de Contacto')
        @section ('panel13_panel_body')
            {{$client->contactPerson}}
        @endsection
        @section ('panel14_panel_title', 'Teléfono Contacto')
        @section ('panel14_panel_body')
            {{$client->contactPhone}}
        @endsection
        @section ('panel15_panel_title', 'Comentarios')
        @section ('panel15_panel_body')
            {{$client->comentary}}
        @endsection

        @for ($i = 8; $i < 16; $i++)
            @include('widgets.panel', array('header'=>true, 'as'=>'panel'.$i))
        @endfor

    </div>


@stop
