<?php 
    /* Template Name: A propos */ 
    get_header();
?>

<?php 
    // INTRO
    $about_section_title = get_field('about_section_title');
    $about_title = get_field('about_title'); 
    $about_text = get_field('about_text');
    $about_image = get_field('about_image');

    $about_section_2_title = get_field('about_section_2_title');
    $about_title_2 = get_field('about_title_2');
    $about_video_url = get_field('about_video_url');
    $video_id = get_youtube_video_id($about_video_url);
?>
<main class="pad-top">

    <section class="white pad3">
        <div class="simple-center">
            <h3><?php echo ($about_section_title);?></h3>
            <h2><?php echo ($about_title);?></h2>
        </div>
        <div class="pad3 center">
            <div class="pad1 left-CMS">
                <p class="p3"><?php echo ($about_text);?></p></div>
            <div class="pad1">
                <img loading="lazy" src="<?php echo($about_image['sizes']['image-presentation']); ?>" height="<?php echo($about_image['sizes']['image-presentation-height']); ?>" width="<?php echo($about_image['sizes']['image-presentation-width']); ?>" alt="<?php echo($about_image['alt']); ?>">
            </div>
        </div>
    </section>


    <section class="beige pad3">
        <div class="simple-center">
            <h3><?php echo ($about_section_2_title);?></h3>
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
    </section>

</main>



<?php get_footer() ?>
