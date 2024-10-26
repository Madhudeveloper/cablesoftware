<div class="page-header row">
  <div class="header-logo-wrapper col-auto">
    <div class="logo-wrapper"><a href="<?php echo $this->Url->build('admin/users/dashboard') ?>"><img class="img-fluid for-light" src="<?php echo $this->Url->build('/assets/images/logo/logo.png'); ?>" alt=""/><img class="img-fluid for-dark" src="<?php echo $this->Url->build('/assets/images/logo/logo_light.png'); ?>" alt=""/></a></div>
  </div>
  <div class="col-4 col-xl-4 page-title">
    <h4 class="f-w-700">Dashboard</h4>
  </div>
  <!-- Page Header Start-->
  <div class="header-wrapper col m-0">
    <div class="row">
      <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
          <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative">
              <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
              <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"></div>
          </div>
        </div>
      </form>
      <div class="header-logo-wrapper col-auto p-0">
        <div class="logo-wrapper"><a href="<?php echo $this->Url->build('admin/users/dashboard') ?>"><img class="img-fluid" src="<?php echo $this->Url->build('/assets/images/logo/logo.png'); ?>" alt=""></a></div>
        <div class="toggle-sidebar">
          <svg class="stroke-icon sidebar-toggle status_toggle middle">
            <use href="<?php echo $this->Url->build('/assets/svg/icon-sprite.svg#toggle-icon'); ?>"></use>
          </svg>
        </div>
      </div>
      <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
        <ul class="nav-menus">
          <li class="onhover-dropdown">
           
            <div class="onhover-show-div notification-dropdown">
              <h5 class="f-18 f-w-600 mb-0 dropdown-title">Messages             </h5>
              <ul class="messages">
                <li class="d-flex b-light1-primary gap-2"> 
                  <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/1.png" alt="Graph"></div>
                  <div class="flex-grow-1"> <a href="private-chat.html">
                      <h6 class="font-primary f-w-600">Hackett Yessenia</h6></a>
                    <p>Hello Miss...&#128522;</p>
                  </div><span>2 hours</span>
                </li>
                <li class="d-flex b-light1-secondary gap-2"> 
                  <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/2.png" alt="Graph"></div>
                  <div class="flex-grow-1"> <a href="private-chat.html">
                      <h6 class="font-secondary f-w-600">schneider Adan</h6></a>
                    <p>Wishing You a Happy Birthday Dear..  🥳&#127882;</p>
                  </div><span>3 hours</span>
                </li>
                <li class="d-flex b-light1-success gap-2"> 
                  <div class="flex-shrink-0"><img src="assets/images/dashboard-2/user/3.png" alt="Graph"></div>
                  <div class="flex-grow-1"> <a href="private-chat.html">
                      <h6 class="font-success f-w-600">Mahdi Gholizadeh</h6></a>
                    <p>Hello Dear!! This Theme Is Very beautiful</p>
                  </div><span>5 hours</span>
                </li>
                <li class="bg-transparent"><a class="f-w-700 btn btn-primary w-100" href="letter-box.html">View all</a></li>
              </ul>
            </div>
          </li>
          <li class="cart-nav onhover-dropdown" style="display: none;">
          </li>
          <li class="profile-nav onhover-dropdown px-0 py-0">
            <div class="d-flex profile-media align-items-center"><img class="img-30" src="<?php echo $this->Url->build('/assets/images/dashboard/profile.png'); ?>" alt="">
              <div class="flex-grow-1"><span><?php echo $this->request->getSession()->read('Auth.Admin.name'); ?></span>
                <p class="mb-0 font-outfit"><?php echo $this->request->getSession()->read('Auth.Admin.email'); ?><i class="fa fa-angle-down"></i></p>
              </div>
            </div>
            <ul class="profile-dropdown onhover-show-div">
              <li><a href="private-chat.html"><i data-feather="user"></i><span>Account </span></a></li>
              <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
              <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>"><i data-feather="log-in"> </i><span>Log out</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>  