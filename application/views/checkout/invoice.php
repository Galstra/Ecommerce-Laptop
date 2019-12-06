<div id="heading-breadcrumbs">

      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-9 centered">
              <p class="text-muted lead centered"><h1>Invoice</h1></p>
            </div>
            <div id="customer-order" class="col-lg-9">
              <div class="box">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                          <th colspan="2"> Product</th>
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
            <div class="col-lg-3 mt-4 mt-lg-0">
              </div>
            </div>
          </div>
        </div>
      </div>