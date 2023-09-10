//Ejecuta funcion en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaracion de Variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");
//Obtiene el nombre de la Pagina
var currentPage = window.location.href.substring(window.location.href.lastIndexOf("/") + 1);
//Remueve la clase select de todos los elementos del menu
var menuItems = document.querySelectorAll(".option_menu a");
//Agrega la clase select al elemento
var currentItem = document.getElementById(currentPage.split(".")[0]);

//Evento para mostar y ocultar el menu
    function open_close_menu (){
        body.classList.toggle("body_move"); //Añade la clase imaginaria que creamos para que al hacer click se aumente el tamaño del menu
        side_menu.classList.toggle("menu_side_move");
    }

    menuItems.forEach(function(item){
        item.classList.remove("select");
    }
    );


//Funcion para ocultar el menu si el ancho es menor a 760px
    if(window.innerWidth < 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu_side_move")
    }

//Agrega la clase select al elemento de menu correspondiente a la pagina actual
    if(currentItem){
        currentItem.classList.add("select")
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

