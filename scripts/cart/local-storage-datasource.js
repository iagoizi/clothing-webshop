const LocalStorageDatasource = {
  getCart: () => {
    const storedCart = JSON.parse(localStorage.getItem("cart"));

    //later, we will remove this FAKE_DATA. It's here just to make testing easier
    if (!storedCart) {
      localStorage.setItem("cart", JSON.stringify(FAKE_DATA));
    }

    return storedCart ?? FAKE_DATA;
  },
  updateCart: (updatedCart) =>
    localStorage.setItem("cart", JSON.stringify(updatedCart)),
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
