<!doctype html>
<html lang="zh-Hant">
    <head>
        

        <?php \hahaha\view\layout\frontend\layout::Instance()->view_meta(); ?>

        <?php \hahaha\view\layout\frontend\layout::Instance()->view_css(); ?>
        <?php \hahaha\view\layout\frontend\layout::Instance()->view_js(); ?>
    </head>
    <body class="bg-dark text-light">
        <?php \hahaha\view\component\frontend\nav::Instance()->view(); ?>
        
        <!-- Hero -->
        @yield('content')

        <?php \hahaha\view\component\frontend\footer::Instance()->view(); ?>
        
        
        <?php \hahaha\view\layout\frontend\layout::Instance()->view_js_page(); ?>
    </body>
</html>