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
            <div class="col-lg-12">
              <p class="text-muted lead">You currently have 1 item(s) in your cart.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="get" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $total =0; ?>
                      <?php foreach ($barang as $brg) : 
                        $total = $total + $brg->harga;
                        ?>
                        <tr>
                          <td><a href="shop-detail 14s-CF2005TX(Gold).html"><img src="<?php echo base_url ('assets/img/'.$brg->gambar) ?>" alt="" class="img-fluid"></a></td>
                          <td><a href="shop-detail 14s-CF2005TX(Gold).html"><?php echo $brg ->merk_barang ?></a></td>
                          <td>
                            <input type="number" value="1" class="form-control">
                          </td>
                          <td><?php $harga=number_format($brg->harga,0,",","."); echo $harga ?> </td>
                          <td>$0.00</td>
                          <td><?php echo $brg->harga ?></td>
                          <td><a href="<?php echo base_url () ?>keranjang/hapuscart/<?php echo  $brg->id_barang ?>" ><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"><?php $harga=number_format($total,0,",","."); echo $harga ?></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="<?php echo base_url ('home')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right-col">
                      <button class="btn btn-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                      <button type="submit" class="btn btn-template-outlined">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <div>
                <div >
                  <div>
                  </div>
                </div>
                <div>
                  <div>
                    <div ></div>
                    <div>
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <div ></div>
                    <div >
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <div>
                    </div>
                    <div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Order subtotal</td>
                        <th><?php echo $harga ?></th>
                      </tr>
                      <tr>
                        <td>Shipping and handling domestic</td>
                        <th>Rp0</th>
                      </tr>
                       <tr>
                        <td>Shipping and handling nondomestic</td>
                        <th>Rp</th>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <th>Rp </th>
                      </tr>
                      <tr class="total">
                        <td>Total</td>
                        <th><?php echo $harga ?></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>Coupon code</h4>
                </div>
                <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     