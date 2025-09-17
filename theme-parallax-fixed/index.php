<?php if (!defined('VERSION')) { http_response_code(403); die('Forbidden'); } ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $Wcms->get('config', 'siteTitle') ?> - <?php echo $Wcms->page('title') ?></title>
  <meta name="description" content="<?php echo $Wcms->page('description') ?>">

  <!-- WonderCMS scripts -->
  <?php echo $Wcms->css() ?>
  <?php echo $Wcms->js() ?>

  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="<?php echo $Wcms->asset('theme-parallax-fixed/style.css') ?>">
</head>
<body>

  <!-- Barra de navegação -->
  <nav class="nav">
    <div class="nav-container">
      <a href="<?php echo $Wcms->url() ?>" class="logo">
        <?php echo $Wcms->get('config', 'siteTitle') ?>
      </a>
      <?php echo $Wcms->menu() ?>
    </div>
  </nav>

  <!-- Secção Hero com Parallax -->
  <header class="parallax" style="background-image:url('<?php echo $Wcms->get('theme','heroImage','/data/files/default-hero.jpg') ?>');">
    <div class="overlay">
      <h1><?php echo $Wcms->page('title') ?></h1>
      <p><?php echo $Wcms->page('description') ?></p>
    </div>
  </header>

  <!-- Conteúdo principal -->
  <main class="content">
    <?php echo $Wcms->page('content') ?>
  </main>

  <!-- Rodapé -->
  <footer class="footer">
    <p>© <?php echo date("Y") ?> <?php echo $Wcms->get('config','siteTitle') ?> —
      <?php echo $Wcms->get('config','siteFooter') ?></p>
  </footer>

  <?php echo $Wcms->alerts() ?>
  <?php echo $Wcms->settings() ?>
</body>
</html>
