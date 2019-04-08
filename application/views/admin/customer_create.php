<?php
$last_code = 'CDP' . sprintf("%08d", $last_code);
?>
<div class="main-content-inner" style="padding-top: 30px; padding-bottom: 30px;">
	<div class="card">
		<div class="card-body">
			<form id="customer" action="<?php echo base_url('api/customer/add'); ?>" method="post">
				<div class="row">
					<div class="col-xl-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Código</label>
							<div class="col-9">
								<input class="form-control" type="text" value="<?php echo $last_code; ?>" name="Code" readonly />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Nombre</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Name" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Clasificación de salida</label>
							<div class="col-9">
								<input class="form-control" type="text" value="010401" name="Outlet_Classification" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Tipo de negocio</label>
							<div class="col-9">
								<input class="form-control" type="text" value="COLMADOS PEQUEÑOS" name="Business_Type" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Fecha de Registro</label>
							<div class="col-9">
								<input class="form-control" type="text" value="<?php echo date("Y-m-d"); ?>" name="Customer_Open_Date" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Area de clientes</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Customer_Area" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Sector</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Sector" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Persona de contacto</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Contact_Person" required="required" />
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Límite de crédito</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Credit_Limit" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Plazo de credito</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Credit_Term" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">KeyAccReg</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="KeyAccReg" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">KeyAccGrp</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="KeyAccGrp" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Cust_Disc</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Cust_Disc" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">RNC Cedula</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="RNC_Cedula" required="required" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Indicador de cliente</label>
							<div class="col-9">
								<input class="form-control" type="text" value="Indirect Customer" required="required" name="Customer_Indicator" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Número de contacto</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Contact_No" required="required" />
							</div>
						</div>
					</div>
				</div>
				<div class="m-separator m-separator--dashed"></div>
				<div class="row">
					<div class="col-xl-6">
						<div class="form-group row">
							<label class="col-3 col-form-label">Dirección</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Address" required="required" />
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="form-group row">
							<label class="col-3 col-form-label">Latitud</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Latitude" required="required" />
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="form-group row">
							<label class="col-3 col-form-label">Longitud</label>
							<div class="col-9">
								<input class="form-control" type="text" value="" name="Longitude" required="required" />
							</div>
						</div>
					</div>
				</div>
			</form>
			<div id="map" class="mt-1" style="width: 100%; height: 600px; background: white;"></div>
			<div class="row pt-4">
				<div class="col-lg-6 text-center">
					<a href="javascript:getLocation();" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" style="padding-left: 1.25rem; padding-right: 1.25rem;">
						<span>
							<i class="fa fa-map-marker"></i>
							<span>Obtener mi ubicacion</span>
						</span>
					</a>
				</div>
				<div class="col-lg-6 text-center">
					<a href="javascript:addCustomer();" class="btn btn-outline-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" style="padding-left: 1.25rem; padding-right: 1.25rem;">
						<span>
							<i class="fa fa-check"></i>
							<span>Confirmar y guardar</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
