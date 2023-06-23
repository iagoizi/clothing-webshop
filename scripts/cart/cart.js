(() => {
  const cartContainer = document.querySelector("#cart-content");
  const cartItems = CartDatasource.list();
  cartItems.forEach((item) => {
    const productOverview = createCartItemElement(item);
    cartContainer.appendChild(productOverview);
  });
})();
