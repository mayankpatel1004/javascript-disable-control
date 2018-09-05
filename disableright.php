<!DOCTYPE html>
<html>
<head>
  <title>jQuery With Example</title>
  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(function () {
      $(document).bind("contextmenu",function(e){
        e.preventDefault();
        alert("Right Click is not allowed");
      });

      /*$('.dvOne').bind("contextmenu",function(e){
        e.preventDefault();
        alert("Right Click is not allowed on div");
      });*/
    });
  </script>
</head>
<body>
  <div class="dvOne" style="border:1px solid Red; width:300px;">
    <p>Test</p>
    <input type="text" />
  </div>
  <input type="button" id="btnClick" value="Click" />
</body>
</html>
