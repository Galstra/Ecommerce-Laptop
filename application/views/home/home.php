<div id="all">
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="<?php echo base_url('registrasi/registrasi')?>"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3" style="height : 50%">
              <!-- MENUS AND FILTERS-->
                <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="<?php echo base_url('home')?>" class="nav-link d-flex align-items-center justify-content-between"><span>Products</span><span class="badge badge-secondary"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_asus')?>" class="nav-link">ASUS</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_hp')?>" class="nav-link">HP</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_lenovo')?>" class="nav-link">Lenovo</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_msi')?>" class="nav-link">MSI</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link  d-flex align-items-center justify-content-between"><span>Spesification</span><span class="badge badge-light"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?php echo base_url('kategori/lowspec')?>" class="nav-link">Low Spesification</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/medspec')?>" class="nav-link">Mid Specification</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/highspec')?>" class="nav-link">High Spesification</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link d-flex align-items-center justify-content-between"><span>Processor</span><span class="badge badge-secondary"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_intel')?>" class="nav-link">Intel</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('kategori/produk_amd')?>" class="nav-link">AMD</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <p class="text-muted lead">Perkembangan teknologi pada zaman ini sudah terbilang semakin pesat. Salah satu bukti pesatnya perkembangan teknologi ialah laptop gaming. Laptop gaming didukung oleh komponen-komponen
                yang handal dan canggih agar pengguna mampu bermain game secara lancar dan nyaman dengan kualitas terbaik. Untuk itu, kami menyediakan berbagai macam produk laptop yang bisa Anda pilih untuk digunakan.</p>
              <div class="row products products-big">
              <?php foreach ($barang as $brg) : ?>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="<?php echo base_url()?>home/subDetail/<?= $brg->id_barang ?>"><img src="<?php echo base_url().'/assets/img/'.$brg->gambar?>"class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><?php echo $brg->merk_barang ?> </h3>
                      <p class="price"><?php echo $brg->harga?> </p>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
       </div>
    

            
            