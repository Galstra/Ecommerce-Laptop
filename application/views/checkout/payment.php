<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Payment Mehod</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="shop-checkout1.html" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="shop-checkout2.html" class="nav-link"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="shop-checkout3.html" class="nav-link active"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Paypal</h4>
                          <p>We like it all.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment1">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Payment gateway</h4>
                          <p>VISA and Mastercard only.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment2">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="box payment-method">
                          <h4>Cash on delivery</h4>
                          <p>You pay when you get it.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="payment3">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left-col"><a href="<?php echo base_url('checkout/deliver')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to delivery method</a></div>
                    <div class="right-col">
                    <a href="<?php echo base_url('checkout/review')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-right"></i>Review Order</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>