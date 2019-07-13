@extends('general')
@section('title', 'Inicio sesion')
@section('head')
    @parent
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../plugins/iconos/style.css">
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
@endsection

@section('content')
    @parent
    <!-- **************************************CONTENIDO***************************************-->
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <br>
                <div class="col-12 user-img">
                    <img src="../files/user.png">
                </div>
                <br>
                <form class="col-12" method="POST" action="{{ route('login') }}">
                    {{csrf_field()}} <!--SI no existe el metodo da error -->
                    <div class="form-group {{ $errors->has('nombre') ? 'alert alert-danger' : '' }}"> 
                        <!--i class="icon-user"></i-->
                        <input type="nombre" placeholder="Introduce Usuario" class="form-control" name="nombre" value="{{ old('nombre') }}">
                        {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors-> has('password') ? 'alert alert-danger' : '' }}">
                        <input type="password" placeholder="Introduce Contraseña" class="form-control" name="password">
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <button  type="submit" class="btn"><i class="icon-login"></i>Entar</button>
                    <div class="col-12 forgot">
                        <a href="#">Olvidaste tu contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

