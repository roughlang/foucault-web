<?php
  include("inc/common.php");
  include("inc/head.php");

  $category = get_the_category();
  if ( $category[0] ) {
    $category_link = get_category_link($category[0]->term_id);
    $category_name = $category[0]->cat_name;
  }
  $short_title = mb_substr(get_the_title(), 0, 20)."...";
?>

<?php include('inc/nav_header.php'); ?>

<main class="main">
  <div class="container breadcrumbs">
    <div class="row">
      <ul>
        <li class="ancor"><a href="/">Home</a></li>
        <li class="ancor"><a href="<?php echo '/'.$directory_name; ?>"><?php echo WP_BLOG_TITLE; ?></a></li>
        <li class="ancor"><a href="<?php echo $category_link; ?>"><?php echo $category[0]->cat_name; ?></a></li>
        <li><?php echo $short_title; ?></li>
      </ul>
    </div>
  </div>

  <div class="container article mt30">
    <div class="row">

      <div class="column-main col-md-8 col-lg-9 col-xl-7">
        <h2 class="title"><?php the_title(); ?></h2>
        
        <div class="content mt50">
          <div class="sentence">
            <?php the_content(); ?>
            <div class="date d-flex justify-content-end mr10"><?php echo get_the_date('Y-m-d (D)'); ?></div>
            <div class="end-message d-flex justify-content-end mt30">
              <span class="message">
                <a href="https://twitter.com/aonuma_moriri" target="_blank">
                  <img src="/assets/img/icon/tw_icon.webp" alt="moriri" class="single-icon">
                </a>
              質問などはTwitterのDMなどでどうぞ。<br>
              <a href="https://twitter.com/aonuma_moriri" target="_blank">モリリ ver.18.8.7</a>
              </span>
            </div>
            <?php edit_post_link('Edit' , '<button type="button" class="btn btn-outline-secondary edit">' , '</button>'); ?>
          </div>        
        </div>
      </div><!-- main -->

      <div class="column-sub col-md-4 col-lg-3 col-xl-3 sp-mt">
        <div class="widget mb30">
          <?php include('inc/search_widget.php'); ?>
        </div>
        <?php if ( is_active_sidebar('main-sidebar') ) : ?>
          <ul class="menu">
            <?php dynamic_sidebar('main-sidebar'); ?>
          </ul>
        <?php endif; ?>
      </div><!-- sub -->

      <div class="column-sub2 d-none d-xl-block col-xl-2">
        <?php include('inc/right_banner.php'); ?>
      </div><!-- sub2 -->
    </div>
  </div><!-- container -->

  <?php include('inc/footer.php'); ?>





