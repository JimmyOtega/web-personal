var cod= document.getElementById('bott');
var boto= document.getElementById('boton_cerr');

function mostrar(){
    document.getElementById('vent_emergente').style.display="block";
   
    /*ete codigo oculta la barra de scrol*/
    document.getElementById('body').style.overflow='hidden';
    document.getElementById('img').style.display="block";
    document.getElementById('vent_emergente').style.top='5%';

   
}
function ocultar(){
    document.getElementById('vent_emergente').style.display="none";
     /*ete codigo muestra la barra de scrol*/
    document.getElementById('body').style.overflow='auto';
    document.getElementById('img').style.display="none";
}
cod.addEventListener('click', ()=>{
    mostrar();

});
boto.addEventListener('click',()=>{
    ocultar();
});
