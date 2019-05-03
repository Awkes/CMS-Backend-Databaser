/* --- Formulärkontroller --- */

// Selektorer
const regForm = document.querySelector('#register');
const regUser = document.querySelector('#register #username');
const regPass = document.querySelector('#register #password');
const entryForm = document.querySelector('#newentry');
const entryTitle = document.querySelector('#newentry #title');
const entryContent = document.querySelector('#newentry #content');
const remEntries = document.querySelectorAll('.remove-entry');

// Kontroll av användaregistrering
if (regForm) regForm.addEventListener('submit', e => {
  // Kontrollerar att username enbart innehåller A-Z, a-z, mellan 4-20 tecken.
  const reUser = /^[A-Za-z0-9_-]{4,20}$/;
  if (!reUser.test(regUser.value)) {
    e.preventDefault();
    alert('Användarnamnet får enbart innehålla tecknen "A-Z", "a-z", "0-9", "-", "_" och det måste vara mellan 4-20 tecken.');
  }
  // Kontrollerar att password enbart innehåller mellan 4-20 tecken.
  else if (regPass.value.length < 4 || regPass.value.length > 20) {
    e.preventDefault();
    alert('Lösenordet måste vara mellan 4-20 tecken.');
  }
});

// Kontroll av nya inlägg
if (entryForm) entryForm.addEventListener('submit', e => {
  // Kontrollerar att titeln innehåller något och att den inte är längre än 100 tecken
  if (entryTitle.value.length < 1 || entryTitle.value.length > 100) {
    e.preventDefault();
    alert('Titeln måste vara mellan 1-100 tecken.');
  }
  // Kontrollerar att innehållet innehåller något och att den inte är längre än 100 tecken
  else if (entryContent.value.length < 1 || entryContent.value.length > 1000) {
    e.preventDefault();
    alert('Innehållet måste vara mellan 1-1000 tecken.');
  }
});

// Kontroll av borttagning av inlägg
if (remEntries) remEntries.forEach(entry => entry.addEventListener('click', e => {
  if (!confirm('Är du säker på att du vill ta bort inlägget?')) e.preventDefault();
}));
