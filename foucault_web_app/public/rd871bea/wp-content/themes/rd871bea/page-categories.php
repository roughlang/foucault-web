<?php
  include("inc/common.php");
  // var_dump(env('APP_ENV'));

  include("inc/head.php");
?>

<?php include('inc/nav_header.php'); ?>

<main class="main">
  <div class="container breadcrumbs">
    <div class="row">
      <ul>
        <li class="ancor"><a href="">Home</a></li>
        <li class="ancor"><a href="<?php echo '/'.$directory_name; ?>"><?php echo WP_BLOG_TITLE; ?></a></li>
        <li>Categories list</li>
      </ul>
    </div>
  </div>


  <div class="container article mt30">
    <div class="row">
      <div class="column-main col-md-8 col-lg-9 col-xl-7">
      <h2 class="title">Blog List (Categoirs)</h2>
        <div class="blog-list mt20">
        <?php
        $categories = get_categories();
        // var_dump($categories);
        foreach ($categories as $item) {
          // var_dump($item->term_id);
          // var_dump($item->cat_ID);
          // var_dump($item->cat_name);
        ?>
          <h3><?php echo $item->cat_name; ?></h3>
        <?php
          $args = array(
            'cat' => $item->cat_ID,
            'posts_per_page' => -1, // すべての記事を表示する場合は-1を指定
          );
          $cat_query = new WP_Query($args);
          echo "<ul>";
          if ($cat_query->have_posts()) :
            while ($cat_query->have_posts()) :
              $cat_query->the_post();
              $title = get_the_title();
          ?>
            <li><span class="title"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></span><span class="date"><?php echo get_the_date('Y-m-d'); ?></span></li>
          <?php
              // echo $title."<br>\n";
              endwhile;
          endif;
          echo "</ul>";
          wp_reset_postdata();
        }
        ?>
        </div>



      </div><!-- col -->

      <div class="column-sub col-md-4 col-lg-3 col-xl-3">
        <div class="widget mb30">
          <?php include('inc/search_widget.php'); ?>
          <?php if ( is_active_sidebar('main-sidebar') ) : ?>
            <ul class="menu">
              <?php dynamic_sidebar('main-sidebar'); ?>
            </ul>
          <?php endif; ?>
        </div><!-- sub -->

      </div>
      <div class="column-sub2 d-none d-xl-block col-xl-2">
        <?php include('inc/right_banner.php'); ?>
      </div>
    </div>
  </div><!-- container -->
<?php include('inc/footer.php'); ?>


