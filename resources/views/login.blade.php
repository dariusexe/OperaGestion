@extends ('layouts.plane')
@section ('body')
    <div class="container">
        <div class="row">
            <br><br>
            <img class="center-block" src="{{asset('/assets/images/telesales.png')}}">
            <div class="col-md-4 col-md-offset-4">
                <br/>

                @section ('login_panel_title','Inicio de sesión')
                @section ('login_panel_body')
                    @include('errors.showErrors')
                    <form role="form" method="post" action="/login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password"
                                       value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
                        </fieldset>
                    </form>

                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop