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
	<form  method="POST" action="<?php echo base_url('admin/addData'); ?>" enctype="multipart/form-data">   
		<div class="page-title">
		</div>
		<!-- BEGIN DASHBOARD TILES --> 
		<div class="row">
			<div class="grid simple">
				<div class="grid-title no-border">
					<h4><span class="semi-bold">Tambah Divisi Baru</span></h4>
					</div>
				<div class="grid-body no-border">
					<div class="form-group">
						<label class="semi-bold">Nama Divisi</label>
						<div class="input-with-icon  right">                                       
							<i class=""></i>
							<input type="text" name="divisi" id="form1CardHolderName" class="form-control" required>                                 
						</div>
					</div>
				</div>
			</div>				
		</div>
		<div class="pull-right">
			<button type="submit" class="btn btn-success btn-cons">Tambah</button>
			<button type="button" class="btn btn-white btn-cons">Cancel</button>
		</div>
	</form>
	</div>
	  <!-- END DASHBOARD TILES -->
</div>