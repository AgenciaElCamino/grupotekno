<?php get_header() ?>

<section class="main-content home">
    <div class="container">
        <div class="content">
            <?= gt_get_page_content('Texto Home') ?>
        </div>
    </div>
</section>

<section class="main-content timeline">
    <div class="container">
        <div class="timeline-image-holder" data-src="<?= get_template_directory_uri()?>/assets/dist/img/timeline.png" data-src-open="<?= get_template_directory_uri()?>/assets/dist/img/timeline-open.png">
            <?= gt_get_image('timeline.png')?>
        </div>
    </div>
</section>

<?php get_footer();
