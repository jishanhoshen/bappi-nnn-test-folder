<?php ?>
<div id="bbb"></div>
<script>
	var s = 0;
	var m = 0;
	var h = 0;
	setInterval(function(){
		s++
		if(s==2){
			
			 m++;
			 s=0;
		}
		 if(s<10){
				s = '0'+s; 
			 }
		if(m==15){
			h++
			m=0;
		}
		if(m<10){
		document.getElementById("bbb").innerHTML=+h+':'+'0'+m+':'+s;
		}
		else{
			document.getElementById("bbb").innerHTML=+h+':'+m+':'+s;
		}
	},1000);
</script>