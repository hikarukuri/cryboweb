<?php $title = 'CRYBO | NFTs';
include '../inc/head.php'; ?>

<body class="smooth-transition">
    <div class="container-fluid">

        <?php $nft = 'true';
        $product = 'ture';
        include '../inc/header.php'; ?>

        <section class="hero text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 id="shuffler-h1">SHUFFLER 1.0</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <h2 id="shuffler-noun">
                        <script>
                        var a = ["amazing", "angry", "another", "bad", "beautiful", "big", "black", "blue", "brave",
                            "brown", "busy", "cheap", "clean", "cloudy", "cold", "cool", "cute", "dark", "deep",
                            "delicious", "double", "dry", "easy", "fast", "favorite", "final", "first", "free",
                            "fresh",
                            "funny", "golden", "good", "gray", "great", "green", "happy", "heavy", "high", "hot",
                            "houngry", "important", "kind", "last", "long", "lucky", "many", "new", "nice", "old",
                            "open", "pretty", "sad", "sharp", "simple", "small", "strong"
                        ];
                        var b = ["apple", "banana", "bell", "bird", "body", "bom", "book", "boy", "camera", "card",
                            "cash",
                            "cat", "cheese", "city", "class", "clay", "cloud", "club", "crew", "elephant", "grass",
                            "guy", "ipad", "iphone", "Japan", "load", "lock", "man", "monster", "mouse", "paint",
                            "peaple", "pen", "pencase", "pizza", "robot", "school", "seed", "snowboard", "soil",
                            "strobaey", "tape", "tissues", "tree", "water", "woman"
                        ];
                        var x;
                        var y;
                        x = Math.floor(Math.random() * a.length);
                        y = Math.floor(Math.random() * b.length);
                        document.write(a[x]);
                        document.write(" ");
                        document.write(b[y]);
                        </script>
                    </h2>
                </div>
                <div class="shuffler-a">
                    <a id="btn-reroad" onclick="window.location.reload();">SHUFFLE</a>
                </div>
            </div>
        </section>
        <?php include '../inc/footer.php'; ?>
    </div>
    <?php include '../inc/script.php'; ?>
</body>

</html>