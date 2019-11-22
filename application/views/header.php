
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
  <!-- <div class="container"> -->
    <div class="row">
      <div class="col-xl-12 col-xs-12 col-lg-12 col-sm-12 col-md-12 navv">
        
        <div class="upper-menu">
          <div class="row">
            <div class="col-xl-6">
            </div>
            <div class="col-xl-6 text-right">
                <span><i class="fa fa-clock"></i> Работаем с 08:00 до 18:00</span> 
            </div>
          </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light">

          <a class="navbar-brand" href="<?php echo base_url().'pages/index'?>" target="">
            <img src="../../assets/images/logo.png" alt=""></a>  
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Главная</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Подменю 1</a>
                    <a class="dropdown-item" href="#">Подменю 2</a>
                    <a class="dropdown-item" href="#">Подменю 3</a>
                  </div>
                </li>
                <?php 
                foreach ($main_menu as $menu):
                 ?>

                 <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="<?php echo $menu['url'];?>"><?php echo $menu['title']; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </nav>    
      </div>
    </div>
  <!-- </div> -->