function setInterfaz(typeUser){
	if(typeUser=="Boss"){
		document.getElementById('managerProduct').attributes.removeNamedItem("hidden");
	}else{
		if(typeUser=="Client"){
			document.getElementById('sales').attributes.removeNamedItem("hidden");
		}
	}
}
function putUser(){
	var link=location.href;//get all url "http://...."
	var variables=link.substring(link.indexOf("?")+1);
	var splitVariables=variables.split("&");
	var typeUser=splitVariables[0].split("=");
	typeUser=typeUser[1];
	var name=splitVariables[1].split("=");
	name=name[1];
	var surname=splitVariables[2].split("=");
	surname=surname[1];
	var p=document.getElementById("welcome");
	p.innerHTML="Welcome "+typeUser+"<br>"+name+" "+surname;
	setInterfaz(typeUser);
}
