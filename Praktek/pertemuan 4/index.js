// const fibo = document.getElementById("fibonacci")

const n = 5;
let num1 = 0, num2 = 1, f;

for (let i = 1; i <= n; i++) {
    f = num1 + num2;
    num1 = num2;
    num2 = f;
    console.log(f);
}
