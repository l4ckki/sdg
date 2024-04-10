<?php
$posts = [
 [  
    'id' => 1,
    'title' => 'The Road Ahead',
    'subtitle' => 'The road ahead might be paved - it might not be.',
    'img_modifier' => 'img/main/MatVogels.png',
    'author' => 'Mat Vogels',
    'additional_class' => 'posts__featured-card_1',
    'mark' => '',
    'additional_mark' => 'featured-card__mark-first',
 ],
 [
    'id' => 2,
    'title' => 'From Top Down',
    'subtitle' => 'Once a year, go someplace youve never been before.',
    'img_modifier' => 'img/main/WilliamWong.png',
    'author' => 'William Wong',
    'additional_class' => 'posts__featured-card_2',
    'mark' => 'Adventure',
    'additional_mark' => 'featured-card__mark-second',
 ],
];
$posts_recents = [
  [
    'title' => 'Try it Always',
    'subtitle' => 'The world is a book, and those who do not travel read only one page.',
    'img_mod' => 'img/main/waterfall.png',
    'author_img' => 'img/main/MatVogels.png',
    'author_name' => 'Mat Vogels',
    'class' => 'posts__recent-card_first',
  ],
  [
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'img_mod' => 'img/main/ropes.png',
    'author_img' => 'img/main/MatVogels.png',
    'author_name' => 'Mat Vogels',
    'class' => 'posts__recent-card_second',
  ],
  [
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'img_mod' => 'img/main/ocean.png',
    'author_img' => 'img/main/WilliamWong.png',
    'author_name' => 'William Wong',
    'class' => 'posts__recent-card_third',
  ],
  [
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'img_mod' => 'img/main/lake.png',
    'author_img' => 'img/main/MatVogels.png',
    'author_name' => 'Mat Vogels',
    'class' => 'posts__recent-card_fourth',
  ],
  [
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
    'img_mod' => 'img/main/bridge.png',
    'author_img' => 'img/main/MatVogels.png',
    'author_name' => 'Mat Vogels',
    'class' => 'posts__recent-card_fifth',
  ],
  [
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'img_mod' => 'img/main/balloons.png',
    'author_img' => 'img/main/WilliamWong.png',
    'author_name' => 'William Wong',
    'class' => 'posts__recent-card_sixth',
  ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin  >
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="/styles/style.css" rel="stylesheet">
  <title>BlogSite</title>
</head>
<body>
  <header class="header"> 
    <div class="header__navigation navigation">
      <a class="navigation__escape" href="#">Escape</a>
      <ul class="navigation__list">
        <li class="navigation__item">
          <a class="navigation__link" href="#">home</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">categories</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">about</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">contact</a>
        </li>
      </ul>
    </div>
    <div class="header__container container">
        <h1 class="header__title">Let's do it together.</h1>
        <p class="header__subtitle">We travel the world in search of stories. Come along for the ride.</p>  
        <a class="header__button" href="post.php">View Latest Posts</a>
    </div>        
  </header>
  <main class="main">
    <div class="main__features features container">
      <ul class="features__list">
        <li class="features__list-item">
          <a class="features__list-link" href="#">Nature</a>
        </li>
        <li class="features__list-item">
          <a class="features__list-link" href="#">Photography</a>
        </li>
        <li class="featurest__list-item">
          <a class="features__list-link" href="#">Relaxation</a>
        </li>
        <li class="features__list-item">
          <a class="features__list-link" href="#">Vacation</a>
        </li>
        <li class="features__list-item">
          <a class="features__list-link" href="#">Travel</a>
        </li>
        <li class="features__list-item">
          <a class="features__list-link" href="#">Adventure</a>
        </li>
      </ul>
    </div>
    <div class="main__posts-background posts">
      <div class="posts__title title">
        <h2 class="title__text">Featured Posts</h2>
      </div>
      <div class="posts__featured-posts">
        <?php 
          foreach ($posts as $post) {
            include 'post_preview.php';
          }
        ?>
      </div>
      <div class="posts-recent__title title">
        <h3 class="title__text">Most Recent</h3>
      </div>
      <div class="posts__most-recent container"> 
        <?php 
          foreach ($posts_recents as $post_recent) {
            include 'post_recent.php';
          }
        ?>
      </div>
    </div>
  </main>

  <footer class="footer">
    <nav class="footer__navigation navigation">
      <a class="navigation__escape" href="#">Escape</a>
      <ul class="navigation__list">
        <li class="navigation__item">
          <a class="navigation__link" href="#">home</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">categories</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">about</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">contact</a>
        </li>
      </ul>
    </nav>
  </footer> 
</body>
</html>