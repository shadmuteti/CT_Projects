<html>
<head>
<script type="text/Javascript">
var target = document.getElementById("target")

var myEvent = new CustomEvent("message");

target.addEventListener("message", output, false);

function output(e) {
	alert("Event is called: " + e.type);
}

target.dispatchEvent(myEvent);
</script>
</head>
<body onload="output(e)";>
	<div id="target"></div>
</body>
</html>
