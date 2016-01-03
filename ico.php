<?php
if(!$_GET['i']){$_GET['i']='home';}
if(!$_GET['f']){$_GET['f']='svg/spricons/action-symbol.svg';}
$currentIcon=$_GET['f'].'#'.$_GET['i'];
$title=$_GET['i'].' icon at spricons.com';
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
                    <p>Add the attribute data-icon="'.$currentIcon.'" to most elements; the icon will be inserted before any contents, sized relative to it\'s height and inheriting other attributes such as color.</p>
                    <div class="alert alert-success">
                    <ul class="spr-ul"><li data-icon="svg/material-design/svg-sprite-action-symbol.svg#ic_info_outline_24px" class="spr-lg spr-li">If the icon doesn\'t inherit color as expected, the problem may be how the designer (intentionally or unintentionally) created the svg file. </li>
                    </ul>
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
                <p>Use the spr-spin class to get any icon to rotate clockwise or spr-spin-ccw for counter-clockwize, and use spr-pulse and spr-pulse-ccw to have it rotate with 8 steps. Note, if the icon is round and centered, it may not appear to rotate (which is why I show the spiral).</p>
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
                    <p>Use spr-ul and spr-li to easily replace default bullets in unordered lists. You can compbine this with other classes such as animation or size.</p>
                    <div class="well">
                        <code class="prettyprint">';
    $content.=nl2br(htmlentities($str)).'
                        </code>
                    </div>
                </div>
            </div>';

$content.='
        </div><!-- container -->
';
include('template.php');
?>
