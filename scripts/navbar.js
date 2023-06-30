(() => {
  const navbar = document.querySelector("#navbar");

  //later, we will replace this by the actual logged in/logged out check
  const loggedIn = false;

  const cartItemsCount = CartDatasource.list().length;

  CartDatasource.updateHandlers.push(() => {
    document.querySelector("#cart-badge").textContent =
      CartDatasource.list().length;
  });

  navbar.innerHTML = `
        <div>
            <a href="./index.php">Home</a>
            <a href="./contact.html">Contact</a>
            <a href="./news.html">News</a>
            <a href="./productpage.html">All products</a>
        </div>

        <div>
            <a href="./cart-overview.html">Cart (<span id="cart-badge">${cartItemsCount}</span>)</a>
            ${
              loggedIn
                ? `<a href="./login.php" class="alert-btn">Logout</a>`
                : `<a href="./login.php">Login</a>
                <a href="./register.php">Register</a>`
            }
        </div>
        `;
})();
