<?php
if(!$_GET['i']){$_GET['i']='home';}
$title=$_GET['i'].' icon at spricons.com';
$content.='
      <div class="container-fluid" style="background-color:#fff; border-bottom:#ccc;">
          <div class="row">
            <div class="col-md-12">
                <h1><div class="spr spr-3x" data-icon="'.$_GET['i'].'"></div>'.$_GET['i'].'</h1>
            </div>
        </div>
      </div>
';

$content.='
<div class="container">


  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro"></i> spr-camera-retro
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        You can place spricons just about anywhere using the CSS Prefix <code>fa</code> and the icon\'s
        name. Font Awesome is designed to be used with inline elements (we like the <code>&lt;i&gt;</code> tag for
        brevity, but using a <code>&lt;span&gt;</code> is more semantically correct).
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-camera-retro
</code></pre></div>
      <div class="alert alert-success">
        <ul class="spr-ul">
          <li>
            <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-info-circle spr-lg spr-li"></i>
            If you change the font-size of the icon\'s container, the icon changes size too. Same things goes for color,
            drop shadow, and anything else that gets inherited using CSS.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <section id="larger">
  <h2 class="page-header">
    Larger Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/larger.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_larger.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro spr-lg"></i> spr-lg</p>
      <p><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro spr-2x"></i> spr-2x</p>
      <p><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro spr-3x"></i> spr-3x</p>
      <p><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro spr-4x"></i> spr-4x</p>
      <p><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-camera-retro spr-5x"></i> spr-5x</p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To increase icon sizes relative to their container, use the <code>spr-lg</code> (33% increase), <code>spr-2x</code>,
        <code>spr-3x</code>, <code>spr-4x</code>, or <code>spr-5x</code> classes.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro spr-lg"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-lg
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro spr-2x"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-2x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro spr-3x"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-3x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro spr-4x"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-4x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera-retro spr-5x"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-5x
</code></pre></div>
      <div class="alert alert-success">
        <ul class="spr-ul">
          <li>
            <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-exclamation-triangle spr-li spr-lg"></i>
            If your icons are getting chopped off on top and bottom, make sure you have
            sufficient line-height.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <section id="fixed-width">
  <h2 class="page-header">
    Fixed Width Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/fixed-width.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_fixed-width.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <div class="list-group">
        <a class="list-group-item" href="#"><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-home spr-fw"></i>&nbsp; Home</a>
        <a class="list-group-item" href="#"><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-book spr-fw"></i>&nbsp; Library</a>
        <a class="list-group-item" href="#"><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-pencil spr-fw"></i>&nbsp; Applications</a>
        <a class="list-group-item" href="#"><i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-cog spr-fw"></i>&nbsp; Settings</a>
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use <code>spr-fw</code> to set icons at a fixed width. Great to use when different icon widths throw off alignment.
        Especially useful in things like nav lists &amp; list groups.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-home spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-book spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Library<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-pencil spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Applications<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-cog spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Settings<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="list">
  <h2 class="page-header">
    List Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/list.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_list.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <ul class="spr-ul">
        <li class="spr-li spr-" data-icon="svg/spricons/action-symbol.svg#check-square">List icons</li>
        <li class="spr-li spr-2x" data-icon="svg/spricons/action-symbol.svg#check-square">can be used</li>
        <li class="spr-li spr-3x" data-icon="svg/spricons/action-symbol.svg#square">in lists</li>
        <li class="spr-li spr-spin" data-icon="svg/spricons/action-symbol.svg#spiral">as bullets</li>
      </ul>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>Use <code>spr-ul</code> and <code>spr-li</code> to easily replace default bullets in unordered lists.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"spr-ul"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr-li spr spr-check-square"</span><span class="nt">&gt;&lt;/i&gt;</span>List icons<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr-li spr spr-check-square"</span><span class="nt">&gt;&lt;/i&gt;</span>can be used<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr-li spr spr-spinner spr-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>as bullets<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr-li spr spr-square"</span><span class="nt">&gt;&lt;/i&gt;</span>in lists<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="bordered-pulled">
  <h2 class="page-header">
    Bordered &amp; Pulled Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/bordered-pulled.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_bordered-pulled.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p><span data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-3x spr-pull-left spr-border"></span><span  data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-3x spr-pull-right spr-border"></span>
        ...to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use <code>spr-border</code> and <code>spr-pull-right</code> or <code>spr-pull-left</code> for easy pull quotes or
        article icons.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-quote-left spr-3x spr-pull-left spr-border"</span><span class="nt">&gt;&lt;/i&gt;</span>
...tomorrow we will run faster, stretch out our arms farther...
And then one fine morning— So we beat on, boats against the
current, borne back ceaselessly into the past.
</code></pre></div>
    </div>
  </div>
</section>

  <section id="animated">
  <h2 class="page-header">
    Animated Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/animated.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_animated.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-spinner spr-spin spr-3x spr-fw margin-bottom"></i>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-circle-o-notch spr-spin spr-3x spr-fw margin-bottom"></i>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-refresh spr-spin spr-3x spr-fw margin-bottom"></i>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-cog spr-spin spr-3x spr-fw margin-bottom"></i>
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-spinner spr-pulse spr-3x spr-fw margin-bottom"></i>
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use the <code>spr-spin</code> class to get any icon to rotate, and use <code>spr-pulse</code> to have it rotate
        with 8 steps. Works well with <code>spr-spinner</code>, <code>spr-refresh</code>, and <code>spr-cog</code>.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-spinner spr-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-circle-o-notch spr-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-refresh spr-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-cog spr-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-spinner spr-pulse"</span><span class="nt">&gt;&lt;/i&gt;</span>
</code></pre></div>
      <p class="alert alert-success">
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-exclamation-triangle spr-lg"></i>
        Some browsers on some platforms have issues with animated icons resulting in a jittery wobbling effect. See
        <a href="https://github.com/FortAwesome/Font-Awesome/issues/671" class="alert-link" target="_blank">issue #671</a>
        for examples and possible workarounds.
      </p>
      <p class="alert alert-success">
        <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-info-circle spr-lg"></i> CSS3 animations aren\'t supported in IE8 - IE9.
      </p>
    </div>
  </div>
</section>

  <section id="rotated-flipped">
  <h2 class="page-header">
    Rotated &amp; Flipped
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/rotated-flipped.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_rotated-flipped.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p style="font-size: 18px;">
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr"></i>&nbsp; normal<br>
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-90"></i>&nbsp; spr-rotate-90<br>
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-180"></i>&nbsp; spr-rotate-180<br>
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-270"></i>&nbsp; spr-rotate-270<br>
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-flip-horizontal"></i>&nbsp; spr-flip-horizontal<br>
        <i data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-flip-vertical"></i>&nbsp; spr-flip-vertical
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To arbitrarily rotate and flip icons, use the <code>spr-rotate-*</code> and <code>spr-flip-*</code> classes.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr"</span><span class="nt">&gt;&lt;/i&gt;</span> normal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-rotate-90"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-rotate-90<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-rotate-180"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-rotate-180<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-rotate-270"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-rotate-270<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-flip-horizontal"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-flip-horizontal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-flip-vertical"</span><span class="nt">&gt;&lt;/i&gt;</span> spr-flip-vertical
</code></pre></div>
    </div>
  </div>
</section>

  <section id="stacked">
  <h2 class="page-header">
    Stacked Icons
    <div class="pull-right text-default margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/less/stacked.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.5.0/scss/_stacked.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <div class="margin-bottom">
        <span class="spr-stack spr-lg">
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-2x"></i>
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-1x"></i>
        </span>
        spr-twitter on spr-square-o<br>
        <span class="spr-stack spr-lg">
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-2x"></i>
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-1x spr-inverse"></i>
        </span>
        spr-flag on spr-circle<br>
        <span class="spr-stack spr-lg">
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-2x"></i>
          <i data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-stack-1x spr-inverse"></i>
        </span>
        spr-terminal on spr-square<br>
        <span class="spr-stack spr-lg">
          <i data-icon="svg/spricons/action-symbol.svg#trash" style="width:2em" class="spr spr-stack-1x"></i>
          <i data-icon="svg/spricons/action-symbol.svg#do-not" class="spr spr-stack-2x text-danger"></i>
        </span>
        do-not on trash
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To stack multiple icons, use the <code>spr-stack</code> class on the parent, the <code>spr-stack-1x</code>
        for the regularly sized icon, and <code>spr-stack-2x</code> for the larger icon. <code>spr-inverse</code>
        can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent
        to get further control of sizing.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"spr-stack spr-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-square-o spr-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-twitter spr-stack-1x"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
spr-twitter on spr-square-o<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"spr-stack spr-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-circle spr-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-flag spr-stack-1x spr-inverse"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
spr-flag on spr-circle<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"spr-stack spr-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-square spr-stack-2x"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-terminal spr-stack-1x spr-inverse"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
spr-terminal on spr-square<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"spr-stack spr-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-camera spr-stack-1x"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-ban spr-stack-2x text-danger"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
spr-ban on spr-camera
</code></pre></div>
    </div>
  </div>
</section>

  <section id="bootstrap">
  <h2 class="page-header">Bootstrap 3 Examples</h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <a class="btn btn-danger" href="#">
          <span data-icon="svg/spricons/action-symbol.svg#trash" class="spr spr-lg"></span> Delete</a>
        <a class="btn btn-default btn-sm" href="#">
          <span data-icon="svg/spricons/action-symbol.svg#pencil" class="spr"></span> Edit</a>
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="#" data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-2x spr-border spr-pull-left"> spricons<br>version 0.5.0</a>
      </p>
      <div class="margin-bottom">
        <div class="btn-group">
          <a class="btn btn-default" href="#"><i data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-left" class="spr spr-lg"></i></a>
          <a class="btn btn-default" href="#"><i data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-up" class="spr spr-lg"></i></a>
          <a class="btn btn-default" href="#"><i data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-down" class="spr  spr-lg"></i></a>
          <a class="btn btn-default" href="#"><i data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-right" class="spr  spr-lg"></i></a>
        </div>
      </div>
      <div class="margin-bottom">
        <div class="input-group margin-bottom-sm">
          <span class="input-group-addon"><i data-icon="svg/spricons/action-symbol.svg#envelope" class="spr spr-fw"></i></span>
          <input class="form-control" type="text" placeholder="Email address">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i data-icon="svg/spricons/action-symbol.svg#lock" class="spr spr-fw"></i></span>
          <input class="form-control" type="password" placeholder="Password">
        </div>
      </div>
      <div class="margin-bottom">
        <div class="btn-group open">
          <a class="btn btn-primary" href="#"><i data-icon="svg/spricons/action-symbol.svg#heart-o" class="spr spr-fw"></i> User</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="spr spr-caret-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i data-icon="svg/spricons/action-symbol.svg#pencil" class="spr spr-fw"></i> Edit</a></li>
            <li><a href="#"><i data-icon="svg/spricons/action-symbol.svg#trash" class="spr spr-fw"></i> Delete</a></li>
            <li><a href="#"><i data-icon="svg/spricons/action-symbol.svg#do-not" class="spr spr-fw"></i> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="i"></i> Make admin</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Font Awesome works great with the full range of Bootstrap components.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-trash-o spr-lg"</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-cog"</span><span class="nt">&gt;&lt;/i&gt;</span> Settings<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-success"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-flag spr-2x pull-left"</span><span class="nt">&gt;&lt;/i&gt;</span> Font Awesome<span class="nt">&lt;br&gt;</span>Version 4.5.0<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-align-left"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-align-center"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-align-right"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-align-justify"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group margin-bottom-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-envelope-o spr-fw"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Email address"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-key spr-fw"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group open"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-user spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> User<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"spr spr-caret-down"</span><span class="nt">&gt;&lt;/span&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-pencil spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Edit<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-trash-o spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"spr spr-ban spr-fw"</span><span class="nt">&gt;&lt;/i&gt;</span> Ban<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"i"</span><span class="nt">&gt;&lt;/i&gt;</span> Make admin<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="custom">
  <h2 class="page-header">Custom CSS</h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>Anything you can do with CSS font styles, you can do with Font Awesome.</p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>Star Ratings (inspired by <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
      <div class="well">
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>
      </div>
    </div>
  </div>
</section>

</div>';
include('template.php');
?>
