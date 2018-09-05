<!DOCTYPE html>
<html>
<!--
  Created using jsbin.com
  Source can be edited via http://jsbin.com/disable-scrolling/1/edit
-->
<head>
<meta charset=utf-8 />
<title>JS Bin</title>

<style id="jsbin-css">

* { margin:0; padding:0; }
#page { width:400px; margin:20px; }
p { margin:20px 0; }
button { padding:2px 10px; }
.enabled { color:green }
.disabled { color:red }
</style>
</head>
<body>
  
  <div id="page">
    
    <button id="enable">enable scrolling</button>
    <button id="disable">disable scrolling</button>
    <strong id="status" class="enabled">enabled</strong>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae velit sit amet velit rhoncus mattis. Etiam placerat ipsum sit amet arcu vestibulum ultricies pellentesque urna molestie. Donec tincidunt fringilla mi, non aliquet ipsum porttitor eget. Pellentesque et lobortis nisi. Nam lectus lectus, molestie nec facilisis pellentesque, sollicitudin a neque. Etiam sed tristique eros. Sed ac sagittis urna. Etiam elementum lectus sit amet enim aliquam sit amet egestas purus tristique. Aliquam lobortis posuere dolor, vitae lobortis arcu pharetra ut. Mauris gravida cursus turpis, id placerat justo imperdiet quis. Ut fringilla molestie tristique. Vestibulum pellentesque nisl vulputate magna viverra fermentum.</p>


  </div>
  
<script>
document.getElementById("enable").onclick = function() {
  enable_scroll();
  document.getElementById("status").innerHTML = "enabled";
    document.getElementById("status").className = "enabled";
};

document.getElementById("disable").onclick = function() {
  disable_scroll();
  document.getElementById("status").innerHTML = "disabled";
  document.getElementById("status").className = "disabled";
};



// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = [37, 38, 39, 40];

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function keydown(e) {
    for (var i = keys.length; i--;) {
        if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
        }
    }
}

function wheel(e) {
  preventDefault(e);
}

function disable_scroll() {
  if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', wheel, false);
  }
  window.onmousewheel = document.onmousewheel = wheel;
  document.onkeydown = keydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
}
disable_scroll();
</script>
</body>
</html>