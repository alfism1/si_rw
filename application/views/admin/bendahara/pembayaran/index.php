<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/head') ?>

<body class="no-skin">
	<?php $this->load->view('admin/navbar') ?>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<?php $this->load->view('admin/sidebar') ?>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#">Home</a>
						</li>						
						<li class="active">pembayaran</li>
					</ul><!-- /.breadcrumb -->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->
				</div>

				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-130"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<div class="page-header">
						<h1>
							Pembayaran per bulan tahun <?= date("Y") ?>
						</h1>
					</div><!-- /.page-header -->
					
						<!-- <a href="<?= base_url() ?>rw/pembayaran/tambah">
							<button type="button" class="btn btn-sm btn-success"><i class="ace-icon fa fa-plus icon-on-right bigger-110"></i> Tambah pembayaran
							</button>
						</a>
						<br><br> -->
						<bt><br>

					<table id="simple-table" class="table  table-bordered table-hover">
						<thead>
							<tr>
								<th class="detail-col">No.</th>
								<th>Nama Warga</th>
								<th>Tgl. Bayar</th>								
								<th>Pembayaran</th>								
								<th>Foto Bukti</th>
								<th>Keterangan</th>
								<th>Status</th>								
							</tr>
						</thead>

						<tbody>						
						<?php 
						$i = 1;
						foreach ($pembayaran as $p): ?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $p->nama ?></td>
								<td><?= $p->tgl_bayar ?></td>								
								<td>
								Nominal : <?= $p->nominal ?><br>
								Denda : <?= $p->denda ?><br>
								Total : <?= $p->nominal+$p->denda ?><br>
								</td>
								<td><img width="100" src="<?= base_url() ?>assets/gambar/<?= $p->foto_bukti ?>"></td>
								<td><?= $p->keterangan ?></td>
								<td><?= form_dropdown("status", ["Y"=>"Verifikasi","N"=>"Blm verifikasi"], $p->status, ["class"=>"status", "data-id"=>$p->id_bayar]) ?></td>
							</tr>
						<?php
						$i++;
						endforeach; ?>
						</tbody>
					</table>

					<?php
					// echo "<pre>";
					// print_r($pembayaran);
					// echo "</pre>";
					?>


					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

<?php $this->load->view('admin/footer') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $(".status").change(function(){
	        var id = $(this).data("id");
	        var val = $(this).val();

	        $.ajax({
			  url: "<?= base_url()."bendahara/pembayaran/ubah_status" ?>",
			  type: "POST",
			  data: {id_bayar : id, status : val},			  
			  success: function(html){
			  	alert("Status berhasil diubah");
			  }
			});


	    });
	});
</script>
</body>
</html>
