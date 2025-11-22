# IdealGram Feature Overview

This document summarizes the most notable user‑facing features added or customized in the last ~36 commits of the IdealGram project. It focuses on behavior that differs from stock Telegram and on integrations that are unique to IdealGram.

> Note: Features are grouped by area (chat experience, UI/navigation, integrations, and safety/consent), not strictly by commit.

---

## Chat & Message Features

- **Shamala Mode – AI‑Powered Message Transformation**
  - When Shamala Mode is enabled, outgoing messages can be routed through the UzbekGPT bot and transformed before being sent.
  - The client loads UzbekGPT API configuration into `BuildConfig` and uses it in `ChatActivityEnterView` to send text for processing.
  - The transformation is asynchronous, with proper error handling and fallbacks if the UzbekGPT API fails or times out.
  - Shamala Mode is exposed as a toggle in the experimental settings screen and is enabled by default there.
  - Additional commits preserve the original, pre‑Shamala text and attach it as metadata so the UI can still reference or display the source message if needed.

- **Media Spoilers by Default**
  - A new Nagram/IdealGram setting allows users to automatically send photos and videos as spoilers.
  - When enabled, `SendMessagesHelper` checks the setting and sets the `hasMediaSpoilers` flag for outgoing media, so recipients see a spoiler overlay by default.
  - The option is surfaced in the Neko/IdealGram chat settings UI with a dedicated toggle.

---

## Dialog List Enhancements

- **UzbekGPT Shortcut in the Default Chat List**
  - The dialogs adapter defines a dedicated view type for an **UzbekGPT shortcut row** in the default “All chats” folder.
  - Behavior:
    - If a dialog with `@Uzbek_GPTrobot` already exists and is pinned, that dialog is surfaced at the top instead of a placeholder.
    - If no such dialog exists, a custom `DialogCell.CustomDialog` placeholder is inserted with localized title and subtitle (e.g., “UzbekGPT” / “Talk to @Uzbek_GPTrobot”).
  - The item:
    - Has a stable ID to keep animations and diffing stable.
    - Is excluded from bulk‑selection and contextual action mode so it behaves like a shortcut, not a normal chat.
    - On tap (when no action mode is active), opens the UzbekGPT bot using `openByUserName`.

- **IdealGram Channel Shortcut in the Chat List**
  - Mirroring the UzbekGPT shortcut, the dialog list now includes an **IdealGram shortcut**:
    - New custom dialog view type and stable IDs dedicated to IdealGram.
    - If the `@Ideal_Gram` dialog is pinned, that chat is shown at the top; if not, a placeholder shortcut is rendered.
  - The shortcut:
    - Uses localized strings (e.g., “IdealGram” / “Go to @Ideal_Gram”).
    - Is protected from selection and action mode (no bulk actions).
    - Tapping it opens the IdealGram channel via a dedicated helper.

---

## Drawer & Navigation Additions

- **Legends Screen and Drawer Entry**
  - A new **“Legends”** item appears in the left drawer side menu.
  - Selecting it opens `LegendsActivity`, a simple list of notable community usernames (including `@Uzbek_GPTrobot`, `@Ideal_Gram`, and others).
  - Each row is a `TextSettingsCell`; tapping a legend opens the corresponding username using the same `openByUserName` mechanism as elsewhere.
  - The feature is fully integrated into the existing drawer adapter and LaunchActivity navigation flow.

- **TV Shortcut**
  - The drawer includes a **TV** item that opens a predefined external video link in the system browser.
  - This is wired via `LaunchActivity` using `Browser.openUrl` and uses drawer configuration flags to control visibility.

- **Quran and Bible Shortcuts**
  - Two optional drawer entries open external resources:
    - **Open Quran**: launches `tanzil.net` in the default browser.
    - **Open Bible**: launches `biblegateway.com`.
  - Both entries:
    - Have toggles in Neko/IdealGram general settings (e.g., `drawerItemQuran`, `drawerItemBible`) so users can hide or show them.
    - Use localized labels defined in `strings.xml`.

- **Shamala Mode Drawer Toggle**
  - The drawer can show a dedicated Shamala Mode toggle item, whose visibility is controlled via configuration.
  - The drawer label and state text are localized (e.g., “Enable Shamala mode”, “Shamala mode unleashed / contained”).
  - Toggling from the drawer:
    - Flips Shamala Mode in `NekoConfig`.
    - Triggers random visual/UX effects while active (see below).

---

## Shamala Mode UX Effects

- **Random Effects While Active**
  - When Shamala Mode is on, the app schedules **random UI effects**:
    - These can affect visuals and micro‑interactions to give a chaotic or playful feel.
    - Effects are wired through `LaunchActivity` and supporting helpers, with timers and state checks.
  - Localized strings are provided for:
    - Shamala Mode state (enabled/disabled).
    - Random “Shamala is doing something weird…” style messages.

- **Send Button Guard During Transform**
  - While Shamala is transforming an outgoing message via UzbekGPT, the send button is temporarily disabled.
  - This prevents accidental double sends or sending the untransformed text.

---

## Supporter Badges & Visual Identity

- **Supporter Badge in Dialog List**
  - Dialog cells can display a **supporter badge** next to chat titles:
    - Backed by `SupporterBadgeDrawable` and `SupporterBadgeHelper` with lazy creation and caching.
    - Proper RTL‑aware positioning ensures the badge aligns correctly for both LTR and RTL layouts.
  - Interaction:
    - The badge is clickable and has its own hit‑area.
    - Tapping triggers haptic feedback and shows an info toast / popup describing the supporter status.
    - Copy for the description is localized (e.g., “Exclusive IdealGram badge. Given to legends who keep the project alive.”).

- **Supporter Badges in Drawer, Chat Header, and Profile**
  - A reusable `SupporterBadgeView` is introduced to centralize layout and styling.
  - The badge is rendered:
    - Next to the primary profile in the drawer (`DrawerProfileCell`).
    - Next to account entries in the account switcher area (`DrawerUserCell`).
    - In the chat header (`ChatAvatarContainer`) beside the chat or user title.
    - On the profile screen title area in `ProfileActivity`, with responsive layout handling rotation and long names.

- **Animated Chaos Badge on Intro Screen**
  - Intro/first‑run screen now displays a **chaos badge**:
    - Shows rotating status messages with a fade transition.
    - Tapping the badge forces the text to cycle immediately.
    - The badge uses a gradient pill background styled from the current theme.
  - A ticker is scheduled and automatically canceled when the fragment is destroyed to avoid leaks.
  - Colors are kept in sync via `updateChaosBadgeColors`, responding to theme changes.

- **Launcher Icon Variants**
  - Multiple **IdealGram / Uzbekgram launcher icon variants** are added and selectable:
    - Commits introduce different icon sets and configuration hooks.
    - Users can pick alternative app icons (branding variants) through the settings UI.
  - This includes:
    - New icon resources.
    - The settings plumbing to switch between them at runtime (where supported by the launcher).

---

## Integrations & Bots

- **UzbekGPT Deep Integration**
  - UzbekGPT is integrated beyond simple bot chat:
    - Dedicated shortcut row in the dialog list (see above).
    - Shamala Mode uses UzbekGPT as a back‑end for transforming outgoing messages.
  - Configuration:
    - `Build.gradle` loads UzbekGPT credentials/config into `BuildConfig` from local or CI‑provided properties.
    - The UI uses localized labels and descriptions referencing UzbekGPT.

- **IdealGram Channel Surfacing**
  - The official IdealGram channel is surfaced prominently:
    - Dedicated shortcut row in the dialog list.
    - Separate “Legends” screen entry.
  - Shortcuts use `openByUserName("Ideal_Gram", ...)` to navigate directly without searching.

---

## Privacy, Consent & Safety

- **Data Collection Consent on Launch**
  - On first launch (or until acknowledged), IdealGram shows a **non‑dismissible dialog** describing:
    - What data is collected (phone number, name, username, telemetry tied to the account).
    - That the data is not anonymous.
  - The dialog:
    - Uses localized strings for English and Russian.
    - Cannot be dismissed by tapping outside (only explicit action inside the dialog).
    - Persists a consent flag in shared preferences once acknowledged to avoid repeated prompts.

- **Safer Update Checks**
  - Update‑related logic avoids unnecessary or redundant update loads when only checking availability.
  - This reduces background load and potential confusion from spurious update fetches.

- **Misc. UI Safeguards**
  - Several fixes improve UX robustness:
    - Preventing the data collection dialog from being dismissed accidentally via outside touch.
    - Ensuring new drawer actions (Quran, Bible, TV, Shamala) respect settings toggles and do not clutter the UI when disabled.

---

## CI & Tooling Highlights (Context)

While not user‑visible features, recent commits also improved the engineering experience:

- Added **`push-quick-test.yml`** workflow to run a fast `assembleDebug` build on the `idealgram` branch with:
  - Android 36 SDK, NDK 27, and Gradle caching.
  - Native build cache for C++ artifacts.
  - Automatic Kotlin diagnostics dump on failure.

- Hardened the **release workflow** to:
  - Build ABI‑split APKs.
  - Use ProGuard/R8 optimizations.
  - Discover and upload generated APKs reliably.

These CI improvements help keep IdealGram stable while rapidly iterating on the features above.

---

## Summary

IdealGram layers a set of opinionated, community‑centric features on top of Telegram:

- AI‑augmented messaging via Shamala Mode and UzbekGPT.
- Strong surfacing of community and project personas (Legends screen, UzbekGPT & IdealGram shortcuts).
- Rich visual identity (supporter badges, chaos badge, custom launcher icons).
- Convenience shortcuts (Quran, Bible, TV) integrated directly into the drawer.
- Clear communication around data collection and safer UX defaults.

Together, these changes make IdealGram feel less like a stock client fork and more like a curated, playful, and community‑aware messenger experience.
