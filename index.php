<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/functions.php';

$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($profile['name']) ?> — <?= e($profile['title']) ?></title>
<meta name="description" content="<?= e($profile['tagline']) ?>">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="nav" id="nav">
  <div class="nav__inner">
    <a href="#home" class="nav__brand"><?= e($profile['avatarInitials']) ?></a>
    <nav class="nav__links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#experience">Experience</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
    <button class="nav__toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-open"><?= icon('menu') ?></span>
      <span class="icon-close"><?= icon('close') ?></span>
    </button>
  </div>
</header>

<main>

  <!-- Hero -->
  <section id="home" class="hero">
    <div class="hero__glow" aria-hidden="true"></div>
    <div class="hero__content">
      <p class="eyebrow">Hi, I'm</p>
      <h1><?= e($profile['name']) ?></h1>
      <p class="hero__title"><?= e($profile['title']) ?></p>
      <p class="hero__tagline"><?= e($profile['tagline']) ?></p>
      <div class="hero__actions">
        <a href="#projects" class="btn btn--primary">View my work</a>
        <a href="#contact" class="btn btn--ghost">Get in touch</a>
        <?php if (!empty($profile['resume']) && is_file(__DIR__ . '/' . $profile['resume'])): ?>
          <a href="<?= e($profile['resume']) ?>" class="btn btn--ghost" download>
            <?= icon('download') ?> Download CV
          </a>
        <?php endif; ?>
      </div>
      <div class="hero__socials">
        <?php foreach ($socials as $social): ?>
          <a href="<?= e($social['url']) ?>" class="social-icon" target="_blank" rel="noopener" title="<?= e($social['label']) ?>">
            <?= icon($social['icon']) ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="hero__avatar" aria-hidden="true">
      <?php if (!empty($profile['photo']) && is_file(__DIR__ . '/' . $profile['photo'])): ?>
        <img src="<?= e($profile['photo']) ?>" alt="" class="hero__avatar-img">
      <?php else: ?>
        <?= e($profile['avatarInitials']) ?>
      <?php endif; ?>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="section">
    <p class="section__eyebrow">About</p>
    <h2 class="section__title">A little about me</h2>
    <div class="about__grid">
      <p class="about__text"><?= nl2br(e($profile['about'])) ?></p>
      <ul class="about__facts">
        <li><span>Location</span><strong><?= e($profile['location']) ?></strong></li>
        <li><span>Email</span><strong><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></strong></li>
        <li><span>Phone</span><strong><a href="tel:<?= e(str_replace(' ', '', $profile['phone'])) ?>"><?= e($profile['phone']) ?></a></strong></li>
        <li><span>Resume</span><strong><a href="<?= e($profile['resume']) ?>" download>Download PDF</a></strong></li>
      </ul>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="section section--muted">
    <p class="section__eyebrow">Skills</p>
    <h2 class="section__title">What I work with</h2>
    <div class="skills">
      <?php foreach ($skills as $skill): ?>
        <div class="skill">
          <div class="skill__head">
            <span><?= e($skill['name']) ?></span>
            <span><?= (int) $skill['level'] ?>%</span>
          </div>
          <div class="skill__bar">
            <div class="skill__fill" style="width: <?= (int) $skill['level'] ?>%;"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section section--muted">
    <p class="section__eyebrow">Experience</p>
    <h2 class="section__title">Where I've worked</h2>
    <div class="timeline">
      <?php foreach ($experience as $job): ?>
        <div class="timeline__item">
          <div class="timeline__dot" aria-hidden="true"></div>
          <div class="timeline__card">
            <div class="timeline__head">
              <div>
                <h3><?= e($job['role']) ?></h3>
                <p class="timeline__company"><?= e($job['company']) ?> &middot; <?= e($job['place']) ?></p>
              </div>
              <span class="timeline__period"><?= e($job['period']) ?></span>
            </div>
            <ul class="timeline__bullets">
              <?php foreach ($job['bullets'] as $bullet): ?>
                <li><?= e($bullet) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <p class="section__eyebrow">Projects</p>
    <h2 class="section__title">Sample work</h2>
    <div class="projects">
      <?php foreach ($projects as $project): ?>
        <?php if (!empty($project['placeholder'])): ?>
          <article class="card card--placeholder">
            <span class="card__plus"><?= icon('plus') ?></span>
            <h3><?= e($project['title']) ?></h3>
            <p><?= e($project['description']) ?></p>
          </article>
        <?php else: ?>
          <article class="card <?= $project['featured'] ? 'card--featured' : '' ?>">
            <?php if ($project['featured']): ?><span class="card__badge">Featured</span><?php endif; ?>
            <h3><?= e($project['title']) ?></h3>
            <p><?= e($project['description']) ?></p>
            <div class="card__tags">
              <?php foreach ($project['tags'] as $tag): ?>
                <span class="tag"><?= e($tag) ?></span>
              <?php endforeach; ?>
            </div>
            <div class="card__links">
              <a href="<?= e($project['link']) ?>"><?= icon('external') ?> Live demo</a>
              <a href="<?= e($project['repo']) ?>"><?= icon('code') ?> Source</a>
            </div>
          </article>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Education & Certifications -->
  <section id="education" class="section section--muted">
    <p class="section__eyebrow">Background</p>
    <h2 class="section__title">Education &amp; Certifications</h2>
    <div class="edu-grid">
      <div class="edu-col">
        <h3 class="edu-col__title"><?= icon('cap') ?> Education</h3>
        <?php foreach ($education as $edu): ?>
          <div class="edu-item">
            <p class="edu-item__degree"><?= e($edu['degree']) ?></p>
            <p class="edu-item__school"><?= e($edu['school']) ?> &middot; <?= e($edu['place']) ?></p>
            <p class="edu-item__period"><?= e($edu['period']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="edu-col">
        <h3 class="edu-col__title"><?= icon('badge') ?> Certifications</h3>
        <?php foreach ($certifications as $cert): ?>
          <div class="edu-item">
            <p class="edu-item__degree"><?= e($cert) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section section--muted">
    <p class="section__eyebrow">Contact</p>
    <h2 class="section__title">Let's work together</h2>

    <div class="contact contact--centered">
      <div class="contact__info">
        <p>Have a project in mind, or just want to say hi? Reach out directly — I'll get back to you.</p>
        <ul class="about__facts">
          <li><span>Email</span><strong><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></strong></li>
          <li><span>Phone</span><strong><a href="tel:<?= e(str_replace(' ', '', $profile['phone'])) ?>"><?= e($profile['phone']) ?></a></strong></li>
          <li><span>Location</span><strong><?= e($profile['location']) ?></strong></li>
        </ul>
        <div class="contact__actions">
          <a href="mailto:<?= e($profile['email']) ?>" class="btn btn--primary">
            <?= icon('mail') ?> Email Me
          </a>
          <a href="tel:<?= e(str_replace(' ', '', $profile['phone'])) ?>" class="btn btn--ghost">
            <?= icon('phone') ?> Call Me
          </a>
        </div>
        <div class="hero__socials">
          <?php foreach ($socials as $social): ?>
            <a href="<?= e($social['url']) ?>" class="social-icon" target="_blank" rel="noopener" title="<?= e($social['label']) ?>">
              <?= icon($social['icon']) ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<footer class="footer">
  <p>&copy; <?= e((string) $year) ?> <?= e($profile['name']) ?>. Built with PHP.</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
