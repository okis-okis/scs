const findButton = document.getElementsByClassName(
  "posts__container-posts-find-order-button"
);

for (let i = 0; i < findButton.length; i++) {
  findButton[i].onclick = () => {
    defaultState();
    findButton[i].classList.add(
      "posts__container-posts-find-order-button-active"
    );
  };
}

function defaultState() {
  for (let j = 0; j < findButton.length; j++) {
    findButton[j].classList.remove(
      "posts__container-posts-find-order-button-active"
    );
  }
}
