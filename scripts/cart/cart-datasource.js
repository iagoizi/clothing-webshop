const CartDatasource = {
  list: () => LocalStorageDatasource.getCart(),
  getPrice: (shippingMethod) => {
    const price = LocalStorageDatasource.getCart().reduce(
      (prev, { quantity, pricePerUnit }) =>
        prev +
        quantity *
          pricePerUnit *
          (quantity >= 16 ? 0.84 : quantity >= 8 ? 0.92 : 1),
      0
    );

    return shippingMethod
      ? price + SHIPPING_CONTEXT[shippingMethod].price
      : price;
  },
  getWaitingTime: (shippingMethod) =>
    SHIPPING_CONTEXT[shippingMethod].waitingTimeWeeks,
  getShippingPrice: (shippingMethod) => SHIPPING_CONTEXT[shippingMethod].price,
  updateItem: (id, updatedItem) => {
    const cart = LocalStorageDatasource.getCart();
    const itemIndex = cart.findIndex(({ id: currentId }) => id === currentId);

    if (updatedItem.quantity === 0) {
      cart.splice(itemIndex, 1);
    } else if (itemIndex === -1) {
      cart.push(updatedItem);
    } else {
      cart[itemIndex] = { ...cart[itemIndex], ...updatedItem };
    }

    LocalStorageDatasource.updateCart(cart);
  },
};

const SHIPPING_CONTEXT = {
  DPD: { price: 1, waitingTimeWeeks: 7 }, //15 euros cheaper than DHL
  DHL: { price: 16, waitingTimeWeeks: 5 }, //67 euros cheaper than DHL Express
  "DHL-express": { price: 83, waitingTimeWeeks: 1 },
};
