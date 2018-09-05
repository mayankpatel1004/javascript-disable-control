<html>
<head>
<script language="javascript">
    function onKeyDown() {
    // current pressed key
    var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
    if (event.ctrlKey && (pressedKey == "c" ||
    pressedKey == "v")) {
    // disable key press porcessing
    event.returnValue = false;
    }
    } // onKeyDown
    </script>
</head>
<body>
<form name="aForm">
  <input type="text" name="aText" onkeydown = "onKeyDown()">
</form>
</body
    >
</html>