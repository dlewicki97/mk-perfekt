let productsLists = document.querySelectorAll(".products-list");

productsLists.forEach((productList) => {
  let brandLis = productList.querySelectorAll(".header-li.brand");
  let productsDropdowns = productList.querySelectorAll(".products-dropdown");
  brandLis.forEach((brandLi, i) =>
    brandLi.addEventListener("click", () => {
      productsDropdowns[i].classList.toggle("active");
      brandLi.classList.toggle("active");
    })
  );
});
