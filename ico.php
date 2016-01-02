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
                <div class="container">
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
                            <ul class="spr-ul"><li data-icon="material-design/svg-sprite-action-symbol.svg#ic_info_outline_24px" class="spr-lg spr-li">If the icon doesn\'t inherit color as expected, the problem may be how the designer (intentionally or unintentionally) created the svg file. </li>
                            </ul>
                            </div>
                            <div class="well">
                            <code class="prettyprint">';
$content.=nl2br(htmlentities($str)).'
                            </code>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading">Sizes</h3>
                        </div>
                        <div class="col-md-3">
                        ';
$str=                      '
                            <p data-icon="'.$currentIcon.'" class="spr-lg">p.spr-lg</p>
                            <p data-icon="'.$currentIcon.'" class="spr-2x">p.spr-2x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-3x">p.spr-3x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-4x">p.spr-4x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-5x">p.spr-5x</p>';
$content.=$str.'
                </div>
                        <div class="col-md-9">
<p>There are also 5 additional size classes relative to their container: spr-lg (33% increase), spr-2x, spr-3x, spr-4x, or spr-5x.</p>                            <div class="well">
<code class="prettyprint">';
$content.=nl2br(htmlentities($str)).'</code>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading">Animation</h3>
                        </div>
                        <div class="col-md-3">
                            <span data-icon="'.$currentIcon.'" class=" spr-5x spr-spin"></span>
                            <span data-icon="svg/spricons/icons.svg#spiral" class=" spr-5x spr-spin"></span>
                        </div>
                    </div>
                </div>
';
include('template.php');
?>
