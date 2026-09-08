<section class="ec-section ec-dark" id="legacy">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Legacy modernisation</p>
        <h2>Your legacy system isn't always the problem.</h2>
      </div>
      <div>
        <p class="ec-lead">
          Years of business logic often live inside older applications. Replacing everything can be
          expensive, risky and unnecessary.
        </p>
        <p class="ec-lead" style="margin-top:1rem">
          EchoCrew customises, integrates, optimises and modernises existing PHP, CRM and legacy
          applications while preserving the logic that already works.
        </p>
      </div>
    </div>

    <div class="ec-pipe" data-reveal>
      <?php foreach ([
          ['Legacy system', 'the logic you keep'],
          ['API layer', 'a way in and out'],
          ['Modern UI', 'the part people touch'],
          ['Automation', 'the manual steps removed'],
          ['Analytics', 'what the data now shows'],
      ] as $node): ?>
        <div class="ec-pipe__node"><b><?= strtoupper($node[0]) ?></b><span><?= esc($node[1]) ?></span></div>
      <?php endforeach; ?>
    </div>

    <a class="ec-btn ec-btn--primary" href="#contact" style="margin-top:2rem">Modernise my system</a>
  </div>
</section>

<section class="ec-section" id="automation">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Automation</p>
        <h2>Turn repetitive work into automated workflows.</h2>
      </div>
      <p class="ec-lead">
        A lead arrives on the site, reaches the CRM, triggers a message, updates a record and lands
        in a report — without anyone retyping it.
      </p>
    </div>

    <div class="ec-grid ec-grid--2" data-reveal>
      <div class="ec-card">
        <p class="ec-sig">Typical chain</p>
        <div class="ec-flow" style="margin-top:0">
          <span>Website</span><i></i><span>CRM</span><i></i><span>API</span><i></i><span>Database</span><i></i>
          <span>WhatsApp</span><i></i><span>Email</span><i></i><span>Automation</span><i></i><span>Reports</span>
        </div>
      </div>
      <div class="ec-card">
        <h3>What gets automated</h3>
        <ul class="ec-svc__panel-in" style="padding:0;display:grid;grid-template-columns:1fr">
          <?php foreach ([
              'Lead creation from every form and channel',
              'Customer communication at the right moment',
              'Internal notifications and escalations',
              'Data synchronisation between systems',
              'Scheduled and triggered reports',
              'CRM record updates and stage changes',
          ] as $item): ?>
            <li><?= esc($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <a class="ec-btn ec-btn--primary" href="#contact" style="margin-top:2rem">Automate my workflow</a>
  </div>
</section>

<section class="ec-section ec-dark" id="ai">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">AI</p>
        <h2>Add intelligence where it actually matters.</h2>
      </div>
      <p class="ec-lead">
        AI belongs inside a workflow it measurably improves. We add it where it reduces handling time
        or removes a manual reading task — and leave it out where a rule is cheaper and more reliable.
      </p>
    </div>

    <div class="ec-grid ec-grid--4" data-reveal>
      <?php foreach ([
          ['Customer support', 'Answer repeat questions from your own content, hand over when it matters.'],
          ['Lead qualification', 'Score and route enquiries before a person opens them.'],
          ['Document processing', 'Read incoming documents and turn them into structured records.'],
          ['Data analysis', 'Summarise what changed across your systems this week.'],
      ] as $i => $card): ?>
        <article class="ec-card" data-reveal="<?= $i * 70 ?>">
          <h3 style="font-size:1.1rem"><?= esc($card[0]) ?></h3>
          <p><?= esc($card[1]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ec-section" id="marketing">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Growth</p>
        <h2>Build it. Launch it. Grow it.</h2>
      </div>
      <p class="ec-lead">
        Development and digital growth work better when the technology and the marketing strategy
        understand each other — the same team owning site speed, structure and what converts.
      </p>
    </div>

    <ul class="ec-stack" data-reveal>
      <?php foreach ([
          'SEO', 'Technical SEO', 'Analytics', 'Landing pages',
          'Conversion optimisation', 'Content strategy', 'Digital campaigns',
      ] as $item): ?><li><?= esc($item) ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="ec-section ec-section--tight" id="industries">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Industries</p>
      <h2>Different businesses. Different systems.</h2>
    </div>
    <ul class="ec-ind" data-reveal>
      <?php foreach ([
          'Education', 'E-commerce', 'Professional services', 'Healthcare', 'Retail',
          'Finance', 'Startups', 'Small and medium business', 'Internal operations',
      ] as $item): ?><li><?= esc($item) ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>
