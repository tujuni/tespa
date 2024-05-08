<!-- package section -->
<section id="package" class="packageList">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Package</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">  
            <?php
                if(empty($hasil)){
                    ?>
                        <tr>
                            <td colspan="7" align="center">Data Kosong</td>
                        </tr>
                    <?php
                } else{
                    for ($i=1; $i<=1; $i++){
                    $no=1;
                        if($no%2==0){
                            foreach($hasil as $data):
                            ?>
                            <div class="col-md-6">
                                <div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="200ms">
                                    <h5><?php echo $data->namaLayanan; ?></h5>
                                    <ul class="list-default">
                                        <li><?php echo $data->durasiLayanan; ?> Menit</li>
                                        <li><?php echo $data->keterangan; ?></li>
                                    </ul>
                                    <strong class="price"><small>Rp</small><?php echo $data->hargaLayanan; ?></strong>
                                </div><!-- end package -->
                            </div>
                            <?php
                                $no=$no+2;
                            endforeach;
                        }else{
                            foreach($hasil as $data):
                            ?>
                            <div class="col-md-6">
                                <div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                                    <h5><?php echo $data->namaLayanan; ?></h5>
                                    <ul class="list-default">
                                        <li><?php echo $data->durasiLayanan; ?> Menit</li>
                                        <li><?php echo $data->keterangan; ?></li>
                                    </ul>
                                    <strong class="price"><small>Rp</small><?php echo $data->hargaLayanan; ?></strong>
                                </div><!-- end package -->
                            </div>
                            <?php
                            $no=$no+2;
                        endforeach;
                        } 
                        $no=$no+1;
                    } 
                }
            ?>
                
                
            </div><!-- end col-md-6 -->
        </div><!-- end row -->    
  </div>
</section>
<!-- package section --> 