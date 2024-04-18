<?php snippet('header-start') ?>
<?php snippet('list') ?>
<?php snippet('header-end') ?>

<main class="project">
  <article>
<section>
    <header>
      <?php if ($cover = $page->images()->findBy("template", "cover")): ?>
      <figure class="project-cover">
        <?= $cover ?>
        <figcaption>
          <div>
            <h1><?= $page->headline()->or($page->title()) ?></h1>
            <?php if($page->intro()->isNotEmpty()): ?>
            <div class="text">
              <time class="project-year"><p><?= $page->year() ?></p></time>
              <?= $page->intro()->kt() ?>
            </div>
            <?php endif ?>
          </div>
        </figcaption>
      </figure>
      <?php endif ?>
    </header>

    <div class="project-text text">
      
      <?= $page->text()->kt() ?>

      <?php if ($page->tags()->isNotEmpty()): ?>
      <p class="project-tags"># <?= $page->tags() ?></p>
      <?php endif ?>
    </div>
</section>
<section>
    <ul class="project-gallery"<?= attr(['data-even' => $gallery->isEven(), 'data-count' => $gallery->count()], ' ') ?>>
      <?php foreach ($gallery as $image): ?>
      <li>
        <figure>
          <?= $image->crop(800, 1000) ?>
        </figure>
      </li>
      <?php endforeach ?>
    </ul>
    </section>
  </article>
</main>

<?php snippet('footer') ?>