    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <p class="text-muted lead">You currently have 1 item(s) in your cart.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
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
                          <td><a href="#"><img src="<?php echo base_url ('assets/img/'.$brg->gambar) ?>" alt="" class="img-fluid"></a></td>
                          <td><a href="#"><?php echo $brg->merk_barang ?></a></td>
                          <td>
                            <button class="minus">-</button><input type="number" value="1" class="banyakBarang" disabled=""><button class="plus">+</button>
                          </td>
                          <td>Rp <span class="harga"><?php $harga= number_format($brg->harga); echo $harga ?> </span></td>
                          <td>Rp<span class="kupon"> <?php $harga=number_format($brg->ptngharga ); echo $harga ?></span></td>
                          <td>Rp <span class="total"> <?php $harga=number_format($brg->harga); echo $harga ?></span></td>
                          <td><a href="<?php echo base_url () ?>keranjang/hapuscart/<?php echo  $brg->id_barang ?>" ><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                      <?php if(!isset($brg)) : ?>
                     
                        <?php if(isset($brg)){
                        $harga=number_format($total-$brg->ptngharga,0,',','.');
                        echo ('<tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"> <span class="total_harga">Rp' + $harga + ' </span></th>
                        </tr>
                      </tfoot>');
                      } ?>
                      <?php else : ?>
                        <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"> <span class="total_harga">Rp<?php $harga=number_format($total-$brg->ptngharga,0,',','.'); echo $harga ?></span></th>
                        </tr>
                      </tfoot>
                    <?php endif ?>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="<?php echo base_url ('home')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right-col">
                      
                      <a href="<?php echo base_url('checkout/address')?>" class="btn btn-secondary mt-0"><i class="fa fa-chevron-right"></i> Proceed to Checkout</a>
                    </div>
                  </div>
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
                  <?php if(!isset($brg)) : ?>
                    <?php if(isset($brg)){
                      $harga=number_format($total,0,',','.'); 
                      $harga=number_format($brg->ptngharga );
                      echo ('<tbody>
                            <tr>
                              <td>Order subtotal</td>
                              <th>Rp'+ $harga +' </th>
                            </tr>
                            <tr>
                              <td>kupon</td>
                              <th>Rp'+ $harga +'</th>
                            </tr>
                            <tr class="total">
                              <td>Total</td>
                              <th>Rp'+ $harga +'</th>
                            </tr> 
                          </tbody>');
                    }?>
                    <?php else : ?> 
                        <tbody>
                          <tr>
                            <td>Order subtotal</td>
                            <th>Rp<?php $harga=number_format($total,0,',','.'); echo $harga ?></th>
                          </tr>
                          <tr>
                            <td>kupon</td>
                            <th>Rp<?php $harga=number_format($brg->ptngharga ); echo $harga ?></th>
                          </tr>
                          <tr class="total">
                            <td>Total</td>
                            <th>Rp<?php $harga=number_format($total-$brg->ptngharga,0,',','.'); echo $harga ?></th>
                          </tr> 
                        </tbody>
                    <?php endif ?>
                  </table>
                </div>
              </div>
              <div class="box box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h4>Coupon code</h4>
                </div>
                <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                <form action="<?php echo base_url () ?>keranjang/diskon" method = "POST">
                  <div class="input-group">
                    <input type="text" name="koupon" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    