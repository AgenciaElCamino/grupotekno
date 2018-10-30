<?php get_header() ?>

<div class="main-content home" id="home">
    <div class="container">
        <div class="content">
            <?= gt_get_page_content('Texto Home') ?>
        </div>
    </div>
</div>

<div class="main-content timeline" id="o-grupo">
    <div class="container">
    <div class="title">
        <h2>NOSSA HISTÓRIA</h2>
    </div>
        <div class="linha">
            <div class="event left">
                <p>Fundação da Tekno. Fabricação de materiais para desenhos técnicos e estruturas de madeira</p>
                <div class="ano">1939</div>
            </div>
            <div class="event right">
                <p>Passou a produzir estruturas metálicas</p>
                <div class="ano">1950</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/1950.jpg' ?>" alt="" />
            </div>

            <div class="event left">
                <p>Inaugura o parque fabril em Guaratinguetá. 1ª lina de pintura do Brasil</p>
                <div class="ano">1976</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/1976.jpg' ?>" alt="" />
            </div>
            <div class="event right">
                <p>Tornou-se Tekno S.A. com abertura do Capital na BOVESPA</p>
                <div class="ano">1977</div>
            </div>

            <div class="event left">
                <p>Instalação da 2ª linha de pintura</p>
                <div class="ano">1997</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/1997.jpg' ?>" alt="" />
            </div>
            <div class="event right">
                <p>Fundação da divisão de peças automotivas, atual Wolverine/Tekno. Começa a formação do Grupo Tekno</p>
                <div class="ano">2000</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/2000.jpg' ?>" alt="" />
            </div>
            <div class="event left">
                <p>Instalação da 3ª linha de pintura</p>
                <div class="ano">2013</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/2013-2.jpg' ?>" alt="" />
            </div>
            <div class="event right">
                <p>Fundação da divisão de Painéis de Alumínio Composto Alukroma</p>
                <div class="ano">2013</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/2013.jpg' ?>" alt="" />
            </div>
            <div class="event left">
                <p>Fundação da divisão de Móveis em Aço CasaMob</p>
                <div class="ano">2014</div>
                <img src="<?= get_template_directory_uri() . '/assets/dist/img/timeline/2014.jpg' ?>" alt="" />
            </div>
            <div class="event right">
                <p>Aniversário de 80 anos da Tekno S.A.</p>
                <div class="ano">2019</div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="main-content empresas" id="empresas-do-grupo">
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

<div class="main-content generic mvv">
    <div class="container">
        <div class="content">
            <div class="page-content">
                <h2>MISSÃO, VISÃO E VALORES</h2>
                <div class="texto">
                    <?= gt_get_page_content('Missão, Visão e Valores') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="main-content inv" id="relacoes-com-investidores">
    <div class="container relacao">
        <div class="info">
            <?= gt_get_page_content('Relacao com Investidores') ?>
        </div>
        <div class="content">
            <?= gt_get_investidores() ?>
        </div>
    </div>
</div>
-->

<div class="main-content generic certificados" id="certificacoes">
    <div class="container">
        <div class="content">
            <div class="page-content">
                <h2>CERTIFICADOS/ASSOCIAÇÕES/PREMIAÇÕES</h2>
                <div class="texto">
                    <?= gt_get_page_content('Certificações') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content contato" id="contato">
    <div class="container">
        <div class="content">
            <div class="page-content">
                <?= gt_get_page_content('Contato') ?>
                <?= do_shortcode('[contact-form-7 id="64" title="Contato"]') ?>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="main-content trabalhe" id="trabalhe-conosco">
    <div class="container">
        <div class="conteudo-trabalhe">
            <?= gt_get_page_content('Trabalhe Conosco') ?>
            <?= do_shortcode('[contact-form-7 id="5" title="Trabalhe Conosco"]') ?>
        </div>
        <img src="<?= get_template_directory_uri() . '/assets/dist/img/fundo-trabalhe.jpg' ?>" alt="" />
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer();