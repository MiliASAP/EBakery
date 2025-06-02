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
      console.log("Kliknięto button");
      fetch("/cart/add", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ productId: Number(productId) }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert("Produkt dodany do koszyka!");
          } else {
            alert("Błąd: " + data.message);
          }
        })
        .catch(() => alert("Błąd sieci"));
    });
  });
});
