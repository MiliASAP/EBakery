document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".amount").forEach((container) => {
    const minusButton = container.querySelector(".minus");
    const plusButton = container.querySelector(".plus");
    const input = container.querySelector(".inputAmount");

    const addToCartButton = container.parentElement.querySelector(".addToCart");

    if (!addToCartButton) {
      console.warn("Brak przycisku .addToCart w produkcie");
      return;
    }

    plusButton.addEventListener("click", () => {
      let value = parseInt(input.value) || 0;
      input.value = value + 1;
    });

    minusButton.addEventListener("click", () => {
      let value = parseInt(input.value) || 0;
      if (value > 0) {
        input.value = value - 1;
      }
    });

    addToCartButton.addEventListener("click", () => {
      const productId = addToCartButton.dataset.productId;
      const quantity = parseInt(input.value);

      if (!productId) {
        alert("Brak ID produktu.");
        return;
      }

      if (isNaN(quantity) || quantity <= 0) {
        alert("Podaj poprawną ilość.");
        return;
      }

      fetch("/cart/add", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ productId: Number(productId), quantity }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            // alert("Produkt dodany do koszyka!");
            window.updateSummary();
          } else {
            alert("Błąd: " + data.message);
          }
        })
        .catch(() => alert("Błąd sieci"));
    });
  });
});
