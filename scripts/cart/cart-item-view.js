const createCartItemElement = (item, isCheckout = false) => {
  const product = document.createElement("div");
  product.classList.add("flexbox-left", "product-overview");
  product.id = item.id;

  const img = document.createElement("img");
  img.classList.add("product-thumbnail");
  img.src = item.thumbnail;
  product.appendChild(img);

  const info = document.createElement("div");
  const price = CartDatasource.getItemPrice(item);
  const priceView = document.createElement("div");
  priceView.textContent = `€${formatPrice(price)}`;
  priceView.id = `${item.id}-price`;
  const oldPriceView = document.createElement("span");
  oldPriceView.classList.add("old-price");
  oldPriceView.id = `#${item.id}-old-price`;
  let expectedPrice = item.quantity * item.pricePerUnit;
  oldPriceView.textContent =
    price < expectedPrice ? `€${formatPrice(expectedPrice)}` : "";
  priceView.appendChild(oldPriceView);
  info.appendChild(priceView);

  info.innerHTML += `
        <div id="${item.id}-description">${item.description}</div>
        `;
  if (!isCheckout) {
    const inputId = `${item.id}-quantity`;

    const inputLabel = document.createElement("label");
    inputLabel.for = inputId;
    inputLabel.textContent = "Quantity";
    info.appendChild(inputLabel);

    const inputQuantity = document.createElement("input");
    inputQuantity.id = `${item.id}-quantity`;
    inputQuantity.type = "number";
    inputQuantity.value = item.quantity;
    inputQuantity.min = 0;
    inputQuantity.disabled = isCheckout;
    inputQuantity.addEventListener("blur", (element) => {
      if (+element.currentTarget.value === 0) {
        removeFromView(item.id);
      }
    });
    inputQuantity.addEventListener("change", (element) => {
      const updatedItem = {
        ...item,
        quantity: +element.currentTarget.value,
      };

      CartDatasource.updateItem(item.id, updatedItem);

      const newPrice = CartDatasource.getItemPrice(updatedItem);

      const priceViewToChange = document.querySelector(`#${item.id}-price`);
      priceViewToChange.textContent = `€${formatPrice(newPrice)}`;
      expectedPrice = updatedItem.quantity * updatedItem.pricePerUnit;

      oldPriceView.textContent =
        newPrice < expectedPrice ? `€${formatPrice(expectedPrice)}` : "";
      priceViewToChange.appendChild(oldPriceView);
    });
    info.appendChild(inputQuantity);
  } else {
    const staticQuantity = document.createElement("p");
    staticQuantity.textContent = `Quantity: ${item.quantity}`;
    info.appendChild(staticQuantity);
  }

  product.appendChild(info);

  if (!isCheckout) {
    const removeBtn = document.createElement("button");
    removeBtn.type = "button";
    removeBtn.classList.add("alert-btn");
    removeBtn.textContent = "X";
    removeBtn.addEventListener("click", () => {
      CartDatasource.updateItem(item.id, {
        ...item,
        quantity: 0,
      });
      removeFromView(item.id);
    });
    product.appendChild(removeBtn);
  }
  return product;
};

function removeFromView(id) {
  const itemToRemove = document.querySelector(`#${id}`);
  itemToRemove.classList.add("fade-out");

  setTimeout(function () {
    itemToRemove.remove();
  }, 500);
}

function formatPrice(price) {
  return (Math.round(price * 100) / 100).toFixed(2);
}
