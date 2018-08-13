<!DOCTYPE html>
<html lang="de">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title><?= $site->title()->html() ?> | <?php e($page->isHomepage(), $site->titleline()->html(), $page->title()->html()) ?></title>
<meta name="description" content="<?= $site->description()->html() ?>">
<meta name="keywords" content="<?= $site->keywords()->html() ?>">
<meta name="author" content="<?= $site->author()->html() ?>">

<meta name="robots" content="index" />
<meta name="robots" content="follow" />
<meta name="revisit_after" content="5 days" />

<link rel="alternate" hreflang="de" href="<?= $site->url() ?>" />

<link rel="apple-touch-icon" sizes="180x180" href="<?= url('assets/images/favicons/apple-touch-icon.png') ?>">
<link rel="icon" type="image/png" href="<?= url('assets/images/favicons/favicon-32x32.png') ?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?= url('assets/images/favicons/favicon-16x16.png') ?>" sizes="16x16">

<link rel="manifest" href="<?= url('assets/images/favicons/site.webmanifest') // kompatibilität checken... evtl prob mit alten androids ?>">

<link rel="mask-icon" href="<?= url('assets/images/favicons/safari-pinned-tab.svg') ?>" color="#5bbad5">
<link rel="shortcut icon" href="<?= url('assets/images/favicons/favicon.ico') ?>">
<meta name="msapplication-config" content="<?= url('assets/images/favicons/browserconfig.xml') ?>">
<meta name="theme-color" content="#ffffff">

<?= css('assets/js/slick/slick.css', 'screen') ?>
<?= css('assets/js/slick/slick-theme.css', 'screen') ?>
<?= css('assets/css/basic.css', 'screen') ?>

<script>
    window.open    = function(){};
    //window.print   = function(){};
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
</script>

<?= js('https://code.jquery.com/jquery-2.2.4.min.js', ['integrity' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=', 'crossorigin' => 'anonymous']) ?>
</head>

<body id="top">