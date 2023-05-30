import CardsController from "./cards";

const card = 20; //Количество карт
const step = 5; //Сколько будет показываться максимально игроку
const CardControllerObject = new CardsController(card, step);

// Обработчики событий для кнопок
document
    .getElementById("showForPrevButton")
    .addEventListener("click", () => CardControllerObject.ShowForPrev());
document
    .getElementById("showForNextButton")
    .addEventListener("click", () => CardControllerObject.ShowForNext());
document
    .getElementById("hideHands")
    .addEventListener("click", () => CardControllerObject.ToggleHand());

for (let itemImgNormal of document.getElementsByClassName("imgNormal")) {
    itemImgNormal.addEventListener("click", function (event) {
        const clickedElement = event.target;
        if (clickedElement.classList.value != "imgNormal") return;
        let imgsActive = document.getElementsByClassName("imgActive");
        for (let item of imgsActive) {
            item.classList.add("imgNormal"); // Добавляем новый класс
            item.classList.remove("imgActive"); // Удаляем старый класс
        }
        clickedElement.classList.add("imgActive"); // Добавляем новый класс
        clickedElement.classList.remove("imgNormal"); // Удаляем старый класс

        // Клик на выбранный элемент
        clickedElement.addEventListener("click", function () {
            clickedElement.classList.add("slide-in-blurred-top"); // Добавляем новый класс(переход)
            new Promise((resolve) => setTimeout(resolve,1000)).then(()=>{clickedElement.remove()});
            
        });
    });
}


