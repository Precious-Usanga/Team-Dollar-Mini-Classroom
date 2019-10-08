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
