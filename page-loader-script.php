<script>

	const loaderWrapper = document.getElementById("loader-wrapper");
	const main = document.getElementById("main");

	function loadPage() {
		setTimeout(() => { 	
			main.style.display = "block";
			loaderWrapper.style.display = "none";
		}, 3000);
	}

	loadPage();

</script>