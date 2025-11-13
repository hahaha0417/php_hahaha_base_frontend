<!doctype html>
<html lang="zh-Hant">
    <head>
        

        <meta name="description" content="hahaha" />
        <?php \hahaha\view\layout\backend\layout::instance()->view_meta(); ?>

        <?php \hahaha\view\layout\backend\layout::instance()->view_css(); ?>
        
    </head>
    <body class="bg-dark">
        <?php \hahaha\view\component\backend\nav::instance()->view(); ?>

        <?php \hahaha\view\component\backend\sidebar::instance()->view(); ?>
        
        <!-- Hero -->
        @yield('content')

        <?php \hahaha\view\component\backend\footer::instance()->view(); ?>
        
        
        <?php \hahaha\view\layout\backend\layout::instance()->view_js(); ?>
    </body>
</html>