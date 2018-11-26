

var exo = new DisplayImage("squat.gif", 60000);
var repos = new DisplayImage("fitprof.png", 15000);

var i = 0;
var j = 0;
var imageHTML = document.getElementById("imageSport");
const pisteAudio = document.getElementById('pisteAudio');
var oAudio = document.createElement("AUDIO"); 

















var imgs = new Array()
imgs[0]=exo;
imgs[1]=repos;
/*imgs[0].classList.add('exo');
imgs[1].classList.add('repos');
*/






function lecteurAudio()
 { 
 	
 
 oAudio.volume = 0.5;

  if(oAudio.canPlayType("audio/mp3")); 

  oAudio.setAttribute("src", "countdown.mp3");
 
  pisteAudio.appendChild(oAudio); }



let currentImage = 1;
let run = 0;

function changeImage(){
	if (run < 8) { 
		if (currentImage == imgs.length - 1) {
			currentImage = 0;  
		} else {
			currentImage++;
		}
		let newImg = imgs[currentImage];
		imageHTML.src = newImg.img;

		if(imageHTML.className == "fitprof") {
			imageHTML.className = "exo";
		} else if(imageHTML.className == "exo") {
			imageHTML.className = "fitprof";
		}

		setTimeout(changeImage, newImg.duree);
		setTimeout(function(){
			/*let i = 0;
			setInterval(function(){
				if (i < 6) {
					// jouer son...
					console.log('son');
					i++;
				}
			}, 1000)*/
			
			lecteurAudio();
			oAudio.play();
			
		}, newImg.duree - 5000);
				
		chronoReset();	
		run++;
	} 
}

function runExercice(){
	imageHTML.src = repos.img;
	setTimeout(changeImage, 6000);
}