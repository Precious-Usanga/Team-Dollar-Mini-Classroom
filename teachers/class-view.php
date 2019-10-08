<?php
    require "page-parts/session.php";
    $page_title = "Class-View";
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
                    <div class="col-md-12">
                        <div class="card card-user">
                            <?php
                                require "api/get-class.php";
                            ?>
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="assets/img/faces/face-0.jpg" alt="..."/>
                                        <h4 class="title"> <?php echo $class["name"] ?><br />
                                            <small> CL0<?php echo $class["cid"] ?> </small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 
                                    <?php echo $class["description"] ?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-linkedin-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Class Items</h4> <br>
                                                <!-- <p class="category">Overview of your classes.</p> -->
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <?php
                                                        require "api/get-items.php";
                                                        $itemcount = count($items);
                                                    ?>
                                                    <table class="table table-hover table-striped">
                                                        <thead class="table-bordered"> 
                                                            <th>S/N</th>
                                                            <th>Item Code</th>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                        </thead>
                                                        <tbody class="table-bordered">
                                                            <?php
                                                                for($i = 0; $i < $itemcount; $i++) {
                                                                    $row = $items[$i];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo ($i + 1) ?> </td>
                                                                <td>IT0<?php echo $row["iid"] ?></td>
                                                                <td><?php echo $row["name"] ?></td>
                                                                <td><?php echo $row["description"] ?></td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="create-item-view.php?cid=<?php echo $class['cid'] ?>" class="btn btn-info btn-sm pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i> <span>Create Item</span>
                                </a>
                                <div class="clearfix"></div>
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
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Students</h4> <br>
                                                <p class="category">The following are the students enrolled in this class.</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <?php
                                                        require "api/get-class-students.php";
                                                        $studentcount = count($students);
                                                    ?>
                                                    <table class="table table-hover table-striped">
                                                        <thead class="table-bordered">
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th> Name </th>
                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-bordered">
                                                            <?php
                                                                for($i = 0; $i < $studentcount; $i++) {
                                                                    $row = $students[$i];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo ($i + 1) ?> </td>
                                                                <td><?php echo $row["name"] ?></td>
                                                                <td><i class="fa fa-asterisk" aria-hidden="true"></i></td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
</div>


</body>
<?php 
    require "page-parts/scripts.php";
?>
</html>
