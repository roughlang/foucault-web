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
        <h2 class="title">Archives</h2>
        <div class="archives-list mt20">
        <ul class="monthly-list">
        <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
        </ul>
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


