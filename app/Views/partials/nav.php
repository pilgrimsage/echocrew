<?php
$ecNavLinks = [
    'Services'     => base_url('services'),
    'Solutions'    => base_url() . '#solutions',
    'Work'         => base_url() . '#work',
    'Technologies' => base_url() . '#technologies',
    'About'        => base_url() . '#about',
    'Contact'      => base_url() . '#contact',
];
?>
<header class="ec-nav">
  <div class="ec-shell ec-nav__row">
    <a class="ec-nav__brand" href="<?= base_url() ?>" aria-label="EchoCrew home">
      <img src="<?= base_url('assets/img/logo/logo-echo.png') ?>" alt="EchoCrew" width="120" height="30">
    </a>

    <nav class="ec-nav__links" aria-label="Primary">
      <?php foreach ($ecNavLinks as $label => $href): ?>
        <a href="<?= $href ?>"><?= $label ?></a>
      <?php endforeach; ?>
    </nav>

    <a class="ec-btn ec-btn--primary ec-btn--sm ec-nav__cta" href="<?= base_url() ?>#contact">Start a project</a>

    <button class="ec-nav__burger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="ec-mobilenav">
      <span></span>
    </button>
  </div>
</header>

<nav class="ec-mobilenav" id="ec-mobilenav" aria-label="Mobile">
  <?php foreach ($ecNavLinks as $label => $href): ?>
    <a href="<?= $href ?>"><?= $label ?></a>
  <?php endforeach; ?>
  <a class="ec-btn ec-btn--primary" href="<?= base_url() ?>#contact">Start a project</a>
</nav>
