<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="itembox" onclick="location.href='<?php the_permalink(); ?>';">
    <div class="itemimg">
      <img src="<?php the_post_thumbnail_url('medium'); ?>">
    </div>
    <div class="itemtext">
      <h3><?php the_title(); ?></h3>
      <p><?php the_excerpt_truncate(120); ?></p>
    </div>
    <!--
    <div class="itemauthor">
      Published by MonsterCompany<?php// echo ( get_the_term_list( get_the_ID(), 'category', "",", " )); ?>
    </div>
  -->
  </div>
</article>
