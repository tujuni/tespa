<section role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php"><span class="icon icon-genius"></span> LoyalSpa</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#intro">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="<?= base_url('controller_main/reservation')?>">Reservation</a></li>
          <li><a href="#gallery">BookList</a></li>
          <?php
              if($this->session->userdata('Username')==''){
                  ?>
                  <li><a href="<?= base_url('controller_main/login')?>">Login</a></li>
                  
                  <?php
              } else{
                  ?>
                  <li><a onclick="logout()" href="javascript:void(0);">Logout</a></li>
                  
                  <?php
              }
          ?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header> 
</section>
<!-- header section --> 

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Look Beautiful</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore.</p>
                                    <a class="btn btn-primary btn-lg" href="#package">Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Feel Beautiful</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore.</p>
                                    <a class="btn btn-primary btn-lg" href="#services">Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->