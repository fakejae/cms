<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?= $judul_halaman?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?= site_url('assets/pluto')?>/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto')?>/css/custom.css" />
      <script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="<?= base_url(); ?>"><img class="logo_icon img-responsive" src="<?= site_url('assets/pluto')?>//images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?= site_url('assets/pluto')?>/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Pawestri Tyas Hapsari</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="<?= site_url('admin/home')?>"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="<?= site_url('admin/caraousel')?>"><i class="fa fa-clock-o orange_color"></i> <span>Caraousel</span></a></li>            
                     <li><a href="<?= site_url('admin/kategori')?>"><i class="fa fa-table purple_color2"></i> <span>Kategori Konten</span></a></li>
                     <li><a href="<?= site_url('admin/konten')?>"><i class="fa fa-cog red_color"></i> <span>Konten</span></a></li>
                     <?php if($this->session->userdata('level')=='Admin'){?>
                     <li><a href="<?= site_url('admin/user')?>"><i class="fa fa-user green_color"></i> <span>User</span></a></li>
                     <li><a href="<?= site_url('admin/konfigurasi')?>"><i class="fa fa-edit orange_color"></i> <span>Konfigurasi</span></a></li>
                     <?php } ?>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="<?= base_url(); ?>">
                              <img class="img-responsive" src="<?= site_url('assets/pluto')?>/images/logo/logo.png" alt="#" />
                           </a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                              <?= $judul_halaman?>
                              </ul>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                       <img class="img-responsive rounded-circle" src="<?= site_url('assets/pluto')?>/images/layout_img/user_img.jpg" alt="#" />
                                       <!-- <span class="name_user"><?= $this->session->userdata('nama') ?></span> -->
                                       <span class="text-muted"><?= $this->session->userdata('level') ?></span>
                                    </a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">Settings</a>
                                       <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="container-xxl flex-grow-1 container-p-y">
                    <?= $contents; ?>
                </div>
                  <!-- footer -->
                  <!-- <div class="container-fluid"> -->
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">Pawestri Tyas</a>
                        </p>
                     <!-- </div> -->
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?= site_url('assets/pluto')?>/js/jquery.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/popper.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?= site_url('assets/pluto')?>/js/animate.js"></script>
      <!-- select country -->
      <script src="<?= site_url('assets/pluto')?>/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="<?= site_url('assets/pluto')?>/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="<?= site_url('assets/pluto')?>/js/Chart.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/Chart.bundle.min.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/utils.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="<?= site_url('assets/pluto')?>/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?= site_url('assets/pluto')?>/js/custom.js"></script>
      <script src="<?= site_url('assets/pluto')?>/js/chart_custom_style1.js"></script>
      <script>
         $('#ngilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);
      </script>

    <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

   </body>
</html>