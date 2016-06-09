@extends('layouts.dashboard')
@section('page_heading','Panel de Control')
@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-3 col-md-6">

                <div class="panel panel-primary">
                    <a href="#">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <span class="pull-left">Nuevo Cliente</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{url('users')}}">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($clients)}}</div>
                                    <div>Numero de Clientes</div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <span class="pull-left">Ver Clientes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                </a>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6">
             <div class="panel panel-yellow">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-shopping-cart fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">124</div>
                             <div>New Orders!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">*/
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="col-lg-3 col-md-6">
             <div class="panel panel-red">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-xs-3">
                             <i class="fa fa-support fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                             <div class="huge">13</div>
                             <div>Support Tickets!</div>
                         </div>
                     </div>
                 </div>
                 <a href="#">
                     <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                     </div>
                 </a>
             </div>
         </div>
     </div>-->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                @section ('cchart1_panel_title','Ventas')
                @section ('cchart1_panel_body')
                    @include('widgets.charts.linechart')
                @endsection

                @include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))

            </div>
            <!-- /.col-lg-8 -->


            <!-- /.panel -->

            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->

    </div>

    <!-- /.col-lg-4 -->

@stop
