<?php
    require "page-parts/session.php";
    $page_title = "Dashboard";
    require "page-parts/html_header.php";
?>
<body>

<div class="wrapper">
    <?php
        require "page-parts/sidebar.php";
    ?>

    <div class="main-panel">
        <?php
            require "page-parts/navbar.php";
        ?>

        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <a href="class-view.php">
                                        <div class="card">
                                            <div class="card-header d-flex flex-column align-items-start">
                                                <div class="">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                </div>
                                                <h2 class="text-bold-700 mt-1">Classes</h2>
                                                <p class="mb-4">5</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <a href="students.php">
                                        <div class="card">
                                            <div class="card-header d-flex flex-column align-items-start">
                                                <div class="">
                                                    <i class="fa fa-users" aria-hidden="true"></i>
                                                </div>
                                                <h2 class="text-bold-700 mt-1">Students</h2>
                                                <p class="mb-4">23</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Overview</h4> </br>
                                                    <!-- <p class="category">Overview of your classes.</p> -->
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-striped">
                                                            <thead class="table-bordered">
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th> Class </th>
                                                                    <th>ID</th>
                                                                    <th>No. of Students</th>
                                                                    <th>Status</th>
                                                                    <td></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-bordered">
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Biology</td>
                                                                    <td>BIO 111</td>
                                                                    <td>25</td>
                                                                    <td>Active</td>
                                                                    <th><a href="#">View</a></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Chemistry</td>
                                                                    <td>CHM 121</td>
                                                                    <td>35</td>
                                                                    <td>Active</td>
                                                                    <th><a href="#">View</a></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Physics</td>
                                                                    <td>PHY 111</td>
                                                                    <td>10</td>
                                                                    <td>Active</td>
                                                                    <th><a href="#">View</a></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Mathematics</td>
                                                                    <td>MTH 211</td>
                                                                    <td>25</td>
                                                                    <td>Inactive</td>
                                                                    <th><a href="#">View</a></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>English</td>
                                                                    <td>ENG 311</td>
                                                                    <td>25</td>
                                                                    <td>Active</td>
                                                                    <th><a href="#">View</a></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="create-class-view.php" class="btn btn-info btn-sm pull-right">
                                        <i class="fa fa-plus" aria-hidden="true"></i> <span>Create Class</span>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                                </div>
                                <div class="">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            Teacher one
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                require "page-parts/html_footer.php";
            ?>
        </div>
    </div>
</body>
    <?php 
        require "page-parts/scripts.php";
    ?>
</html>
