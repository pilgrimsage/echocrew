<section class="ec-section" id="solutions">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">How we work</p>
        <h2>Technology should adapt to your business. Not the other way around.</h2>
      </div>
      <div>
        <p class="ec-lead">
          Generic software asks you to change your process to fit the product. We start from the
          workflow you already run — who does what, where it stalls, what gets retyped — and build
          the system around it.
        </p>
        <div class="ec-flow">
          <span>Understand</span><i></i><span>Design</span><i></i><span>Develop</span><i></i>
          <span>Integrate</span><i></i><span>Automate</span><i></i><span>Scale</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ec-section" id="services" style="padding-top:0">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Services</p>
      <h2>What we build</h2>
      <p class="ec-lead">Open any capability to see what it covers in practice.</p>
    </div>

    <?php
    $ecServiceLinks = [
        0 => 'web-development',
        1 => 'crm-development',
        2 => 'school-management-software',
        3 => 'ecommerce-development',
        4 => 'api-integration',
        5 => 'business-automation',
        6 => 'ai-solutions',
        7 => 'legacy-system-modernization',
        8 => 'digital-marketing-seo',
    ];

    $ecServices = [
        ['Custom website development', 'Corporate sites, business sites, landing pages, portals and full web applications — built rather than assembled from a theme.', ['Performance and Core Web Vitals', 'UX designed for the visitor journey', 'Technical SEO from the first line', 'Conversion-focused structure', 'Custom functionality, not plugin stacks']],
        ['CRM development', 'Build a CRM from scratch or reshape an existing one until it matches how your team actually sells and supports.', ['Lead capture and management', 'Customer records and history', 'Sales pipelines and stages', 'Reporting and dashboards', 'Workflow automation', 'Communication and integrations']],
        ['Business management software', 'Custom operational software for organisations that have outgrown spreadsheets and off-the-shelf tools.', ['School and education management', 'Internal operations systems', 'Data and records management', 'Role-based access', 'Reporting systems', 'Approval and workflow chains']],
        ['E-commerce development', 'Custom commerce systems built around your catalogue, your fulfilment and your margins.', ['Products and variants', 'Orders and customers', 'Payments and checkout', 'Inventory control', 'Reporting', 'Integrations and automation']],
        ['API and system integrations', 'Make the tools you already pay for talk to each other, in both directions.', ['CRM and websites', 'Payment gateways', 'Messaging and email platforms', 'Databases and internal apps', 'Third-party and partner APIs', 'Webhooks and scheduled syncs']],
        ['Automation', 'Every process a person repeats daily is a process software can run instead.', ['Lead routing and assignment', 'Notifications and alerts', 'Data synchronisation between systems', 'Scheduled reports', 'Customer communication sequences', 'CRM and API workflows']],
        ['AI solutions', 'AI added to a workflow that benefits from it — not bolted onto the homepage as a badge.', ['Support and internal assistants', 'Lead qualification', 'Content and document processing', 'Data analysis and summarisation', 'Automated responses', 'Intelligent routing inside existing automation']],
        ['Legacy system modernisation', 'Keep the business logic that took years to get right. Replace only what is holding it back.', ['Customisation of existing PHP and CRM applications', 'API layers over older systems', 'Modern interfaces on proven backends', 'Incremental migration instead of rewrites', 'Performance and security hardening']],
        ['Digital marketing', 'Development and growth work better when the build and the campaign understand each other.', ['SEO and technical SEO', 'Landing pages', 'Conversion optimisation', 'Analytics and tracking', 'Content strategy', 'Digital campaigns']],
    ];
    ?>

    <div class="ec-svc" data-reveal>
      <?php foreach ($ecServices as $i => $svc): ?>
        <?php $panelId = 'ec-svc-' . $i; ?>
        <div class="ec-svc__item" data-open="<?= $i === 0 ? 'true' : 'false' ?>">
          <button class="ec-svc__btn" type="button" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="<?= $panelId ?>">
            <span class="ec-svc__idx"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <span class="ec-svc__name"><?= esc($svc[0]) ?></span>
            <span class="ec-svc__plus" aria-hidden="true"></span>
          </button>
          <div class="ec-svc__panel" id="<?= $panelId ?>" role="region">
            <div class="ec-svc__panel-in">
              <p class="ec-lead" style="font-size:1rem"><?= esc($svc[1]) ?></p>
              <ul>
                <?php foreach ($svc[2] as $point): ?><li><?= esc($point) ?></li><?php endforeach; ?>
              </ul>
              <?php if (isset($ecServiceLinks[$i])): ?>
                <a class="ec-btn ec-btn--ghost ec-btn--sm" style="grid-column:1/-1;justify-self:start" href="<?= base_url('services/' . $ecServiceLinks[$i]) ?>">Explore <?= esc(strtolower($svc[0])) ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
