<section class="ec-section ec-section--tight">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Why EchoCrew</p>
      <h2>Built around your business.</h2>
    </div>

    <?php
    $ecWhy = [
        ['Custom by design', 'Every system starts from your requirements, not from a template that has to be argued into shape.'],
        ['Business first', 'We solve the business problem first and choose the technology second. That order rarely gets reversed without cost.'],
        ['Integration ready', 'Systems are built expecting company: APIs, webhooks and clean data contracts from the start.'],
        ['Automation focused', 'If a person is doing it the same way every day, it is a candidate for a workflow.'],
        ['Built to evolve', 'Your process will change. The system is structured so that change is an edit, not a rebuild.'],
    ];
    ?>
    <div class="ec-grid ec-grid--3">
      <?php foreach ($ecWhy as $i => $why): ?>
        <article class="ec-card" data-reveal="<?= $i * 70 ?>">
          <h3><?= esc($why[0]) ?></h3>
          <p><?= esc($why[1]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ec-section" id="technologies">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Stack</p>
        <h2>We choose technology based on the problem.</h2>
      </div>
      <p class="ec-lead">
        Technology is a tool; the business problem comes first. These are tools we reach for often —
        not the limits of what we work with.
      </p>
    </div>

    <ul class="ec-stack" data-reveal>
      <?php foreach ([
          'WordPress', 'PHP', 'Laravel', 'CodeIgniter', 'Vue.js', 'JavaScript', 'jQuery',
          'Bootstrap', 'Tailwind CSS', 'MySQL', 'REST APIs', 'Webhooks', 'Git', 'GitHub',
          'Docker', 'AI APIs', 'Automation platforms',
      ] as $tech): ?>
        <li><?= esc($tech) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="ec-section ec-dark">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Process</p>
      <h2>From idea to working system.</h2>
    </div>

    <ol class="ec-steps" data-reveal>
      <?php
      $ecSteps = [
          ['Discover', 'Understand the business, the people and where the current process breaks down.'],
          ['Plan', 'Define scope, architecture, data model and what success looks like.'],
          ['Design', 'Shape the interface around the tasks people perform most often.'],
          ['Develop', 'Build the solution in reviewable increments you can see running.'],
          ['Integrate', 'Connect external systems, APIs and existing databases.'],
          ['Automate', 'Remove the repeated manual steps the process no longer needs.'],
          ['Launch', 'Deploy, test with real data and hand over with documentation.'],
          ['Improve', 'Iterate as the business changes and the system grows with it.'],
      ];
      foreach ($ecSteps as $i => $step): ?>
        <li>
          <b><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></b>
          <h3><?= esc($step[0]) ?></h3>
          <p><?= esc($step[1]) ?></p>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
