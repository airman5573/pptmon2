<div class="catlist">
  <ul>
    <?php
      $catlist = wp_list_categories( array(
        'orderby'    => '',
        'current_category' => 0,
        'taxonomy'   => 'post_tag',
        'depth' => 1,
        'hide_empty' => 0,
        'show_count' => 0,
        'title_li'     => '',
        'show_option_all'	=> '',
        'echo' => 0,
        'include' => array(),
        'exclude'    => array(),
      ) );
      $catlist = preg_replace('/<\/a> \(([0-9]+)\)/', '<label class="count">\\1</label></a>', $catlist);
      echo $catlist;
    ?>
  </ul>
</div>
