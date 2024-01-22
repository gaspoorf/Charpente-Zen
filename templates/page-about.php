<?php 
    /* Template Name: A propos */ 
    get_header();
?>

<?php 
    $about_section_title = get_field('about_section_title');
    $about_title = get_field('about_title'); 
    $about_text = get_field('about_text');
    $about_image = get_field('about_image');
    $about_section_2_title = get_field('about_section_2_title');
    $about_title_2 = get_field('about_title_2');
    $about_video_url = get_field('about_video_url');
    $video_id = get_youtube_video_id($about_video_url);
    $about_section_3_title = get_field('about_section_3_title');
    $about_video_url_2 = get_field('about_video_url_2');
    $video_id_2 = get_youtube_video_id($about_video_url_2);
?>
<main class="pad-topM">
    <section class="white pad3 about">
        <div class="simple-center">
            <h3 class="pad1"><?php echo ($about_section_title);?></h3>
            <h1 class="h1-2 pad2"><?php echo ($about_title);?></h1>
        </div>
        <div class="pad3 center gap1">
            <div class="left-CMS pad2">
                <div class="p3">
                    <?php echo ($about_text);?>
                </div>
            </div>
            <div class="pad1 rond">
                <img loading="lazy" class="pad1 " src="<?php echo esc_url($about_image['sizes']['pictures-about-rond']); ?>" height="<?php echo esc_attr($about_image['sizes']['pictures-about-rond-height'] / 2); ?>" width="<?php echo esc_attr($about_image['sizes']['pictures-about-rond-width'] / 2); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
            </div>
        </div>
    </section>
    <section class="beige pad3 pad-bot">
        <div class="simple-center">
            <h3 class="pad1"><?php echo ($about_section_2_title);?></h3>
            <h2><?php echo ($about_title_2);?></h2>
        </div>
        <div class="simple-center video">
            <?php if ($video_id) {
                echo '<iframe id="video"  width="100%" height="100%" src="https://www.youtube.com/embed/' . $video_id . '? frameborder="0" allowfullscreen></iframe>';
                } else {
                    echo '<p>URL de vidéo YouTube non valide.</p>';
                }
            ?>
        </div>
        <div class="pad3">
            <div class="simple-center">
                <h3 class="pad1"><?php echo ($about_section_3_title);?></h3>
            </div>
            <div class="simple-center video">
                <?php if ($video_id_2) {
                    echo '<iframe id="video_2"  width="100%" height="100%" src="https://www.youtube.com/embed/' . $video_id_2 . '? frameborder="0" allowfullscreen></iframe>';
                    } else {
                        echo '<p>URL de vidéo YouTube non valide.</p>';
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
