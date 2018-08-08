<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php endif; ?>

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel='stylesheet' id='aios-starter-theme-concatenated-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600%7CLato%3A400%2C700%7CBarlow+Semi+Condensed%3A300%2C400%2C400i%2C500%2C600%2C600i%2C700%2C700i%7CRaleway%3A300%2C400%2C400i%2C500%2C700%2C700i&#038;ver=4.9.4' type='text/css' media='all' />
  <?php if ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5shiv.min.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
    <p class="skip-link__wrapper">
      <a href="#<?php print $skip_link_anchor; ?>" class="skip-link visually-hidden visually-hidden--focusable" id="skip-link"><?php print $skip_link_text; ?></a>
    </p>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
