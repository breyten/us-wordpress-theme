<div class="col-md-4 col-sm-4">
  <h1>Team informatie</h1>
  <?php
  $post_id = get_the_ID();
  $post_meta = get_post_meta($post_id);
  ?>
<?php //var_dump($post_meta); ?>

<?php
function _output_meta($name, $values) {
  if ((substr($name, 0, 1) != '_') && (substr($name, 0, 3) != 'US_')) {
    echo "<h2>$name</h2><ul>";
    foreach($values as $value) {
      if (substr($value, 0, 4) == 'http') {
        echo "<li><a href=\"$value\" target=\"_blank\">Naar de pagina</a></li>";
      } elseif (filter_var($value,FILTER_VALIDATE_EMAIL) !== false) {
        echo "<li><a href=\"mailto:$value\">$value</a></li>";
      } else {
        echo "<li>$value</li>";
      }
    }
    echo '</ul>';
  }
}

$default_keys = array(
  'Niveau', 'Trainingstijden', 'Trainer', 'Assistent trainer', 'Coach',
  'Assistent coach', 'Manager', 'TC-contactpersoon', 'Wedstrijdschema en stand'
);

$keys = array_keys($post_meta);

foreach($default_keys as $key) {
    if (array_key_exists($key, $post_meta)) {
      _output_meta($key, $post_meta[$key]);
    }
}

foreach($post_meta as $name => $values) {
    if (!in_array($name, $default_keys)) {
      _output_meta($name, $post_meta[$name]);
    }
}
?>
</div>
