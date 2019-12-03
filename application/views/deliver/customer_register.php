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
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Daftar Akun Baru</h2>
                <p class="lead">Silahkan isi informasi yang dibutuhkan</p>
                <p>Informasi yang akan anda isi akan direkam dan disimpan dalam file sehingga anda dapat langsung masuk ketika ingin berbelanja di kami</p>
                <p class="text-muted">Jika ada pertanyaan silahkan kontak kami, kami siap membantu dalam 24 jam</p>
                <hr>

                <form action="<?php echo base_url('customer/customer_register/register')?>" method="post">
                  <div class="form-group">
                    <label for="name-login">Nama</label>
                    <input id="name-login" name ="nama" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email-login">Email</label>
                    <input id="email-login" name ="email"type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password-login">Kata Sandi</label>
                    <input id="password-login" name ="sandi" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password-login">chek ulang Sandi</label>
                    <input id="password-login" nama ="sandi1"type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-user-md"></i> Daftar</button>
 
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h2 class="text-uppercase">Masuk</h2>
                <p class="lead">Sudah Mendaftar?</p>
                <form action="<?php echo base_url('login/cek_login')?>" method="post">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
    