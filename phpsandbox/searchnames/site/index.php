<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
	<script>
		// async function showSug(str) {
		// 	if(str === ''){
		// 		document.getElementById('output').innerHTML = '';	
		// 	} else{
		// 		let req = await fetch("http://localhost/phpsandbox/searchnames/server?q="+str);
		// 		let answer = await req;
		// 		document.getElementById('output').innerHTML = answer;
		// 		console.log(answer);
		// 	}
		// }

		function showSug(str) {
			if(str === ''){
				document.getElementById('output').innerHTML = '';	
			} else{
				var xmlhttp  = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if(this.readyState == 4) {
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q=" + str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container mt-5">
		<h2>Search names</h2>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="name" class="form-control" id="name" placeholder="Enter name" onkeyup="showSug(this.value)">
			<span class="form-text text-muted">Suggestions: <span id="output"></span></span>
		</div>
	</div>
</body>
</html>