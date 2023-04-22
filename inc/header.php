<header>
    <div class="container">
        <div class="col-md-3"><a href="/index.php" class="brand"><img alt="CRYBO Logo" src="/images/logo.svg"></a>
        </div>
        <div class="col-md-6 text-center">
            <div class="nav-trigger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="navigation">
                <li><a href="/index.php" <?php if (isset($home)) {
                    echo 'class="active"';
                } ?>>Home</a>
                </li>
                <li> <a href="/pages/about.php" <?php if (isset($about)) {
                    echo 'class="active"';
                } ?>>About</a>
                </li>
                <li> <a href="#" <?php if (isset($product)) {
                    echo 'class="active"';
                } ?>>Products</a>
                    <ul class="dropdown">
                        <li><a href="/pages/nft.php" <?php if (isset($nft)) {
                            echo 'class="active"';
                        } ?>>NFTs</a></li>
                        <li><a href="https://mamstreaming.com">MAM Streaming</a></li>
                        <li><a href="/pages/play.php" <?php if (isset($play)) {
                            echo 'class="active"';
                        } ?>>Hikaru Lab.</a></li>
                        <li><a href="https://setb.jp">SETB</a></li>
                    </ul>
                </li>
                <li><a href="/pages/snowboard.php" <?php if (isset($snowboard)) {
                    echo 'class="active"';
                } ?>>Snowboarding</a></li>
                <li> <a href="/pages/blog.php" <?php if (isset($blog)) {
                    echo 'class="active"';
                } ?>>Blog</a>
                </li>
                <li> <a href="/pages/contact.php" <?php if (isset($contact)) {
                    echo 'class="active"';
                } ?>>Contact</a>
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <form>
                <div class="search input-group">
                    <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span
                                class="ion-ios-search-strong"></span></button></span>
                </div>
            </form>
        </div>

    </div>
</header>
