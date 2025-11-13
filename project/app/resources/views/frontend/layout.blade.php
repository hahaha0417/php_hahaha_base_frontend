<!doctype html>
<html lang="zh-Hant">
    <head>
        

        <?php \hahaha\view\layout\frontend\layout::instance()->view_meta(); ?>

        <?php \hahaha\view\layout\frontend\layout::instance()->view_css(); ?>
        
    </head>
    <body class="bg-dark">
        <?php \hahaha\view\component\frontend\nav::instance()->view(); ?>
        
        <!-- Hero -->
        @yield('content')

        <?php \hahaha\view\component\frontend\footer::instance()->view(); ?>
        
        
        <?php \hahaha\view\layout\frontend\layout::instance()->view_js(); ?>
    </body>
</html>