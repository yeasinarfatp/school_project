<?php
require 'session_chek.php';
require 'db.php';
require 'cookie_chek.php';
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="dashboard_asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Home</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="/register/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img width="50" class="app-sidebar__user-avatar" src="uploads/user/<?php echo $_SESSION['user_img']; ?>" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['Name']; ?></p>
          <p class="app-sidebar__user-designation">
<?php
if ($_SESSION['role']==1) {
  echo "Admin";
}
elseif ($_SESSION['role']==2) {
  echo "Moderator";
}
else {
  echo "Author";
}
 ?>
          </p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="addmin_panel.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="message_vew.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">messages</span></a></li>
        <?php
         if ($_SESSION['role']==1 || $_SESSION['role']==2) {

         ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="users_info.php"><i class="icon fa fa-user-o"></i> View users</a></li>
           <li><a class="treeview-item" href="register.php"><i class="icon fa fa-user-plus"></i>Add user</a></li>
            <!-- <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>--->
          </ul>
        </li>
      <?php } ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Banner</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_banner.php"><i class="icon fa fa-camera"></i> Add Banner</a></li>
            <li><a class="treeview-item" href="view_banner.php"><i class="icon fa fa-file-image-o"></i> view Banner</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Welcome Post</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="welcome.php"><i class="icon fa fa-circle-o"></i>View post </a></li>
            <li><a class="treeview-item" href="add_welcome.php"><i class="icon fa fa-circle-o"></i>Add Post</a></li>
            <!--<li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>-->
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Principle message</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="principle_message.php"><i class="icon fa fa-circle-o"></i>View message </a></li>
            <li><a class="treeview-item" href="add_principle.php"><i class="icon fa fa-circle-o"></i>Add message</a></li>

          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">News</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="news_view.php"><i class="icon fa fa-circle-o"></i>View news </a></li>
            <li><a class="treeview-item" href="add_news.php"><i class="icon fa fa-circle-o"></i>Add news</a></li>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Galary</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="galary.php"><i class="icon fa fa-file"></i>View galary </a></li>
            <li><a class="treeview-item" href="galary_add_image.php"><i class="icon fa fa-star"></i>Add galary image</a></li>

          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Department</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="View_depart.php"><i class="icon fa fa-circle-o"></i> View department</a></li>
            <li><a class="treeview-item" href="add_department.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Add department</a></li>
          <!--  <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>-->
          </ul>

          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Notice</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="View_notice.php"><i class="icon fa fa-circle-o"></i> View notice</a></li>
              <li><a class="treeview-item" href="notice.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Add notice</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Logos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="View_logo.php"><i class="icon fa fa-circle-o"></i> View logo</a></li>
            <li><a class="treeview-item" href="add_logo.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Add logo</a></li>
          </ul>
      </li>

      </ul>


    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="addmin_panel.php">Dashboard</a></li>
        </ul>
      </div>
