const izracunProdaja = document.querySelector(".izracunProdaja");
const btnProdaja = document.querySelector(".izracunajProdaja");

const tecajListaProdaja = {
  AUD: 4.83,
  CAD: 4.89,
  CZK: 0.29,
  DKK: 1.02,
  HUF: 0.021,
  JPY: 0.06,
  NOK: 0.73,
  SEK: 0.75,
  CHF: 7.02,
  GBP: 8.53,
  USD: 6.23,
  BAM: 3.88,
  EUR: 7.59,
  PLN: 1.68,
};

function calculateProdaja() {
  let iznosProdaja = document.querySelector("#iznosProdaja").value;
  const valueToKunaProdaja = document.querySelector("#valuteProdaja").value;
  let resultProdaja = 0;

  resultProdaja = iznosProdaja * tecajListaProdaja[valueToKunaProdaja];
  izracunProdaja.textContent = resultProdaja.toFixed(2) + " " + "kn";
}

btnProdaja.addEventListener("click", () => {
  calculateProdaja();
  iznosProdaja.value = "";
});
