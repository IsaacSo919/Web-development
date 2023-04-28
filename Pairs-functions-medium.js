const moves = document.getElementById("moves-count");
const timeValue = document.getElementById("time");
const startButton = document.getElementById("start");
const chooseDifficultyButton = document.getElementById("choose-difficulty");
const stopButton = document.getElementById("stop");
const gameContainer =document.querySelector(".game-container-medium");
const submitResultButton = document.getElementById("submit-result");
const timeLimit = 600;
const maxMoves = 200;

const movesCountDictionary = [];

let mediumMovesCount = [];
const cookies = document.cookie.split("; ");

let userName = "";

for (let i = 0; i < cookies.length; i++) {
  const cookie = cookies[i].split("=");
  if (cookie[0] === "medium-movesCount") {
    mediumMovesCount = JSON.parse(decodeURIComponent(cookie[1]));
    break;
  }
}
if (mediumMovesCount.length === 0) {
  console.log("Error: No records found in the medium-movesCount cookie.");
} else {
  mediumMovesCount.forEach((item) => {
    const name = item.name;
    const movesNo = item.movesNo;

    const newMovesData = {
      name: name,
      movesNo: movesNo
    };

    movesCountDictionary.push(newMovesData);
  });

  
}

console.log(movesCountDictionary);

for (let i = 0; i < cookies.length; i++) {
  const cookie = cookies[i].split("=");
  if (cookie[0] === "Name") {
    // If the "Name" cookie is found, set the userName variable
    userName = cookie[1];
    break;
  }
}


console.log(userName);

const result = document.getElementById("result");
const controls = document.querySelector(".controls-container");

let interval;
let firstCard = false;
let secondCard = false;
let cards;



const eyes = [
  { name: "closed", image: "emoji assets/emoji assets/eyes/closed.png" },
  { name: "laughing", image: "emoji assets/emoji assets/eyes/laughing.png" },
  { name: "long", image: "emoji assets/emoji assets/eyes/long.png" },
  { name: "normal", image: "emoji assets/emoji assets/eyes/normal.png" },
  { name: "rolling", image: "emoji assets/emoji assets/eyes/rolling.png" },
  { name: "winking", image: "emoji assets/emoji assets/eyes/winking.png" },
];

const mouths = [
  { name: "open", image: "emoji assets/emoji assets/mouth/open.png" },
  { name: "sad", image: "emoji assets/emoji assets/mouth/sad.png" },
  { name: "smiling", image: "emoji assets/emoji assets/mouth/smiling.png" },
  { name: "straight", image: "emoji assets/emoji assets/mouth/straight.png" },
  { name: "surprise", image: "emoji assets/emoji assets/mouth/surprise.png" },
  { name: "teeth", image: "emoji assets/emoji assets/mouth/teeth.png" },
];

const skins = [
  { name: "green", image: "emoji assets/emoji assets/skin/green.png" },
  { name: "red", image: "emoji assets/emoji assets/skin/red.png" },
  { name: "yellow", image: "emoji assets/emoji assets/skin/yellow.png" },
];



const emojis = [];

// loop through each eye, mouth, and skin combination to create an emoji object
for (let i = 0; i < eyes.length; i++) {
  for (let j = 0; j < mouths.length; j++) {
    for (let k = 0; k < skins.length; k++) {
      const emoji = {
        name: `Emoji ${emojis.length + 1}`,
        eyes: eyes[i],
        mouths: mouths[j],
        skins: skins[k]
      };  
      emojis.push(emoji);
    }
  }
}
// emojis.forEach((emoji) => {
//   console.log(`Name: ${emoji.name}`);
//   console.log(`Eyes: ${emoji.eyes.name} (${emoji.eyes.image})`);
//   console.log(`Mouth: ${emoji.mouth.name} (${emoji.mouth.image})`);
//   console.log(`Skin: ${emoji.skin.name} (${emoji.skin.image})`);
// });

    
let seconds = 0,
  minutes = 0;
let movesCount = 0;
  winCount = 0;
//a timer
const timeGenerator = () => {
    seconds += 1;
    //minutes logic
    if (seconds >= 60){
        minutes += 1;
        seconds = 0;
    }
    //format time before displaying 
    let secondsValue = seconds < 10 ? `0${seconds}` : seconds;
    let minutesValue = minutes < 10 ? `0${minutes}` : minutes;
    timeValue.innerHTML = `<span>Time:</span>${minutesValue}:${secondsValue}`;
};
//counting the moves
const movesCounter = () => {
    movesCount += 1;
    moves.innerHTML = `<span>Moves:</span>${movesCount}`;
};
//Choosing random objects from the array emojis[]
const generateRandom = () => {
  
  let tempArray = [...emojis];
  let cardValues = [];
  size = 5;

  for (let i = 0; i < size; i++) {
    const randomIndex = Math.floor(Math.random() * tempArray.length);
    const { eyes, mouths, skins } = tempArray[randomIndex];
    // const imageSrc = `${eyes.image}|${mouth.image}|${skin.image}`;
    // console.log(imageSrc);
    cardValues.push({ name: `Emoji ${i + 1}`, eyes:eyes, mouths:mouths, skins:skins });
    tempArray.splice(randomIndex, 1);
  }
  return cardValues;
};

const matrixGenerator = (cardValues, size = 5) => {
  gameContainer.innerHTML = "";
  // console.log(cardValues);
  cardValues = [...cardValues, ...cardValues];
  cardValues.sort(() => Math.random() - 0.5);
  // console.log(cardValues);
  for (let i = 0; i < cardValues.length; i++) {
    gameContainer.innerHTML += `<div class="card-container" data-card-value="${cardValues[i].name}">
        <div class="card-before">?</div>
        <div class="card-after">
        <img src="${cardValues[i].skins.image}" class="image"/>
          <img src="${cardValues[i].eyes.image}" class="image"/>
          <img src="${cardValues[i].mouths.image}" class="image"/>
          
        </div>
      </div>
    `;
  }

  gameContainer.style.gridTemplateColumns = `repeat(${size}, auto)`;
  cards = document.querySelectorAll(".card-container");
  
  cards.forEach((card) => {
    card.addEventListener("click", () => {
      // Card click handling logic goes here
      if(!card.classList.contains("matched")){
        card.classList.add("flipped");
        if(!firstCard){
          // console.log("first card"+card);
          firstCard = card;
          firstCardValue = card.getAttribute("data-card-value");
        }else{
          // console.log(card);
          // user selected second card,increase the moves
          movesCounter();
          secondCard = card;
          let secondCardValue = card.getAttribute("data-card-value");
          console.log(firstCardValue,secondCardValue);
          if(firstCardValue == secondCardValue){
            //if both cards has the same value, it signifies they matched
            firstCard.classList.add("matched");
            secondCard.classList.add("matched");
            //next card is the "first card" now
            firstCard = false;
            //increases the winCount
            winCount += 1 ;
            // if winCount == cardValues/2
            if(winCount == Math.floor(cardValues.length / 2)){
              result.innerHTML = `<h2>Congratulations You Win</h2><h4>Moves: ${movesCount}</h4>`;
              submitResultButton.classList.remove("hide");
              stopGame();
            }
          }else{
            //if the cards dont match
            //flip the cards back to normal
            let[tempFirst, tempSecond] = [firstCard, secondCard];
            firstCard = false;
            secondCard = false;
            let delay = setTimeout (() => {
              tempFirst.classList.remove("flipped");
              tempSecond.classList.remove("flipped");
            }, 900);
          }
        }
      }
    });
  });
};

//Start the game
startButton.addEventListener("click", ()=> {
    console.log("Start button clicked!");
  movesCount = 0;
  seconds = 0;
  minutes = 0;
  controls.classList.add("hide");
  stopButton.classList.remove("hide");
  startButton.classList.add("hide");
  submitResultButton.classList.add("hide");
  //start timer
  interval = setInterval(timeGenerator, 1000);
  //initial moves
  moves.innerHTML = `<span>Moves:</span> ${movesCount}`;
  initializer();
});

chooseDifficultyButton.addEventListener("click",()=>{
  window.location.href = "pairs.php";
});
//submit button
submitResultButton.addEventListener("click",()=>{
  
  const newMovesData = {
    score : Math.ceil((timeLimit - (minutes*60+seconds)) * (1 - (movesCount / maxMoves))),
    name: userName,
    movesNo: movesCount,
  };
  

  console.log(newMovesData);
  movesCountDictionary.push(newMovesData);
  console.log(movesCountDictionary);
  result.innerHTML = `<h2>Result submitted</h2>`;
  
  submitResultButton.classList.add("hide");

  const encodedMovesData = JSON.stringify(movesCountDictionary);
  
  // Set the medium-movesCount cookie with the encoded data and a max-age of 1 day
  document.cookie = `medium-movesCount=${encodedMovesData};`  
})

chooseDifficultyButton.addEventListener("click",()=>{
  window.location.href = "pairs.php";
});


//Stop button
stopButton.addEventListener("click",
  (stopGame = () => { 
    controls.classList.remove("hide");
    stopButton.classList.add("hide");
    startButton.classList.remove("hide");
    clearInterval(interval);
  })
);
const initializer = () => {
    result.innerText = "";
    winCount = 0;
    let cardValues = generateRandom();
    submitResultButton.classList.add("hide");
    // console.log(cardValues);
    matrixGenerator(cardValues);
};
initializer();
