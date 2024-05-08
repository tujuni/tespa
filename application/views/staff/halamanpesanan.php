<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">List Reservasi</h1>
        </div>
        <div class="row g-2">
            <?php 
            if(!empty($hasil)){
            $i = 0;
            foreach ($hasil as $data):
            ?>
            <div class="col-lg-4">
                <div class="blog-item bg-light rounded overflow-hidden shadow">
                    <div class="p-4">
                        <h4 class="mb-3">Reservasi</h4>
                        <table>
                            <tr>
                                <td>Layanan</td>
                                <td>:</td>
                                <td><?php echo $data->namaLayanan; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?php echo $data->tglPesanan; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>:</td>
                                <td><?php echo $data->wktMulai?> - <?php echo $data->wktSelesai; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Biaya</td>
                                <td>:</td>
                                <td><?php echo $data->hargaLayanan; ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <br>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="batalreservasi('<?php echo $data->idPesanan; ?>');">Cancel</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
                $i++;
                endforeach;
            } else{
                echo " ";
            }
            ?>
        </div>
    </div>
</div>
<script language="javascript">
    function batalreservasi(idPesanan){
        if(confirm("Apakah yakin untuk membatalkan?")){
            window.open("<?php echo base_url(); ?>controller_pelanggan/batalreservasi/"+idPesanan,"_self");
        }
    }
</script>