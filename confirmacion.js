function confirmacion(e){
    if (confirm("¿esta seguro que desea eliminar este registro?")){
        return true
    }else {
        e.preventdefault(

        )
    }
}
let linkdelete=document.querySelectorAll(".ri-eraser-line");

for (var i=0;i<linkdelete.length;i++){
    linkdelete[i].addEventListener('click', confirmacion);
}