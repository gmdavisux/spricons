<?php
include_once('svg.php');
$title='Hello';
$content.='
    <!-- jumbotron -->
    <div class="jumbotron">
      <div class="container">

<!--        <h1>
            <span class="spr" data-icon="home"></span>
            <span style="opacity:.4">spr</span>icons!</h1> -->
          <p>If you are looking at this, it\'s much too early. Everything is changing.
          <!-- Spricons make it easy to replace your icon font with Scaleable Vector Graphics. Resize, style and animate with CSS. You can easily create your own custom icons using popular design tools. SVG is an excellent alternative to using resolution-dependent graphics or icon-fonts. --></p>
          <h2>Coming soon...</h2>
      </div>
    </div>
<!-- end jumbotron -->

';

$content.='
    <div class="container">
        <div class="row">
';
//$content.= showIcons('material-design/svg-sprite-action-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-alert-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-av-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-communication-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-content-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-editor-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-file-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-hardware-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-image-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-maps-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-navigation-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-notification-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-places-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-social-symbol.svg');
//$content.= showIcons('material-design/svg-sprite-toggle-symbol.svg');
$content.= showIcons('svg/spricons/action-symbol.svg');
$content.= showIcons('svg/spricons/arrows-symbol.svg');
$content.='
        </div>
    </div>
';
include('template.php');
?>
