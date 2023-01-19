<?php $title = 'CRYBO | Blog';
include '../inc/head.php'; ?>

<body class="smooth-transition">
    <div class="container-fluid">

        <?php $blog = 'true';
        include '../inc/header.php'; ?>

        <section class="hero text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="btn btn-default filter-trigger">Filter</a></div>
                    <div class="col-md-12 grid classic col-4">
                        <a href="blog/1.php" class="item digital">
                            <div class="thumb"><img alt="Your Alternative text" src="../images/blog/01.jpeg">
                                <div class="btn btn-default">Read article</div>
                            </div>
                            <div class="caption">
                                <div class="tag">14th of January 2023</div>
                                <h4>Hello world.</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-xl">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="pagination">
                            <a href="#" class="disabled previous ion-ios-arrow-thin-left pull-left"></a><a
                                href="../pages/blog.html" class="btn btn-default active">1</a>
                            <!-- <a
                                href="../pages/blog.html" class="btn btn-default">2</a><a href="../pages/blog.html"
                                class="btn btn-default">3</a><a href="../pages/blog.html"
                                class="btn btn-default">4</a><a href="../pages/blog.html"
                                class="btn btn-default">5</a> -->
                            <a href="#" class="disabled previous ion-ios-arrow-thin-right pull-right"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../inc/footer.php'; ?>
        <div class="filter-container">
            <div class="container">
                <div class="inner">
                    <ul class="filters">
                        <li> <a href="#" data-filter="item" class="active filter">All</a></li>
                        <li><a href="#" data-filter="digital" class="filter">Digital</a></li>
                        <li><a href="#" data-filter="sports" class="filter">Sports</a></li>
                        <li><a href="#" data-filter="external" class="filter">External projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include '../inc/script.php'; ?>
</body>

</html>