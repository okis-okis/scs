const buttons = document.querySelectorAll(".filters-selection__button");

document.querySelector(".filter-popular-posts").setAttribute("style", "display: none;");
document.querySelector(".filter-tags").setAttribute("style", "display: none;");

buttons.forEach(n => n.addEventListener("click", select));

function select() {
    if (this.innerHTML === "Категории") {
        document.querySelector(".filter-categories").removeAttribute("style");

        document.querySelector(".filter-popular-posts").setAttribute("style", "display: none;");
        document.querySelector(".filter-tags").setAttribute("style", "display: none;");
    }
    else if (this.innerHTML === "Популярное") {
        document.querySelector(".filter-popular-posts").removeAttribute("style");

        document.querySelector(".filter-categories").setAttribute("style", "display: none;");
        document.querySelector(".filter-tags").setAttribute("style", "display: none;");
    }
    else if (this.innerHTML === "Тэги") {
        document.querySelector(".filter-tags").removeAttribute("style");

        document.querySelector(".filter-categories").setAttribute("style", "display: none;");
        document.querySelector(".filter-popular-posts").setAttribute("style", "display: none;");
    }
}