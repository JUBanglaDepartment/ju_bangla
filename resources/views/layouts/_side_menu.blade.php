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
                    <span class="title">Admin</span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">

                    <li class="nav-item start ">
                        <a href="<?php echo url('menu/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Menu</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('menu/assign');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Assign Menu</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('program/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Program</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('course/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Course</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('semester/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Semester</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('faculty/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Faculty</span>
                        </a>
                    </li>

                    <li class="nav-item start ">
                        <a href="<?php echo url('student/create');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Create Student</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Operator</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="<?php echo url('UnderConstruction/index');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Manage Faculty</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo url('UnderConstruction/index');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Manage Students</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Faculty</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="<?php echo url('take-courses');?>" class="nav-link ">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                            <span class="title">Take Course</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Student</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="<?php echo url('student/index');?>" class="nav-link ">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="title">Add Contact</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->