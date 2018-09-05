<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Disable Copy Paste</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
      jQuery('#txtInput').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
    });
</script>
<script type="text/javascript">
jQuery(window).keypress(function(e){
   if((e.which == 61 && e.ctrlKey) || (e.which == 53 && e.ctrlKey)){
       //Ctrl + "+" is pressed, 61 is for =/+ anr 43 is for Numpad + key
	   e.preventDefault();
   } 
});
</script>
</head>

<body>
<input type="text" name="test" id="txtInput" />
</body>
</html>