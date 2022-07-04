const impression_card = document.querySelector('.impression_card'),
    profil_card = document.querySelector('.profil_card');

document.querySelector('.imprimer').addEventListener('click', () => {
    profil_card.style.display = "none";
    document.querySelector('.impression_card').style.display = "block";
    window.print();
    impression_card.style.display = "none";
    profil_card.style.display = "block";
}, false)