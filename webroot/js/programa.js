var miXHR;
function cargar(){
    miXHR=new XMLHttpRequest();
    $(function(){
        $("#busqueda").change(cambio);
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
            console.log(json.length);
            json.forEach(function(item,value){
                p.innerHTML+=json[value].codigo+" ";    
            });
        
            
    }
    
}
window.addEventListener('load',cargar,false);