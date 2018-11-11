function windowSizeChanged() {
  allCards = document.getElementById("container").querySelectorAll(".card");
  firstCard = allCards[0];
  firstCard.classList.add("first");
  firstCardWidth = firstCard.offsetWidth;
  
  lastCard = allCards[allCards.length - 1];
  lastCard.innerHTML = "Width: " + firstCardWidth;
  lastCard.classList.remove("flexy");
  lastCard.style.width = firstCardWidth + "px";
  lastCard.style.backgroundColor = "skyBlue";
  
  return 0;
}