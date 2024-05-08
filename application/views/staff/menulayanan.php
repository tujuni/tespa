<div class="container mt-3">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="rounded h-100 p-4 border border-dark">
				<h2>Daftar Layanan</h2>
				<hr class="mb-4">
				<?php
					$pesan=$this->session->flashdata('pesan');
					if($pesan==""){
						echo "";
					} else{
						?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								<?php echo $pesan; ?>
							</div>
						<?php
					}
				?>
			
			
				<form name="formdaftarlayanan" id="formdaftarlayanan" method="post" action="<?php echo base_url('controller_staff/simpanlayanan') ?>">
					
							<input type="hidden" class="form-control" name="idLayanan" id="idLayanan">
						
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Nama Layanan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="namaLayanan" name="namaLayanan" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Durasi Layanan</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="durasiLayanan" name="durasiLayanan" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Harga Layanan</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="hargaLayanan" name="hargaLayanan" required>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Keterangan</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" >Save</button>
					<button type="reset" class="btn btn-danger">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container mt-3">
    <br>
    <h2>Data Layanan</h2>
	<hr class="mb-4">
    <div class="table-responsive">
        <table class="table table-hover table-responsive">
            <thead class="bg-info">
                <tr>
                    <th>Nama Layanan</th>
                    <th>Durasi Layanan</th>
                    <th>Harga Layanan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(empty($hasil)){
                        ?>
                            <tr>
                                <td colspan="5" align="center">Data Kosong</td>
                            </tr>
                        <?php
                    } else{
                        foreach($hasil as $data):
                ?>
                        <tr>
                            <td><?php echo $data->namaLayanan; ?></td>
                            <td><?php echo $data->durasiLayanan; ?></td>
                            <td><?php echo $data->hargaLayanan; ?></td>
                            <td><?php echo $data->keterangan; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" onclick="editlayanan('<?php echo $data->idLayanan; ?>');">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="hapuslayanan('<?php echo $data->idLayanan; ?>');">Hapus</button>
                            </td>
                        </tr>
                <?php
                        endforeach;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>


<script language="javascript">
        function hapuslayanan(idLayanan){
            if(confirm("Apakah yakin menghapus layanan ini?")){
                window.open("<?php echo base_url(); ?>controller_staff/hapuslayanan/"+idLayanan,"_self");	
            }
        }
        
        function editlayanan(idLayanan){
            load("controller_staff/editlayanan/"+idLayanan,"#script");	
        }
</script>