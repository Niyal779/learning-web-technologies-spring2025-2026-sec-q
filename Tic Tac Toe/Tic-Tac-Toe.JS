// Game state variables
let board = ['', '', '', '', '', '', '', '', ''];
let currentPlayer = 'X';
let gameActive = true;
let xWins = 0;
let oWins = 0;

// DOM elements
const boardElement = document.getElementById('board');
const statusElement = document.getElementById('status');
const xScoreElement = document.getElementById('xScore');
const oScoreElement = document.getElementById('oScore');
const resetBtn = document.getElementById('resetBtn');

// Winning combinations
const winPatterns = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8], 
    [0, 3, 6], [1, 4, 7], [2, 5, 8], 
    [0, 4, 8], [2, 4, 6]             
];

// Create the board dynamically
function createBoard() {
    boardElement.innerHTML = '';
    for (let i = 0; i < 9; i++) {
        const cell = document.createElement('div');
        cell.className = 'cell';
        cell.setAttribute('data-index', i);
        cell.addEventListener('click', handleCellClick);
        boardElement.appendChild(cell);
    }
}

// Handle cell click
function handleCellClick(event) {
    const cell = event.target;
    const index = cell.getAttribute('data-index');

    if (board[index] !== '' || !gameActive) {
        return;
    }

    // Update board
    board[index] = currentPlayer;
    cell.textContent = currentPlayer;
    cell.classList.add(currentPlayer === 'X' ? 'x-mark' : 'o-mark');
    cell.style.animation = 'pulse 0.3s ease';

    // Check for win or draw
    if (checkWin()) {
        // Winner found
        gameActive = false;
        statusElement.textContent = `Player ${currentPlayer} wins!`;
        
        // Update score
        if (currentPlayer === 'X') {
            xWins++;
            xScoreElement.textContent = xWins;
        } else {
            oWins++;
            oScoreElement.textContent = oWins;
        }
        
        // Highlight winning cells
        highlightWinningCells();
        
    } else if (checkDraw()) {
        // Draw
        gameActive = false;
        statusElement.textContent = "It's a draw!";
        
    } else {
        // Switch player
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        statusElement.textContent = `Player ${currentPlayer}'s turn`;
    }
}

// Check for win
function checkWin() {
    for (let pattern of winPatterns) {
        const [a, b, c] = pattern;
        if (board[a] && board[a] === board[b] && board[a] === board[c]) {
            return true;
        }
    }
    return false;
}

// Highlight winning cells
function highlightWinningCells() {
    for (let pattern of winPatterns) {
        const [a, b, c] = pattern;
        if (board[a] && board[a] === board[b] && board[a] === board[c]) {
            document.querySelector(`[data-index="${a}"]`).classList.add('win');
            document.querySelector(`[data-index="${b}"]`).classList.add('win');
            document.querySelector(`[data-index="${c}"]`).classList.add('win');
            break;
        }
    }
}

// Check for draw
function checkDraw() {
    return board.every(cell => cell !== '');
}

// Reset game
function resetGame() {
    board = ['', '', '', '', '', '', '', '', ''];
    currentPlayer = 'X';
    gameActive = true;
    statusElement.textContent = "Player X's turn";
    
    // Clear all cells
    const cells = document.querySelectorAll('.cell');
    cells.forEach(cell => {
        cell.textContent = '';
        cell.classList.remove('x-mark', 'o-mark', 'win');
        cell.style.animation = '';
    });
}

resetBtn.addEventListener('click', resetGame);

createBoard();