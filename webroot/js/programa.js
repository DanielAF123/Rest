var miXHR;
function cargar(){
    miXHR=new XMLHttpRequest();
    $(function(){
        $("#busqueda").on("keyup",cambio);
        $("#busqueda").on("keydown",cambio);
        $("#provincia").blur(provincia);
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
    var numeros=valor.split("");
        if(numeros.length==4){
            valor=numeros[0];
        }else{
            if(numeros[0]==0){
                valor=numeros[1];
            }else{
            valor=numeros[0]+numeros[1];
        }
        }
    miXHR.send("busqueda="+valor+"&ajaxP=ajax&pagina=departamentos");
}else{
        alert("Error al cargar AJAX");
}
}
function getProvincia(){
    
    if(this.readyState == 4 && this.status == 200){
        var json=this.responseText;
        json=JSON.parse(json);
            $("#provincias").empty();
            json.forEach(function(item,value){
                $("#provincias").attr({value:json[value].nombre}); 
            });
    }
    
}
window.addEventListener('load',cargar,false);