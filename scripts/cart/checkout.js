const subtotalView = document.querySelector("#subtotal");
const totalView = document.querySelector("#total");
const waitingTimeView = document.querySelector("#waiting-time");
const shippingPriceView = document.querySelector("#shipping-price");

(() => {
  const cartContainer = document.querySelector("#cart-content");
  const cartItems = CartDatasource.list();
  cartItems.forEach((item) => {
    const productOverview = createCartItemElement(item, true);
    cartContainer.appendChild(productOverview);
  });

  subtotalView.textContent = formatPrice(CartDatasource.getPrice());
  totalView.textContent = formatPrice(CartDatasource.getPrice("DPD"));
  waitingTimeView.textContent = CartDatasource.getWaitingTime("DPD");
  shippingPriceView.textContent = formatPrice(
    CartDatasource.getShippingPrice("DPD")
  );
})();

document
  .querySelector("#shipping-method")
  .addEventListener("change", (event) => {
    const newShippingMethod = event.target.value;
    totalView.textContent = formatPrice(
      CartDatasource.getPrice(newShippingMethod)
    );
    waitingTimeView.textContent =
      CartDatasource.getWaitingTime(newShippingMethod);
    shippingPriceView.textContent = formatPrice(
      CartDatasource.getShippingPrice(newShippingMethod)
    );
  });
