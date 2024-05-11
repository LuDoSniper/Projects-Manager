document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'overlay
    function show_overlay(){
        document.getElementById('overlay').style.display = "block";
    }

    function hide_overlay(){
        document.getElementById('overlay').style.display = "none";
    }

    // Menu
    document.getElementById('profile').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        if (menu.style.display == "none"){
            menu.style.display = "flex";
            show_overlay();
        } else {
            menu.style.display = "none";
            hide_overlay();
        }
    });

    // Overlay
    document.getElementById('overlay').addEventListener('click', function() {
        // Menu
        if (document.getElementById('menu').style.display != "none"){
            document.getElementById('menu').style.display = "none";
        }
        hide_overlay();
    });
});