<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LoyalSpa</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/jquery.fancybox.css">
<link href="<?php echo base_url() ?>css/owl.carousel.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/owl.transitions.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/font-icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/animate.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<section id="reservation" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Make a Reservation</h3>
      <p></p>
      <?php
            $pesan=$this->session->flashdata('pesan');
            if($pesan==""){
                echo "";
            } else{
                ?>
                    <div class="alert alert-success alert-dismissible">
                        <?php echo $pesan; ?>
                    </div>
                <?php
            }
      ?>
      <br>
    </div>
  <div class="row">
  <div class="col-sm-6 col-md-8">
  </div>
   <div class="col-md-8 col-md-offset-2">
    <div class="thumbnail">
      <div class="caption">
      <form name="formreservasi" id="formreservasi" method="post" action="<?php echo base_url('controller_main/simpanreservasi') ?>">
		<div class="row mb-3">
            <label class="col-sm-2 col-form-label">Reservasi Layanan</label>
            <div class="col-sm-10">
                <select class="form-select form-control" name="idLayanan" id="idLayanan" required>
                    <option value="">PILIH</option>
                    <?php
                        if(empty($hasil)){
                            
                        } else{
                            foreach ($hasil as $data):
                                ?>
                                    <option value="<?php echo $data->idLayanan; ?>"><?php echo $data->namaLayanan; ?></option>
                                <?php
                            endforeach;
                        }
                    ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Reservasi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tglPesanan" name="tglPesanan" required>
            </div>
        </div>
        <!---->
        <br>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Waktu Reservasi</label>
            <div class="col-sm-10">
                <select class="form-select form-control" name="wktMulai" id="wktMulai" required>
                    <option value="">PILIH</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row mb-3 text-center">
            <a href="<?= base_url('index.php')?>" class="btn btn-warning">Back</a>
            <button type="submit" class="btn btn-success" >Save</button>
            <button type="reset" class="btn btn-danger">cancel</button>
        </div>
      </form>
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-8">
  </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</section>

<!-- JS FILES --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/mousescroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.fancybox.pack.js"></script>  
<script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.contact.js"></script> 
</body>
</html>