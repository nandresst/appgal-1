@extends('ModuloDev/cabecera_prueba')



@section('seccion')

	<div class="container">

	<div class="col-12 col-sm-12" >
	<form id="form1" method="POST" action="{{ route('guardar.persona') }}">
	@csrf
		<div class="card">
		<div class="card-body">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-sm-1" hidden="hidden">
				<label for="txtid" class="col-form-label">idtrabajador</label>
				<input type="text" name="txtid" id="txtid" readonly="readonly" class="form-control form-control-sm">	
			</div>	

			<div class="col-12 col-sm-2">

				<label for="txtcodtipodocu" class="col-form-label">Tipo de Doumento</label>
				<select class="form-control form-control-sm" id="txtcodtipodocu" name="txtcodtipodocu">
					<option value="01" selected="selected">DNI</option>  
					<option value="04">CARNÉ EXT.</option>  
					<option value="06">RUC</option>  
					<option value="07">PASAPORTE</option>  
					<option value="09">CARNÉ SOLIC REFUGIO</option>
					<option value="11">PART. NAC.</option>
					<option value="22">C.IDENT.-RREE</option>
					<option value="23">CARNÉ PTP</option>
					<option value="24">DOC.ID.EXTR.</option>
				</select>
			</div>

			<div class="col-12 col-sm-2">
				<label for="txtdni" class="col-form-label">Dni</label>
				<input type="text" name="txtdni" id="txtdni" class="form-control form-control-sm">							
			</div>

			<div class="col-12 col-sm-2">
				<label for="txtapellidos" class="col-form-label">Apellidos</label>
				<input type="text" id="txtapellidos" name="txtapellidos" class="form-control form-control-sm">
			</div>

			<div class="col-12 col-sm-2">
				<label for="txtnombres" class="col-form-label">Nombres</label>
				<input type="text" name="txtnombres" id="txtnombres" class="form-control form-control-sm">						
			</div>

			<div class="col-12 col-sm-2">
				<label for="txtdireccion" class="col-form-label">Direccion</label>
				<input type="text" name="txtdireccion" id="txtdireccion" class="form-control form-control-sm">							
			</div>

			<div class="col-12 col-sm-1">
				<label for="txtedad" class="col-form-label">Edad</label>
				<input type="text" id="txtedad" name="txtedad" class="form-control form-control-sm">							
			</div>

			<div class="col-8 col-sm-2" style="margin-top:30px; ">
				<div class="row">
				<a class="btn btn-outline-success btn-sm" onclick="guardar();"><i class="fas fa-save"></i></a>&nbsp;
				<a class="btn btn-outline-info btn-sm" onclick="nuevo();"><i class="fas fa-user-plus"></i></a>				
				</div>
			</div>
			

		</div> <!-- fin class row -->
		</div><!-- fin clas card-body-->		
		</div>

	</form>
	</div><br>


	<div class="col-12 col-sm-12">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>idregistro</th>
				<th>Dni</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Direccion</th>
				<th>Edad</th>
				<th>Op</th>	
			</tr>
			</thead>

			<tbody>
			
			<tr>				
				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-outline-primary btn-sm"
						onclick="editar();"><i class="fab fa-earlybirds fa-2x"></i>
					</button>
				</td>
			</tr>
				
			</tbody>
		</table>				
	</div>


</div><!-- finc conteiner -->


@endsection