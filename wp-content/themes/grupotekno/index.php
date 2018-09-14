<?php get_header() ?>

<div class="main-content home">
    <div class="container">
        <div class="content">
            <?= gt_get_page_content('Texto Home') ?>
        </div>
    </div>
</div>

<div class="main-content timeline">
    <div class="container">
        <div class="content">
            a
        </div>
    </div>
</div>

<div class="main-content empresas">
    <div class="container">
        <div class="texto-empresas">
            <?= gt_get_page_content('Empresas do Grupo') ?>
        </div>
        <div id="slides" class="slides">
            <?= gt_get_custom_post_type('slider_empresas') ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="main-content inv">
    <div class="container relacao">
        <div class="info">
            <?= gt_get_page_content('Relacao com Investidores') ?>
        </div>
        <div class="content">
            <?= gt_get_investidores() ?>
        </div>
    </div>
</div>

<div class="main-content contato">
    <div class="container">
        <div class="content">
            <div class="page-content">
                <?= gt_get_page_content('Contato') ?>
            </div>
            <div class="texto-contato">
                <div class="contatos">
                    <div class="left">
                        <?= gt_get_page_content('DIREITA') ?>
                    </div>
                    <div class="right">
                        <?= gt_get_page_content('ESQUERDA') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content trabalhe">
    <div class="container">
        <div class="conteudo-trabalhe">
            <?= gt_get_page_content('Trabalhe Conosco')?>
            <?= do_shortcode('[contact-form-7 id="5" title="Trabalhe Conosco"]')?>
        </div>
    </div>
</div>

<?php get_footer();