document.addEventListener("DOMContentLoaded", function () {
  const cartLogo = document.querySelector(".cartLogo");

  if (cartLogo) {
    const amountNotification = document.createElement("div");
    amountNotification.className = "amntNotification";
    amountNotification.textContent = "0";
    cartLogo.appendChild(amountNotification);
  }

  window.updateSummary();
});

window.updateSummary = function () {
  const subtotalEl = document.getElementById("summary-subtotal");
  const shippingEl = document.getElementById("summary-shipping");
  const totalEl = document.getElementById("summary-total");
  const cartLogo = document.querySelector(".cartLogo");

  fetch("/cart/summary")
    .then((response) => {
      if (!response.ok) throw new Error("Błąd sieci");
      return response.json();
    })
    .then((data) => {
      if (subtotalEl) {
        subtotalEl.textContent =
          parseFloat(data.subtotal).toFixed(2).replace(".", ",") + " zł";
      }
      if (shippingEl) {
        shippingEl.textContent =
          parseFloat(data.shipping).toFixed(2).replace(".", ",") + " zł";
      }
      if (totalEl) {
        totalEl.textContent =
          parseFloat(data.total).toFixed(2).replace(".", ",") + " zł";
      }

      const amountNotification = document.querySelector(".amntNotification");

      if (data.itemsCount === 0) {
        if (amountNotification && cartLogo) {
          cartLogo.removeChild(amountNotification);
        }
      } else {
        if (!amountNotification && cartLogo) {
          const newBadge = document.createElement("div");
          newBadge.className = "amntNotification";
          cartLogo.appendChild(newBadge);
          newBadge.textContent = data.itemsCount;
        } else if (amountNotification) {
          amountNotification.textContent = data.itemsCount;
        }
      }
    })
    .catch((error) => {
      console.error("Błąd podczas aktualizacji podsumowania:", error);
    });
};

function updateLastCartItemBorder() {
  const cartItems = document.querySelectorAll(".cart-item");
  cartItems.forEach((item) => (item.style.borderBottom = "1px solid #eee"));
  if (cartItems.length > 0) {
    cartItems[cartItems.length - 1].style.borderBottom = "none";
  }
}
