<?php
$args = array(
  'hide_empty' => false,
);
$categories = get_categories($args);

foreach($categories as $cat) {
   echo '<a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a>';
}
