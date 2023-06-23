const createCartItemElement = (item) => {
  const product = document.createElement("div");
  product.classList.add("flexbox", "product-overview");
  product.id = item.id;

  const img = document.createElement("img");
  img.classList.add("product-thumbnail");
  img.src = item.thumbnail;
  product.appendChild(img);

  const info = document.createElement("div");
  const price = item.pricePerUnit * item.quantity;
  info.innerHTML = `
        <div id="${item.id}-price">€${price}</div>
        <div id="${item.id}-description">${item.description}</div>
        <label for="${item.id}-quantity">Quantity</label>
        `;
  const inputQuantity = document.createElement("input");
  inputQuantity.id = `${item.id}-quantity`;
  inputQuantity.type = "number";
  inputQuantity.value = item.quantity;
  inputQuantity.min = 0;
  inputQuantity.addEventListener("blur", (element) => {
    if (+element.currentTarget.value === 0) {
      removeFromView(item.id);
    }
  });
  info.appendChild(inputQuantity);

  product.appendChild(info);

  const removeBtn = document.createElement("button");
  removeBtn.type = "button";
  removeBtn.classList.add("alert-btn");
  removeBtn.textContent = "X";
  removeBtn.addEventListener("click", () => removeFromView(item.id));
  product.appendChild(removeBtn);

  return product;
};

function removeFromView(id) {
  const itemToRemove = document.querySelector(`#${id}`);
  itemToRemove.classList.add("fade-out");

  setTimeout(function () {
    itemToRemove.remove();
  }, 500);
}
