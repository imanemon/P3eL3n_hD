<script>
	var siteURL = "<?php echo site_url('teknisi/getData');?>";
</script>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix" />
	<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>

	<!-- content --> 
    <div class="content sm-gutter">
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row-fluid">
				<div class="span12">
					<div class="grid simple ">
						<form  method="POST" action="<?php echo base_url('admin/update_data_pegawai'); ?>" enctype="multipart/form-data">   
						<div class="grid-title">
							<h4><span class="semi-bold">Form Edit Data Pegawai</span></h4>
						</div>
						<div class="grid-body ">
							<?php foreach($edit_pegawai as $row){?>
							<table class="table" id="example3" >
								<tbody>
									<tr class="odd gradeA">
										<th class="col-md-3">NIP</th>
										<td><b> : </b></td>
										<td><?php echo $row->nip?>
											<input type="hidden" name="nip" value="<?php echo $row->nip ?>">
										</td>
									</tr>
									<tr class="odd gradeA">
										<th class="col-md-3">Nama Pegawai</th>
										<td><b> : </b></td>
										<td><?php echo $row->nama_pegawai?></td>
									</tr>
									<tr class="odd gradeA">
										<th class="col-md-3">Kantor</th>
										<td><b> : </b></td>
										<td>
											<select name="kantor" class="select2" style="width:100%" >
												<option value="<?php echo $row->kantor; ?>"><?php echo $row->nama_kantor; ?></option>
												<?php 
												foreach ($get_kantor as $a){
												?>
													<option value="<?php echo $a->id_kantor; ?>"><?php echo $a->nama_kantor; ?></option>
												<?php 						
												}
												?>
											</select>
										</td>
									</tr>
									<tr class="odd gradeA">
										<th class="col-md-3">Sub Divisi</th>
										<td><b> : </b></td>
										<td>
											<select name="sub_divisi" class="select2" style="width:100%" >
												<option value="<?php echo $row->sub_divisi; ?>"><?php echo $row->nama_sub_divisi; ?></option>
												<?php 
												foreach ($get_sub_divisi as $a){
												?>
													<option value="<?php echo $a->id_sub_divisi; ?>"><?php echo $a->nama_sub_divisi; ?></option>
												<?php 						
												}
												?>
											</select>
										</td>
									</tr>
									<tr class="odd gradeA">
										<th class="col-md-3">Jabatan</th>
										<td><b> : </b></td>
										<td>
											<select name="jabatan" class="select2" style="width:100%" >
												<option value="<?php echo $row->jabatan; ?>"><?php echo $row->nama_jabatan; ?></option>
												<?php 
												foreach ($get_jabatan as $a){
												?>
													<option value="<?php echo $a->id_jabatan; ?>"><?php echo $a->nama_jabatan; ?></option>
												<?php 						
												}
												?>
											</select>
										</td>
									</tr>
									<?php if($row->jabatan == 7){?>
									<tr class="odd gradeA">
										<th class="col-md-3">Team</th>
										<td><b> : </b></td>
										<td>
											<select name="team" class="select2" style="width:100%" >
												<?php 
												if($row->team == NULL || $row->team == 0){
												?>
													<option value=""></option>
												<?php 
												}else{
												?>
													<option value="<?php echo $row->team; ?>"><?php echo $row->team; ?></option>
												<?php 
												}
												?>
												<?php 
												foreach ($get_team as $a){
												?>
													<option value="<?php echo $a->id_team; ?>"><?php echo $a->nama_team; ?></option>
												<?php 						
												}
												?>
											</select>
										</td>
									</tr>
									<?php  
									} 
									?>
								</tbody>
							</table>
							<?php
							}
							?>
							<div class="pull-right">
								<button type="submit" class="btn btn-success btn-cons" onclick="showSuccess('Data Pegawai dengan NIP <?php echo $row->nip?> telah di-update')">Save</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		

	  <!-- END DASHBOARD TILES -->
</div>