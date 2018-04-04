function send(url,id='',flag=0){

	if(id!==''){
	var fm = document.getElementById(id);
	var fd = new FormData(fm);
	}else{
		var fd = new FormData();
	}
	var xhr = new XMLHttpRequest();
	xhr.open('post',url,'true');
	xhr.onreadystatechange = function(){
		if(this.readyState==4){
			alert(this.responseText);
			if(flag==0){
				location.reload();
			}		
		}
	}
	xhr.send(fd);
}