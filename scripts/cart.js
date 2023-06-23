function removeFromView(id) {
  const itemToRemove = document.querySelector(`#${id}`);
  itemToRemove.classList.add("fade-out");

  setTimeout(function () {
    itemToRemove.remove();
  }, 500);
}

document
  .querySelector("#product-1-quantity")
  .addEventListener("blur", (element) => {
    if (+element.currentTarget.value === 0) {
      removeFromView("product-1");
    }
  });
