    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col">
              <div class="row products;">
              <?php foreach ($barang as $brg) : ?>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="<?php echo base_url()?>home/subDetail/<?= $brg->id_barang ?>"><img src="<?php echo base_url().'/assets/img/'.$brg->gambar?>"class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><?php echo $brg->merk_barang ?></a></h3>
                      <p class="price"><?php echo $brg->harga ?></p><a href="<?php echo base_url () ?>wishlist/hapuscart/<?php echo  $brg->id_barang ?>" ><i class="fa fa-trash-o fa-3x"></i></a>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
            <div class="box mt-0 mb-4 p-0">
            <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="<?php echo base_url('keranjang')?>" class="nav-link active"><i class="fa fa-list"></i> My Shopping Cart</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('wishlist')?>" class="nav-link"><i class="fa fa-heart"></i> Wishlist</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('home')?>" class="nav-link"><i class="fa fa-sign-out"></i> Halaman utama</a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>