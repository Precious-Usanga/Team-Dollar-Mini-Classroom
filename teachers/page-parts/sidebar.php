<div class="sidebar" data-color="purple">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper" style="background-image: linear-gradient(#0D25B9, #FD6585);">
                <div class="logo">
                    <div class="text-center">
                        <a href="http://alvdeenservices.com">
                            <img src="../assets/images/logo.png" alt="Logo" style="width: 30%">
                        </a>
                    </div>
                    <div class="text-center">
                            <span class="brand-text p-1">Dollar Classroom</span>
                    </div>
                </div>
                <ul class="nav">
                    <li <?php  if($page_title == "Dashboard") echo 'class="active"'; ?>>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li <?php  if($page_title == "Classes") echo 'class="active"'; ?>>
                        <a class="nav-link" href="classes.php">
                            <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                            <p>Classes</p>
                        </a>
                    </li>
                    <li <?php  if($page_title == "Students") echo 'class="active"'; ?>>
                        <a class="nav-link" href="students.php">
                            <span><i class="fa fa-users" aria-hidden="true"></i></span>
                            <p>Students</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>