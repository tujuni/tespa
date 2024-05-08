<div class="container mt-3">
    <br>
    <h2>Today Schedule</h2>
	<hr class="mb-4">
    <div class="table-responsive">
        <table class="table table-hover table-responsive">
            <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Nama Layanan</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(empty($hasil)){
                        ?>
                            <tr>
                                <td colspan="5" align="center">Kosong</td>
                            </tr>
                        <?php
                    } else{
                        foreach($hasil as $data):
                ?>
                        <tr>
                            <td><?php echo $data->idPesanan; ?></td>
                            <td><?php echo $data->namaLayanan; ?></td>
                            <td><?php echo $data->wktMulai; ?></td>
                            <td><?php echo $data->wktSelesai; ?></td>
                            <td><?php echo $data->pTelp; ?></td>
                        </tr>
                <?php
                        endforeach;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>