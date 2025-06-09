document.addEventListener("DOMContentLoaded", () => {
  const buttonTrashCan = document.querySelectorAll(".trashcan");

  buttonTrashCan.forEach((trashcan) => {
    trashcan.addEventListener("click", (event) => {
      event.preventDefault();

      const productId = trashcan.getAttribute("data-product-id");
      fetch(`/cart/delete?id=${productId}`, {
        method: "DELETE",
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            // alert("Produkt usunięty z koszyka!");

            const cartItem = trashcan.closest(".cart-item");
            const nextSibling = cartItem.nextElementSibling;
            cartItem.remove();
            if (nextSibling && nextSibling.tagName === "HR") {
              nextSibling.remove();
            }

            updateLastCartItemBorder();

            const cartItemsContainer = document.querySelector(".cart-items");
            if (
              cartItemsContainer &&
              cartItemsContainer.querySelectorAll(".cart-item").length === 0
            ) {
              cartItemsContainer.innerHTML = "<p>Twój koszyk jest pusty.</p>";
            }

            if (typeof window.updateSummary === "function") {
              window.updateSummary();
            }
          } else {
            alert("Błąd: " + data.message);
          }
        })
        .catch(() => alert("Błąd sieci"));
    });
  });

  const checkoutBtn = document.querySelector(".checkout-btn");
  const checkoutForm = document.getElementById("checkout-form-container");

  checkoutBtn.addEventListener("click", function () {
    checkoutForm.classList.toggle("hidden");
  });

  if (typeof window.updateSummary === "function") {
    window.updateSummary();
  }
});
