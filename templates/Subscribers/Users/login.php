<div class="row">
  <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo $this->Url->build('/assets/images/login/2.jpg'); ?>" alt="looginpage"></div>
  <div class="col-xl-5 p-0">
    <div class="login-card login-dark">
      <div>
        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?php echo $this->Url->build('/assets/images/logo/logo.png'); ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo $this->Url->build('/assets/images/logo/logo_dark.png'); ?>" alt="looginpage"></a></div>
        <div class="login-main"> 
          
            <h4>Sign in to account</h4>
            <p>Enter your email & password to login</p>
            <div class="form-group">
              <label class="col-form-label">Email Address</label>
              <?php echo $this->Form->control('email',['type' => 'text' , 'placeholder' => 'Enter your email address' , 'class' => 'form-control' , 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label class="col-form-label">Password</label>
              <div class="form-input position-relative">
                <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                <div class="show-hide"><span class="show">                         </span></div>
              </div>
            </div>
            <div class="form-group mb-0">
              <div class="checkbox p-0">
                <input id="checkbox1" type="checkbox">
                <label class="text-muted" for="checkbox1">Remember password</label>
              </div>
              <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
            </div>

      </div>
    </div>
  </div>
</div>