<!doctype html>
<html lang="zh-Hant">
    <head>
        

        <?php \hahaha\view\layout\system\layout::Instance()->view_meta(); ?>

        <?php \hahaha\view\layout\system\layout::Instance()->view_css(); ?>
        <?php \hahaha\view\layout\system\layout::Instance()->view_js(); ?>
        
    </head>
    <body class="bg-dark text-light">
        <?php \hahaha\view\component\system\nav::Instance()->view(); ?>

        
        
        <!-- Hero -->
        @yield('content')

        <?php \hahaha\view\component\system\footer::Instance()->view(); ?>
        
        
        <?php \hahaha\view\layout\system\layout::Instance()->view_js_page(); ?>
    </body>
</html>