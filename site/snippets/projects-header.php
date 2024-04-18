<html>
   
   <head>
     <title><?= $site->title() ?></title>
     <?= css('assets/css/site.css') ?>
     <?= css('@auto') ?>
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
   </head>
   
   <body>
   

<header>
  <nav>
    <ul>
      <li><a href="/"><?= $site->title() ?></a></li>
    </ul>
    <ul class="pad">
      <li><a href="/projects">Projects</a></li>
      <li><a href="/info">Info</a></li>
    </ul>
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
  </nav>
</header>

