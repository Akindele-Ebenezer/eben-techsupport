const navIcon = document.querySelector("#nav-icon img");
const smNavLinks = document.querySelector(".sm-nav-links");  

 //console.log(body)
	 navIcon.addEventListener("click", () => {
	 smNavLinks.classList.toggle('show'); 
	}); 

	footer.addEventListener("click", () => {
		smNavLinks.classList.remove('show');
	});
 
