const LocalStorageDatasource = {
  getCart: () => {
    const storedCart = JSON.parse(localStorage.getItem("cart"));

    if (!storedCart) {
      localStorage.setItem("cart", JSON.stringify([]));
    }

    return storedCart;
  },
  updateCart: (updatedCart) =>
    localStorage.setItem("cart", JSON.stringify(updatedCart)),
  clear: () => localStorage.setItem("cart", JSON.stringify([])),
};
