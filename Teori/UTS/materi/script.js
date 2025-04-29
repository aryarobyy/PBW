document.addEventListener("DOMContentLoaded", function () {
const primeForm = document.getElementById("primeForm");
const numberInput = document.getElementById("numberInput");
const result = document.getElementById("result");

primeForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const n = parseInt(numberInput.value);
    if (isNaN(n)) {
    result.innerHTML = "Masukkan nomer yang benar!";
    return;
    }

    if (n > Number.MAX_SAFE_INTEGER) {
    result.innerHTML = "Angkanya Terlalu Besar Untuk Di proses!";
    return;
    }

    const primes = [];
    for (let i = 2; i <= n; i++) {
    if (isPrime(i)) {
        primes.push(i);
    }
    }

    result.innerHTML = `List bilangan prima dari 0${n}: <br>${primes.join(", ")}`;
});

function isPrime(num) {
    if (num < 2) return false;
    for (let i = 2; i <= Math.sqrt(num); i++) {
    if (num % i === 0) return false;
    }
    return true;
}

const whileDoForm = document.getElementById("whileDoForm");
const whileResult = document.getElementById("whileResult");
const doWhileResult = document.getElementById("doWhileResult");

whileDoForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const num = parseInt(document.getElementById("inputNumber").value);
    if (isNaN(num) || num < 1) {
    whileResult.textContent = "Tolong masukkan angka yang benar (>=1)!";
    doWhileResult.textContent = "";
    return;
    }

    let sum = 0;
    let i = 1;
    while (i <= num) {
    sum += i;
    i++;
    }
    whileResult.textContent = `Penjumlahaan dari 1 hingga ${num} (while loop): ${sum}`;

    let factorial = 1;
    let j = 1;
    do {
    factorial *= j;
    j++;
    } while (j <= num);
    doWhileResult.textContent = `Faktorial dari ${num} (do...while loop): ${factorial}`;
});
});
