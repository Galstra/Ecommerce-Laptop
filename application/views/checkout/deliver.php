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
                <form method="POST" action="<?= base_url('checkout/deliver/addDeliver') ?>">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="<?php echo base_url('checkout/address')?>" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/deliver')?>" class="nav-link active"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>    
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>GrabExpress</h4>
                          <p>Pengiriman barang dalam sehari.</p>
                          <p>Syarat dan ketentuan berlaku.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="grabExpress">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>gosend</h4>
                          <p>Pengiriman barang dalam sehari.</p>
                          <p>Syarat dan ketentuan berlaku.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="goSend">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box shipping-method">
                          <h4>JNE</h4>
                          <p>waktu pengiriman 2-3 hari.</p>
                          <p>Syarat dan ketentuan berlaku</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="delivery" value="jne">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left-col"><a href="<?php echo base_url('checkout/address')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to addresses</a></div>
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
</div>