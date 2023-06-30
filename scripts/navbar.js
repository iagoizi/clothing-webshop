(() => {
  const navbar = document.querySelector("#navbar");

  const cartItemsCount = CartDatasource.list().length;

  CartDatasource.updateHandlers.push(() => {
    document.querySelector("#cart-badge").textContent =
      CartDatasource.list().length;
  });

  // Make an AJAX request to check session status
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "../phpscripts/checksession.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      a = xhr.responseText.split("-");
      const loggedIn = a[0] === "true";
      const username = a[1]; // This contains the username

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
                ? `                
                <a href="./my-orders.html">My orders</a>
                <a href="../phpscripts/terminate.php" class="alert-btn">Logout</a>
                   <a class="alert-btn">${username}</a>`
                : `<a href="./login.php">Login</a>
                <a href="./register.php">Register</a>`
            }
        </div>
      `;
    }
  };
  xhr.send();
})();
