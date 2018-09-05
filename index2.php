<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Disable Control Key</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


<script type="text/javascript" language="javascript">
jQuery(function(){
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
function preventDefault(e)
{
	e = e || window.event;
	if (e.preventDefault)
	{
		e.preventDefault();
		e.returnValue = false;  
	}
}
function keydown(e)
{
    for (var i = keys.length; i--;)
	{
        if (e.keyCode === keys[i])
		{
            preventDefault(e);
            return;
        }
    }
}
function wheel(e)
{
	preventDefault(e);
}

function disable_scroll()
{
	if (window.addEventListener)
	{
		window.addEventListener('DOMMouseScroll', wheel, false);
	}
	window.onmousewheel = document.onmousewheel = wheel;
	document.onkeydown = keydown;
}

function enable_scroll()
{
	if (window.removeEventListener)
	{
		window.removeEventListener('DOMMouseScroll', wheel, false);
    }
	window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}
</script>

<script language="JavaScript">

jQuery('#test').keypress(function(e){
	var result = disableCtrlKeyCombination(e);
	return result;
});

function disableCtrlKeyCombination(e)
{
	//list all CTRL + key combinations you want to disable
	var forbiddenKeys = new Array('a','n','c','x','v','j','w','u','=','-');
	var key;
	var isCtrl;
	//alert(window.event.keyCode);
	
	if(window.event)
	{
		key = window.event.keyCode;     //IE
		if(window.event.ctrlKey)
		{
			disable_scroll();
			isCtrl = true;
		}
		else
		{
			enable_scroll();
			isCtrl = false;
		}
	}
	else
	{	
		key = e.which;     //firefox
		if(key == 123)
		{
			return false;
		}
		
		if(e.ctrlKey)
		{
			disable_scroll();
			isCtrl = true;
		}
		else
		{
			enable_scroll();
			isCtrl = false;
		}
	}
	//oalert(String.fromCharCode(key).toLowerCase());
	//if ctrl is pressed check if other key is in forbidenKeys array
	//alert(String.fromCharCode(key).toLowerCase()+"---"+key);
	if(isCtrl)
	{
		var result = true;
		for(i=0; i<forbiddenKeys.length; i++)
		{
			//case-insensitive comparation
			if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
			{
				//alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
				result = false;
				break;
			}
		}
		return result;
	}
	else
		return false;
	return true;
}
</script>
</head>

<body id="test" onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
Press ctrl and you can check various key is disable with CTRL. like  — 'a', 'n', 'c', 'x', 'v', 'j' , 'w' Just add key in above the array and disable key as you want.
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<br /><br /><br />Test
<input type="text" name="test" id="test"/>

</body>
</html>