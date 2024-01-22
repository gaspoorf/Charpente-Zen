<?php 
  /* Template Name: Page */ 
  get_header();
$flexible_contents = get_field('content');

echo '<main class="pad-top pad-bot">';
foreach ($flexible_contents as $content) {
  $template_name = $content['acf_fc_layout'];
  $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

  if (file_exists($template_file)) {
    printf('<section class="layout_%s">', $template_name);
    include($template_file);
    printf('</section>');
  }
}
echo '</main>';
get_footer() 
?>

