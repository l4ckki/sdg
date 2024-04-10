<a class="card-link" title='<?= $post['title'] ?>' href='/post?id=<?= $post['id']?>'>
  <div class="<?= $post['additional_class'] ?> featured-card">
    <p class="<?=$post['additional_mark']?>"><?=$post['mark'] ?></p>
    <div class="featured-card__content">
      <p class="featured-card__title"><?= $post['title'] ?></p>
      <p class="featured-card__subtitle"><?= $post['subtitle'] ?></p>
      <div class="featured-card__info">
        <div class="featured-card__author">
          <img src="<?= $post['img_modifier'] ?>" alt="MatVogels" class="featured-card__avatar">
          <span class="featured-card__sign"><?= $post['author'] ?></span>
        </div>
        <span class="featured-card__date">September 25, 2015</span>
      </div>
    </div>
  </div>
</a>