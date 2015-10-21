<script>
	<!-- Bagian ini di pakai untuk mendefinisikan lokasi data dari solusi yang akan di pakai pada datatables-->
	var siteURL = "<?php echo site_url('helpdesk/dataSolusi');?>";
</script>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    
    <div class="clearfix"></div>
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
	   <!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
	
<div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4><span class="semi-bold">Knowledge Base</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr align="center">
                    <th>NO SOLUSI</th>
                    <th>ID TIKET</th>
                    <th>SOLUSI UNTUK PERMASALAHAN</th>
                    <th>PENULIS</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($solusi as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->id_solusi; ?></td>
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_solusi; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                  </tr>
				<?php } ?>
				</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

	 </div>
	  <!-- END DASHBOARD TILES -->
          


	</div>
</div>

