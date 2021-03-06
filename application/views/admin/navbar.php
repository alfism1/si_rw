<?php
if ($this->ion_auth->logged_in()){
  $user = $this->ion_auth->user()->row();
  $user_groups = $this->ion_auth->get_users_groups($user->id)->result();
  $hak_akses = $user_groups[0]->name;
} else{
  $hak_akses = "warga";
}
?>

<div id="navbar" class="navbar navbar-default          ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="index.html" class="navbar-brand">
        <small>
          <i class="fa fa-leaf"></i>
          Sistem Informasi RW
        </small>
      </a>
    </div>

    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        
          
        <li class="light-blue dropdown-modal">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <img class="nav-user-photo" src="<?php echo base_url('assets/template/back') ?>/images/avatars/user.jpg" alt="Jason's Photo" />
            <span class="user-info">
              <small>Selamat datang,</small>
              <?php
              $usr = ($hak_akses == "warga") ? $_SESSION["nama"] : $hak_akses;
              echo $usr;
              ?>
            </span>

            <i class="ace-icon fa fa-caret-down"></i>
          </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li>
              <a href="#">
                <i class="ace-icon fa fa-cog"></i>
                Settings
              </a>
            </li>

            <li>
              <a href="profile.html">
                <i class="ace-icon fa fa-user"></i>
                Profile
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="<?= base_url() ?>auth/logout">
                <i class="ace-icon fa fa-power-off"></i>
                Keluar
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /.navbar-container -->
</div>
