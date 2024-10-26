<div class="row">
  <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo $this->Url->build('/assets/images/login/2.jpg'); ?>" alt="looginpage"></div>
  <div class="col-xl-5 p-0">
    <div class="login-card login-dark">
      <div>
        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?php echo $this->Url->build('/assets/images/logo/logo.png'); ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo $this->Url->build('/assets/images/logo/logo_dark.png'); ?>" alt="looginpage"></a></div>
        <div class="login-main"> 
        <?php echo $this->Form->create(null, ['id' => 'loginForm', 'url' => ['controller' => 'Users', 'action' => 'login']]); ?>
          <h4>Sign in to account</h4>
          <p>Enter your username & password to login</p>
          <?php echo $this->Flash->render(); ?>
          <div class="form-group">
              <label class="col-form-label">Username <span class="text-danger">*</span></label>
              <?php echo $this->Form->control('username', [
                  'type' => 'text',
                  'placeholder' => 'Enter your username',
                  'class' => 'form-control',
                  'name' => 'username',
                  'label' => false,
                  'required' => true
              ]); ?>
          </div>
          <div class="form-group">
              <label class="col-form-label">Password <span class="text-danger">*</span></label>
              <div class="form-input position-relative">
                  <?php echo $this->Form->control('password', [
                      'type' => 'password',
                      'class' => 'form-control',
                      'name' => 'password',
                      'placeholder' => '*********',
                      'label' => false,
                      'required' => true
                  ]); ?>
              </div>
          </div>
          <div class="form-group mb-0">
              <?php echo $this->Form->button('Sign in', ['class' => 'btn btn-primary btn-block w-100 mt-4']); ?>
          </div>
          <?php echo $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>