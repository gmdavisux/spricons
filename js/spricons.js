/*!
 * spricons v 0.1 by @gmdavisux - http://spricons.com - @spricons
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
 * Copyright 2015-2016 Gary M. Davis
*/

(function(document){
  "use strict";

  function icon(name) {
    var icon =  "<svg class='spr'>" +
                  "<use xlink:href='" + name + "' />" +
                "</svg>";
    return icon;
  }


  function renderIcons() {
    var render = true;
    var icons = document.querySelectorAll("[data-icon]"); //get all the data-icon atts

    for (var i = 0; i < icons.length; i++) { //iterate through
      var currentIcon = icons[i]; //each one
      var name        = currentIcon.getAttribute("data-icon"); //get the name into var
      var content     = currentIcon.innerHTML;
      currentIcon.innerHTML = icon(name) + content; //inserts the new markup
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
//    renderSprite();
    renderIcons();
  });

})(window.document);
