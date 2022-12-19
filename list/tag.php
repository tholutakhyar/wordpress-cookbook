<?php
$args = array(
  'hide_empty' => false,
);
$tags = get_tags($args);

foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
	echo "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>{$tag->name}</a>";
}
