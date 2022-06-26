


let countOnly = document.getElementsByClassName("car").length;

for(let i = 0; i < countOnly; i++) {
    document.getElementsByClassName("car")[i].addEventListener("mouseenter", function() {
        document.getElementsByClassName("card__head")[i].style.textAlign = "center";
        document.getElementsByClassName("card__head")[i].style.top = "calc(100% - 2em)";
        document.getElementsByClassName("card__head")[i].style.color = "white";
        document.getElementsByClassName("card__head")[i].style.backgroundColor = "rgba(0, 0, 0, 0.5)";
        document.getElementsByClassName("card__head")[i].style.fontSize = "2em";
        document.getElementsByClassName("card__head")[i].style.transform = "rotate(0deg) skew(-5deg)";

    })

    document.getElementsByClassName("car")[i].addEventListener("mouseleave", function() {
        document.getElementsByClassName("card__head")[i].style.transformOrigin = "0% 0%";
        document.getElementsByClassName("card__head")[i].style.padding = "0.5em";
        document.getElementsByClassName("card__head")[i].style.color = "black";
        document.getElementsByClassName("card__head")[i].style.backgroundColor = "rgba(255, 72, 0, 0.75)";
        document.getElementsByClassName("card__head")[i].style.fontSize = "1em";
        document.getElementsByClassName("card__head")[i].style.transform = "rotate(-90deg)";
        document.getElementsByClassName("card__head")[i].style.transition = "all 0.5s ease-in-out";
        document.getElementsByClassName("card__head")[i].style.minWidth = "100%";
        document.getElementsByClassName("card__head")[i].style.position = "absolute";
        document.getElementsByClassName("card__head")[i].style.textAlign = "center";
        document.getElementsByClassName("card__head")[i].style.bottom = "0";
        document.getElementsByClassName("card__head")[i].style.left = "0";
        document.getElementsByClassName("card__head")[i].style.whiteSpacing = "nowrap";









    })
}

