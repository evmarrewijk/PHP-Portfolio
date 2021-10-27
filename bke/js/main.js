import Player from "./Player.js";
/**
 * To start:
 * Check index.html, make sure the board with fields are created with correct classnames
 * The board should be 3x3 fields
 * Add correct classes
 */

const players = [];
let currentPlayer = 0; // This is the index of the array of the currentplayer
const fields = document.querySelectorAll('.board > .field');
const resetButton = document.querySelector(".reset-btn");
//Create two players aligned with the Player class
const playerOne = new Player("Jan", "X");
const playerTwo = new Player("Theo", "O");

//Add both players to the players array
players.push(playerOne);
players.push(playerTwo);
/**
 * Assignment
 * Make a loop thru all the fields and add a click event. 
 * Connect the addSymbolToField function in the eventHandler
 */
for (let i = 0; i < fields.length; i++) {
  const field = fields[i];
  field.addEventListener('click', function() {
    addSymbolToField(field);
    checkWinner();
  });
}


/**
 * Assignment 
 * Give body to the reset function (the function exists below)
 */
resetButton.addEventListener("click", resetGame);



function addSymbolToField(field) {
  const fieldContent = field.textContent;
  if (fieldContent === 'X' || fieldContent === 'O') {
    alert('This field can not be used');
    return;
  }
  field.textContent = players[currentPlayer].symbol;
  if (currentPlayer == 0) {
    currentPlayer = 1;
  } else {
    currentPlayer = 0;
  }
}


/**
 * Assignment
 * Add the current player symbol to the field textContent
 * What more needs to be done here? Make a short todolist
 */


function checkWinner() {
  /**
   * Assignment
   * Add an algorithm to check if someone has three in a row
   * Try to use Internet - if not found the teacher will give you one
   * Also make sure you check for a draw (gelijkspel)
   * Again what more needs to be done, make a short todolist
   */
  let winner = false; //Variable to see if someone has won

  //First horizontal check
  if (fields[0].textContent + fields[1].textContent + fields[2].textContent === "XXX" ||
    fields[0].textContent + fields[1].textContent + fields[2].textContent === "OOO") {
    winner = true;
    //Second horizontal check
  } else if (fields[3].textContent + fields[4].textContent + fields[5].textContent === "XXX" ||
    fields[3].textContent + fields[4].textContent + fields[5].textContent === "OOO") {
    winner = true;
    //Third horizontal check
  } else if (fields[6].textContent + fields[7].textContent + fields[8].textContent === "XXX" ||
    fields[6].textContent + fields[7].textContent + fields[8].textContent === "OOO") {
    winner = true;
    //First vertical check
  } else if (fields[0].textContent + fields[3].textContent + fields[6].textContent === "XXX" ||
    fields[0].textContent + fields[3].textContent + fields[6].textContent === "OOO") {
    winner = true;
    //Second vertical check
    winner = true;
  } else if (fields[1].textContent + fields[4].textContent + fields[7].textContent === "XXX" ||
    fields[1].textContent + fields[4].textContent + fields[7].textContent === "OOO") {
    winner = true;
    //Third vertical check
  } else if (fields[2].textContent + fields[5].textContent + fields[8].textContent === "XXX" ||
    fields[2].textContent + fields[5].textContent + fields[8].textContent === "OOO") {
    winner = true;
    //Diagonal top-left to bottom-right check
  } else if (fields[0].textContent + fields[4].textContent + fields[8].textContent === "XXX" ||
    fields[0].textContent + fields[4].textContent + fields[8].textContent === "OOO") {
    winner = true;
    //Diagonal bottom-left to top-right check
  } else if (fields[2].textContent + fields[4].textContent + fields[6].textContent === "XXX" ||
    fields[2].textContent + fields[4].textContent + fields[6].textContent === "OOO") {
    winner = true;
  }

  //If we do not have a winner, check if 9 fields are checked at this stage (draw)
  if (winner == false) {
    let filledFields = 0;
    for (let i = 0; i < fields.length; i++) {
      if (fields[i].textContent === "X" || fields[i].textContent === "O") {
        filledFields++;
      }
    }
    if (filledFields === 9) {
      alert('We DO NOT have a winner.');
      alert('The game is a draw 9 fields filled, no winner.');
      setTimeout(resetGame, 500);
    }
  } else {
    //Else we have a winner
    const winnerName = players[currentPlayer].name;
    alert('We have a winner');
    alert(winnerName + ' has won this round....');
    setTimeout(resetGame, 500);
  }

}

function resetGame() {
  /**
   * Assignment
   * Make sure this works (all fields empty, reset data if needed)
   */
  fields.forEach(field => {
    field.textContent = "";
  })

}
