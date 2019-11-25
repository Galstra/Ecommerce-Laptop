<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Delivery Method</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
              <form method="get" action="shop-checkout3.html">
              <?php $this->load->view("_partials/navCheckout.php") ?>
              </form>
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>GrabExpress</h4>
                          <p>Pengiriman barang dalam sehari.</p>
                          <p>Syarat dan ketentuan berlaku.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="delivery1">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>gosend</h4>
                          <p>Pengiriman barang dalam sehari.</p>
                          <p>Syarat dan ketentuan berlaku.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="delivery2">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>JNE</h4>
                          <p>waktu pengiriman 2-3 hari.</p>
                          <p>Syarat dan ketentuan berlaku</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="delivery3">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left-col"><a href="shop-checkout1.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to addresses</a></div>
                    <div class="right-col">
                      <button type="submit" class="btn btn-template-main">Continue to Payment Method<i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>