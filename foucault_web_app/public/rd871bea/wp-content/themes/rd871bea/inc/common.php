<?php

/* project dir (blog system) */
$full_path = ABSPATH;
$directory_name = basename(rtrim($full_path, '/'));

/**
 * env($attr)
 * 
 * @para env item: APP_NAME | APP_ENV ...
 * @return env value
 */
function env($attr) {
  $env_contents = file_get_contents(ENV);
  $tmp = [];
  $env_array = [];
  $tmp = explode("\n",$env_contents);
  // var_dump($tmp);
  foreach($tmp as $num => $line) {
		list($key,$val) = explode("=",$line);
    if (isset($key)) {
      $env_array = array_merge($env_array,array($key => $val));
    }
	}
  // var_dump($env_array);
  return $env_array[$attr];
}

/* title description */


if (is_front_page() || is_home()) {
  $title = WP_BLOG_TITLE.' | Roughlang';
  $discription = "RoughlangのDBSM（SM),変態行為やセックス,Systemに関するブログです。卑猥なことでしか考えないシステムポルノ集";
  $canonical = 'https://roughlang.jp/'.$directory_name.'/';

} else if (is_single()) {
  $title = get_the_title().' | '.WP_BLOG_TITLE.' | Roughlang';
  $discription = strip_tags(get_the_content());
  $discription = str_replace(array("\r\n", "\r", "\n"), '', $discription);
  $discription = str_replace(array(" ", "　", ""), '', $discription);
  $discription = mb_substr($discription, 0,150)."...";
  $canonical = get_the_permalink();

} else if (is_page()) {
  $title = get_the_title().' | '.WP_BLOG_TITLE.' | Roughlang';
  $discription = strip_tags(get_the_content());
  $discription = str_replace(array("\r\n", "\r", "\n"), '', $discription);
  $discription = str_replace(array(" ", "　", ""), '', $discription);
  $discription = mb_substr($discription, 0,150)."...";
  $canonical = get_the_permalink();

} else if (is_category()) {
  $current_category = get_queried_object();
  $category_id = get_queried_object_id();
  $categories = get_the_category();
  foreach ($categories as $category) {
      // echo $category->slug . ' ';
  }
  $title = $current_category->name.' | '.WP_BLOG_TITLE.' | Roughlang';
  $discription = $current_category->name.' - '.strip_tags(mb_substr(category_description($category_id),0,150));
  $canonical = 'https://roughlang.jp/'.$directory_name.'/category/'.$category->slug;

} else if (is_tag()) {
  $current_tag = get_queried_object();
  $title = $current_tag->name.' | '.WP_BLOG_TITLE.' | Roughlang';
  $discription = $current_category->name.' - '.strip_tags(mb_substr(category_description($category_id),0,150));
  $canonical = 'https://roughlang.jp/'.$directory_name.'/tag/'.$current_tag->slug;
} else if (is_archive()) {
  $title = 'Roughlang';
  $discription = 'RoughlangのDBSM（SM),変態行為やセックス,Systemに関するブログです。卑猥なことでしか考えないシステムポルノ集';
  $canonical = 'https://roughlang.jp/'.$directory_name.'/date/'.$current_tag->slug;
} else {
  $title = 'Roughlang';
  $discription = 'RoughlangのDBSM（SM),変態行為やセックス,Systemに関するブログです。卑猥なことでしか考えないシステムポルノ集';
  $canonical = 'https://roughlang.jp/';
}
?>