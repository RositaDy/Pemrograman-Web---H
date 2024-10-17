// Elemen penting
const output = document.getElementById('output');
const result = document.getElementById('result');
const buttons = document.querySelectorAll('.btn');
const darkModeToggle = document.getElementById('dark-mode-toggle');
let currentInput = '';
let currentResult = '';

// Menambahkan event listener untuk setiap tombol
buttons.forEach(button => {
    button.addEventListener('click', function () {
        const value = this.textContent;

        if (value === 'C') {
            clearAll();
        } else if (value === '=') {
            calculateResult();
        } else if (value === '±') {
            toggleSign();
        } else if (value === '^') {
            squareNumber();
        } else if (value === '%') {
            appendToInput('%');
        } else {
            appendToInput(value);
        }
    });
});

// Menambah input ke layar
function appendToInput(value) {
    if (currentResult !== '') {
        currentInput = currentResult;
        currentResult = '';
    }
    currentInput += value;
    output.value = currentInput;
}

// Menghitung hasil ekspresi
function calculateResult() {
    try {
        let expression = currentInput
            .replace(/×/g, '*')
            .replace(/÷/g, '/')
            .replace(/%/g, '/100');
        currentResult = eval(expression);
        result.value = currentResult;
    } catch (error) {
        result.value = 'Error';
    }
}

// Fungsi untuk membersihkan semua input
function clearAll() {
    currentInput = '';
    currentResult = '';
    output.value = '';
    result.value = '';
}

// Fungsi untuk toggle ±
function toggleSign() {
    if (currentInput) {
        currentInput = (parseFloat(currentInput) * -1).toString();
        output.value = currentInput;
    }
}

// Fungsi untuk operasi kuadrat
function squareNumber() {
    if (currentInput) {
        currentInput = Math.pow(parseFloat(currentInput), 2).toString();
        output.value = currentInput;
    }
}

// Tombol toggle mode gelap/terang
darkModeToggle.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    darkModeToggle.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
});
