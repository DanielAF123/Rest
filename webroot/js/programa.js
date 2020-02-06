var miXHR;
function cargar(){
    miXHR=new XMLHttpRequest();
    $(function(){
        $("#busqueda").on("keyup",cambio);
        $("#busqueda").on("keydown",cambio);
        $("#provincia").on("keyup",provincia);
        $("#provincia").on("keydown",provincia);
    });
}


function cambio(){
    if(miXHR){
    var valor=$("#busqueda").val();
    var url="../index.php";
    miXHR.open("POST",url,true);
    miXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    miXHR.onreadystatechange=cambioDepartamento;
    miXHR.send("busqueda="+valor+"&ajax=ajax&pagina=departamentos");
}else{
        alert("Error al cargar AJAX");
}
}
function cambioDepartamento(){
    
    if(this.readyState == 4 && this.status == 200){
        var p=document.getElementById("departamentos");
        var json=this.responseText;
        p.innerHTML="";
        json=JSON.parse(json);
            console.log(json);
            json.forEach(function(item,value){
                p.innerHTML+=json[value].desc+" ";  
            });
        
            
    }
    
}
function provincia(){
    if(miXHR){
    var valor=$("#provincia").val();
    var url="../index.php";
    miXHR.open("POST",url,true);
    miXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    miXHR.onreadystatechange=getProvincia;
    miXHR.send("busqueda="+valor+"&ajaxP=ajax&pagina=departamentos");
}else{
        alert("Error al cargar AJAX");
}
}
function getProvincia(){
    
    if(this.readyState == 4 && this.status == 200){
        var json=this.responseText;
        json=JSON.parse(json);
            console.log(json);
            json.forEach(function(item,value){
                $("#provincias").append("<option value="+json[value].nombre+">"+json[value].nombre+"</option>");  
            });
    }
    
}
window.addEventListener('load',cargar,false);