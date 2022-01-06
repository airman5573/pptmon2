<?php if(is_home()):?>
  <div class="catlist">
    <ul>
      <?php
        $catlist = wp_list_categories( array(
          'orderby'    => '',
          'current_category' => false,
          'taxonomy'   => 'category',
          'depth' => 1,
          'hide_empty' => 0,
          'show_count' => 0,
          'title_li'     => '',
          'show_option_all'	=> '',
          'echo' => 0,
          'include' => array(1,37,49,51,50,53,52,54),
          'exclude'    => array(),
        ) );
        $catlist = preg_replace('/<\/a> \(([0-9]+)\)/', '<label class="count">\\1</label></a>', $catlist);
        echo $catlist;
      ?>
    </ul>
  </div>
<?php
  //차일드차일드카테고리진입후차일드카테고리표시
  elseif( cat_is_ancestor_of( get_category($cat)->parent, $cat ) ):
?>
<div class="catlist">
  <ul>
    <?php
    //firstly, load data for your child category
    $child = get_category($cat);
    //from your child category, grab parent ID
    $parent = $child->parent;
    //echo $parent;

    /*
    //load object for parent category
    $parent_name = get_category($parent);
    //grab a category name
    $parent_name = $parent_name->name;
    echo $parent_name;
    */

    $catlist = wp_list_categories( array(
      'order' => '',
      'orderby'    => '',
      'current_category' => false,
      //$cat은아래전역변수
      'child_of' => $parent,
      'hierarchical' => false,
      'taxonomy'   => 'category',
      'depth' => 1,
      'hide_empty' => false,
      'show_count' => false,
      'title_li'     => '',
      'show_option_all'	=> '',
      'echo' => false,
      'include' => '',
      'exclude'    => array(),
    ) );
    $catlist = preg_replace('/<\/a> \(([0-9]+)\)/', '<label class="count">\\1</label></a>', $catlist);
    echo $catlist;
    ?>
  </ul>
</div>
<?php else:?>
  <div class="catlist">
    <ul>
      <?php
      $catlist = wp_list_categories( array(
        'order' => '',
        'orderby'    => '',
        'current_category' => false,
        //$cat은아래전역변수
        'child_of' => $cat,
        'hierarchical' => false,
        'taxonomy'   => 'category',
        'depth' => 1,
        'hide_empty' => false,
        'show_count' => false,
        'title_li'     => '',
        'show_option_all'	=> '',
        'echo' => false,
        'include' => '',
        'exclude'    => array(),
      ) );
      $catlist = preg_replace('/<\/a> \(([0-9]+)\)/', '<label class="count">\\1</label></a>', $catlist);
      echo $catlist;
      ?>
    </ul>
  </div>
<?php endif ;?>
