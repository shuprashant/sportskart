<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>sportkart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div>
		Schedule for Carrom Singles(girls) is shown below:
		<button type="button" id="ajax" onclick="load()">click here</button>
	</div>
	<script>
			function load() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("ajax").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "carrom.txt", true);
			xhttp.send();

		}
		</script>
</body>
</html>