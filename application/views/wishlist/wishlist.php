      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('produk')?>" method="get">
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
            <div class="col-lg-9">
              <div class="row products">
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
              <!-- CUSTOMER MENU -->
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> Pesanan saya</a></li>
                    <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> Wishlist</a></li>
                    <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> Akun saya</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link"><i class="fa fa-sign-out"></i> Keluar</a></li>
                  </ul>
                </div>
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
    </div>
    <!-- Javascript files-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/jquery.cookie/jquery.cookie.js')?>"> </script>
    <script src="<?php echo base_url('assets/waypoints/lib/jquery.waypoints.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/jquery.counterup/jquery.counterup.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/owl.carousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.parallax-1.1.3.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-select/js/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/jquery.scrollto/jquery.scrollTo.min.js')?>"></script>
    <script src="<?php echo base_url('js/front.js')?>"></script>
  </')?>body>
</html>