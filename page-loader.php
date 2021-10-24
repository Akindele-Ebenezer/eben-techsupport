<link rel="stylesheet" href="styles.css">
<style> 
		.progress:first-child {
			border: 1px solid #333;
			width: 1rem;
		}
		.progress:last-child {
			animation-name: progress;
			animation-duration: 3s;			
			border: 5px solid #333;
			border-radius: 1rem;
			margin-top: .5rem;
			width: 1rem;
		}
		
		
		#loader div:first-child {
			animation-name: load-1;
			animation-duration: 1.5s;
			animation-iteration-count: infinite;
			font-size: 2rem; 
			transform: rotate(330deg); 
			font-family: arial;
			color: red;
			font-weight: bold;
			border: 1px solid lightsalmon;
			padding: .2rem;
			border-radius: .2rem;
			box-shadow: 2px 2px 4px slateblue; 
		}
		
		#loader + div {  
			animation-name: load-2;
			animation-duration: 3s; 
			letter-spacing: .2em;
			font-weight: bold;
			padding: .1rem;
			border-radius: .3rem;
			margin-left: 1rem;
			font-style: italic;
			position: relative;
			z-index: 100;
		}
		
		#loader-wrapper {
			align-items: center;
			background: #fff;
			display: flex;
			height: 100vh;
			justify-content: center;
			position: absolute;
			width: 100%;
			z-index: 1201;
		}  
		
		@keyframes load-1 {
			0% {
				margin-bottom: 2rem;
				transform: scale(2);
			}
			
 			100% {
				margin-bottom: 0rem
			}

		}  
		
		@keyframes progress {
			0% {
				border-color: yellow;
				width: .5rem;
			}
			
			40% {
				border-color: blue;
				width: 1.5rem;
			}
			
			80% {
				border-color: green;
				width: 2.8rem;
			}
			
			100% {
				border-color: green;
				width: 6rem;				
			}
		}
</style>
 
			<div id="loader-wrapper">
				<div id="loader">
					<div>E</div> 
				</div>
				<div>TechS<div class="progress"></div><div class="progress"></div> 
				</div>
			</div>
 