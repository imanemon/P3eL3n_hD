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
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles green m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">TIKET KESELURUHAN TAHUN INI</div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Total Masalah </span> <span class="item-count animate-number semi-bold" data-value="<?php echo $tahun_ini;?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats">
                      <div class="wrapper transparent">
						<span class="item-title">Bulan ini</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $bulan_ini;?>" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
						<span class="item-title">Hari ini</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $hari_ini;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
	

		</div>
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles blue m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">TUGAS MILIK SAYA BULAN INI</div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Tugas Baru</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $new_bulan_ini;?>" data-     animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats">
                      <div class="wrapper transparent">
						<span class="item-title">Belum Selesai</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $open_bulan_ini;?>" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
						<span class="item-title">Sudah Selesai</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $close_bulan_ini;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
		</div>
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles red m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title">
                    <h6 class="bold text-white">LEGENDA</h6>
                  </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Level Prioritas</span></br>
						<span>1. Top Level Management</span></br>
						<span>2. Supervisor</span></br>
						<span>3. Karyawan</span>
					  </div>
                    </div>
                    <div class="widget-stats">
						<span class="item-title">Dampak Ke Perusahaan</span> </br>
						<span>1. Kritis</span></br>
						<span>2. Standar</span></br>
						<span>3. None</span>
                    </div>
			  </div>			
			</div>	
		</div>		
	 </div>
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
                    <th>ID TIKET</th>
                    <th>JUDUL</th>
                    <th>KATEGORI</th>
                    <th>LOKASI</th>
                    <th>TANGGAL DIBUAT</th>
					<th>DURASI</th>
                    <th>PRIORITAS</th>
                    <th>DAMPAK</th>
                  </tr>
                </thead>
                <tbody>
				<?php foreach($tugas_baru as $row) { ?>
                  <tr class="odd gradeX" >
                    <td><?php echo $row->id_tiket; ?></td>
                    <td><?php echo $row->judul_tiket; ?></td>
                    <td><?php echo $row->nama_kategori; ?></td>
                    <td><?php echo $row->nama_kantor; ?></td>
                    <td><?php echo date('d-m-Y H:i:s',strtotime(date($row->tgl_awal_tiket))); ?></td>
					<td><?php 
						$tgl_tiket = strtotime($row->tgl_awal_tiket);
						$tgl_sekarang = strtotime(date("Y-m-d H:i:s", strtotime('+5 hours')));
						
						$durasi = $tgl_sekarang - $tgl_tiket;
						
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
                    <td class="center"><?php echo $row->nama_level; ?></td>
                    <td class="center"><?php echo $row->nama_dampak; ?></td>
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
