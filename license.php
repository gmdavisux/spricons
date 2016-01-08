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
$content.='
<div class="well">
    <h2>The MIT License (MIT)</h2>
    <p>Copyright (c) 2016 Gary M. Davis</p>
    <p>CSS derived from Font Awesome: Copyright (c) by Dave Gandy - http://fontawesome.io (MIT license)</p>
    <p>Javascript derived from evil-icons: Copyright (c) 2014 Alexander Madyankin, Roman Shamin - http://evil-icons.io (MIT license)</p>

<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>

<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>

<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
</div>
';
$content.='
<h2>Software Credits</h2>
<p>Although spricons is very different from the following, development was made possible by adapting and learning from the following components:</p>
<div id="credit-area">
    <div class="well">
        <h3><a href="http://fontawesome.io">Font Awesome</a> by <b>Dave Gandy </b> <br><small> <i>Licensed Under: <a href="http://www.tldrlegal.com/license/mit-license">MIT License</a></i></small></h3>
        <p>Font-awesome is the icon font and CSS toolkit that inspired spricons. I adapted much of the CSS (with significant changes for svg instead of fonts) and tried to use the same icon names. My original goal was to match the functionality and ease of use of font-awesome.</p>
        <h3><a href="http://evil-icons.io">Evil-Icons</a> by <b>Alexander Madyankin, Roman Shamin</b> <br><small> <i>Licensed Under: <a href="http://www.tldrlegal.com/license/mit-license">MIT License</a></i></small></h3>
        <p>Evil-icons is SVG icons, css and javascript that inspired portions of spricons. Specifically, I adopted the use of the data-icon attribute and the insertion of svg elements using javascript.</p>
    <h3>Others</h3>
    <p>I learned so much about SVG from <a href="https://sarasoueidan.com/">Sara Soueidan at sarasoueidan.com</a> and <a href="https://css-tricks.com/author/chriscoyier/">Chris Coyier at css-tricks.com</a> and gathered a lot of ideas from their writing.</p>
    </div>
</div>
';
$content.='
        </div>
    </div>
';
include('template.php');
?>
