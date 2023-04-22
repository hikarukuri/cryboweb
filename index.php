<?php $title = 'CRYBO | Home';
include 'inc/head.php'; ?>

<body class="smooth-transition">
    <div class="container-fluid">

        <?php $home = 'true';
        include 'inc/header.php'; ?>

        <section class="hero text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>CRYBO</h1>
                        <p>Snowboard &times; NFT &times; Programming<br>Develop and Inovate new generation.</p>
                    </div>
                </div>
            </div>
        </section>

        <h1 id="section-header">Page overview</h1>

        <section class="grid-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><a href="#" class="btn btn-default filter-trigger">Filter</a></div>
                    <div class="col-md-12 grid classic">
                        <a href="pages/about.php" class="item external">
                            <div class="thumb"><img alt="image-mam" src="images/portfolio/04.webp"></div>
                            <div class="caption">
                                <h4>About
                                </h4>
                                <div class="tag">About CRYBO &amp; NFT &amp; more...</div>
                            </div>
                        </a><a href="pages/snowboard.php" class="item sports">
                            <div class="thumb"><img alt="image-snowboard" src="images/portfolio/01.webp"></div>
                            <div class="caption">
                                <h4>Snowboarding</h4>
                                <div class="tag">Competition &amp; My history.</div>
                            </div>
                        </a><a href="pages/nft.php" class="item digital">
                            <div class="thumb"><img alt="image-nfts" src="images/portfolio/02.webp"></div>
                            <div class="caption">
                                <h4>NFTs</h4>
                                <div class="tag">Snowboard &times; Digiral art.</div>
                            </div>
                        </a><a href="pages/blog.php" class="item digital">
                            <div class="thumb"><img alt="image-links" src="images/portfolio/03.webp"></div>
                            <div class="caption">
                                <h4>Blog</h4>
                                <div class="tag">Snowboard, programming and so on.</div>
                            </div>
                        </a><a href="pages/play.php" class="item digital">
                            <div class="thumb"><img alt="image-lab" src="images/portfolio/05.webp"></div>
                            <div class="caption">
                                <h4>Contact</h4>
                                <div class="tag">Contact me!</div>
                            </div>
                        </a><a href="https://setb.jp" class="item external">
                            <div class="thumb"><img alt="image-setb" src="images/portfolio/06.webp"></div>
                            <div class="caption">
                                <h4>SETB</h4>
                                <div class="tag">School Edu Tool Box.<br>Volunteer work in my school.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'inc/footer.php'; ?>
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
    <?php include 'inc/script.php'; ?>
</body>

</html>
