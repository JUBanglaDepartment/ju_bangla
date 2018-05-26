<?php

//echo "<pre/>";
//print_r($_SESSION['roles']['role_name']);
////print_r($_SESSION['menus']);
//die;

?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <?php  if(@$controller  == 'SendSMS' ){ ?> 
            <li class="nav-item start active open">
                <?php } else{  ?>
                <li class="nav-item">
               <?php  }  ?>
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="selected"></span>
                    <span class="title">{{$_SESSION['roles']->role_name}}</span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">

                    @foreach($_SESSION['menus'] as $menu)
                    <li class="nav-item start ">
                        <a href="{{ url($menu->menu_url)}}" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">{{$menu->menu_title}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->