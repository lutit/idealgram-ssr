document.addEventListener("DOMContentLoaded", () => {
  const cta = document.getElementById("ig-cta");
  const modal = document.getElementById("ig-modal");
  const themeToggle = document.getElementById("ig-theme-toggle");
  const navCta = document.getElementById("ig-nav-cta");
  const langLinks = document.querySelectorAll("[data-ig-lang]");
  const root = document.documentElement;
  const currentLang = document.documentElement.lang || "en";

  const track = (name, params = {}) => {
    if (typeof window.igAnalyticsLogEvent === "function") {
      window.igAnalyticsLogEvent(name, params);
    }
  };

  /* Shamala modal */
  if (modal) {
    const openModal = () => {
      modal.classList.add("ig-modal--open");
      document.body.classList.add("ig-modal-open");
      track("ig_shamala_modal_open", {
        page_path: window.location.pathname,
        lang: currentLang,
        theme: root.getAttribute("data-theme") || "dark",
      });
    };

    const closeModal = () => {
      modal.classList.remove("ig-modal--open");
      document.body.classList.remove("ig-modal-open");
      track("ig_shamala_modal_close", {
        page_path: window.location.pathname,
        lang: currentLang,
        theme: root.getAttribute("data-theme") || "dark",
      });
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

    track("ig_theme_changed", {
      theme: safeTheme,
      page_path: window.location.pathname,
      lang: currentLang,
    });
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

  if (navCta) {
    navCta.addEventListener("click", () => {
      track("ig_nav_idealgram_click", {
        page_path: window.location.pathname,
        lang: currentLang,
        theme: root.getAttribute("data-theme") || "dark",
      });
    });
  }

  langLinks.forEach((link) => {
    const code = link.getAttribute("data-ig-lang") || "";
    link.addEventListener("click", () => {
      track("ig_lang_switch", {
        from: currentLang,
        to: code,
        page_path: window.location.pathname,
        theme: root.getAttribute("data-theme") || "dark",
      });
    });
  });

  track("ig_page_view", {
    page_path: window.location.pathname,
    lang: currentLang,
    theme: root.getAttribute("data-theme") || "dark",
  });
});
