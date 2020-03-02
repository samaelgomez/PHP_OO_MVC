function validate_nombre(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_sexo(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_pais(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_aficion(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate(){
    var check=true
    
    var v_nombre=document.getElementById('nombre').value;
    var v_sexo=document.getElementsByName('sexo');
    var v_idioma=document.getElementById('idioma[]');
    var v_aficion=document.getElementsByName('aficion[]');
    
    var r_nombre=validate_nombre(v_nombre);
    var r_sexo=validate_sexo(v_sexo);
    var r_idioma=validate_idioma(v_idioma);
    var r_aficion=validate_aficion(v_aficion);
    
    if(!r_nombre){
        document.getElementById('error_nombre').innerHTML = " * El nombre introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_nombre').innerHTML = "";
    }
    if(!r_sexo){
        document.getElementById('error_sexo').innerHTML = " * No has seleccionado ningun genero";
        check=false;
    }else{
        document.getElementById('error_sexo').innerHTML = "";
    }
    if(!r_idioma){
        document.getElementById('error_idioma').innerHTML = " * No has seleccionado ningun idioma";
        check=false;
    }else{
        document.getElementById('error_idioma').innerHTML = "";
    }
    if(!r_aficion){
        document.getElementById('error_aficion').innerHTML = " * No has seleccionado ninguna aficion";
        check=false;
    }else{
        document.getElementById('error_aficion').innerHTML = "";
    }
    return check;
}