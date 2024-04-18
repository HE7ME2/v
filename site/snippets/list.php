    <ul class="projects pad"<?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
      <?php foreach ($pages->find('projects')->children()->listed() as $project): ?>
      <li>
        <a href="<?= $project->url() ?>">
          <figure>
            <!-- <?= $project->images()->findBy("template", "cover") ?> -->
            <figcaption><?= $project->title() ?>, <?= $project->year() ?></figcaption>
          </figure>
        </a>
      </li>
      <?php endforeach ?>
    </ul>