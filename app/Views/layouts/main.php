<?php
$seo         = config('Seo');
$pageTitle   = $title ?? ($seo->brand . ' | ' . $seo->tagline);
$pageDesc    = $description ?? 'EchoCrew builds custom websites, CRM systems, management software, e-commerce platforms, integrations, automation and AI-powered digital solutions around real business workflows.';
$pageCanon   = $canonical ?? current_url();
$pageImage   = $ogImage ?? base_url('assets/img/logo/logo-echo.png');
$assetVer    = $assetVersion ?? '1';
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= esc($pageTitle) ?></title>
<meta name="description" content="<?= esc($pageDesc) ?>">
<link rel="canonical" href="<?= esc($pageCanon, 'url') ?>">
<meta name="robots" content="<?= esc($robots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1') ?>">
<meta name="author" content="<?= esc($seo->brand) ?>">

<meta property="og:type" content="<?= esc($ogType ?? 'website') ?>">
<meta property="og:site_name" content="<?= esc($seo->brand) ?>">
<meta property="og:locale" content="<?= esc($seo->locale) ?>">
<meta property="og:title" content="<?= esc($pageTitle) ?>">
<meta property="og:description" content="<?= esc($pageDesc) ?>">
<meta property="og:url" content="<?= esc($pageCanon, 'url') ?>">
<meta property="og:image" content="<?= esc($pageImage, 'url') ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($pageTitle) ?>">
<meta name="twitter:description" content="<?= esc($pageDesc) ?>">
<meta name="twitter:image" content="<?= esc($pageImage, 'url') ?>">

<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon/favicon.png') ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>

<link rel="stylesheet" href="<?= base_url('assets/echocrew/css/echocrew.css') ?>?v=<?= esc($assetVer, 'attr') ?>">

<?= $this->include('partials/schema') ?>
</head>
<body>

<a class="ec-skip" href="#ec-main">Skip to content</a>

<?= $this->include('partials/nav') ?>

<main id="ec-main">
<?= $this->renderSection('content') ?>
</main>

<?= $this->include('partials/footer') ?>

<script src="<?= base_url('assets/echocrew/js/echocrew.js') ?>?v=<?= esc($assetVer, 'attr') ?>" defer></script>
</body>
</html>
