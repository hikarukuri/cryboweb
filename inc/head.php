<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" type="text/css" href="/css/core.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="icon" type="image/png" href="/favicon.png?version=1">
    <?php if (isset($addlink)) {
        echo $addlink;
    } ?>
    <script src="/js/assets/jquery.js"></script>
    <script>
        (function (d) {
            var config = {
                kitId: 'byh6guq',
                scriptTimeout: 3000,
                async: true
            },
                h = d.documentElement,
                t = setTimeout(function () {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function () {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) { }
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>
