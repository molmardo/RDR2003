let translations = {};
let fallbackTranslations = {}; // Angol fordításokat ide töltjük

const availableLanguages = ['en', 'hu', 'vn', 'de']; // Itt adhatod meg, milyen nyelvek legyenek elérhetők

function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
  const nameEQ = name + "=";
  const ca = document.cookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

async function loadJSON(language) {
  try {
    const response = await fetch(`langs/${language}.json`);
    if (!response.ok) throw new Error(`Could not load ${language}.json`);
    return await response.json();
  } catch (error) {
    console.error(`Error loading language file '${language}':`, error);
    return {};
  }
}

async function loadTranslations(language) {
  translations = await loadJSON(language);
  if (language !== 'en') {
    fallbackTranslations = await loadJSON('en');
  } else {
    fallbackTranslations = translations; // Ha az angol az aktuális, ne töltsük kétszer
  }
  updateText();
}

function getTranslationValue(path, obj) {
  return path.split('.').reduce((o, p) => (o ? o[p] : undefined), obj);
}

function updateText() {
  document.querySelectorAll('[data-i18n]').forEach(element => {
    const key = element.getAttribute('data-i18n');
    let value = getTranslationValue(key, translations);

    if (!value) {
      value = getTranslationValue(key, fallbackTranslations);
    }

    if (value) {
      element.textContent = value;
    } else {
      element.textContent = `[${key}]`; // Kulcs hibajelzés
    }
  });
}


async function changeLanguage(language) {
  if (availableLanguages.includes(language)) {
    await loadTranslations(language);
    setCookie('language', language, 30);
  } else {
    console.warn(`Language '${language}' is not available.`);
  }
}

document.addEventListener('DOMContentLoaded', async () => {
  const languageSwitcher = document.getElementById('languageSwitcher');

  // Dinamikusan létrehozzuk az opciókat
  availableLanguages.forEach(lang => {
    const option = document.createElement('option');
    option.value = lang;
    option.textContent = lang.toUpperCase();
    languageSwitcher.appendChild(option);
  });

  const savedLang = getCookie('language');
  const browserLang = (navigator.language || navigator.userLanguage).slice(0, 2);
  const defaultLang = availableLanguages.includes(browserLang) ? browserLang : 'en';

  languageSwitcher.value = savedLang || defaultLang;
  await loadTranslations(savedLang || defaultLang);

  languageSwitcher.addEventListener('change', (e) => {
    changeLanguage(e.target.value);
  });
});
