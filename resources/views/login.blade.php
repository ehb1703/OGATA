@extends('general')
@section('title', 'Inicia sesion el mandarin')
@section('content')
    @parent
        <!-- **************************************CONTENIDO***************************************-->
            <div class="modal-dialog text-center">
                <div class="col-sm-8 main-section">
                    <div class="modal-content">
                        <br>
                        <div class="col-12 user-img">
                            <img src="../files/logoARM.jpg">
                        </div>
                        <br>
                        <form class="col-12">
                            <div class="form-group">
                                <!--i class="icon-user"></i-->
                                <input type="text" placeholder="Introduce Usuario" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Introduce Contraseña" class="form-control" name="">
                            </div>
                            <button  type="submit" class="btn"><i class="icon-login"></i>Entar</button>
                        </form>
                        <div class="col-12 forgot">
                            <a href="#">Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection

