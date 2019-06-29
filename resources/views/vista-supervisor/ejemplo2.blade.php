@extends('vistashtml.general')

@section('title', 'CLientes')


@section('content')
 	@parent
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="#">Facturacion</a>
		</nav><br><br>
		<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
		<form action="/action_page.php" class="form"  ><!--  class="was-validated" -->
		    <div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Codigo: </label>
			      <input type="text" class="form-control col-5" id="ccliente" placeholder="Ingrese codigo" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			       <label class="col-1" for="text">RFC: </label>
			      <input type="text" class="form-control col-5" id="ccliente" placeholder="Ingrese RFC" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->

			    </div>
			</div>
			 <div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Regimen <br>Fiscal: </label>
			      <input type="text" class="form-control col-3" id="ccliente" placeholder="Ingrese codigo" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			      <input type="text" class="form-control col-8" id="ccliente" placeholder="" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			    </div>
			</div>
		     <div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Nombre: </label>
			      <input type="text" class="form-control col-11" id="ccliente" placeholder="Ingrese Nombre" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			    </div>
			</div>
			<div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Apellido: </label>
			      <input type="text" class="form-control col-11" id="ccliente" placeholder="Ingrese Apellido" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			    </div>
			</div>
			<div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">CP: </label>
			      <input type="text" class="form-control col-2" id="ccliente" placeholder="CP" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			       <label class="col-1" for="text">Pais: </label>
			      <input type="text" class="form-control col-2" id="ccliente" placeholder="Ingrese Pais" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			      <label class="col-1" for="text">Estado: </label>
			      <input type="text" class="form-control col-2" id="ccliente" placeholder="Ingrese Estado" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			       <label class="col-1" for="text">Municipio: </label>
			      <input type="text" class="form-control col-2" id="ccliente" placeholder="Ingrese Municipio" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			    </div>
			</div>
			<div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Calle: </label>
			      <input type="text" class="form-control col-3" id="ccliente" placeholder="Ingrese Calle" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			      <div class="row col-3">
			      	<label class="col-6" for="text">Numero EX: </label>
			      	<input type="text" class="form-control col-6" id="ccliente" placeholder="Numero EXT" name="uname" required>
			      	 <!--div class="valid-feedback">Valid.</div-->
			      	<!--div class="invalid-feedback">Please fill out this field.</div-->
			      </div>
			      <div class="row col-3">
				      <label class="col-6" for="text">Numero Int: </label>
				      <input type="text" class="form-control col-6" id="ccliente" placeholder="Numero INT" name="uname" required>
				      <!--div class="valid-feedback">Valid.</div-->
				      <!--div class="invalid-feedback">Please fill out this field.</div-->
				  </div>
			    </div>
			</div>
			<div class="form-group">
		    	<div class="row">
			      <label class="col-1" for="text">Telefono1: </label>
			      <input type="text" class="form-control col-2" id="ccliente" placeholder="Telefono" name="uname" required>
			      <!--div class="valid-feedback">Valid.</div-->
			      <!--div class="invalid-feedback">Please fill out this field.</div-->
			      <div class="row col-3">
			      	<label class="col-5" for="text">Telefono 2: </label>
				      <input type="text" class="form-control col-7" id="ccliente" placeholder="Telefono" name="uname" required>
				      <!--div class="valid-feedback">Valid.</div-->
				      <!--div class="invalid-feedback">Please fill out this field.</div-->
			     	</div>
			      </div>
			</div>
			<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<button type="submit" class="btn btn-primary col-12">Limpiar</button>
					</div>
					<div class="col-4">
						<button type="submit" class="btn btn-primary col-12">Guardar</button>
					</div>
			</div>
		 </form>
		 </div>
		 <div class="col-1"></div>
		 </div>
@endsection