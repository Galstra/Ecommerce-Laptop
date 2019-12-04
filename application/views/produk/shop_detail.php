
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
                <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Login modal end-->
        <div id="content">
          <div class="container">
            <div class="row bar">
              <div class="col-md-3">
                <!-- MENUS AND FILTERS-->
                <div class="panel panel-default sidebar-menu">
                  <div class="panel-heading">
                    <h3 class="h4 panel-title">Categories</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="nav nav-pills flex-column text-sm category-menu">
                      <li class="nav-item"><a href="<?php echo base_url('home')?>" class="nav-link d-flex align-items-center justify-content-between"><span>Products</span><span class="badge badge-secondary"></span></a>
                        <ul class="nav nav-pills flex-column">
                          <li class="nav-item"><a href="<?php echo base_url('kategori/Produk_asus')?>" class="nav-link">ASUS</a></li>
                          <li class="nav-item"><a href="<?php echo base_url('kategori/Produk_intel')?>" class="nav-link">HP</a></li>
                          <li class="nav-item"><a href="<?php echo base_url('kategori/Produk_lenovo')?>" class="nav-link">Lenovo</a></li>
                          <li class="nav-item"><a href="<?php echo base_url('kategori/Produk_msi')?>" class="nav-link">MSI</a></li>
                        </ul>
                      </li>
                        <li class="nav-item"><a href="<?php echo base_url('home')?>" class="nav-link  d-flex align-items-center justify-content-between"><span>Spesification</span><span class="badge badge-light"></span></a>
                        <ul class="nav nav-pills flex-column">
                          <li class="nav-item"><a href="<?php echo base_url('kategori/lowspec')?>" class="nav-link">Low Spesification</a></li>
                          <li class="nav-item"><a href="<?php echo base_url('kategori/medspec')?>" class="nav-link">Mid Specification</a></li>
                          <li class="nav-item"><a href="<?php echo base_url('kategori/highspec')?>" class="nav-link">High Spesification</a></li>
                        </ul>
                      </li>
                      <li class="nav-item"><a href="<?php echo base_url('home')?>" class="nav-link d-flex align-items-center justify-content-between"><span>Processor</span><span class="badge badge-secondary"></span></a>
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
                      <p class="lead"><?php echo $barang->merk_barang ?> merupakan salah satu laptop gaming yang mempunyai komponen canggih untuk memberikan kenyamanan dan powerful dalam bermain game yang membutuhkan spek besar.</p>
                      <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product specifications</a></p>
                      <div id="productMain" class="row">
                        <div class="col-sm-6">
                          <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                            <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar) ?>" alt="" class="img-fluid"></div>
                            <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar_2) ?>" alt="" class="img-fluid"></div>
                            <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar) ?>" alt="" class="img-fluid"></div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="box">
                            <form>
                              <div class="sizes">
                                <h3>Available colors</h3>
                                <select class="bs-select">
                                  <option value="small">Black</option>
                                  <option value="medium">White</option>
                                  <option value="large">Red</option>
                                  <option value="x-large">Blue</option>
                                </select>
                                
                              </div>
                              <p class="price">Rp<?php $harga=number_format($barang->harga,0,",","."); echo $harga ?></p>
                              <p class="text-center">
                                  <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> <a href= "<?php echo base_url () ?>keranjang/addcart/<?php echo  $barang->id_barang ?>"> Add to cart</a></button>
                                </form>
                                <div class="text-center">
                                  <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i><a href= "<?php echo base_url ()?>wishlist/addwish/<?php echo  $barang->id_barang ?>">Wishlist</a></button>
                                </div>
                              </p>
                            </form>
                          </div>
                          <div data-slider-id="1" class="owl-thumbs">
                            <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar) ?>" alt="" class="img-fluid"></button>
                            <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar_2) ?>" alt="" class="img-fluid"></button>
                            <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar) ?>" alt="" class="img-fluid"></button>
                          </div>
                        </div>
                      </div>
                      <div id="details" class="box mb-4 mt-4">
                        <p></p>
                        <h4>Product Specifications</h4>
                        <p>
                          <?php echo str_replace('|','.<br>',$barang->keterangan) ?>
                        </p>
                        <blockquote class="blockquote">
                          <p class="mb-0"><em><?php echo $barang->merk_barang ?> sangat direkomendasikan untuk para pengguna laptop gaming yang membutuhkan model terbaru dan menarik. Produk ini merupakan produk andalan dan rekomendasi dari kami sehingga laris terjual.</em></p>
                        </blockquote>
                      </div>
                      <div id="product-social" class="box social text-center mb-5 mt-5">
                        <h4 class="heading-light">Show it to your friends</h4>
                        <ul class="social list-inline">
                          <li class="list-inline-item"><a href="https://id-id.facebook.com/" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.gmail.com" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.twitter.com" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                      </div>
            </div>
          </div>
        </div>
