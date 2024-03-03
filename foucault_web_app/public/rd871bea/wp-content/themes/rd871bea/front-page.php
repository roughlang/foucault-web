<?php
  include("inc/common.php");
  // var_dump(env('APP_ENV'));
  include("inc/head.php");
?>

<div class="topbar"></div>
<?php include('inc/nav_header.php'); ?>

<div class="container article mt30">
  <div class="breadcrumb">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/">Blog</a></li>
      <li>ここ</li>
    </ul>
  </div>


  <div class="row">
    <div class="column-main col-md-8 col-lg-9 col-xl-8">
      <h2 class="title"><?php echo WP_BLOG_TITLE; ?></h2>
      <div class="content mt50">
        foo
      </div>
      <div class="page-nav mt50 mb50">
        bar
      </div>
    </div>
    <div class="column-sub col-md-4 col-lg-3 col-xl-4">
      baz
    </div>
  </div>

</div>


<?php include('inc/footer.php'); ?>