<?php
if(!$_GET['i']){$_GET['i']='home';}
if(!$_GET['f']){$_GET['f']='icons.svg';}
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
                            <h3 data-icon="'.$currentIcon.'" class="spr">h3 (normal)</h3>
                            <p data-icon="'.$currentIcon.'" class="spr">p (normal)</p>
                        </div>
                        <div class="col-md-9">
                            <p>Add the attribute data-icon="'.$currentIcon.'" to most elements; the icon will be inserted before any contents, sized relative to it\'s height and inheriting other attributes such as color.</p>
                            <div class="alert alert-success">
                            <ul class="spr-ul"><li data-icon="material-design/svg-sprite-action-symbol.svg#ic_info_outline_24px" class="spr-lg spr-li">If the icon doesn\'t inherit color as expected, the problem may how the designer (intentionally or unintentionally) created the svg file. </li>
                            </ul>
                            </div>
                            <div class="well">
                            <code class="prettyprint">
&lt;h3 data-icon=&quot;'.$currentIcon.'&quot;&gt;h3 (normal)&lt;/h3&gt;<br/>
&lt;p data-icon=&quot;'.$currentIcon.'&quot;&gt;p (normal)&lt;/p&gt;<br/>
                            </code>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading">Sizes</h3>
                        </div>
                        <div class="col-md-3">
                            <p data-icon="'.$currentIcon.'" class="spr-lg">p.spr-lg</p>
                            <p data-icon="'.$currentIcon.'" class="spr-2x">p.spr-2x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-3x">p.spr-3x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-4x">p.spr-4x</p>
                            <p data-icon="'.$currentIcon.'" class="spr-5x">p.spr-5x</p>
                        </div>
                        <div class="col-md-9">
<p>There are also 5 additional size classes relative to their container: spr-lg (33% increase), spr-2x, spr-3x, spr-4x, or spr-5x.</p>                            <div class="well">
<code class="prettyprint">
&lt;p class=&quot;spr-lg&quot; data-icon=&quot;'.$currentIcon.'&quot;&gt;p.spr-lg&lt;/p&gt;<br/>
&lt;p class=&quot;spr-2x&quot; data-icon=&quot;'.$currentIcon.'&quot;&gt;p.spr-2x&lt;/p&gt;<br/>
&lt;p class=&quot;spr-3x&quot; data-icon=&quot;'.$currentIcon.'&quot;&gt;p.spr-3x&lt;/p&gt;<br/>
&lt;p class=&quot;spr-4x&quot; data-icon=&quot;'.$currentIcon.'&quot;&gt;p.spr-4x&lt;/p&gt;<br/>
&lt;p class=&quot;spr-5x&quot; data-icon=&quot;'.$currentIcon.'&quot;&gt;p.spr-5x&lt;/p&gt;<br/>
</code>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading">Animation</h3>
                        </div>
                        <div class="col-md-3">
                            <span data-icon="'.$currentIcon.'" class=" spr-5x spr-spin"></span>
                            <span data-icon="icons.svg#spiral" class=" spr-5x spr-spin"></span>
                        </div>
                    </div>
                </div>
';
include('template.php');
?>
