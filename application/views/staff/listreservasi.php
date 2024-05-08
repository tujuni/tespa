<div class="container mt-3">
    <br>
    <h2>Reservasi Baru</h2>
	<hr class="mb-4">
    <div class="table-responsive">
        <table class="table table-hover table-responsive">
            <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Nama Layanan</th>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Telepon</th>
                    <th>Validasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(empty($hasil)){
                        ?>
                            <tr>
                                <td colspan="8" align="center">Kosong</td>
                            </tr>
                        <?php
                    } else{
                        foreach($hasil as $data):
                ?>
                        <tr>
                            <td><?php echo $data->idPesanan; ?></td>
                            <td><?php echo $data->namaLayanan; ?></td>
                            <td><?php echo $data->tglPesanan; ?></td>
                            <td><?php echo $data->wktMulai; ?></td>
                            <td><?php echo $data->wktSelesai; ?></td>
                            <td><?php echo $data->pTelp; ?></td>
                            <form name="validasi" id="validasi" method="post" action="<?php echo base_url('controller_staff/validasipesanan/'.$data->idPesanan.'') ?>">
                                <td>
                                    <select class="form-select" name="validasi" id="validasi" required>
                                        <option value="">PILIH</option>
                                        <option value="Valid">Valid</option>
                                        <option value="Invalid">Invalid</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm" >Submit</button>
                                </td>
                            </form>
                        </tr>
                <?php
                        endforeach;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>