<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/material/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 15:28:40 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>APOTEK KELUARGA</title>

  <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/web/base/images/icon.png>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/web/base/images/icon.png">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/css/bootstrap.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/css/bootstrap-extend.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/base/css/site.minfd53.css?v4.0.1">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/css/skintools.minfd53.css?v4.0.1">
  <script src="<?php echo base_url() ?>assets/web/base/js/Plugin/skintools.minfd53.js?v4.0.1"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/animsition/animsition.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/switchery/switchery.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/intro-js/introjs.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/waves/waves.minfd53.css?v4.0.1">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/chartist/chartist.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/jvectormap/jquery-jvectormap.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.css?v4.0.1">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/base/examples/css/dashboard/v1.minfd53.css?v4.0.1">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/fonts/material-design/material-design.minfd53.css?v4.0.1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/global/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">


  <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/web/global/vendor/html5shiv/html5shiv.min.js?v4.0.1"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo base_url() ?>assets/web/global/vendor/media-match/media.match.min.js?v4.0.1"></script>
    <script src="<?php echo base_url() ?>assets/web/global/vendor/respond/respond.min.js?v4.0.1"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url() ?>assets/web/global/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="<?php echo base_url() ?>assets/web/base/images/edit.png" title="Remark">
        <!--span class="navbar-brand-text hidden-xs-down">APOTEK KELUARGA</span-->
      </div>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
        data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="nav-item hidden-float">
            <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
              role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-fw dropdown-mega">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
              role="button">Mega <i class="icon md-chevron-down" aria-hidden="true"></i></a>
            <div class="dropdown-menu" role="menu">
              <div class="mega-content">
                <div class="row">
                  <div class="col-md-4">
                    <h5>UI Kit</h5>
                    <ul class="blocks-2">
                      <li class="mega-menu m-0">
                        <ul class="list-icons">
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="advanced/animation.html">Animation</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/buttons.html">Buttons</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/colors.html">Colors</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/dropdowns.html">Dropdowns</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/icons.html">Icons</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="advanced/lightbox.html">Lightbox</a>
                          </li>
                        </ul>
                      </li>
                      <li class="mega-menu m-0">
                        <ul class="list-icons">
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/modals.html">Modals</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/panel-structure.html">Panels</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="structure/overlay.html">Overlay</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/tooltip-popover.html">Tooltips</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="advanced/scrollable.html">Scrollable</a>
                          </li>
                          <li><i class="md-chevron-right" aria-hidden="true"></i>
                            <a
                              href="uikit/typography.html">Typography</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Media
                      <span class="badge badge-pill badge-success">4</span>
                    </h5>
                    <ul class="blocks-3">
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-1-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-2-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-3-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-4-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-5-150x100.jpg" alt="..." />
                        </a>
                      </li>
                      <li>
                        <a class="thumbnail m-0" href="javascript:void(0)">
                          <img class="w-full" src="<?php echo base_url() ?>assets/web/global/photos/view-6-150x100.jpg" alt="..." />
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5 class="mb-0">Accordion</h5>
                    <!-- Accordion -->
                    <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                          <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                          </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                          <div class="panel-body">
                            De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                            congressus ostendit alienae, voluptati ornateque accusamus
                            clamat reperietur convicia albucius.
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                          <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                          </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                          <div class="panel-body">
                            Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                            loco ignavi, credo videretur multoque choro fatemur
                            mortis animus adoptionem, bello statuat expediunt naturales.
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                          <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                          </a>
                        </div>
                        <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                          <div class="panel-body">
                            Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                            suscipere. Desiderat magnum, contenta poena desiderant
                            concederetur menandri damna disputandum corporum.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Accordion -->
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="<?php echo base_url() ?>assets/web/global/portraits/5.jpg" alt="...">
                <i></i>              </span>            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
              aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-notifications" aria-hidden="true"></i>0</a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header">
                <h5>NOTIFICATIONS</h5>
                <span class="badge badge-round badge-danger">No Notification </span></div>

              <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications                </a>              </div>
            </div>
          </li>
         
          </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <!--li class="site-menu-category">General</li-->
            <li class="site-menu-item active">
              <a href="index.html">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                                <span class="site-menu-title">Tips Kesehatan</span>
                                        <!--span class="site-menu-arrow"></span-->
              </a>
              <!--ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="layouts/menu-collapsed.html">
                    <span class="site-menu-title">Menu Collapsed</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/menu-expended.html">
                    <span class="site-menu-title">Menu Expended</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/grids.html">
                    <span class="site-menu-title">Grid Scaffolding</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/layout-grid.html">
                    <span class="site-menu-title">Layout Grid</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/headers.html">
                    <span class="site-menu-title">Different Headers</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/panel-transition.html">
                    <span class="site-menu-title">Panel Transition</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/boxed.html">
                    <span class="site-menu-title">Boxed Layout</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/two-columns.html">
                    <span class="site-menu-title">Two Columns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/bordered-header.html">
                    <span class="site-menu-title">Bordered Header</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/menubar-flipped.html">
                    <span class="site-menu-title">Menubar Flipped</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="layouts/menubar-native-scrolling.html">
                    <span class="site-menu-title">Menubar Native Scrolling</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Page Aside</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="layouts/aside-left-static.html">
                        <span class="site-menu-title">Left Static</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="layouts/aside-right-static.html">
                        <span class="site-menu-title">Right Static</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="layouts/aside-left-fixed.html">
                        <span class="site-menu-title">Left Fixed</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="layouts/aside-right-fixed.html">
                        <span class="site-menu-title">Right Fixed</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li-->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                                <span class="site-menu-title">News</span>
                                        <!--span class="site-menu-arrow"></span-->
              </a>
              <!--ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Errors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="pages/error-400.html">
                        <span class="site-menu-title">400</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/error-403.html">
                        <span class="site-menu-title">403</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/error-404.html">
                        <span class="site-menu-title">404</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/error-500.html">
                        <span class="site-menu-title">500</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/error-503.html">
                        <span class="site-menu-title">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="pages/faq.html">
                    <span class="site-menu-title">FAQ</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/gallery.html">
                    <span class="site-menu-title">Gallery</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/gallery-grid.html">
                    <span class="site-menu-title">Gallery Grid</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/search-result.html">
                    <span class="site-menu-title">Search Result</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Maps</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="pages/map-google.html">
                        <span class="site-menu-title">Google Maps</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/map-vector.html">
                        <span class="site-menu-title">Vector Maps</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="pages/maintenance.html">
                    <span class="site-menu-title">Maintenance</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/forgot-password.html">
                    <span class="site-menu-title">Forgot Password</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/lockscreen.html">
                    <span class="site-menu-title">Lockscreen</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/login.html">
                    <span class="site-menu-title">Login</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/register.html">
                    <span class="site-menu-title">Register</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/login-v2.html">
                    <span class="site-menu-title">Login V2</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/register-v2.html">
                    <span class="site-menu-title">Register V2</span>
                    <div class="site-menu-label">
                      <span class="badge badge-info badge-round">new</span>
                    </div>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/login-v3.html">
                    <span class="site-menu-title">Login V3</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/register-v3.html">
                    <span class="site-menu-title">Register V3</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/user.html">
                    <span class="site-menu-title">User List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/invoice.html">
                    <span class="site-menu-title">Invoice</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/blank.html">
                    <span class="site-menu-title">Blank Page</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Email</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="pages/email-articles.html">
                        <span class="site-menu-title">Articles</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/email-welcome.html">
                        <span class="site-menu-title">Welcome</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/email-post.html">
                        <span class="site-menu-title">Post</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/email-thumbnail.html">
                        <span class="site-menu-title">Thumbnail</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="pages/email-news.html">
                        <span class="site-menu-title">News</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="pages/code-editor.html">
                    <span class="site-menu-title">Code Editor</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/profile.html">
                    <span class="site-menu-title">Profile</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/profile-v2.html">
                    <span class="site-menu-title">Profile V2</span>
                    <div class="site-menu-label">
                      <span class="badge badge-info badge-round">new</span>
                    </div>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/profile-v3.html">
                    <span class="site-menu-title">Profile V3</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/site-map.html">
                    <span class="site-menu-title">Sitemap</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="pages/project.html">
                    <span class="site-menu-title">Project</span>
                  </a>
                </li>
              </ul>
            </li-->
            <!--li class="site-menu-category">Elements</li-->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                                <span class="site-menu-title">Slide Show</span>
                                        <!--span class="site-menu-arrow"></span-->
              </a>
              <!--ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Panel</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="uikit/panel-structure.html">
                        <span class="site-menu-title">Panel Structure</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="uikit/panel-actions.html">
                        <span class="site-menu-title">Panel Actions</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="uikit/panel-portlets.html">
                        <span class="site-menu-title">Panel Portlets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/buttons.html">
                    <span class="site-menu-title">Buttons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/cards.html">
                    <span class="site-menu-title">Cards</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/dropdowns.html">
                    <span class="site-menu-title">Dropdowns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/icons.html">
                    <span class="site-menu-title">Icons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/list.html">
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/tooltip-popover.html">
                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/modals.html">
                    <span class="site-menu-title">Modals</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/tabs-accordions.html">
                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/images.html">
                    <span class="site-menu-title">Images</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/badges.html">
                    <span class="site-menu-title">Badges</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/progress-bars.html">
                    <span class="site-menu-title">Progress Bars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/carousel.html">
                    <span class="site-menu-title">Carousel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/typography.html">
                    <span class="site-menu-title">Typography</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/colors.html">
                    <span class="site-menu-title">Colors</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="uikit/utilities.html">
                    <span class="site-menu-title">Utilties</span>
                  </a>
                </li>
              </ul>
            </li-->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                                <span class="site-menu-title">Data Master</span>
                                        <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
        <li class="site-menu-item">
                  <a href="tables/datatable.html">
                    <span class="site-menu-title">Kategori Obat</span>
                  </a>
                </li>
        <li class="site-menu-item">
                  <a href="tables/datatable.html">
                    <span class="site-menu-title">Data Obat</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                                <span class="site-menu-title">Pesanan</span>
                                        <!--span class="site-menu-arrow"></span-->
              </a>
              <!--ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="structure/alerts.html">
                    <span class="site-menu-title">Alerts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/ribbon.html">
                    <span class="site-menu-title">Ribbon</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/pricing-tables.html">
                    <span class="site-menu-title">Pricing Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/overlay.html">
                    <span class="site-menu-title">Overlay</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/cover.html">
                    <span class="site-menu-title">Cover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/timeline-simple.html">
                    <span class="site-menu-title">Simple Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/timeline.html">
                    <span class="site-menu-title">Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/step.html">
                    <span class="site-menu-title">Step</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/comments.html">
                    <span class="site-menu-title">Comments</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/media.html">
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/chat.html">
                    <span class="site-menu-title">Chat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/testimonials.html">
                    <span class="site-menu-title">Testimonials</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/nav.html">
                    <span class="site-menu-title">Nav</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/navbars.html">
                    <span class="site-menu-title">Navbars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/blockquotes.html">
                    <span class="site-menu-title">Blockquotes</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/pagination.html">
                    <span class="site-menu-title">Pagination</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="structure/breadcrumbs.html">
                    <span class="site-menu-title">Breadcrumbs</span>
                  </a>
                </li>
              </ul>
            </li-->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                                <span class="site-menu-title">Kirim resep obat</span>
                                        <!--span class="site-menu-arrow"></span-->
              </a>
              <!--ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="widgets/statistics.html">
                    <span class="site-menu-title">Statistics Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="widgets/data.html">
                    <span class="site-menu-title">Data Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="widgets/blog.html">
                    <span class="site-menu-title">Blog Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="widgets/chart.html">
                    <span class="site-menu-title">Chart Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="widgets/social.html">
                    <span class="site-menu-title">Social Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="widgets/weather.html">
                    <span class="site-menu-title">Weather Widgets</span>
                  </a>
                </li>
              </ul>
            </li-->
            <!--li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                                <span class="site-menu-title">Forms</span>
                                        <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="forms/general.html">
                    <span class="site-menu-title">General Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/material.html">
                    <span class="site-menu-title">Material Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/advanced.html">
                    <span class="site-menu-title">Advanced Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/layouts.html">
                    <span class="site-menu-title">Form Layouts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/wizard.html">
                    <span class="site-menu-title">Form Wizard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/validation.html">
                    <span class="site-menu-title">Form Validation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/masks.html">
                    <span class="site-menu-title">Form Masks</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Editors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="forms/editor-summernote.html">
                        <span class="site-menu-title">Summernote</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="forms/editor-markdown.html">
                        <span class="site-menu-title">Markdown</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="forms/editor-ace.html">
                        <span class="site-menu-title">Ace Editor</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="forms/image-cropping.html">
                    <span class="site-menu-title">Image Cropping</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="forms/file-uploads.html">
                    <span class="site-menu-title">File Uploads</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                                <span class="site-menu-title">Chart</span>
                                        <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="charts/chartjs.html">
                    <span class="site-menu-title">Chart.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/gauges.html">
                    <span class="site-menu-title">Gauges</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/flot.html">
                    <span class="site-menu-title">Flot</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/peity.html">
                    <span class="site-menu-title">Peity</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/sparkline.html">
                    <span class="site-menu-title">Sparkline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/morris.html">
                    <span class="site-menu-title">Morris</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/chartist.html">
                    <span class="site-menu-title">Chartist.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/rickshaw.html">
                    <span class="site-menu-title">Rickshaw</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/pie-progress.html">
                    <span class="site-menu-title">Pie Progress</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="charts/c3.html">
                    <span class="site-menu-title">C3</span>
                  </a>
                </li>
              </ul>
            </li-->
            <!--li class="site-menu-category">Apps</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                                <span class="site-menu-title">Apps</span>
                                        <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="apps/contacts/contacts.html">
                    <span class="site-menu-title">Contacts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/calendar/calendar.html">
                    <span class="site-menu-title">Calendar</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/notebook/notebook.html">
                    <span class="site-menu-title">Notebook</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/taskboard/taskboard.html">
                    <span class="site-menu-title">Taskboard</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Documents</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="apps/documents/articles.html">
                        <span class="site-menu-title">Articles</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="apps/documents/categories.html">
                        <span class="site-menu-title">Categories</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="apps/documents/article.html">
                        <span class="site-menu-title">Article</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a href="apps/forum/forum.html">
                    <span class="site-menu-title">Forum</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/message/message.html">
                    <span class="site-menu-title">Message</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/projects/projects.html">
                    <span class="site-menu-title">Projects</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/mailbox/mailbox.html">
                    <span class="site-menu-title">Mailbox</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/media/overview.html">
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/work/work.html">
                    <span class="site-menu-title">Work</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/location/location.html">
                    <span class="site-menu-title">Location</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="apps/travel/travel.html">
                    <span class="site-menu-title">Travel</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul-->

          <div class="site-menubar-section">
            <h5>
              Milestone
              <span class="float-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="float-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
        data-original-title="Settings">
        <span class="icon md-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon md-eye-off" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon md-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <div>
      <div>
        <ul>
          <li>
            <a href="apps/mailbox/mailbox.html">
                <i class="icon md-email"></i>
                <span>Mailbox</span>
            </a>
          </li>
          <li>
            <a href="apps/calendar/calendar.html">
                <i class="icon md-calendar"></i>
                <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="apps/contacts/contacts.html">
                <i class="icon md-account"></i>
                <span>Contacts</span>
            </a>
          </li>
          <li>
            <a href="apps/media/overview.html">
                <i class="icon md-videocam"></i>
                <span>Media</span>
            </a>
          </li>
          <li>
            <a href="apps/documents/categories.html">
                <i class="icon md-receipt"></i>
                <span>Documents</span>
            </a>
          </li>
          <li>
            <a href="apps/projects/projects.html">
                <i class="icon md-image"></i>
                <span>Project</span>
            </a>
          </li>
          <li>
            <a href="apps/forum/forum.html">
                <i class="icon md-comments"></i>
                <span>Forum</span>
            </a>
          </li>
          <li>
            <a href="index.html">
                <i class="icon md-view-dashboard"></i>
                <span>Dashboard</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-6 col-lg-4">
          <!-- Widget Chat -->
          <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="./">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
          <h1 align="center">WELCOME TO DASHBOARD</h1>
            
            
          </div>
        </div>
      </div>
          <!-- End Widget Chat -->
    </div>
  </div>

        <div class="col-xxl-5 col-lg-6">
          <!-- Panel Projects -->
          <div class="panel" id="projects">
            <div class="table-responsive"></div>
          </div>
          <!-- End Panel Projects -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2018 <a href="https://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
    </div>
</footer>
  <!-- Core  -->
  <script data-cfasync="false" src="../../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url() ?>assets/web/global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/jquery/jquery.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/popper-js/umd/popper.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/animsition/animsition.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/waves/waves.minfd53.js?v4.0.1"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url() ?>assets/web/global/vendor/switchery/switchery.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/intro-js/intro.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/screenfull/screenfull.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1"></script>

  <!-- Plugins For This Page -->
  <script src="<?php echo base_url() ?>assets/web/global/vendor/chartist/chartist.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/jvectormap/jquery-jvectormap.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-enfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/vendor/peity/jquery.peity.minfd53.js?v4.0.1"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url() ?>assets/web/global/js/State.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Component.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Base.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Config.minfd53.js?v4.0.1"></script>

  <script src="<?php echo base_url() ?>assets/web/base/js/Section/Menubar.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/base/js/Section/GridMenu.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/base/js/Section/Sidebar.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/base/js/Section/PageAside.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/base/js/Plugin/menu.minfd53.js?v4.0.1"></script>

  <!-- Config -->
  <script src="<?php echo base_url() ?>assets/web/global/js/config/colors.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/base/js/config/tour.minfd53.js?v4.0.1"></script>
  <script>
    Config.set('<?php echo base_url() ?>assets/web/base', '<?php echo base_url() ?>assets/web/base');
  </script>

  <!-- Page -->

  <script src="<?php echo base_url() ?>assets/web/base/js/Site.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/asscrollable.minfd53.js?v4.0.1"></script>

  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/slidepanel.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/switchery.minfd53.js?v4.0.1"></script>

  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/matchheight.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/jvectormap.minfd53.js?v4.0.1"></script>
  <script src="<?php echo base_url() ?>assets/web/global/js/Plugin/peity.minfd53.js?v4.0.1"></script>


  <script src="<?php echo base_url() ?>assets/web/base/examples/js/dashboard/v1.minfd53.js?v4.0.1"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/material/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Apr 2018 15:30:11 GMT -->
</html>