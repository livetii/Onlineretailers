function $(id){
	return typeof id === 'string'?document.getElementById(id):id;
}
window.onload=tab;

function tab(){
	var index=0;
	var timer=null;
	var titles=$('notice-tit').getElementsByTagName('li'),
		divs=$('notice-con').getElementsByTagName('div');
	for(j=0; j<titles.length; j++){
		titles[j].id=j;
		titles[j].onmouseover=function(){
			clearInterval(timer);
			changeOption(this.id);
		}

		titles[j].onmouseout=function(){
			timer=setInterval(autoPlay,2000);
		}
	}

	if(timer){//好像没作用
		clearInterval(timer);
		timer=null;
	}
	timer=setInterval(autoPlay,2000);

	function autoPlay(){
		index++;
		if(index>=titles.length){
			index=0;
		}
		changeOption(index);
	}

	function changeOption(curIndex){
		for(var i=0; i<titles.length; i++){
				titles[i].className='';
				divs[i].style.display='none';
		}
		titles[curIndex].className='select';
		divs[curIndex].style.display='block';
		index=curIndex;
	}

	$("username").onblur = function(){
		if(this.value == "") alert("请输入账号！");
	}
	$("password").onblur = function(){
		if(this.value == "") alert("请输入密码！");
		else $("captcha-box").style.display = "inline-block";
	}
	$("loginbtn").onclick = function(){
		if($("username").value == "" || $("password").value == "" || $("captcha").value == ""){
			alert("请输入完整信息！");
			return false;
		}
	}
	
}