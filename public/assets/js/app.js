document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  const modal = document.getElementById("ig-modal");
  const themeToggle = document.getElementById("ig-theme-toggle");
  const root = document.documentElement;

  /* Shamala modal */
  if (modal) {
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
  }

  /* Theme toggle */
  const THEME_KEY = "ig_theme";

  const applyTheme = (theme) => {
    const safeTheme = theme === "light" ? "light" : "dark";
    root.setAttribute("data-theme", safeTheme);
    try {
      window.localStorage.setItem(THEME_KEY, safeTheme);
    } catch {
      // ignore storage errors
    }

    const icon = themeToggle?.querySelector(".material-icons-round");
    if (icon) {
      icon.textContent = safeTheme === "light" ? "light_mode" : "dark_mode";
    }
  };

  let initialTheme = "dark";
  try {
    const stored = window.localStorage.getItem(THEME_KEY);
    if (stored === "light" || stored === "dark") {
      initialTheme = stored;
    } else if (
      window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: light)").matches
    ) {
      initialTheme = "light";
    }
  } catch {
    // ignore
  }

  applyTheme(initialTheme);

  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const current = root.getAttribute("data-theme") === "light" ? "light" : "dark";
      applyTheme(current === "light" ? "dark" : "light");
    });
  }
});
