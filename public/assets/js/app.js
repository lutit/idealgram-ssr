document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  if (cta) {
    cta.addEventListener("click", () => {
      const message =
        "Shamala Mode в IdealGram — это режим, в котором сообщения " +
        "могут проходить через UzbekGPT: немного хаоса, но с честным fallback’ом.";
      // Лёгкая, намеренно простая подсказка
      // (можно заменить на кастомный toast позже).
      alert(message);
    });
  }
});

