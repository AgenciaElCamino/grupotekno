<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <title><?php wp_title() ?></title>
        <?php wp_head() ?>
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="left">
                    <?php gt_get_left_menu() ?>
                </nav>
                <a class="logo" href="#home">
                    <?= gt_get_logo("logo.png", "Grupo Tekno") ?>
                </a>
                <nav class="right">
                    <?php gt_get_right_menu() ?>
                </nav>
                <nav class="social">
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                    <a class="linkedin" href=""></a>
                    <a class="instagram" href=""></a>
                </nav>
            </div>
        </header>
        