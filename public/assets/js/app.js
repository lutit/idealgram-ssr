document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  if (!cta) return;

  cta.addEventListener("click", () => {
    // Very simple placeholder interaction for now
    alert("Пока это просто заглушка Idealgram 👀");
  });
});

