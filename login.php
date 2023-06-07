<ul class="login-menu">
  <?php
  if (is_user_logged_in()) {
    echo '<li><a href="';
    echo wp_logout_url(get_permalink()); //현재페이지
    echo '"><i class="fa-solid fa-right-from-bracket"></i> sign-out</a></li>';
    echo '<li><a href="';
    bloginfo('url');
    echo '/members/profile"><i class="fa-solid fa-id-card"></i> account</a></li>';
  } else {
    echo '<li><a href="';
    bloginfo('url');
    echo '/members/login"><i class="fa-sharp fa-solid fa-right-to-bracket"></i> sign-in</a></li>';
    echo '<li><a href="';
    bloginfo('url');
    echo '/members/register"><i class="fa-solid fa-user-plus"></i> sign-up</a></li>';
  }
  ?>
</ul>