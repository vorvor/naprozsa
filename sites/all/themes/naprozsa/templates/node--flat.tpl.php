<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

?>
<article class="<?php print $classes; ?> clearfix node-<?php print $node->nid; ?>"<?php print $attributes; ?>>
  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || $preview || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="watermark"><?php print t('Unpublished'); ?></mark>
      <?php elseif ($preview): ?>
        <mark class="watermark"><?php print t('Preview'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content['field_id']);
    print render($content['field_images']);
    print render($content['field_prenote']);
    print render($content['field_basic_data']);
    print '<div><a id="map-anchor">Elhelyezkedés a lakóparkban.</a></div>';
    print render($content['field_facilities']);
    print render($content['field_technical_description']);
    print render($content['field_notes']);
    print render($content['field_price']);
    print render($content['field_attachments']);


    
    print render($content);

    $coords = explode(',', $node->field_coordinates['und'][0]['value']);
    $x1 = $coords[0];
    $y1 = $coords[1];
    $x2 = $coords[2];
    $y2 = $coords[3];
  ?>
  <div id="map">
    <div id="place" class="op" style="width:100%;height:<?php print $y1;?>px"></div>
    <div class="op" style="top:<?php print $y1; ?>px;width:<?php print $x1; ?>px;height:<?php print $y2-$y1; ?>px"></div>
    <div class="op" style="top:<?php print $y1; ?>px;left:<?php print $x2; ?>px;width:<?php print 1140-$x2?>px;height:<?php print $y2-$y1; ?>px"></div>
    <div class="op" style="width:100%;height:<?php print 910-$y1;?>px;top:<?php print $y2; ?>px"></div>
    <div class="op specop"></div>

    <img id="arrow-1" style="left: <?php print $x1-58; ?>px;top:<?php print $y1-5; ?>px" src="/sites/all/themes/naprozsa/images/arrow.svg">
    <img id="arrow-2" style="left: <?php print $x1-37+($x2-$x1); ?>px;top:<?php print $y1-58; ?>px" src="/sites/all/themes/naprozsa/images/arrow.svg">
    <img id="arrow-3" style="left: <?php print $x1-2+($x2-$x1); ?>px;top:<?php print $y1-5; ?>px" src="/sites/all/themes/naprozsa/images/arrow.svg">
    <img id="arrow-4" style="left: <?php print $x1-39+($x2-$x1); ?>px;top:<?php print $y1-4+($y2-$y1); ?>px" src="/sites/all/themes/naprozsa/images/arrow.svg">
    

  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
