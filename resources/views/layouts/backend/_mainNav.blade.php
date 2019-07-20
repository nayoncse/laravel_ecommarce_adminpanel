<section class="sidebar">

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
            <a href="index.html">
                <img src="{{ asset('assets/backend/images/user5-128x128.jpg') }}" alt="user">
                <span>Juliya Brus</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
            </ul>
        </li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
        </li>
        <li>
            <a href="{{ route('product.index') }}">
                <i class="fa fa-print"></i> <span>Products</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}">
                <i class="fa fa-print"></i> <span>Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-th"></i>
                <span>Settings</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-thin"></i>Categories</a></li>
                <li><a href="{{ route('brand.index') }}"><i class="fa fa-circle-thin"></i>Brands</a></li>
            </ul>
        </li>

    </ul>
</section>