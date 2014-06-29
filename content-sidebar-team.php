<div class="col-md-4 col-sm-4">
  <h1>Team informatie</h1>
  <?php
  $post_id = get_the_ID();
  $post_meta = get_post_meta($post_id);
  ?>
<?php //var_dump($post_meta); ?>

<?php
foreach($post_meta as $name => $values) {
  if (substr($name, 0, 1) != '_') {
    echo "<h2>$name</h2><ul>";
    foreach($values as $value) {
      if (substr($value, 0, 4) == 'http') {
        echo "<li><a href=\"$value\" target=\"_blank\">Naar de pagina</a></li>";
      } else {
        echo "<li>$value</li>";        
      }
    }
    echo '</ul>';
  }
}
?>
</div>