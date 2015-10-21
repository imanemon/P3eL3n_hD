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
	<!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
		<div class="row-fluid">
			<div class="span12">
			  <div class="grid simple ">
				<div class="grid-title">
				  <h4><span class="semi-bold">Laporan Tiket tiap Kategori bulan ini</span></h4>
				</div>
				<div class="grid-body ">
				 <table id="example" class="table table-striped"  >
					<thead>
					  <tr align="center">
						<th>NO</th>
						<th>KATEGORI</th>
						<th>JUMLAH</th>
						<th>RATA-RATA DURASI</th>
					  </tr>
					</thead>
					<tbody>
					<?php $i=1; foreach($perorangan as $row) {?>
					  <tr class="odd gradeX" >
						<td><?php echo $i; ?></td>
						<td><?php echo $row->nama_pegawai; ?></td>
						<td><?php echo $row->jumlah; ?></td>
						<td><?php 
						$durasi = $row->rata2; 
										
						$second = 1;
						$minute = 60*$second;
						$hour   = 60*$minute;
						$day    = 24*$hour;

						$ans["day"]    = floor($durasi/$day);
						$ans["hour"]   = floor(($durasi%$day)/$hour);
						$ans["minute"] = floor((($durasi%$day)%$hour)/$minute);
						$ans["second"] = floor(((($durasi%$day)%$hour)%$minute)/$second);
						if($ans["day"] != 0){
							echo $ans["day"] . " hari, " . $ans["hour"] . " jam, "  . $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] != 0){
							echo $ans["hour"] . " jam, "  . $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] != 0){
							echo $ans["minute"] . " menit, " . $ans["second"] . " detik";
						}if($ans["day"] == 0 && $ans["hour"] == 0 && $ans["minute"] == 0 && $ans["second"] != 0){
							echo $ans["second"] . " detik";
						}
						?></td>
					  </tr>
					<?php $i++; 
					} ?>
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		  </div>

		 </div>
	  <!-- END DASHBOARD TILES -->
	</div>
	  <!-- END DASHBOARD TILES -->
	 
          
</div>