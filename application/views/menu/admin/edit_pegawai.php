<script>
	var siteURL = "<?php echo site_url('teknisi/getData');?>";
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
              <h4><span class="semi-bold">Tugas</span> Baru untuk <span class="semi-bold">Anda</span></h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr align="center">
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Email</th>
                    <th>Kantor</th>
                    <th>Sub Divisi</th>
                    <th>Jabatan</th>
                    <th>Tanggal Dibuat</th>
                    <th>TINDAKAN</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($edit_pegawai as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->nip; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->email_pegawai; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo $row->nama_sub_divisi; ?></td>
                    <td><?php echo $row->nama_jabatan; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->create_date))); ?></td>
                    <td class="center">
						<form name="tindakan" id="tindakan" method="POST" action="<?php echo base_url('admin/update_pegawai')?>">
						<input type="hidden" name="nip" id="aktivasi" value="<?php echo $row->nip; ?>">
						<input type="submit" value="Deactive" class="btn btn-danger" onclick="showSuccess('Pegawai dengan NIP <?php echo $row->nip?> telah di non aktifkan')" />
						</form>
					</td>
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

