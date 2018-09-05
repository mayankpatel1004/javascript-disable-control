<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


<script type="text/javascript" language="javascript">
jQuery(function () {
      jQuery(document).bind("contextmenu",function(e){
        e.preventDefault();
        //alert("Right Click is not allowed");
      });
  });
</script>


<script type="text/javascript" language="javascript">
var keys = [37, 38, 39, 40];
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
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
    /*jQuery('body').mousewheel(function(event) {
          event.preventDefault();
          // Do some stuff
    });*/
</script>

<script language="JavaScript">
function disableCtrlKeyCombination(e)
{
	//list all CTRL + key combinations you want to disable
	var forbiddenKeys = new Array('a','n','c','x','v','j','w','u','=','-');
	var key;
	var isCtrl;

	if(window.event)
	{
		key = window.event.keyCode;     //IE
		if(window.event.ctrlKey)
		{
			isCtrl = true;
		}
		else
		{
			isCtrl = false;
		}
	}
	else
	{
		key = e.which;     //firefox
		if(e.ctrlKey)
		{
			isCtrl = true;
		}
		else
		{
			isCtrl = false;
		}
	}

	//if ctrl is pressed check if other key is in forbidenKeys array
	if(isCtrl)
	{
		for(i=0; i<forbiddenKeys.length; i++)
		{
			//case-insensitive comparation
			if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
			{
				//alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
				return false;
			}
		}
	}
	return true;
}
</script>
</head>

<body id="test" onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
Press ctrl and you can check various key is disable with CTRL. like  — 'a', 'n', 'c', 'x', 'v', 'j' , 'w' Just add key in above the array and disable key as you want.
<input type="text" name="test" id="test"/>

</body>
</html>