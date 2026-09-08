<section class="ec-hero">
  <!-- background layer -->
  <div class="ec-hero__bg" data-parallax="0.08" aria-hidden="true">
    <div class="ec-hero__grid"></div>
  </div>
  <!-- mid layer: echo rings -->
  <div class="ec-hero__bg" data-parallax="0.18" aria-hidden="true">
    <div class="ec-hero__glow"></div>
    <div class="ec-hero__rings"><span></span><span></span><span></span><span></span></div>
  </div>

  <div class="ec-shell ec-hero__inner">
    <div>
      <p class="ec-hero__eyebrow">
        <span>Software</span><span>Automation</span><span>Integration</span><span>Digital transformation</span>
      </p>

      <h1>We build digital systems that move businesses forward.</h1>

      <p class="ec-hero__copy">
        EchoCrew designs and develops custom websites, CRM systems, management software,
        e-commerce platforms, integrations, automation and AI-powered solutions around the
        way your business actually works.
      </p>

      <div class="ec-hero__actions">
        <a class="ec-btn ec-btn--primary" href="#contact">Start a project</a>
        <a class="ec-btn ec-btn--ghost" href="#work">Explore our work</a>
      </div>

      <p class="ec-hero__note">Custom-built. Business-focused. Designed to evolve.</p>
    </div>

    <!-- UI layer: connected system stack -->
    <div class="ec-sys" data-parallax="-0.05" aria-hidden="true">
      <?php
      $ecStack = [
          ['Website',    'entry point'],
          ['Application', 'business logic'],
          ['CRM',        'customers and sales'],
          ['API',        'system to system'],
          ['Automation', 'no repeated work'],
          ['AI',         'where it helps'],
          ['Business',   'one connected system'],
      ];
      foreach ($ecStack as $row): ?>
        <div class="ec-sys__card">
          <i class="ec-sys__dot"></i>
          <b><?= strtoupper($row[0]) ?></b>
          <small><?= $row[1] ?></small>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="ec-marquee" aria-hidden="true">
  <div class="ec-marquee__track">
    <span>Custom development</span><span>CRM</span><span>Business software</span><span>E-commerce</span>
    <span>API integration</span><span>Automation</span><span>AI</span><span>Digital marketing</span>
  </div>
</div>
