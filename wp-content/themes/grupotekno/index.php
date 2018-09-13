<?php get_header() ?>

<div class="main-content home">
    <div class="container">
        <div class="content">
            <?= gt_get_page_content('Texto Home') ?>
        </div>
    </div>
</div>

<section class="main-content timeline">
    <div class="container">
        <!--
        <div class="timeline-image-holder" data-src="<?= get_template_directory_uri() ?>/assets/dist/img/timeline.png" data-src-open="<?= get_template_directory_uri() ?>/assets/dist/img/timeline-open.png">
            <?= gt_get_image('timeline.png') ?>
        </div>
        -->
        <div class="linha">
            <div class="event left text">
                <p>
                    Lorem ipsum.
                </p>
            </div>
            <div class="event right image">
                <p>
                    teste
                </p>
            </div>
            <div class="event left text">
                <p>
                    Lorem ipsum.
                </p>
            </div>
            <div class="event right image">
                <p>
                    teste
                </p>
            </div>
            <div class="event left text">
                <p>
                    Lorem ipsum.
                </p>
            </div>
            <div class="event right image">
                <p>
                    teste
                </p>
            </div>
            <div class="event left text">
                <p>
                    Lorem ipsum.
                </p>
            </div>
            <div class="event right image">
                <p>
                    teste
                </p>
            </div>
            <div class="event left text">
                <p>
                    Lorem ipsum.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="main-content empresas">
    <div class="container">
        <div class="texto-empresas">
            <?= gt_get_page_content('Empresas do Grupo') ?>
        </div>
        <div id="slides" class="slides">
            <?= gt_get_custom_post_type('slider_empresas') ?>
        </div>
    </div>
</section>

<section class="main-content relacao">
    <div class="container">
        <div class="texto">
            <?= gt_get_page_content('Relacao Com Investidores') ?>
        </div>
        <div class="docs">
            <?= gt_get_investidores() ?>
        </div>
    </div>
</section>

<section class="main-content contato">

    <div class="texto-contato">
        <div class="container">
            <?= gt_get_page_content('Contato') ?>
        </div>
    </div>

    <div class="departamentos">
        <div class="container">
            <div class="direita right">
                <?= gt_get_page_content('Direita') ?>
            </div>
            <div class="esquerda left">
                <?= gt_get_page_content('Esquerda') ?>
            </div>            
        </div>
    </div>
    
</section>

<section class="main-content trabalhe">
    <div class="container">
        <div class="conteudo-trabalhe">
            <?= gt_get_page_content('Trabalhe Conosco') ?>
            <div class="form-wrapper">
                <?= do_shortcode('[contact-form-7 id="47"]') ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
