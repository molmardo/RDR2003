let translations = {};
let fallbackTranslations = {}; // English fallback

const availableLanguages = ['en', 'hu', 'vn', 'de']; // Available languages

function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = `${name}=${value};${expires};path=/`;
}

function getCookie(name) {
  const nameEQ = `${name}=`;
  const ca = document.cookie.split(';');
  for (let c of ca) {
    c = c.trim();
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length);
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
  fallbackTranslations = (language !== 'en') ? await loadJSON('en') : translations;
  updateText();
}

function getTranslationValue(path, obj) {
  return path.split('.').reduce((o, p) => (o ? o[p] : undefined), obj);
}

function updateText() {
  document.querySelectorAll('[data-i18n]').forEach(element => {
    const key = element.getAttribute('data-i18n');
    let value = getTranslationValue(key, translations) || getTranslationValue(key, fallbackTranslations);

    element.textContent = value || `[${key}]`;
  });
}

async function changeLanguage(language) {
  if (availableLanguages.includes(language)) {
    await loadTranslations(language);
    setCookie('language', language, 30);
  } else {
    console.warn(`Language '${language}' is not supported.`);
  }
}

document.addEventListener('DOMContentLoaded', async () => {
  const languageSwitcher = document.getElementById('languageSwitcher');

  availableLanguages.forEach(lang => {
    const option = document.createElement('option');
    option.value = lang;
    option.textContent = lang.toUpperCase();
    languageSwitcher.appendChild(option);
  });

  const savedLang = getCookie('language');
  const browserLang = (navigator.language || navigator.userLanguage).slice(0, 2);
  const defaultLang = availableLanguages.includes(browserLang) ? browserLang : 'en';

  const initialLang = savedLang || defaultLang;
  languageSwitcher.value = initialLang;

  await loadTranslations(initialLang);

  languageSwitcher.addEventListener('change', async (e) => {
    await changeLanguage(e.target.value);
  });
});
