var tmp;
		var imgs=[];
		var slider;
		var imgAtual;
		var maxImg;
		var minImg=1;
		var btP;
		var btA;


		function preCarregamento(){
			var s=0;
			for(var i=0;i<=4;i++){
				imgs[i]=new Image();
				imgs[i].src="img/b"+s+".jpg";
				s++;
		}
		}

		function carregar(img){

			/*tipo css pero dinamico
			*/
			slider.style.backgroundImage="url('"+imgs[img].src+"')";
			slider.style.backgroundPosition ="center";
		}


		function inicia(){

			preCarregamento();
			imgAtual=1;
			maxImg=imgs.length;
			slider=document.getElementById("dvslider");
			carregar(imgAtual);
			//tmp=setInterval(troca,1000);
			btP=document.getElementById("bt1");
			btP.addEventListener("click", troca);

			btA=document.getElementById("bt2");
			btA.addEventListener("click", troca2);
		}


		function troca(){
		imgAtual++;
			if(imgAtual> maxImg){
				imgAtual=1;
			}
		
		carregar(imgAtual);
		}
		

		function troca2(){
		imgAtual--;
			if(imgAtual<minImg){
				imgAtual=4;
			}
		
		carregar(imgAtual);
		}
		
		window.addEventListener("load", inicia);
