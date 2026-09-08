<section class="ec-section" id="work">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Work</p>
        <h2>Some things we've built</h2>
      </div>
      <p class="ec-lead">
        Products and systems built for real operational use — commerce, administration,
        communication and money movement.
      </p>
    </div>

    <?php
    $ecWork = [
        [
            'name'  => 'EchoCart',
            'kind'  => 'E-commerce platform',
            'desc'  => 'A custom e-commerce system for running online commerce end to end: catalogue, customers, orders and the workflows that connect them.',
            'tech'  => ['Laravel', 'Vue', 'PHP', 'MySQL', 'APIs'],
            'img'   => 'assets/img/interactive-img/port-1.jpg',
            'wide'  => true,
        ],
        [
            'name'  => 'School management software',
            'kind'  => 'Education management system',
            'desc'  => 'Management software shaped around school administration — records, staff and the operational routines that run a term.',
            'tech'  => ['PHP', 'CodeIgniter', 'MySQL', 'Bootstrap'],
            'img'   => 'assets/img/interactive-img/port-2.jpg',
        ],
        [
            'name'  => 'WhatsAppSend AI',
            'kind'  => 'AI, communication and automation',
            'desc'  => 'A communication system built around modern messaging, with AI and automation handling the repetitive side of business conversations.',
            'tech'  => ['PHP', 'APIs', 'AI', 'Automation'],
            'img'   => 'assets/img/interactive-img/port-3.jpg',
        ],
        [
            'name'  => 'Money Tracker',
            'kind'  => 'Financial management',
            'desc'  => 'A practical interface for organising and tracking financial information, built to stay fast as records accumulate.',
            'tech'  => ['PHP', 'MySQL', 'JavaScript'],
            'img'   => 'assets/img/interactive-img/port-4.jpg',
        ],
        [
            'name'  => 'Custom client websites',
            'kind'  => 'Website development',
            'desc'  => 'Purpose-built websites for businesses with different branding, functional and operational requirements.',
            'tech'  => ['PHP', 'WordPress', 'JavaScript', 'SEO'],
            'img'   => 'assets/img/interactive-img/port-5.jpg',
        ],
        [
            'name'  => 'Legacy system customisation',
            'kind'  => 'Modernisation',
            'desc'  => 'Existing systems customised, integrated and modernised where a rebuild would have cost more than it returned.',
            'tech'  => ['PHP', 'CodeIgniter', 'REST APIs', 'MySQL'],
            'img'   => 'assets/img/interactive-img/port-6.jpg',
            'wide'  => true,
        ],
    ];
    ?>

    <div class="ec-work">
      <?php foreach ($ecWork as $i => $project): ?>
        <article class="ec-work__item<?= !empty($project['wide']) ? ' ec-work__item--wide' : '' ?>" data-reveal="<?= $i * 60 ?>">
          <div class="ec-work__media">
            <img src="<?= base_url($project['img']) ?>" alt="<?= esc($project['name']) ?> — <?= esc($project['kind']) ?>" loading="lazy" decoding="async" width="1200" height="750">
          </div>
          <div class="ec-work__body">
            <span class="ec-work__kind"><?= esc($project['kind']) ?></span>
            <h3><?= esc($project['name']) ?></h3>
            <p><?= esc($project['desc']) ?></p>
            <ul class="ec-tags">
              <?php foreach ($project['tech'] as $tech): ?><li><?= esc($tech) ?></li><?php endforeach; ?>
            </ul>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ec-section ec-dark">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Problem to system</p>
      <h2>Bring us the problem.</h2>
      <p class="ec-lead">Pick the sentence closest to yours.</p>
    </div>

    <div class="ec-prob" data-reveal>
      <ul class="ec-prob__list" role="tablist">
        <?php
        $ecProblems = [
            ['We\'re managing everything in spreadsheets.', 'Build a custom management system', 'Spreadsheets stop scaling the moment more than one person edits them. We replace the file with a system that holds the same data with roles, validation, history and reporting — so nobody is emailing version 7 of the sheet.'],
            ['Our CRM doesn\'t match our workflow.', 'Customise or build the CRM', 'If your team maintains a side spreadsheet next to the CRM, the CRM is wrong. We either reshape the one you own or build one that follows your actual pipeline, stages and handoffs.'],
            ['Our systems don\'t talk to each other.', 'Build the integration layer', 'Website, CRM, accounts, messaging — each holding a slightly different version of the truth. We connect them with APIs and webhooks so data is entered once and appears everywhere.'],
            ['Our team repeats the same tasks every day.', 'Automate the workflow', 'Copying records, sending the same follow-up, rebuilding the same report. We map the repeated steps and move them into automated workflows with alerts when something needs a human.'],
            ['Our old software works, but it is hard to maintain.', 'Modernise it incrementally', 'Working software is an asset. We modernise in stages — an API layer, then a modern interface, then automation — keeping the business logic that already earns its place.'],
            ['We need a website that does more than display information.', 'Build a web application', 'Portals, dashboards, quoting tools, booking flows, client areas. The site stops being a brochure and starts doing operational work.'],
        ];
        foreach ($ecProblems as $i => $problem): ?>
          <li>
            <button class="ec-prob__q" type="button" role="tab"
                    aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"
                    data-answer-title="<?= esc($problem[1], 'attr') ?>"
                    data-answer-body="<?= esc($problem[2], 'attr') ?>">
              <?= esc($problem[0]) ?>
            </button>
          </li>
        <?php endforeach; ?>
      </ul>

      <div class="ec-prob__panel" role="tabpanel">
        <p class="ec-sig">What we'd build</p>
        <h3></h3>
        <p></p>
        <a class="ec-btn ec-btn--primary" href="#contact" style="margin-top:1.6rem">Start a project</a>
      </div>
    </div>
  </div>
</section>
