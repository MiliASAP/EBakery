document.addEventListener("DOMContentLoaded", function () {
  const button = document.getElementById("scroll-down");
  const target = document.querySelector(".filters-prod-promo");
  const filterButtons = document.querySelectorAll(".filters button");
  const productItems = document.querySelectorAll(".product-item");
  const cartButton = document.querySelectorAll(".AddToCart");

  if (button && target) {
    button.addEventListener("click", function () {
      target.scrollIntoView({ behavior: "smooth" });
    });
  }

  const defaultButton = filterButtons[0];
  defaultButton.classList.add("active");
  const defaultFilter = defaultButton.getAttribute("data-filter");

  productItems.forEach((item) => {
    const categories = item.getAttribute("data-category").split(",");
    if (defaultFilter === "all" || categories.includes(defaultFilter)) {
      item.style.display = "flex";
    } else {
      item.style.display = "none";
    }
  });

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.getAttribute("data-filter");

      filterButtons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      productItems.forEach((item) => {
        const categories = item.getAttribute("data-category").split(",");

        if (filter === "all" || categories.includes(filter)) {
          item.style.display = "flex";
        } else {
          item.style.display = "none";
        }
      });
    });
  });

  cartButton.forEach((button) => {
    button.addEventListener("click", (event) => {
      event.preventDefault();

      const productId = button.getAttribute("data-product-id");
      fetch("/cart/add", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ productId: Number(productId), quantity: 1 }),
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

  if (document.getElementById("summary-subtotal")) {
    window.updateSummary();
  }
});
