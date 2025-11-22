document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  const modal = document.getElementById("ig-modal");

  if (!modal) return;

  const openModal = () => {
    modal.classList.add("ig-modal--open");
    document.body.classList.add("ig-modal-open");
  };

  const closeModal = () => {
    modal.classList.remove("ig-modal--open");
    document.body.classList.remove("ig-modal-open");
  };

  if (cta) {
    cta.addEventListener("click", (event) => {
      event.preventDefault();
      openModal();
    });
  }

  modal.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof HTMLElement)) return;

    if (
      target.hasAttribute("data-ig-modal-close") ||
      target.closest("[data-ig-modal-close]")
    ) {
      closeModal();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeModal();
    }
  });
});
