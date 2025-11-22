document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  if (cta) {
    cta.addEventListener("click", () => {
      const message =
        "Shamala Mode in IdealGram is a mode where messages can go through UzbekGPT: a bit of controlled chaos with a safe fallback.";
      // Лёгкая, намеренно простая подсказка
      // (можно заменить на кастомный toast позже).
      alert(message);
    });
  }
});
