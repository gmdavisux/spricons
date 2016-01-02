<?
// get base url
if($_SERVER[HTTP_HOST]=='localhost'){
        $base=$_SERVER[HTTP_REFERER];
    }else{
        $base="http://spricons.com/";
    }
// don't let template be displayed
if(stristr($_SERVER['PHP_SELF'], 'template.php')){
    header('Location: '.$base);
    exit;
}
//print_r($_SERVER['PHP_SELF']);
function isActive($p){
    if(stristr($_SERVER['PHP_SELF'],$p)){
        return "active";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title?></title>
    <base href="<?=$base?>">
    <!-- Bootstrap -->
    <link href="css/custom_bootstrap.css" rel="stylesheet">
        <!--    spricons-->
      <link href="css/spricons.css" rel="stylesheet">
      <script src="js/spricons.js"></script>

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          body{padding-top: 50px; }
          code{padding: 0;}
        .navbar-inverse a.navbar-brand, .navbar-inverse a.navbar-brand:hover{color:#fc0; font-size:2em; }
        h1, h2, h3{color:#337ab7;}
          .heading{border-bottom: 2px solid #337ab7; padding-bottom: 3px; margin-bottom: 1em;}
          li.mag {height: 3em; white-space: nowrap; display: block; padding: 1em 0;}
          li.mag a{display: block;}
          li.mag a:hover{text-decoration: none;}
        li.mag a:hover svg.spr {
            position: relative;
            width: 2em;
            height: 2em;
            margin: -1em 0 -1em -2em;
                  }
/*
          div.col-md-3 h4{}
          div.col-md-3 h4 svg{margin-right:.2em;}
          div.col-md-3 h4:hover svg{height:4em; width:5em; margin: -1em 0 -1em -1em;}
          div.col-md-3 h4 span{display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;}
          div.col-md-3 h4:hover a{text-decoration: none; display:block; width:75%; height: inherit;}
*/
      </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button btn-primary" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span data-icon="plus" class="spr-2x" style="color:#fc0;"></span>
          </button>
          <a class="navbar-brand" href="./"><span class="spr" data-icon="svg/spricons/action-symbol.svg#home"></span><span style="opacity:.7; font-weight:normal">spr</span><span style="font-weight:bold;">icons</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?=isActive('index.php')?>"><a href="#">Icons <span class="sr-only">(current)</span></a></li>
            <li class="<?=isActive('start.php')?>"><a href="start.php">Getting started</a></li>
            <li class="<?=isActive('ico.php')?>"><a href="ico.php">Examples</a></li>
            <li class="<?=isActive('license.php')?>"><a href="license.php">License</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <?=$content?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
