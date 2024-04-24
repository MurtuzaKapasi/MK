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

// Display Fibonacci series on HTML page
document.addEventListener('DOMContentLoaded', function() {
    const fibonacciSeriesElement = document.getElementById('fibonacci-series');
    const n = this.doctype.getElementById("no");
    // const n = 10; // Change n to the desired number of terms in the series
    const fibonacciSeries = generateFibonacci(n);
    
    // Displaying the series on the HTML page
    fibonacciSeriesElement.innerHTML = `<p>${fibonacciSeries.join(', ')}</p>`;
});
