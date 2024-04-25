// Function to generate Fibonacci series
function generateFibonacci(n) {
    let fibSeries = [];
    let a = 0, b = 1;
    fibSeries.push(a, b);
    for (let i = 2; i < n; i++) {
        let c = a + b;
        fibSeries.push(c);
        a = b;
        b = c;
    }
    return fibSeries;
}

// Function to handle click event
function handleClick(event) {
    event.preventDefault();
    const n = parseInt(document.getElementById('no').value);
    const fibonacciSeries = generateFibonacci(n);
    document.getElementById('fibonacci-output').innerHTML = `<p>${fibonacciSeries.join(', ')}</p>`;
}

// Add click event listener to the submit button
document.getElementById('submit').addEventListener('click', handleClick);
