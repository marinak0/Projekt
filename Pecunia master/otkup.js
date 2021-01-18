const izracunOtkup = document.querySelector(".izracunOtkup");
const btnOtkup = document.querySelector(".izracunajOtkup");

const tecajListaOtkup = {
  AUD: 4.8,
  CAD: 4.87,
  CZK: 0.28,
  DKK: 1.01,
  HUF: 0.021,
  JPY: 0.0596,
  NOK: 0.73,
  SEK: 0.74,
  CHF: 6.98,
  GBP: 8.47,
  USD: 6.2,
  BAM: 3.86,
  EUR: 7.55,
  PLN: 1.67,
};

function calculateOtkup() {
  let iznosOtkup = document.querySelector("#iznosOtkup").value;
  const valueToKuna = document.querySelector("#valuteOtkup").value;
  let resultOtkup = 0;

  resultOtkup = iznosOtkup * tecajListaOtkup[valueToKuna];
  izracunOtkup.textContent = resultOtkup.toFixed(2) + " " + "kn";
}

btnOtkup.addEventListener("click", () => {
  calculateOtkup();
  iznosOtkup.value = "";
});
