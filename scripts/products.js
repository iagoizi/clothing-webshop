function addProductToCart(product) {
  const input = document.querySelector(`#${product.id}-input`);
  const currentQuantity =
    CartDatasource.list().find(({ id }) => id === product.id)?.quantity ?? 0;

  const quantity = +input.value + currentQuantity;

  CartDatasource.updateItem(product.id, {
    ...product,
    quantity,
  });
  input.value = 0;
}
