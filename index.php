<?php
$wordpress = false;
if (isset($_REQUEST["wordpress"])) $wordpress = true;

if (!$wordpress) {

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="toc"></div>
        <div id="wrapper">
        <section>
<?php
}
include_once "php-markdown/markdown.php";
$content = Markdown(file_get_contents("index.md"));
$content = str_replace("<h1","</div><div><h1",$content);
$content = str_replace("</div><div><h1>GovHack","<div><h1>GovHack",$content);
$content .= "</div>";
if ($wordpress) {
    $content = str_replace("<div><h1>","<div>[toggle title=\"",$content);
    $content = str_replace("</div>","[/toggle]</div>",$content);
    $content = str_replace("</h1>","\"]",$content);

    $content = str_replace("<img","<img width=\"300\" class=\"alignright size-medium\"",$content);
    $content = str_replace("img/","http://www.govhack.org/wp-content/uploads/",$content);
}
echo  $content;
if (!$wordpress) {
?>
</div>
        </section>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.stoc.js"></script>
        <script src="js/toc/dist/jquery.toc.min.js"></script>
        <script>
            $('#toc').toc({
                'selectors': 'h1'
            });
            $(function(){

                $('<div class="items"></div>').insertAfter('h1');
                $(".items").each(function() {
                    $(this).stoc();
                });
            });
        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
<?php
}
?>