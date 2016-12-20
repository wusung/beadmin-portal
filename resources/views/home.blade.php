<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>BeAdmin - Bootstrap Admin Theme</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="/css/font-awesome.min.css">
   <link rel="stylesheet" href="/css/animate-animo.css">
   <link rel="stylesheet" href="/css/whirl.css">
   <!-- START Page Custom CSS-->
   <!-- jQuery UI-->
   <link rel="stylesheet" href="/css/jquery-ui.min.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="/css/custom.css">
   <!-- Modernizr JS Script-->
   <script src="/js/modernizr.custom.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="/js/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START Main wrapper-->
   <div class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a href="dashboard.v1.html" class="navbar-brand">
               <div class="brand-logo">
                  <img src="app/img/logo.png" alt="App Logo" class="img-responsive">
               </div>
               <div class="brand-logo-collapsed">
                  <img src="app/img/logo-single.png" alt="App Logo" class="img-responsive">
               </div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a href="#" data-toggle-state="aside-toggled" class="visible-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
               </li>
               <!-- START Messages menu (dropdown-list)-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="flipInX" class="dropdown-toggle">
                     <em class="fa fa-envelope"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li class="dropdown-menu-header">Unread messages</li>
                     <li class="p-sm">
                        <input type="text" placeholder="Find contacts.." onfocus="javascript:void(0);" class="form-control">
                     </li>
                     <li>
                        <div class="scroll-viewport">
                           <!-- START list group-->
                           <div class="list-group scroll-content">
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">5m</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-md"></span>Greg Lewis</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-success circle-md"></span>Constance Cook</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Cody Barnes</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Gina Robinson</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">yesterday</small>
                                       <strong class="media-heading text-primary">
                                          <span class="circle circle-danger circle-md"></span>Violet Olson</strong>
                                       <p class="mb-sm">
                                          <small>Nunc vel dui et leo sagittis fringilla.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                        </div>
                     </li>
                     <!-- START dropdown footer-->
                     <li class="p">
                        <a href="#" class="text-center">
                           <small class="text-primary">More messages</small>
                        </a>
                     </li>
                     <!-- END dropdown footer-->
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Messages menu (dropdown-list)-->
               <!-- START User avatar toggle-->
               <li>
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a href="#" data-toggle-state="aside-user">
                     <em class="fa fa-user"></em>
                  </a>
               </li>
               <!-- END User avatar toggle-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- Search icon-->
               <li>
                  <a href="#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>
               <!-- Fullscreen-->
               <li>
                  <a href="#" data-toggle="fullscreen">
                     <em class="fa fa-expand"></em>
                  </a>
               </li>
               <!-- START Alert menu-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="flipInX" class="dropdown-toggle">
                     <em class="fa fa-bell"></em>
                     <div class="label label-danger">11</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-twitter fa-2x text-info"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">New followers</p>
                                    <p class="m0 text-muted">
                                       <small>1 new follower</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-envelope fa-2x text-warning"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">New e-mails</p>
                                    <p class="m0 text-muted">
                                       <small>You have 10 new emails</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-tasks fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <p class="m0">Pending Tasks</p>
                                    <p class="m0 text-muted">
                                       <small>11 pending task</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- last list item-->
                           <a href="#" class="list-group-item">
                              <small>More notifications</small>
                              <span class="label label-danger pull-right">14</span>
                           </a>
                        </div>
                        <!-- END list group-->
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START Contacts button-->
               <li>
                  <a href="#" data-toggle-state="offsidebar-open">
                     <em class="fa fa-group"></em>
                  </a>
               </li>
               <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" action="search.html" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <!-- START user info-->
            <div class="item user-block">
               <!-- User picture-->
               <div class="user-block-picture">
                  <div class="user-block-status">
                     <img src="app/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                     <div class="circle circle-success circle-lg"></div>
                  </div>
                  <!-- Status when collapsed-->
               </div>
               <!-- Name and Role-->
               <div class="user-block-info">
                  <span class="user-block-name item-text">Welcome User</span>
                  <span class="user-block-role">UX-Dev</span>
               </div>
            </div>
            <!-- END user info-->
            <ul class="nav">
                <li class="nav-heading">Main navigation</li>
                <li>
                   <a href="/home" title="Home" data-toggle="" class="no-submenu">
                      <em class="fa fa-cube"></em>
                      <span class="item-text">Home</span>
                   </a>
                </li>
            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div class="p-lg text-center">
               <em class="fa fa-user"></em>
               <strong>Connections</strong>
            </div>
            <ul class="nav">
               <!-- END user info-->
               <li class="p">
                  <div class="form-group has-feedback">
                     <input type="text" placeholder="Search contacts.." class="form-control input-sm">
                     <em class="fa fa-search form-control-feedback text-muted"></em>
                  </div>
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-success circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Laura Sam</strong>
                           <br>
                           <small class="text-muted">Lead, Developer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-success circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">Writer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-danger circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/07.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Mika Long</strong>
                           <br>
                           <small class="text-muted">System Analyst</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-warning circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/08.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Danielle Berry</strong>
                           <br>
                           <small class="text-muted">Developer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/09.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Martin Cooper</strong>
                           <br>
                           <small class="text-muted">Designeer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="circle circle-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/10.jpg" alt="Image" class="media-object img-circle thumb32">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Daniel Curtis</strong>
                           <br>
                           <small class="text-muted">Designer</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <div class="p-lg text-center">
                     <!-- Optional link to list more users-->
                     <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                        <strong>Load more..</strong>
                     </a>
                  </div>
               </li>
            </ul>
            <!-- Extra items-->
            <div class="p">
               <p>
                  <small class="text-muted">Tasks completion</small>
               </p>
               <div class="progress progress-xs m0">
                  <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                     <span class="sr-only">80% Complete</span>
                  </div>
               </div>
            </div>
            <div class="p">
               <p>
                  <small class="text-muted">Upload quota</small>
               </p>
               <div class="progress progress-xs m0">
                  <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                     <span class="sr-only">40% Complete</span>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <div class="content-wrapper">
            <div class="btn-group pull-right">
               <button type="button" data-toggle="reset" data-key="panelState" class="btn btn-default btn-sm">Reset Panels</button>
               <button type="button" data-toggle="reset" data-key="portletState" class="btn btn-default btn-sm">Reset Porlets</button>
            </div>
            <h3>Portlets
               <small>Drag and collapse panels. Refresh and see how their state is automatically saved</small>
            </h3>
            <!-- START row-->
            <div class="row">
               <div id="portlet-1" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-1" class="panel panel-default">
                     <div class="panel-heading portlet-handler">Default Panel
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-2" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">Primary Panel
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-3" class="panel panel-success">
                     <div class="panel-heading portlet-handler">Success Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START widget-->
                  <div id="panel-4" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-4 bg-danger text-center">
                              <em class="fa fa-music fa-2x"></em>
                           </div>
                           <div class="col-xs-8">
                              <div class="panel-body text-center">
                                 <h4 class="mt0">100%</h4>
                                 <p class="mb0 text-muted">VOLUME</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div id="panel-5" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-4 bg-inverse text-center">
                              <em class="fa fa-code-fork fa-2x"></em>
                           </div>
                           <div class="col-xs-8">
                              <div class="panel-body text-center">
                                 <h4 class="mt0">150</h4>
                                 <p class="mb0 text-muted">FORKS</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div id="portlet-2" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-6" class="panel panel-info">
                     <div class="panel-heading portlet-handler">Info Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-7" class="panel panel-warning">
                     <div class="panel-heading portlet-handler">Warning Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-8" class="panel panel-danger">
                     <div class="panel-heading portlet-handler">Danger Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START widget-->
                  <div id="panel-9" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-12">
                              <div class="panel-body text-center bg-purple">
                                 <h4 class="mt0">10k</h4>
                                 <p class="mb0 text-white">VISITORS</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div id="panel-10" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-12">
                              <div class="panel-body text-center bg-pink">
                                 <h4 class="mt0">100%</h4>
                                 <p class="mb0 text-white">VOLUME</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
               <div id="portlet-3" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-11" class="panel panel-inverse">
                     <div class="panel-heading portlet-handler">Inverse Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-12" class="panel panel-purple">
                     <div class="panel-heading portlet-handler">Purple Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-13" class="panel panel-green">
                     <div class="panel-heading portlet-handler">Green Panel</div>
                     <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                     </div>
                     <div class="panel-footer">Panel Footer</div>
                  </div>
                  <!-- END panel-->
                  <!-- START widget-->
                  <div id="panel-14" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-12">
                              <div class="panel-body text-center bg-green">
                                 <h4 class="mt0">150</h4>
                                 <p class="mb0 text-white">FORKS</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
                  <!-- START widget-->
                  <div id="panel-15" class="panel widget">
                     <div class="portlet-handler">
                        <div class="row row-table row-flush">
                           <div class="col-xs-12">
                              <div class="panel-body text-center bg-primary">
                                 <h4 class="mt0">10</h4>
                                 <p class="mb0 text-white">NEW MESSAGES</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->
               </div>
            </div>
            <!-- END row-->
         </div>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="/js/jquery.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="/js/chosen.jquery.js"></script>
   <script src="/js/bootstrap-slider.min.js"></script>
   <script src="/js/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="/js/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="/js/index.js"></script>
   <!-- Slimscroll-->
   <script src="/js/jquery.slimscroll.min.js"></script>
   <!-- Store + JSON-->
   <script src="/js/store%2Bjson2.min.js"></script>
   <!-- ScreenFull-->
   <script src="/js/screenfull.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- jQuery UI-->
   <script src="/js/jquery-ui.min.js"></script>
   <script src="/js/jquery.ui.touch-punch.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="/js/custom.js"></script>
   <!-- END Scripts-->
</body>

</html>
