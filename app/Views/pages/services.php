<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="ec-hero ec-hero--sub">
  <div class="ec-hero__bg" data-parallax="0.1" aria-hidden="true"><div class="ec-hero__grid"></div></div>
  <div class="ec-hero__bg" data-parallax="0.2" aria-hidden="true">
    <div class="ec-hero__glow"></div>
    <div class="ec-hero__rings"><span></span><span></span><span></span><span></span></div>
  </div>
  <div class="ec-shell" style="position:relative;z-index:2">
    <nav class="ec-crumbs" aria-label="Breadcrumb"><a href="<?= base_url() ?>">Home</a><i aria-hidden="true">/</i><span aria-current="page">Services</span></nav>
    <p class="ec-sig">Services</p>
    <h1 style="font-size:clamp(2.2rem,5vw,4rem);max-width:16ch">Software development services</h1>
    <p class="ec-hero__copy" style="margin-top:1.4rem">
      Custom software, websites, CRM, e-commerce, integrations, automation, AI and SEO —
      built for businesses in Siliguri, across North Bengal and beyond.
    </p>
  </div>
</section>

<section class="ec-section">
  <div class="ec-shell">
    <div class="ec-grid ec-grid--3">
      <?php foreach ($services as $slug => $svc): ?>
        <a class="ec-card" href="<?= base_url('services/' . $slug) ?>" data-reveal>
          <h3 style="font-size:1.15rem"><?= esc($svc['name']) ?></h3>
          <p><?= esc($svc['lead']) ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
