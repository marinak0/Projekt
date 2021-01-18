// selektori botuna

const oNama = document.querySelector(".oNama")
const tecajnaLista = document.querySelector(".tecajnaLista")
const konvertor = document.querySelector(".konvertor")
const kontakt = document.querySelector(".kontakt")

// selektori botuna

const oNamaSekcija = document.querySelector(".about__us")
const tecajnaListaSekcija = document.querySelector(".tecajna__lista")
const konvertorSekcija = document.querySelector(".converter")
const kontaktSekcija = document.querySelector(".contact__form")

oNama.addEventListener("click", ()=> {
  oNamaSekcija.scrollIntoView();
})

tecajnaLista.addEventListener("click", ()=> {
  tecajnaListaSekcija.scrollIntoView();
})

konvertor.addEventListener("click", ()=> {
  konvertorSekcija.scrollIntoView();
})

kontakt.addEventListener("click", ()=> {
  kontaktSekcija.scrollIntoView();
})