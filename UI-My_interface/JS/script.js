document.addEventListener("DOMContentLoaded", function () {

    //Objet principal initialisé à la fin de chargement du DOM
    'use strict';
    var Main = {

        //Première fonction éxécutée
        init: function () {

            var choix = document.getElementsByClassName("choix"),
                mainpage = document.getElementById("mainpage"),
                context = document.getElementById("context"),
                that = this;

            mainpage.addEventListener("contextmenu", function (e) {

            e.preventDefault();

                context.style.display = "block";
                context.style.top = (e.pageY - 10) + "px";
                context.style.left = (e.pageX - 10) + "px";

            });

            mainpage.addEventListener("click", function (e) {

                context.style.top = "";
                context.style.left = "";
                context.style.display = "";

            });

            for (var i = choix.length - 1; i >= 0; i--) {


                choix[i].addEventListener('click', function () {

                    that.do(this.value);

                });

            };

        },

        //Fonction qui reçoit le <li> cliqué
        do: function (e) {

            switch(e) {

                case 1:

                    console.log("mkdir");
                    break;

                case 2:

                    console.log("lolilol");
                    break;

                default:

                    return false;

            }

        }

    };

    Main.init();

});