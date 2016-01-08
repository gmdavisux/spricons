<?php
if(!$_GET['i']){$_GET['i']='home';}
if(!$_GET['f']){$_GET['f']='svg/spricons/action-symbol.svg';}
$currentIcon=$_GET['f'].'#'.$_GET['i'];
$title=$_GET['i'].' icon at spricons.com';

function codify($str){
    $str=str_replace('    ', '  ', $str);
    $str=nl2br(htmlentities($str));
    return $str;
}

$content.='
    <div class="jumbotron">
      <div class="container" style="background-color:#fff; border-bottom:#ccc;">
          <div class="row">
            <div class="col-md-12">
                <h2 class="spr-3x" data-icon="'.$currentIcon.'">'.$currentIcon.'</h2>
            </div>
        </div>
      </div>
    </div>
';

$content.='
        <div class="container">';
$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Adding the icon</h3>
                </div>

                <div class="col-md-3">
                ';
$str='<h3 data-icon="'.$currentIcon.'" class="spr">h3 (normal)</h3>
<p data-icon="'.$currentIcon.'" class="spr">p (normal)</p>';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>Add the class <codespr</code> and the attribute <code>data-icon="'.$currentIcon.'"</code> to most elements; the icon will be inserted before any contents, sized relative to it\'s height and inheriting other attributes such as color.</p>
                    <div class="alert alert-success"><span data-icon="svg/material-design/svg-sprite-action-symbol.svg#ic_info_outline_24px" class="spr spr-3x spr-pull-left"></span>If the icon doesn\'t inherit color as expected, the problem may be how the designer (intentionally or unintentionally) created the svg file.
</div>
                    <div class="well">
                    <code class="prettyprint">';
$content.=nl2br(htmlentities($str)).'
                    </code>
                    </div>
                </div>

            </div><!-- row -->';
$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Sizes</h3>
                </div>

                <div class="col-md-3">
                ';
$str=              '<p data-icon="'.$currentIcon.'" class="spr-lg">p.spr-lg</p>
                    <p data-icon="'.$currentIcon.'" class="spr-2x">p.spr-2x</p>
                    <p data-icon="'.$currentIcon.'" class="spr-3x">p.spr-3x</p>
                    <p data-icon="'.$currentIcon.'" class="spr-4x">p.spr-4x</p>
                    <p data-icon="'.$currentIcon.'" class="spr-5x">p.spr-5x</p>';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>Besides inheriting the size of it\'s container, there are also 5 pre-defined size classes relative to their container: spr-lg (33% increase), spr-2x, spr-3x, spr-4x, or spr-5x.</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div>';
$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Animation</h3>
                </div>

                <div class="col-md-3">
                ';
$str='<p data-icon="svg/spricons/action-symbol.svg#spiral" class=" spr-5x spr-spin"></p>
<p>
  <span data-icon="'.$currentIcon.'" class=" spr-5x spr-spin"></span>
  <span data-icon="'.$currentIcon.'" class=" spr-5x spr-pulse"></span>
<p>
<p>
  <span data-icon="'.$currentIcon.'" class=" spr-5x spr-spin-ccw"></span>
  <span data-icon="'.$currentIcon.'" class=" spr-5x spr-pulse-ccw"></span>
</p>';
$content.=$str.'
                </div>

                <div class="col-md-9">
                <p>Use the <code>spr-spin</code> class to get any icon to rotate clockwise or <code>spr-spin-ccw</code> for counter-clockwise, and use <code>spr-pulse</code> and <code>spr-pulse-ccw</code> to have it rotate with 8 steps. Note, if the icon is round and centered, it may not appear to rotate (which is why I show the spiral).</p>
                    <div class="well"><code class="prettyprint">';
$content.=nl2br(htmlentities($str)).'</code></div>
                </div>

            </div><!-- row -->';

$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Lists</h3>
                </div>

                <div class="col-md-3">
                ';
$str=          '<ul class="spr-ul">
                  <li class="spr-li spr" data-icon="'.$currentIcon.'">List icons</li>
                  <li class="spr-li spr" data-icon="'.$currentIcon.'">can be used</li>
                  <li class="spr-li spr spr-spin" data-icon="'.$currentIcon.'">as bullets</li>
                  <li class="spr-li spr-2x spr" data-icon="'.$currentIcon.'">in lists</li>
                </ul>';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>Use <code>spr-ul</code> and <code>spr-li</code> to easily replace default bullets in unordered lists. You can combine this with other classes such as animation or size.</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div><!-- row -->';

$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Bordered &amp; Pulled</h3>
                </div>

                <div class="col-md-3">
                ';
$str=          '<p>
  <span data-icon="svg/spricons/action-symbol.svg#home" class="spr spr-3x spr-pull-left spr-border"></span>
    <span  data-icon="'.$currentIcon.'" class="spr spr-3x spr-pull-right spr-border"></span>
        ...to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.
      </p>';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>Use <code>spr-border</code>, <code>spr-pull-left</code> and <code>spr-pull-right</code> to easily add quotes or other icons to paragraphs. You can combine this with other classes such as animation or size. <i>Note: This class must be be enclosed in it\'s own span or div.</i></p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div><!-- row -->';

$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Stacked</h3>
                </div>

                <div class="col-md-3">
                ';
$str=          '<span class="spr-stack spr-lg">
          <span data-icon="svg/spricons/action-symbol.svg#circle" class="spr spr-stack-2x"></span>
           <span data-icon="svg/spricons/action-symbol.svg#star" class="spr spr-stack-1x spr-inverse"></span>
        </span>
        star on circle<br><span class="spr-stack spr-lg">
           <span data-icon="svg/spricons/action-symbol.svg#circle-thin" class="spr spr-stack-2x"></span>
          <span data-icon="svg/spricons/action-symbol.svg#star" class="spr spr-stack-1x"></span>
        </span>
        star on circle-thin<br>
        <span class="spr-stack spr-lg">
          <span data-icon="svg/spricons/action-symbol.svg#star" class="spr spr-stack-2x"></span>
           <span data-icon="svg/spricons/action-symbol.svg#star" class="spr spr-stack-1x spr-inverse"></span>
        </span>
        star on star<br>
        <span class="spr-stack spr-2x">
          <span data-icon="svg/spricons/action-symbol.svg#square" class="spr spr-stack-2x"></span>
          <span data-icon="svg/spricons/action-symbol.svg#lock" class="spr spr-stack-1x spr-inverse"></span>
        </span>
        lock on square<br>
        <span class="spr-stack spr-3x">
          <span data-icon="svg/spricons/action-symbol.svg#trash" class="spr spr-stack-1x"></span>
          <span data-icon="svg/spricons/action-symbol.svg#do-not" class="spr spr-stack-2x text-danger"></span>
        </span>
        do-not on trash
';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>To stack multiple icons, use <code>spr-stack</code> on the parent, the <code>spr-stack-1x</code> for the regularly sized icon, and <code>spr-stack-2x</code> for the larger icon. <code>spr-inverse</code> can be used as an alternative icon color. You can even use larger icon classes on the parent to get further control of sizing.</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div><!-- row -->';

$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Rotate &amp; Flip</h3>
                </div>

                <div class="col-md-3 h3">
                ';
$str=          '<span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr"></span>normal<br>
        <span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-90"></span>spr-rotate-90<br>
        <span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-180"></span>spr-rotate-180<br>
        <span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-rotate-270"></span>spr-rotate-270<br>
        <span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-flip-horizontal"></span>spr-flip-horizontal<br>
        <span data-icon="svg/spricons/action-symbol.svg#star-half-o" class="spr spr-flip-vertical"></span>spr-flip-vertical
';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>To arbitrarily rotate and flip icons, use the <code>spr-rotate-*</code> and <code>spr-flip-*</code> classes.

</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div><!-- row -->';

$content.='
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading">Bootstrap</h3>
                </div>

                <div class="col-md-3 h3">
                ';
$str=          '      <p>
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
          <a class="btn btn-default spr spr-lg" href="#" data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-left"></a>
          <a class="btn btn-default spr spr-lg" href="#" data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-up"></a>
          <a class="btn btn-default spr spr-lg" href="#" data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-down"></a>
          <a class="btn btn-default spr spr-lg" href="#" data-icon="svg/spricons/arrows-symbol.svg#arrow-circle-right"></a>
        </div>
      </div>
      <div class="margin-bottom">
        <div class="input-group margin-bottom-sm">
          <span class="input-group-addon" data-icon="svg/spricons/action-symbol.svg#envelope" class="spr spr-fw"></span>
          <input class="form-control" type="text" placeholder="Email address">
        </div>
        <div class="input-group">
          <span class="input-group-addon" data-icon="svg/spricons/action-symbol.svg#lock" class="spr spr-fw"></span>
          <input class="form-control" type="password" placeholder="Password">
        </div>
      </div>
      <div class="margin-bottom">
        <div class="btn-group open">
          <a class="btn btn-primary" href="#"><span data-icon="svg/spricons/action-symbol.svg#heart-o" class="spr spr-fw"></span> User</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" class="spr" data-icon="svg/spricons/arrows-symbol.svg#chevron-down"></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-icon="svg/spricons/action-symbol.svg#pencil" class="spr spr-fw"> Edit</a></li>
            <li><a href="#" data-icon="svg/spricons/action-symbol.svg#trash" class="spr spr-fw"> Delete</a></li>
            <li><a href="#" data-icon="svg/spricons/action-symbol.svg#do-not" class="spr spr-fw"> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"> Make admin</a></li>
          </ul>
        </div>
      </div>
';
$content.=$str.'
                </div>

                <div class="col-md-9">
                    <p>To arbitrarily rotate and flip icons, use the <code>spr-rotate-*</code> and <code>spr-flip-*</code> classes.

</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=codify($str).'
                        </code>
                    </div>
                </div>
            </div><!-- row -->';

$content.='
        </div><!-- container -->
';
include('template.php');
?>
