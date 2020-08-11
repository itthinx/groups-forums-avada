<?php

/**
 * forums.php
 *
 * This is a template file that renders each forum topic within a taxonomy.
 *
 * @author itthinx
 * @package groups-forums
 * @since groups-forums 1.0.0
 */

?>
<div class="forum-topic">
	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
	<p class="forum-topic-except"> <?php the_excerpt(); ?> </p>
</div>
