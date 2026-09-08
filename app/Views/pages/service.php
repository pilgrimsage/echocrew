<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="ec-hero ec-hero--sub">
  <div class="ec-hero__bg" data-parallax="0.1" aria-hidden="true"><div class="ec-hero__grid"></div></div>
  <div class="ec-hero__bg" data-parallax="0.2" aria-hidden="true">
    <div class="ec-hero__glow"></div>
    <div class="ec-hero__rings"><span></span><span></span><span></span><span></span></div>
  </div>

  <div class="ec-shell" style="position:relative;z-index:2">
    <nav class="ec-crumbs" aria-label="Breadcrumb">
      <?php $last = array_key_last($breadcrumbs); foreach ($breadcrumbs as $label => $url): ?>
        <?php if ($label === $last): ?>
          <span aria-current="page"><?= esc($label) ?></span>
        <?php else: ?>
          <a href="<?= esc($url, 'url') ?>"><?= esc($label) ?></a><i aria-hidden="true">/</i>
        <?php endif; ?>
      <?php endforeach; ?>
    </nav>

    <p class="ec-sig">Service</p>
    <h1 style="font-size:clamp(2.2rem,5vw,4rem);max-width:18ch"><?= esc($service['h1']) ?></h1>
    <p class="ec-hero__copy" style="margin-top:1.4rem"><?= esc($service['lead']) ?></p>
    <div class="ec-hero__actions">
      <a class="ec-btn ec-btn--primary" href="<?= base_url() ?>#contact">Start a project</a>
      <a class="ec-btn ec-btn--ghost" href="<?= base_url() ?>#work">Explore our work</a>
    </div>
  </div>
</section>

<section class="ec-section">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">What it covers</p>
        <h2>Inside a <?= esc(strtolower($service['name'])) ?> project</h2>
      </div>
      <ul class="ec-checks">
        <?php foreach ($service['points'] as $point): ?><li><?= esc($point) ?></li><?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php if (! empty($service['faq'])): ?>
<section class="ec-section ec-section--tight">
  <div class="ec-shell">
    <div class="ec-head" data-reveal><p class="ec-sig">Questions</p><h2>Common questions</h2></div>
    <div class="ec-faq" data-reveal>
      <?php foreach ($service['faq'] as $i => $qa): ?>
        <div class="ec-faq__item" data-open="false">
          <button class="ec-faq__q" type="button" aria-expanded="false" aria-controls="ec-sfaq-<?= $i ?>">
            <span><?= esc($qa[0]) ?></span><i aria-hidden="true"></i>
          </button>
          <div class="ec-faq__a" id="ec-sfaq-<?= $i ?>" role="region"><div><p><?= esc($qa[1]) ?></p></div></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="ec-section ec-dark">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">More services</p>
      <h2>What else we build</h2>
    </div>
    <div class="ec-grid ec-grid--3" data-reveal>
      <?php foreach ($related as $rSlug => $rSvc): ?>
        <a class="ec-card" href="<?= base_url('services/' . $rSlug) ?>">
          <h3 style="font-size:1.1rem"><?= esc($rSvc['name']) ?></h3>
          <p><?= esc($rSvc['lead']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>
    <a class="ec-btn ec-btn--primary" href="<?= base_url() ?>#contact" style="margin-top:2.2rem">Talk to EchoCrew</a>
  </div>
</section>

<?= $this->endSection() ?>
