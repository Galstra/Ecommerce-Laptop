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
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
            <p>Pengalaman Windows 10</p>

              <p class="lead">TIngkatkan efisiensi pekerjaan anda dengan Windows Multi-task, hubungkan Xbox One untuk pengalaman yang baru, Gunakan laptop Anda sebagai monitor untuk ponsel cerdas atau Stylus Pen yang memungkinkan Anda untuk membuat sketsa serta menggambar dengan tinta digital agar menyelesaikan lebih cepat, dan lebih natural.</p>
              <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a></p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar)?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar_2)?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar_2)?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url ('assets/img/'.$barang->gambar)?>" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                    <form>
                    <div class="sizes">
                        <h3>Warna </h3>
                        <select class="bs-select">
                          <option value="white">WHITE</option>
                          <option value="golden">Golden</option>

                        </select>
                      </div>
                      <p class="price"><?= $barang->harga ?></p>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default"><i class="fa fa-heart-o"></i></button>
                      </p>
                    </form>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar)?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar_2)?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar)?>" alt=""class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url ('assets/img/'.$barang->gambar_2)?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Product details</h4>
                <p><?php echo base_url ($barang->keterangan)?> </p>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Jaminan: 1 year limited parts and labour</em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Show it to your friends</h4>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>Products viewed recently</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail 14s-CF2005TX(Gold).html"><img src="img/14s-CF2005TX(Gold).jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">shop-detail 14s-CF2005TX(Gold)</a></h3>
                      <p class="price">Rp8.249.000</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">$143</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">RP13.699.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Computers </span><span class="badge badge-secondary">13</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">ACERS</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">TOSHIBA</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">ASUS</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">MSI</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Processor  </span><span class="badge badge-light">13</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">i3</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">i5</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">i7</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">i9</a></li>
                      </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Brands</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> RP.10,000,0000  (4)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> RP.10,000,0000 - RP.20,000,0000  (8)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> RP.20,000,0000 (4)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Do you want cool website like this one?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
          </div>
        </div>
      </div>