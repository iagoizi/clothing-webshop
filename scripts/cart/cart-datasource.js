const CartDatasource = {
  list: () => FAKE_DATA,
  getPrice: (shippingMethod) => {
    const price = FAKE_DATA.reduce(
      (prev, item) => prev + item.quantity * item.pricePerUnit,
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

const FAKE_DATA = [
  {
    id: "product-1",
    description: "Kids T-shirt",
    thumbnail: "https://i.imgur.com/nrwas9n.jpg",
    pricePerUnit: 10,
    quantity: 1,
  },
  {
    id: "product-2",
    description: "Star Girl Hoodie",
    thumbnail: "https://i.imgur.com/HtC01cF.png",
    pricePerUnit: 10,
    quantity: 1,
  },
  {
    id: "product-3",
    description: "T-shirt",
    thumbnail: "https://i.imgur.com/jibvF37.jpg",
    pricePerUnit: 10,
    quantity: 1,
  },
  {
    id: "product-4",
    description: "Saracura Pants",
    thumbnail: "https://i.imgur.com/xg7udSL.jpg",
    pricePerUnit: 10,
    quantity: 1,
  },
  {
    id: "product-5",
    description: "Star Girl Hoodie",
    thumbnail: "https://i.imgur.com/HtC01cF.png",
    pricePerUnit: 10,
    quantity: 1,
  },
  {
    id: "product-6",
    description: "Winx boy Hoodie",
    thumbnail: "https://i.imgur.com/5eAPpoV.jpg",
    pricePerUnit: 10,
    quantity: 1,
  },
];

const SHIPPING_CONTEXT = {
  DPD: { price: 1, waitingTimeWeeks: 7 }, //15 euros cheaper than DHL
  DHL: { price: 16, waitingTimeWeeks: 5 }, //67 euros cheaper than DHL Express
  "DHL-express": { price: 83, waitingTimeWeeks: 1 },
};
