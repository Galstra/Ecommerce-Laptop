<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Order Review</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="<?php echo base_url('checkout/address')?>" class="nav-link"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/deliver')?>" class="nav-link"><i class="fa fa-truck"></i><br>Delivery Method</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/payment')?>" class="nav-link"><i class="fa fa-money"></i><br>Payment Method</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('checkout/review')?>" class="nav-link active"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php $total=0 ?>
                    <?php foreach ($barang as $brg) : 
                    $total = $total + $brg->harga;
                    ?>
                        <tr>
                        <td><a href="#"><img src="<?php echo base_url ('assets/img/'.$brg->gambar) ?>" alt="" class="img-fluid"></a></td>
                        <td><a href="#"><?php echo $brg->merk_barang ?></a></td>
                        <td>Rp <span class="harga"><?php $harga= number_format($brg->harga); echo $harga ?> </span></td>
                        <td>Rp<span class="kupon"> <?php $harga=number_format($brg->ptngharga ); echo $harga ?></span></td>
                        <td>Rp <span class="total"> <?php $harga=number_format($brg->harga); echo $harga ?></span></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4">Total</th>
                          <th colspan="2"> <span class="total_harga">Rp<?php $harga=number_format($total-$brg->ptngharga,0,',','.'); echo $harga ?></span></th>
                        </tr>
                      </tfoot>
                    <tfoot>
                      <tr>
                        <th colspan="4" class="text-left">Order subtotal</th>
                        <th>Rp <?php $harga=number_format($total-$brg->ptngharga,0,',','.'); echo $harga ?></th>
                    </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="<?php echo base_url('checkout/payment')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to payment method</a></div>
                  <div class="right-col">
                  <a href="<?php echo base_url('checkout/invoice')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-right"></i>Place the Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>