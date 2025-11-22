<?php

declare(strict_types=1);

return [
    'en' => [
        'site_name' => 'IdealGram',
        'site_tagline' => 'Telegram, but unapologetically ours',
        'nav_tagline' => 'Telegram, but our way',

        'hero_pill' => 'Opinionated Telegram fork',
        'hero_title' => 'IdealGram - a Telegram client that embraces the weird.',
        'hero_description' => 'A fork of NagramX -> Nagram -> Nekogram -> Telegram Android that adds Shamala Mode, UzbekGPT, Legends and community-first features on top of the messenger you already know.',

        'hero_cta_primary' => 'Open the IdealGram channel',
        'hero_cta_secondary' => 'What is Shamala Mode?',

        'hero_highlight_1' => 'AI-powered Shamala Mode with UzbekGPT that can re-shape your messages.',
        'hero_highlight_2' => 'Shortcuts to @Ideal_Gram, UzbekGPT and the Legends screen directly from the client.',
        'hero_highlight_3' => 'An honest consent screen and safer defaults around data and UX.',

        'device_legends_title' => 'Legends',
        'device_legends_sub' => 'Community, memes and @Ideal_Gram',
        'device_shamala_title' => 'Shamala Mode',
        'device_shamala_sub' => '“Send as-is?” - hardly ever.',
        'device_calm_title' => 'Just Telegram',
        'device_calm_sub' => 'When you want it quiet.',

        'section_why_title' => 'Why IdealGram if Telegram already exists?',
        'section_why_subtitle' => 'We are not rewriting the messenger from scratch - we are tilting it towards people, memes, local context and honest communication.',

        'feature_ai_title' => 'Shamala Mode + UzbekGPT',
        'feature_ai_text' => 'Messages can be routed through UzbekGPT: irony, translations, deliberate absurdity - with a fallback if AI decides to go too far.',

        'feature_community_title' => 'Community in focus',
        'feature_community_text' => 'Shortcut rows to UzbekGPT, the IdealGram channel and Legends directly in the dialog list. Less UX noise, more community entry points.',

        'feature_privacy_title' => 'Honest about data',
        'feature_privacy_text' => 'A clear, non-dismissable consent dialog that explains what is collected, without hiding important details in footnotes.',

        'footer_title' => 'It’s “just” a client. With a personality.',
        'footer_subtitle' => 'IdealGram stays compatible with Telegram, but adds its own shortcuts, visual identity and a bit of contained chaos.',
        'footer_link' => 'Go to @Ideal_Gram',

        'shamala_alert' => 'Shamala Mode in IdealGram is a mode where messages can go through UzbekGPT: a managed bit of chaos with a safe fallback.',

        'shamala_modal_title' => 'What is Shamala Mode?',
        'shamala_modal_subtitle' => 'An opinionated AI layer on top of your usual Telegram flow.',
        'shamala_modal_point_1' => 'Outgoing messages can be routed through UzbekGPT for remixing, translation or controlled chaos.',
        'shamala_modal_point_2' => 'Original text is preserved so you can always fall back or compare.',
        'shamala_modal_point_3' => 'You stay in control: Shamala Mode is a toggle, not a trap.',
        'shamala_modal_close' => 'Close',

        'privacy_title' => 'Privacy & data in IdealGram',
        'privacy_intro' => 'IdealGram is a community-driven fork. We want to be explicit about what we see, why we see it, and how you can say “no”.',
        'privacy_what_title' => '1. What we may collect',
        'privacy_what_intro' => 'IdealGram is a Telegram client: most of your data still lives on Telegram’s side. From the client side, we may additionally process a small set of identifiers when you explicitly allow it.',
        'privacy_field_id_title' => 'Account identifier',
        'privacy_field_id_desc' => 'An internal numeric or Telegram ID that uniquely identifies your account inside IdealGram logic.',
        'privacy_field_username_title' => 'Username and display name',
        'privacy_field_username_desc' => 'Your @username and public display name, where available, to render shortcuts, “Legends” and community-facing surfaces.',
        'privacy_field_meta_title' => 'Technical and feature metadata',
        'privacy_field_meta_desc' => 'Non-message metadata such as app version, language, feature toggles (e.g. Shamala Mode on/off), and anonymised diagnostic events.',
        'privacy_what_note' => 'We do not read or store the content of your private messages beyond what Telegram itself already processes.',

        'privacy_consent_title' => '2. How consent works',
        'privacy_consent_intro' => 'Any IdealGram-specific collection beyond what the stock Telegram client already does is gated behind explicit consent.',
        'privacy_consent_point_1' => 'On first launch, IdealGram shows a non-dismissable consent dialog that clearly lists what is collected and why.',
        'privacy_consent_point_2' => 'Until you confirm this dialog, IdealGram does not activate optional telemetry or feature-specific tracking.',
        'privacy_consent_point_3' => 'You can revoke your consent later from settings; IdealGram will stop any optional collection tied to that consent.',

        'privacy_why_title' => '3. Why we collect this',
        'privacy_why_intro' => 'We only add data points when they are necessary to make IdealGram’s opinionated features work or to keep the client stable.',
        'privacy_why_point_1' => 'To power IdealGram-specific UX (e.g. Legends screen, shortcuts, Shamala Mode state) tied to your account.',
        'privacy_why_point_2' => 'To understand which experimental features are actually used, without building a full profile of you as a person.',
        'privacy_why_point_3' => 'To debug crashes and regressions in the fork without collecting the content of your conversations.',

        'privacy_optout_title' => '4. Refusing and opting out',
        'privacy_optout_intro' => 'You always have the right to say “no” — both at first launch and later.',
        'privacy_optout_point_1' => 'If you refuse the consent dialog, IdealGram will behave as close as possible to a stock client, without additional telemetry.',
        'privacy_optout_point_2' => 'If you change your mind later, you can turn off IdealGram-specific collection in the app settings; we will respect that choice going forward.',
        'privacy_optout_note' => 'Some core Telegram data (phone number, contacts, messages) is handled by Telegram itself and is subject to Telegram’s own privacy policy.',

        'privacy_storage_title' => '5. Storage and third parties',
        'privacy_storage_intro' => 'IdealGram does not sell your data. Where possible, we keep data on-device or in the same infrastructure Telegram already uses. If we integrate external services (like UzbekGPT), they will be wired behind clear settings and separate descriptions.',

        'error_back_home' => 'Back to home',
        'error_404_title' => 'Page not found',
        'error_404_message' => 'Looks like you ended up between dialogs, not inside one.',
        'error_403_title' => 'Access denied',
        'error_403_message' => 'This part of IdealGram is not ready for your account yet.',
        'error_500_title' => 'Something went Shamala',
        'error_500_message' => 'The client tripped over an internal error. We logged it in our imaginary logs.',
        'error_500_retry' => 'Try again',
    ],
    'ru' => [
        'site_name' => 'IdealGram',
        'site_tagline' => 'Telegram, но по‑нашему',
        'nav_tagline' => 'Telegram, но по‑нашему',

        'hero_pill' => 'Opinionated Telegram fork',
        'hero_title' => 'IdealGram - Telegram‑клиент, который не стесняется быть странным.',
        'hero_description' => 'Форк NagramX -> Nagram -> Nekogram -> Telegram Android, который добавляет Shamala Mode, UzbekGPT, «Легенды» и комьюнити‑фичи поверх привычного мессенджера.',

        'hero_cta_primary' => 'Открыть канал IdealGram',
        'hero_cta_secondary' => 'Что за Shamala Mode?',

        'hero_highlight_1' => 'AI‑режим с UzbekGPT, который переосмысляет сообщения.',
        'hero_highlight_2' => 'Shortcut’ы до @Ideal_Gram, UzbekGPT и «Легенд» прямо из клиента.',
        'hero_highlight_3' => 'Честный экран про данные и аккуратные безопасные настройки.',

        'device_legends_title' => 'Легенды',
        'device_legends_sub' => 'Комьюнити, мемы и @Ideal_Gram',
        'device_shamala_title' => 'Shamala Mode',
        'device_shamala_sub' => '«Отправить как есть?» - никогда.',
        'device_calm_title' => 'Просто Telegram',
        'device_calm_sub' => 'Когда хочется без хаоса.',

        'section_why_title' => 'Зачем IdealGram, если Telegram уже есть?',
        'section_why_subtitle' => 'Мы не переписываем мессенджер с нуля - мы доворачиваем его в сторону людей, мемов, локального контекста и честной коммуникации.',

        'feature_ai_title' => 'Shamala Mode + UzbekGPT',
        'feature_ai_text' => 'Сообщения могут проходить через UzbekGPT: ирония, переводы, абсурд - но с fallback’ом, если AI вдруг решит быть слишком странным.',

        'feature_community_title' => 'Комьюнити в фокусе',
        'feature_community_text' => 'Shortcut’ы к UzbekGPT, IdealGram‑каналу и «Легендам» прямо из списка чатов. Меньше UX‑шума, больше точек входа в комьюнити.',

        'feature_privacy_title' => 'Честно про данные',
        'feature_privacy_text' => 'Нормальный диалог согласия на запуск: чётко написано, какие данные собираются, без попыток спрятать важное в сносках.',

        'footer_title' => 'Это всего лишь клиент. Но с характером.',
        'footer_subtitle' => 'IdealGram остаётся совместимым с Telegram, но добавляет свои шорткаты, визуальную ДНК и чуть‑чуть управляемого хаоса.',
        'footer_link' => 'Перейти в канал @Ideal_Gram',

        'shamala_alert' => 'Shamala Mode в IdealGram — это режим, в котором сообщения проходят через UzbekGPT: немного управляемого хаоса, но с честным fallback’ом.',

        'shamala_modal_title' => 'Что такое Shamala Mode?',
        'shamala_modal_subtitle' => 'Опинионейтед‑слой с AI поверх привычного Telegram‑флоу.',
        'shamala_modal_point_1' => 'Исходящие сообщения могут уходить в UzbekGPT: ремикс, перевод, контролируемый абсурд.',
        'shamala_modal_point_2' => 'Оригинальный текст сохраняется, чтобы всегда было к чему вернуться.',
        'shamala_modal_point_3' => 'Вы управляете режимом сами: Shamala Mode — это тумблер, а не ловушка.',
        'shamala_modal_close' => 'Закрыть',

        'privacy_title' => 'Конфиденциальность и данные в IdealGram',
        'privacy_intro' => 'IdealGram — комьюнити‑форк. Мы хотим честно объяснить, что именно мы видим, зачем это нужно и как вы можете сказать «нет».',
        'privacy_what_title' => '1. Какие данные мы можем собирать',
        'privacy_what_intro' => 'IdealGram — это Telegram‑клиент: большая часть данных остаётся на стороне Telegram. Со стороны клиента мы можем дополнительно обрабатывать только небольшой набор идентификаторов — и только при вашем явном согласии.',
        'privacy_field_id_title' => 'Идентификатор аккаунта',
        'privacy_field_id_desc' => 'Внутренний числовой или Telegram‑ID, который однозначно привязывает внутреннюю логику IdealGram к вашему аккаунту.',
        'privacy_field_username_title' => 'Имя пользователя и отображаемое имя',
        'privacy_field_username_desc' => 'Ваш @username и публичное имя, если они есть, — чтобы корректно отображать шорткаты, «Легенды» и другие комьюнити‑поверхности.',
        'privacy_field_meta_title' => 'Технические и функциональные метаданные',
        'privacy_field_meta_desc' => 'Немконтентные метаданные: версия приложения, язык, состояние тумблеров (например, Shamala Mode вкл/выкл), обезличенные диагностические события.',
        'privacy_what_note' => 'Мы не читаем и не храним содержимое ваших личных сообщений сверх того, что и так обрабатывает Telegram.',

        'privacy_consent_title' => '2. Как работает согласие',
        'privacy_consent_intro' => 'Любой сбор данных, выходящий за рамки поведения стокового Telegram‑клиента, завязан на явное согласие.',
        'privacy_consent_point_1' => 'При первом запуске IdealGram показывает недismissable‑диалог, где по пунктам перечислено, какие данные собираются и зачем.',
        'privacy_consent_point_2' => 'Пока вы не подтвердите этот диалог, IdealGram не включает дополнительную телеметрию и трекинг, не обязательный для работы клиента.',
        'privacy_consent_point_3' => 'Позже вы можете отозвать согласие в настройках — IdealGram перестанет собирать опциональные данные, завязанные на это согласие.',

        'privacy_why_title' => '3. Зачем это нужно',
        'privacy_why_intro' => 'Мы добавляем новые точки данных только там, где они реально нужны для работы опинионейтед‑фич IdealGram или стабильности форка.',
        'privacy_why_point_1' => 'Чтобы работали IdealGram‑специфичные UX‑штуки (экран «Легенд», шорткаты, состояние Shamala Mode), привязанные к вашему аккаунту.',
        'privacy_why_point_2' => 'Чтобы понимать, какими экспериментальными функциями реально пользуются, не строя при этом полноценный поведенческий профиль пользователя.',
        'privacy_why_point_3' => 'Чтобы искать краши и регрессии в форке без необходимости читать содержимое чатов.',

        'privacy_optout_title' => '4. Как отказаться и передумать',
        'privacy_optout_intro' => 'Вы всегда можете сказать «нет» — как на первом запуске, так и позже.',
        'privacy_optout_point_1' => 'Если вы отказываетесь от согласия в стартовом диалоге, IdealGram старается вести себя максимально близко к стоковому клиенту без дополнительной телеметрии.',
        'privacy_optout_point_2' => 'Если вы передумали позже, вы можете отключить сбор IdealGram‑специфичных данных в настройках — мы уважаем этот выбор с этого момента.',
        'privacy_optout_note' => 'Базовые данные Telegram (номер телефона, контакты, сообщения) обрабатываются самим Telegram и подпадают под его политику конфиденциальности.',

        'privacy_storage_title' => '5. Хранение и сторонние сервисы',
        'privacy_storage_intro' => 'IdealGram не продаёт ваши данные. По возможности данные остаются на устройстве или в той же инфраструктуре, что использует Telegram. Если мы подключаем внешние сервисы (например, UzbekGPT), они будут спрятаны не в мелкий шрифт, а за отдельными настройками и понятным описанием.',

        'error_back_home' => 'Вернуться на главную',
        'error_404_title' => 'Страница не найдена',
        'error_404_message' => 'Кажется, вы попали не в чат, а в пространство между ними.',
        'error_403_title' => 'Нет доступа',
        'error_403_message' => 'Эта часть IdealGram пока недоступна для вашего аккаунта.',
        'error_500_title' => 'Что‑то поехало в Shamala',
        'error_500_message' => 'Клиент споткнулся о внутреннюю ошибку. Представим, что мы уже посмотрели логи.',
        'error_500_retry' => 'Попробовать ещё раз',
    ],
    'uz' => [
        'site_name' => 'IdealGram',
        'site_tagline' => 'Telegram, lekin bizcha',
        'nav_tagline' => 'Telegram, lekin bizcha',

        'hero_pill' => 'Opinionated Telegram fork',
        'hero_title' => 'IdealGram - g‘alati bo‘lishdan uyalmaydigan Telegram klient.',
        'hero_description' => 'NagramX -> Nagram -> Nekogram -> Telegram Android fork’i, Shamala Mode, UzbekGPT, “Legends” va community‑ga yo‘naltirilgan funksiyalar bilan.',

        'hero_cta_primary' => 'IdealGram kanalini ochish',
        'hero_cta_secondary' => 'Shamala Mode nima o‘zi?',

        'hero_highlight_1' => 'UzbekGPT bilan ishlaydigan AI‑rejim, xabarlaringizni qayta talqin qiladi.',
        'hero_highlight_2' => 'Klient ichidan @Ideal_Gram, UzbekGPT va “Legends” uchun alohida shortcut’lar.',
        'hero_highlight_3' => 'Ma’lumotlar haqida ochiq ogohlantirish va xavfsiz standart sozlamalar.',

        'device_legends_title' => 'Legends',
        'device_legends_sub' => 'Community, memlar va @Ideal_Gram',
        'device_shamala_title' => 'Shamala Mode',
        'device_shamala_sub' => '“Shundoq yuboraymi?” - deyarli hech qachon.',
        'device_calm_title' => 'Faqat Telegram',
        'device_calm_sub' => 'Xaos bo‘lmagan holatlar uchun.',

        'section_why_title' => 'Telegram borida IdealGram nega kerak?',
        'section_why_subtitle' => 'Biz mesenjer yozilmasini boshidan yozmaymiz - uni odamlar, memlar va lokal kontekst tomonga buramiz.',

        'feature_ai_title' => 'Shamala Mode + UzbekGPT',
        'feature_ai_text' => 'Xabarlar UzbekGPT orqali o‘tishi mumkin: iro­niya, tarjima, nazoratli “jinnilik” - AI haddan oshsa, fallback ham bor.',

        'feature_community_title' => 'Community markazda',
        'feature_community_text' => 'UzbekGPT, IdealGram kanali va “Legends” uchun alohida qatorlar. Kamroq shovqin, ko‘proq kirish nuqtalari.',

        'feature_privacy_title' => 'Ma’lumot haqida ochiq',
        'feature_privacy_text' => 'Yopib bo‘lmaydigan rozilik oynasi: qaysi ma’lumotlar yig‘ilishini aniq va yashirmasdan tushuntiradi.',

        'footer_title' => 'Bu “shunchaki” klient. Lekin xarakterli.',
        'footer_subtitle' => 'IdealGram Telegram bilan mos, lekin o‘z shortcut’lari, vizual DNKsi va boshqariladigan xaosi bor.',
        'footer_link' => '@Ideal_Gram kanaliga o‘tish',

        'shamala_alert' => 'IdealGram’dagi Shamala Mode — xabarlar UzbekGPT orqali o‘tadigan rejim: boshqariladigan xaos va xavfsiz fallback.',

        'shamala_modal_title' => 'Shamala Mode nima?',
        'shamala_modal_subtitle' => 'Oddiy Telegram oqimiga AI‑qatlam qo‘shadigan opionated rejim.',
        'shamala_modal_point_1' => 'Chiquvchi xabarlar UzbekGPT orqali o‘tib, qayta talqin yoki tarjima qilinishi mumkin.',
        'shamala_modal_point_2' => 'Asl matn saqlanadi, istalgan payt solishtirib yoki qaytib kelsa bo‘ladi.',
        'shamala_modal_point_3' => 'Rejim sizning qo‘lingizda: Shamala Mode — tugma, tuzoq emas.',
        'shamala_modal_close' => 'Yopish',

        'privacy_title' => 'IdealGram’da maxfiylik va ma’lumotlar',
        'privacy_intro' => 'IdealGram — community‑driven fork. Biz qaysi ma’lumotlarni ko‘rishimiz, nima uchun kerakligi va qanday qilib “yo‘q” deyishingiz mumkinligini ochiq aytmoqchimiz.',
        'privacy_what_title' => '1. Nimalarni yig‘ishimiz mumkin',
        'privacy_what_intro' => 'IdealGram — Telegram klienti: asosiy ma’lumotlar baribir Telegram tomonida. Klient tomonda biz faqat ozgina identifikatorlarni va faqat sizning aniq roziligingiz bilan qayta ishlashimiz mumkin.',
        'privacy_field_id_title' => 'Akkaunt identifikatori',
        'privacy_field_id_desc' => 'IdealGram ichki logikasi uchun akkauntingizni aniqlashga yordam beradigan ichki raqam yoki Telegram ID.',
        'privacy_field_username_title' => 'Foydalanuvchi nomi va ko‘rinadigan ism',
        'privacy_field_username_desc' => 'Sizning @username’ingiz va ko‘rinadigan ismingiz — shortcut’lar, “Legends” va boshqa community yuzalarini to‘g‘ri ko‘rsatish uchun.',
        'privacy_field_meta_title' => 'Texnik va funksional metadata',
        'privacy_field_meta_desc' => 'Kontentsiz metadata: ilova versiyasi, til, toggellar holati (masalan, Shamala Mode yoqilgan/o‘chirilgan), anonimlashtirilgan diagnostika hodisalari.',
        'privacy_what_note' => 'Biz shaxsiy xabarlaringiz mazmunini, Telegram o‘zi ishlatadigan hajmdan ortiqcha o‘qimaymiz va saqlamaymiz.',

        'privacy_consent_title' => '2. Rozilik qanday ishlaydi',
        'privacy_consent_intro' => 'Standart Telegram klientidan tashqaridagi har qanday qo‘shimcha ma’lumot to‘plami faqat aniq rozilik bilan ishlaydi.',
        'privacy_consent_point_1' => 'Birinchi ishga tushirishda IdealGram to‘plangan ma’lumotlar va ularning maqsadini aniq tushuntiradigan, yopib bo‘lmaydigan rozilik oynasini ko‘rsatadi.',
        'privacy_consent_point_2' => 'Siz bu oynani tasdiqlamaguningizcha, IdealGram qo‘shimcha telemetriya yoki majburiy bo‘lmagan trakingni yoqmaydi.',
        'privacy_consent_point_3' => 'Keyinroq fikringiz o‘zgarsa, sozlamalardan rozilikni qaytarib olishingiz mumkin — shu paytdan boshlab IdealGram ushbu rozilikka bog‘langan ixtiyoriy to‘plamni to‘xtatadi.',

        'privacy_why_title' => '3. Nega bu kerak',
        'privacy_why_intro' => 'IdealGram’ning opionated funksiyalari yoki fork barqarorligi uchun zarur bo‘lgan hollardagina yangi ma’lumot nuqtalarini qo‘shamiz.',
        'privacy_why_point_1' => 'Akkauntingizga bog‘langan IdealGram’ga xos UX (Legends ekrani, shortcut’lar, Shamala Mode holati) ishlashi uchun.',
        'privacy_why_point_2' => 'Qaysi eksperimental funksiyalar haqiqatan ham ishlatilishini tushunish uchun, siz haqingizda to‘liq xulqiy profil tuzmasdan.',
        'privacy_why_point_3' => 'Chat mazmunini o‘qimasdan turib, forkdagi xatoliklar va regressiyalarni topish uchun.',

        'privacy_optout_title' => '4. Rad etish va fikrni o‘zgartirish',
        'privacy_optout_intro' => 'Siz har doim “yo‘q” deyishingiz mumkin — birinchi ishga tushirishda ham, keyinroq ham.',
        'privacy_optout_point_1' => 'Agar boshlang‘ich rozilik oynasida rad etsangiz, IdealGram iloji boricha qo‘shimcha telemetriyasiz, standart klientga yaqinroq ishlashga harakat qiladi.',
        'privacy_optout_point_2' => 'Keyinroq fikringiz o‘zgarsa, IdealGram’ga xos to‘plamni sozlamalarda o‘chirib qo‘yishingiz mumkin — biz bu tanlovni oldinga qarab hurmat qilamiz.',
        'privacy_optout_note' => 'Telegram’ning asosiy ma’lumotlari (telefon raqami, kontaktlar, xabarlar) Telegram’ning o‘zi tomonidan qayta ishlanadi va uning maxfiylik siyosatiga bo‘ysunadi.',

        'privacy_storage_title' => '5. Saqlash va uchinchi tomonlar',
        'privacy_storage_intro' => 'IdealGram sizning ma’lumotlaringizni sotmaydi. Ilk navbatda ma’lumotlarni qurilmada yoki Telegram allaqachon ishlatadigan infratuzilmada saqlashga harakat qilamiz. Agar tashqi servislar (masalan, UzbekGPT) ulanadigan bo‘lsa, ular alohida sozlamalar va tushunarli tavsiflar orqali boshqariladi.',

        'error_back_home' => 'Bosh sahifaga qaytish',
        'error_404_title' => 'Sahifa topilmadi',
        'error_404_message' => 'Siz chat ichiga emas, chatlar orasidagi bo‘shliqqa tushib qolganga o‘xshaysiz.',
        'error_403_title' => 'Ruxsat yo‘q',
        'error_403_message' => 'IdealGram’ning bu qismi hozircha sizning akkaunt uchun yopiq.',
        'error_500_title' => 'Nimadir Shamala tomonga ketdi',
        'error_500_message' => 'Klient ichki xatoga uchradi. Go‘yoki loglarni allaqachon ko‘rib chiqdik.',
        'error_500_retry' => 'Qayta urinib ko‘rish',
    ],
];
