<?php
    require "page-parts/session.php";
    $page_title = "Create A Class";
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
                    <div class="col-lg-9 col-sm-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Create Class</h4>
                                </div>
                                <div class="card-body">
									<form class="form" action="api/create-class.php" method="post">
										<div class="form-body">
											<div class="form-group form-label-group">
												<input type="text" id="className" class="form-control square" placeholder="Class Name" name="name">
												<label for="className">Class Name</label>
											</div>
											<div class="form-group form-label-group">
												<textarea id="text-area" rows="4" class="form-control square" name="description" placeholder="Description"></textarea>
                                                <label for="text-area">Description</label>
                                            </div>
										</div>
										<div class="form-actions">
											<button type="submit" class="btn btn-info btn-sm mr-1">
                                            <i class="fa fa-plus" aria-hidden="true"></i> <span>Create</span>
                                            </button>
											<button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i> <span>Cancel</span>
                                            </button>
										</div>
									</form>
                                </div>
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

<?php 
    require "page-parts/scripts.php";
?>

</body>

</html>
