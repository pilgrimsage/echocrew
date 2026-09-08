<section class="ec-section" id="about">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">About</p>
        <h2>We build technology around how businesses actually work.</h2>
      </div>
      <div>
        <p class="ec-lead">
          EchoCrew works across both modern and legacy technology. That range matters: it means the
          recommendation isn't decided by the only stack we know.
        </p>
        <p class="ec-lead" style="margin-top:1rem">
          The right solution is not always a new application. Sometimes it is a smarter version of
          what you already have.
        </p>
      </div>
    </div>

    <div class="ec-grid ec-grid--4" data-reveal>
      <?php foreach ([
          ['Build', 'New systems from a blank repository.'],
          ['Customise', 'Reshape software you already own.'],
          ['Connect', 'Integrate systems that ignore each other.'],
          ['Automate', 'Retire the repetitive manual steps.'],
          ['Modernise', 'Bring legacy applications forward in stages.'],
          ['Integrate AI', 'Where it earns its place in the workflow.'],
          ['Improve', 'Strengthen digital products already running.'],
          ['Grow', 'Marketing and optimisation on top of the build.'],
      ] as $i => $cap): ?>
        <article class="ec-card" data-reveal="<?= $i * 45 ?>">
          <h3 style="font-size:1.05rem"><?= esc($cap[0]) ?></h3>
          <p><?= esc($cap[1]) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ec-section ec-section--tight" id="faq">
  <div class="ec-shell">
    <div class="ec-head" data-reveal>
      <p class="ec-sig">Questions</p>
      <h2>Before you get in touch</h2>
    </div>

    <div class="ec-faq" data-reveal>
      <?php
      $ecFaq = config('Seo')->homeFaq;
      foreach ($ecFaq as $i => $faq): ?>
        <div class="ec-faq__item" data-open="false">
          <button class="ec-faq__q" type="button" aria-expanded="false" aria-controls="ec-faq-<?= $i ?>">
            <span><?= esc($faq[0]) ?></span><i aria-hidden="true"></i>
          </button>
          <div class="ec-faq__a" id="ec-faq-<?= $i ?>" role="region">
            <div><p><?= esc($faq[1]) ?></p></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="ec-section ec-dark" id="contact">
  <div class="ec-shell">
    <div class="ec-head ec-head--split" data-reveal>
      <div>
        <p class="ec-sig">Start here</p>
        <h2>Have a business problem we can build a solution for?</h2>
      </div>
      <p class="ec-lead">
        Tell us what you are trying to achieve, what currently isn't working, or what you want to
        automate. The more specific the problem, the more useful the first reply.
      </p>
    </div>

    <?php if (session()->getFlashdata('ec_success')): ?>
      <div class="ec-alert ec-alert--ok" data-scroll-to role="status"><?= esc(session()->getFlashdata('ec_success')) ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('ec_error')): ?>
      <div class="ec-alert ec-alert--bad" data-scroll-to role="alert"><?= esc(session()->getFlashdata('ec_error')) ?></div>
    <?php endif; ?>

    <?php $errors = session()->getFlashdata('ec_errors') ?? []; $old = static fn (string $k): string => (string) (old($k) ?? ''); ?>

    <form class="ec-form" method="post" action="<?= site_url('enquiry') ?>" data-reveal novalidate>
      <?= csrf_field() ?>
      <div class="ec-hp" aria-hidden="true">
        <label for="ec-website">Leave this empty</label>
        <input type="text" id="ec-website" name="ec_website" tabindex="-1" autocomplete="off">
      </div>

      <div class="ec-field">
        <label for="ec-name">Name</label>
        <input type="text" id="ec-name" name="name" value="<?= esc($old('name')) ?>" required>
        <?php if (isset($errors['name'])): ?><span class="ec-err"><?= esc($errors['name']) ?></span><?php endif; ?>
      </div>

      <div class="ec-field">
        <label for="ec-company">Company</label>
        <input type="text" id="ec-company" name="company" value="<?= esc($old('company')) ?>">
      </div>

      <div class="ec-field">
        <label for="ec-email">Email</label>
        <input type="email" id="ec-email" name="email" value="<?= esc($old('email')) ?>" required>
        <?php if (isset($errors['email'])): ?><span class="ec-err"><?= esc($errors['email']) ?></span><?php endif; ?>
      </div>

      <div class="ec-field">
        <label for="ec-phone">Phone</label>
        <input type="tel" id="ec-phone" name="phone" value="<?= esc($old('phone')) ?>">
      </div>

      <div class="ec-field">
        <label for="ec-service">Service</label>
        <select id="ec-service" name="service">
          <?php foreach ([
              'Website development', 'CRM development', 'Management software', 'E-commerce',
              'API integration', 'Automation', 'AI solution', 'Legacy system modernisation',
              'Digital marketing', 'Other',
          ] as $service): ?>
            <option value="<?= esc($service, 'attr') ?>" <?= $old('service') === $service ? 'selected' : '' ?>><?= esc($service) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="ec-field">
        <label for="ec-current">Current website or system</label>
        <input type="text" id="ec-current" name="current_system" placeholder="URL, or the software you use today" value="<?= esc($old('current_system')) ?>">
      </div>

      <div class="ec-field">
        <label for="ec-budget">Budget</label>
        <input type="text" id="ec-budget" name="budget" placeholder="A range is fine" value="<?= esc($old('budget')) ?>">
      </div>

      <div class="ec-field">
        <label for="ec-timeline">Timeline</label>
        <input type="text" id="ec-timeline" name="timeline" placeholder="When you want it live" value="<?= esc($old('timeline')) ?>">
      </div>

      <div class="ec-field">
        <label for="ec-prefer">Preferred contact method</label>
        <select id="ec-prefer" name="preferred_contact">
          <?php foreach (['Email', 'Phone', 'WhatsApp'] as $method): ?>
            <option value="<?= $method ?>" <?= $old('preferred_contact') === $method ? 'selected' : '' ?>><?= $method ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="ec-field ec-field--full">
        <label for="ec-message">Project description</label>
        <textarea id="ec-message" name="message" required placeholder="What are you trying to achieve, and what isn't working today?"><?= esc($old('message')) ?></textarea>
        <?php if (isset($errors['message'])): ?><span class="ec-err"><?= esc($errors['message']) ?></span><?php endif; ?>
      </div>

      <div class="ec-field--full">
        <button class="ec-btn ec-btn--primary" type="submit">Send project enquiry</button>
      </div>
    </form>
  </div>
</section>
