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
};

const SHIPPING_CONTEXT = {
  DPD: { price: 1, waitingTimeWeeks: 7 }, //15 euros cheaper than DHL
  DHL: { price: 16, waitingTimeWeeks: 5 }, //67 euros cheaper than DHL Express
  "DHL-express": { price: 83, waitingTimeWeeks: 1 },
};
