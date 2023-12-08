const findButton = document.getElementsByClassName(
  "posts__container-posts-find-order-button"
);

const filterButton = document.getElementsByClassName(
  "posts__container__mobile_filter__button"
);

const filterBackground = document.getElementsByClassName(
  "posts__container__mobile_filter"
);

const postsFind = document.getElementsByClassName(
  "posts__container-posts-find"
);

const postsFilter = document.getElementsByClassName(
  "posts__container-posts-filter"
);

filterButton[0].onclick = () => {
  if (
    !filterBackground[0].classList.contains(
      "posts__container__mobile_filter-active"
    )
  ) {
    filterBackground[0].classList.add("posts__container__mobile_filter-active");
    postsFind[0].classList.add("posts__container-posts-find-active");
    postsFilter[0].classList.add("posts__container-posts-filter-active");
  } else {
    filterBackground[0].classList.remove(
      "posts__container__mobile_filter-active"
    );
    postsFind[0].classList.remove("posts__container-posts-find-active");
    postsFilter[0].classList.remove("posts__container-posts-filter-active");
  }
};

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
