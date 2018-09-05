<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Disable Mouse Scroll</title>
</head>
<body>
  <div id="page">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae velit sit amet velit rhoncus mattis. Etiam placerat ipsum sit amet arcu vestibulum ultricies pellentesque urna molestie. Donec tincidunt fringilla mi, non aliquet ipsum porttitor eget. Pellentesque et lobortis nisi. Nam lectus lectus, molestie nec facilisis pellentesque, sollicitudin a neque. Etiam sed tristique eros. Sed ac sagittis urna. Etiam elementum lectus sit amet enim aliquam sit amet egestas purus tristique. Aliquam lobortis posuere dolor, vitae lobortis arcu pharetra ut. Mauris gravida cursus turpis, id placerat justo imperdiet quis. Ut fringilla molestie tristique. Vestibulum pellentesque nisl vulputate magna viverra fermentum.</p>
  </div>
  
<script>

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

disable_scroll();
</script>
</body>
</html>