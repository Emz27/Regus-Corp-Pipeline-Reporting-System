city

	        <section class="content-header">
              <h1>

                <small>Crud Application</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
              </ol>
            </section>

            <!-- ========================================================================================================== -->
            <!-- Main content -->
            <section class="content">
              <!-- Default box -->
              <div class="box">
                <div class="box-body">
                 <button type="submit" class="btn btn-primary " id="city_btnadd" name="city_btnadd"><i class="fa fa-plus"></i> Add city</button>
                 <br>
                 <br>
                 <div class="box-body" >
					<table id="table_city" class="table table-hover">
						<thead>
						<tr class="tableheader">
						<th>#</th>

						<th class="col-md-5">Description</th>
						<th class="col-md-5">Region</th>

						<th class="col-md-3"></th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
              <div id="modalcust" class="modal">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Form</h4>
                    </div>
                    <!--modal header-->
                    <div class="modal-body">

											<form id="inputForm">
                      <div class="pad" id="infopanel"></div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label class="col-sm-3  control-label">Description</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="description" placeholder="city Description" name="description">
                              <input type="hidden" id="crudMethod" name="crud" value="N">
                              <input type="hidden" id="txtId" name="id" value="0">
                            </div>
                        </div>
												<div class="form-group">
                          <label class="col-sm-3  control-label">Region</label>
                          <div class="col-sm-9">
														<select class="form-control" id="region" name="region">
															<option value="" selected>Select Region</option>

															<?php
																include("../../../serverDetails.php");

																$mysqli = new mysqli($host,$uRoot,$pRoot,$database);

																$result = $mysqli->query("SELECT region.id as regionid, region.description as regiondescription from region");
																while($row = $result->fetch_assoc()){

																	echo "<option value='".$row["regionid"]."'>".$row["regiondescription"]."</option>";
																}

																$result->close();
															 ?>
														</select>

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3  control-label"></label>
                          <div class="col-sm-9">
                            <button type="submit" name="submit" class="btn btn-primary " id="city_btnsave"><i class="fa fa-save"></i> Save</button></div>
                        </div>
                      </div>
                      <!--modal footer-->

											</form>
                    </div>
                    <!--modal-content-->
                  </div>
                  <!--modal-dialog modal-lg-->
                </div>
                <!--form-kantor-modal-->
              </div>


            </section><!-- /.content -->
