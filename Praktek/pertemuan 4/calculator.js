const calculate = (operator, ...numbers) => {
switch (operator) {
    case '+':
        return numbers.reduce((acc, cur) => acc + cur, 0);
    case '-':
        return numbers.reduce((acc, cur) => acc - cur);
    case '*':
        return numbers.reduce((acc, cur) => acc * cur, 1);
    case '/':
        return numbers.reduce((acc, cur) => acc / cur);
    case '%':
        return numbers.reduce((acc, cur) => acc % cur);
    default:
        return 'Operator tidak valid';
}
};

console.log("Tambah: ", calculate('+', 1, 2, 3, 4));
console.log("Kurang: ", calculate('-', 10, 2, 3));
console.log("Kali: ", calculate('*', 2, 3, 4)); 
console.log("Bagi: ", calculate('/', 100, 2, 5)); 
console.log("Modulus: ", calculate('%', 100, 7)); 
