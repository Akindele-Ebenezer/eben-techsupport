const navIcon = document.querySelector("#nav-icon img");
const smNavLinks = document.querySelector(".sm-nav-links");
 //console.log(smNavLinks);
 
navIcon.addEventListener("click", () => {
	smNavLinks.classList.toggle('show'); 
});
 

