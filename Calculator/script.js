const app = document.getElementById("app");

const calc = document.createElement("div");
calc.style.width = "200px";
calc.style.padding = "10px";
calc.style.border = "1px solid #000";
app.appendChild(calc);

const display = document.createElement("input");
display.disabled = false;  // Always enabled now
display.style.width = "100%";
display.style.height = "40px";
display.style.fontSize = "20px";
display.style.textAlign = "right";
calc.appendChild(display);

const nums = ["7","8","9","4","5","6","1","2","3","0"];
const numButtons = [];

nums.forEach(n => {
    const btn = document.createElement("button");
    btn.textContent = n;
    btn.style.width = "45px";
    btn.style.height = "45px";
    btn.style.margin = "3px";

    btn.disabled = false;  // Always enabled

    btn.addEventListener("click", () => {
        display.value += n;
    });

    numButtons.push(btn);
    calc.appendChild(btn);
});

let firstNumber = null;
let operator = null;

const plusBtn = document.createElement("button");
plusBtn.textContent = "+";
plusBtn.style.width = "45px";
plusBtn.style.height = "45px";
plusBtn.style.margin = "3px";
plusBtn.disabled = false;  // Always enabled
calc.appendChild(plusBtn);

const minusBtn = document.createElement("button");
minusBtn.textContent = "-";
minusBtn.style.width = "45px";
minusBtn.style.height = "45px";
minusBtn.style.margin = "3px";
minusBtn.disabled = false;  // Always enabled
calc.appendChild(minusBtn);

const divideBtn = document.createElement("button");
divideBtn.textContent = "/";
divideBtn.style.width = "45px";
divideBtn.style.height = "45px";
divideBtn.style.margin = "3px";
divideBtn.disabled = false;  // Always enabled
calc.appendChild(divideBtn);

const multiplyBtn = document.createElement("button");
multiplyBtn.textContent = "*";
multiplyBtn.style.width = "45px";
multiplyBtn.style.height = "45px";
multiplyBtn.style.margin = "3px";
multiplyBtn.disabled = false;  // Always enabled
calc.appendChild(multiplyBtn);

const clearBtn = document.createElement("button");
clearBtn.textContent = "C";
clearBtn.style.width = "45px";
clearBtn.style.height = "45px";
clearBtn.style.margin = "3px";
clearBtn.disabled = false;  // Always enabled
calc.appendChild(clearBtn);

const equalBtn = document.createElement("button");
equalBtn.textContent = "=";
equalBtn.style.width = "100%";
equalBtn.style.height = "45px";
equalBtn.style.margin = "5px 0";
equalBtn.disabled = false;  // Always enabled
calc.appendChild(equalBtn);

// Button functionality (removed all powerOn checks)
plusBtn.addEventListener("click", () => {
    if (display.value === "") return;
    firstNumber = Number(display.value);
    operator = "+";
    display.value = "";
});

minusBtn.addEventListener("click", () => {
    if (display.value === "") return;
    firstNumber = Number(display.value);
    operator = "-";
    display.value = "";
});

divideBtn.addEventListener("click", () => {
    if (display.value === "") return;
    firstNumber = Number(display.value);
    operator = "/";
    display.value = "";
});

multiplyBtn.addEventListener("click", () => {
    if (display.value === "") return;
    firstNumber = Number(display.value);
    operator = "*";
    display.value = "";
});

clearBtn.addEventListener("click", () => {
    display.value = "";
    firstNumber = null;
    operator = null;
});

equalBtn.addEventListener("click", () => {
    if (display.value === "" || firstNumber === null) return;

    const secondNumber = Number(display.value);

    if (operator === "+") display.value = firstNumber + secondNumber;
    else if (operator === "-") display.value = firstNumber - secondNumber;
    else if (operator === "*") display.value = firstNumber * secondNumber;
    else if (operator === "/") display.value = (secondNumber === 0) ? "Err" : firstNumber / secondNumber;

    operator = null;
    firstNumber = null;
});