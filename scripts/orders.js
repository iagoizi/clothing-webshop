const FAKE_DATA_ORDERS = [
  {
    id: "A23123123ABCS",
    subtotal: 100,
    total: 100,
    shipping: "DPD",
    products: [
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
    ],
  },
  {
    id: "BB1235109asdJHS",
    subtotal: 100,
    total: 100,
    shipping: "DHL",
    products: [
      {
        id: "product-1",
        description: "Kids T-shirt",
        thumbnail: "https://i.imgur.com/nrwas9n.jpg",
        pricePerUnit: 10,
        quantity: 3,
      },
      {
        id: "product-3",
        description: "T-shirt",
        thumbnail: "https://i.imgur.com/jibvF37.jpg",
        pricePerUnit: 10,
        quantity: 2,
      },
      {
        id: "product-4",
        description: "Saracura Pants",
        thumbnail: "https://i.imgur.com/xg7udSL.jpg",
        pricePerUnit: 10,
        quantity: 1,
      },
      {
        id: "product-6",
        description: "Winx boy Hoodie",
        thumbnail: "https://i.imgur.com/5eAPpoV.jpg",
        pricePerUnit: 10,
        quantity: 4,
      },
    ],
  },
];

(() => {
  const ordersContainer = document.querySelector("#orders-container");

  FAKE_DATA_ORDERS.forEach((order) => {
    const section = document.createElement("section");
    section.id = `${order.id}-container`;
    section.classList.add("card");
    section.innerHTML = `
      <h1>Order number ${order.id}</h1>
        <div id="${order.id}-container" class="flexbox-left">
          <div id="${order.id}-products" class="products-column">
            <h2>Products</h2>
            <div id="${order.id}-products-container">
            </div>
          </div>
          <div id="${order.id}-overview">
            <h2>Overview</h2>

            <p>Sub-total: €<span id="${order.id}-subtotal">${formatPrice(
      order.subtotal
    )}</span></p>
            <br />
            <p>
              Shipping: [<span id="${order.id}-shipping-method">${
      order.shipping
    }</span>]
              €<span id="${order.id}-shipping-price">${formatPrice(
      SHIPPING_CONTEXT[order.shipping].price
    )} </span>
            </p>
            <br />
            <p>Total: €<span id="${order.id}-total">${formatPrice(
      order.total
    )}</span></p>
            <button class="primary-btn">Buy again</button>
          </div>
        </div>
      `;

    ordersContainer.appendChild(section);

    const productsContainer = document.querySelector(
      `#${order.id}-products-container`
    );

    order.products.forEach((item) => {
      const productOverview = createCartItemElement(item, true);
      productsContainer.appendChild(productOverview);
    });
  });
})();
