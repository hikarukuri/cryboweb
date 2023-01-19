<?php $title = 'CRYBO | Hello World';
include '../../inc/head.php'; ?>

<body class="smooth-transition">
    <div class="container-fluid">

        <?php $blog = 'true';
        include '../../inc/header.php'; ?>

        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <!-- タイトル -->
                        <h1>Hello World.</h1>
                        <!-- タイトル -->

                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-10">
                                <p class="large">Hello and wellcome to my brog. </p><img
                                    src="../../images/blog/single/01.jpg" class="mb-lg">
                                <p></p>

                                <!-- 見出し -->
                                <h3>This is the test post!</h3>
                                <!-- 見出し -->

                                <!-- 本文 -->
                                <p>I will be posting my convention expeditions, trivia, etc. on this blog.
                                    I am writing this blog from scratch using HTML, so please bear with me in mind that
                                    there may be some
                                    lag in posting.
                                    This year, the first snowboarding competition will be held in Niigata on January 28.
                                    I plan to post
                                    about it on this blog, so please check it out. </p>
                                <!-- 本文 -->

                                <!-- 小見出し -->
                                <h4>Conclusion</h4>
                                <!-- 小見出し -->

                                <!-- 本文2 -->
                                <p>Comingsoon!!!!<br>instagram:@crybo_snow<br>twitter:@crybo_snow<br>youtube:@hikarukuri
                                </p>
                                <!-- 本文2 -->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pagination"><a href="<?php if (file_exists('2.php')) {
                                    echo '2.php';
                                } else {
                                    echo '#';
                                }
                                ?>" class="<?php if (file_exists('2.php')) {
                                    echo 'next';
                                } else {
                                    echo 'disabled previous ';
                                }
                                ?> ion-ios-arrow-thin-left pull-left"></a><a href="../blog.php"
                                        class="btn btn-default active">Back</a><a href="#"
                                        class="disabled previous ion-ios-arrow-thin-right pull-right">
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <?php include '../../inc/blog-list.php'; ?>
                </div>
        </section>
        <?php include '../../inc/footer.php'; ?>
    </div>
    <?php include '../../inc/script.php'; ?>
</body>

</html>