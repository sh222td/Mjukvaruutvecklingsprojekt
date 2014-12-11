"use strict";

var Menu = {

    init: function() {
        var that = this;
        var herrTrojaLista = document.getElementById("herrtro");
        var herrByxaLista = document.getElementById("herrbyx");
        var herrSkoLista = document.getElementById("herrsko");
        var damTrojaLista = document.getElementById("kvinnotro");
        var damByxaLista = document.getElementById("kvinnobyx");
        var damSkoLista = document.getElementById("kvinnosko");

        if (herrTrojaLista) {
            herrTrojaLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("menTro").style.display = "block";
                document.getElementById("menByx").style.display = "none";
                document.getElementById("menSko").style.display = "none";
            };
        }

        if (herrByxaLista) {
            herrByxaLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("menByx").style.display = "block";
                document.getElementById("menTro").style.display = "none";
                document.getElementById("menSko").style.display = "none";
            };
        }

        if (herrSkoLista) {
            herrSkoLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("menByx").style.display = "none";
                document.getElementById("menTro").style.display = "none";
                document.getElementById("menSko").style.display = "block";
            };
        }

        if (damTrojaLista) {
            damTrojaLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("damByx").style.display = "none";
                document.getElementById("damTro").style.display = "block";
                document.getElementById("damSko").style.display = "none";
            };
        }
        if (damByxaLista) {
            damByxaLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("damByx").style.display = "block";
                document.getElementById("damTro").style.display = "none";
                document.getElementById("damSko").style.display = "none";
            };
        }

        if (damSkoLista) {
            damSkoLista.onclick = function() {
                document.getElementById("bild").style.display = "none";
                document.getElementById("damByx").style.display = "none";
                document.getElementById("damTro").style.display = "none";
                document.getElementById("damSko").style.display = "block";
            };
        }

    }



};

window.onload = function() {
    Menu.init();
};







