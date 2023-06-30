(() => {
  const cartContainer = document.querySelector("#cart-content");
  const subtotalContainer = document.querySelector("#subtotal-container");
  const subtotal = document.querySelector("#subtotal");
  const total = document.querySelector("#total");

  let originalPrice = CartDatasource.getOriginalPrice();
  let price = CartDatasource.getPrice();

  subtotal.textContent = formatPrice(originalPrice);
  total.textContent = formatPrice(price);
  if (originalPrice === price) {
    subtotalContainer.classList.add("hidden");
  } else {
    subtotalContainer.classList.remove("hidden");
  }

  const cartItems = CartDatasource.list();
  cartItems.forEach((item) => {
    const productOverview = createCartItemElement(item);
    cartContainer.appendChild(productOverview);

    CartDatasource.updateHandlers.push(() => {
      originalPrice = CartDatasource.getOriginalPrice();
      price = CartDatasource.getPrice();
      subtotal.textContent = formatPrice(originalPrice);
      total.textContent = formatPrice(price);
      if (originalPrice === price) {
        subtotalContainer.classList.add("hidden");
      } else {
        subtotalContainer.classList.remove("hidden");
      }
    });
  });
})();
