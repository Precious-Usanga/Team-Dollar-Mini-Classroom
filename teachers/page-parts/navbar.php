<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <?php echo $page_title ?> </a>
        <button href="#navigation" class="navbar-toggler navbar-toggler-right" type="button" 
            data-toggle="collapse" aria-controls="navigation-index" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <input type="search" class="form-control" placeholder="Search..">
                        <!-- <i class="nc-icon nc-zoom-split"></i> -->
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <span class="">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>