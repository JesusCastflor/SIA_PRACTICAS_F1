//Ejecuta funcion en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaracion de Variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

//Evento para mostar y ocultar el menu
    function open_close_menu (){
        body.classList.toggle("body_move"); //Añade la clase imaginaria que creamos para que al hacer click se aumente el tamaño del menu
        side_menu.classList.toggle("menu_side_move");
    }

//Funcion para ocultar el menu si el ancho es menor a 760px
    if(window.innerWidth < 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu_side_move")
    }

// Menu responsivo
window.addEventListener("resize", function(){
    if(this.window.innerWidth > 760){
        body.classList.remove("body_move");
        side_menu.classList.remove("menu_side_move");
    }
    if(this.window.innerWidth < 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu_side_move");
    }
});
