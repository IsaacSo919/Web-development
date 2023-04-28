

window.addEventListener("DOMContentLoaded", () => {
  


const cookies = document.cookie.split("; ");


let listMediumUser = [];
let listEasyUser = [];

//just getting a list of dictionary
for (let i = 0; i < cookies.length; i++) {
  const cookie = cookies[i].split("=");
  if (cookie[0] === "simple-movesCount") {
    listEasyUser = JSON.parse(cookie[1]);
    break;
  }
}
console.log(listEasyUser);

for (let i = 0; i < cookies.length; i++) {  
  const cookie = cookies[i].split("=");
  if (cookie[0] === "medium-movesCount") {
    listMediumUser = JSON.parse(cookie[1]);
    break;
  }
}
console.log(listMediumUser);

listEasyUser.sort((a, b) => b.score - a.score);
listMediumUser.sort((a, b) => b.score - a.score);

const easyTable = document.getElementById("easy-leaderboard-table");
const mediumTable = document.getElementById("medium-leaderboard-table");



// easy user
listEasyUser.forEach((user, i) => {
  console.log(`Processing user ${user.name} at index ${i}`);
  // Create a new row
  const newRow = document.createElement("tr");

  // Create the cells for the new row
  const rankCell = document.createElement("td");
  const nameCell = document.createElement("td");
  const scoreCell = document.createElement("td");

  // Set the values for the new cells
  rankCell.textContent = i + 1;
  nameCell.textContent = decodeURI(user.name) || "N/A"; 
  scoreCell.textContent = user.score || "N/A";
  
  console.log(`Rank: ${rankCell.textContent}, Name: ${nameCell.textContent}, Score: ${scoreCell.textContent}`);
  // Add the cells to the new row
  newRow.appendChild(rankCell);
  newRow.appendChild(nameCell);
  newRow.appendChild(scoreCell);
  console.log(newRow);

  // Add the new row to the table
  easyTable.appendChild(newRow);
});
console.log(easyTable);
// medium user
listMediumUser.forEach((user, i) => {
  console.log(`Processing user ${user.name} at index ${i}`);
  // Create a new row
  const newRow = document.createElement("tr");

  // Create the cells for the new row
  const rankCell = document.createElement("td");
  const nameCell = document.createElement("td");
  const scoreCell = document.createElement("td");

  // Set the values for the new cells
  rankCell.textContent = i + 1;
  nameCell.textContent = decodeURI(user.name) || "N/A"; 
  scoreCell.textContent = user.score || "N/A";
  
  console.log(`Rank: ${rankCell.textContent}, Name: ${nameCell.textContent}, Score: ${scoreCell.textContent}`);
  // Add the cells to the new row
  newRow.appendChild(rankCell);
  newRow.appendChild(nameCell);
  newRow.appendChild(scoreCell);
  console.log(newRow);

  // Add the new row to the table
  mediumTable.appendChild(newRow);
});
console.log(mediumTable);
});