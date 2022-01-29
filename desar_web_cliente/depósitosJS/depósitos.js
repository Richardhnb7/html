const max=100; // Relleno máximo de los depósitos
let depósitos=document.getElementsByClassName('depósito');
let rellenos=[0,0,0,0]; // Array donde se guardan las cantidades de relleno de los depósitos
let explosiones=document.getElementsByClassName('explosión'); // Las explosiones que saldrán en cada depósito
let botones=document.getElementsByTagName('button');
var llenaciones=setInterval(()=>{ // Cada 500 ms se llenan los depósitos
    llenar(depósitos);
    for(i in rellenos){ // Se comprueba si algún depósito se ha llenaddo más de la cuenta
        if(rellenos[i]>max){
            explosiones[i].style.display='block'; // Aparece la explosión del depósito
            depósitos[i].style.setProperty('display','none'); // Desaparece el depósito que explota
            desactivar(explosiones[i],1300); // Desaparece el gif de la explosión cuando termina aproximadamente
            document.getElementsByTagName('button')[i].style.setProperty('display','none'); // Desaparece el botón de vaciar
        }
        if(todos_llenos(rellenos)){ // Si todos los depósitos segñun el array han superado el límite
            clearInterval(llenaciones); // Se dejan de llenar los depósitos
            setTimeout(()=>{ // En 1300 ms aparece un mensaje
                document.getElementsByTagName("h1")[0].innerHTML="<h3 style='color: red;'>No vaciáste los depósitos a tiempo</h3>";
            }, 1300);
        }
    }
},5000);

// Botones vaciar
botones[0].addEventListener('click', ()=>{
    rellenos[0]=0;
    document.getElementsByClassName('contenido')[0].style.clipPath=`inset(100% 0 0 0)`;
})

botones[1].addEventListener('click', ()=>{
    rellenos[1]=0;
    document.getElementsByClassName('contenido')[1].style.clipPath=`inset(100% 0 0 0)`;
})

botones[2].addEventListener('click', ()=>{
    rellenos[2]=0;
    document.getElementsByClassName('contenido')[2].style.clipPath=`inset(100% 0 0 0)`;
})

botones[3].addEventListener('click', ()=>{
    rellenos[3]=0;
    document.getElementsByClassName('contenido')[3].style.clipPath=`inset(100% 0 0 0)`;
})

// Funciones
function cuánto(){
    return Math.round(Math.random()*10);
}
function dónde(contenedores){
    return Math.round(Math.random()*(contenedores.length-1));
}
function llenar(depósitos){
    let cantidad=cuánto();
    let depósito=dónde(depósitos);
    let depósito_llenar=depósitos[depósito]; // El depósito que se va a llenar
    let relleno=document.getElementsByClassName('contenido')[depósito]; // El relleno del depósito a rellenar
    rellenos[depósito]+=cantidad; // Se añade la cantidad en el array
    relleno.style.clipPath=`inset(${100-rellenos[depósito]}% 0 0 0)` // A partir de los datos del array se establece el acumulado de relleno
}

function desactivar(elemento,ms){
    setTimeout(()=>{
        elemento.style.display='none';
    }, ms);
}

function todos_llenos(rellenos){
    if(rellenos[0]>100 && rellenos[1]>100 && rellenos[2]>100 && rellenos[3]>100){
        return true;
    }
    else{
        return false;
    }
}