@extends('ModuloDev/cabecera_prueba')



@section('seccion')
				
				<script>
						nuevo= function()
						{
							$('#txtid').val('0');
							$('#txtdni').val('');
							$('#txtapellidos').val('');
							$('#txtnombres').val('');
							$('#txtdireccion').val('');
							$('#txtedad').val('');
						}

				</script>
				<script>
						guardar = function()
						{
							var a=0;
								if($('#txtdni').val().length==0)
								{										
									alert('falta DNI');
									$('#txtdni').addClass(' is-invalid');
								}
								else
								{
									$('#txtdni').addClass(' is-valid');
									a=a+1;
								}
								if(a==1)
								{
									$('#form1').submit();
								}							
						}

				</script>
				<script >
					
						editar = function(id,dni,apellidos,nombres,direccion,edad)
						{
							$('#txtid').val(id);
							$('#txtdni').val(dni);
							$('#txtapellidos').val(apellidos);
							$('#txtnombres').val(nombres);
							$('#txtdireccion').val(direccion);
							$('#txtedad').val(edad);
						}
				</script>
				

						<br><br><br>

<div class="container">

	<div class="col-12 col-sm-12" >
	<form id="form1" method="POST" action="{{ route('guardar.persona') }}">
	@csrf
		<div class="card">
		<div class="card-body">
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-sm-1">
				<label for="txtid" class="col-form-label">idRegistro</label>
				<input type="text" name="txtid" id="txtid" readonly="readonly" class="form-control form-control-sm">	
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
			@foreach($result_lista as $fila)
			<tr>				
				
				<td>{{ $fila->idregistro }}</td>
				<td>{{ $fila->dni }}</td>
				<td>{{ $fila->nombres }}</td>
				<td>{{ $fila->apellidos }}</td>
				<td>{{ $fila->direccion }}</td>
				<td>{{ $fila->edad }}</td>
				<td>
					<button class="btn btn-outline-primary btn-sm"
						onclick="editar(
										{{ $fila->idregistro }},
										'{{ $fila->dni }}',
										'{{ $fila->nombres }}',
										'{{ $fila->apellidos }}',
										'{{ $fila->direccion }}',
										{{ $fila->edad }}
										);"><i class="fab fa-earlybirds fa-2x"></i>
					</button>
				</td>
			</tr>
			@endforeach	
			</tbody>
		</table>				
	</div>


</div><!-- finc conteiner -->
				

			
@endsection
