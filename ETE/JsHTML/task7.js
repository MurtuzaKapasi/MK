// Display an alert
alert("Hello! This is an alert message.");

// Constants
const averageLifespanYears = 79; // Average lifespan in years
const weeksInYear = 52; // Number of weeks in a year

// Calculate average number of weeks in human lifetime
const averageWeeksInLifetime = averageLifespanYears * weeksInYear;
console.log("Average number of weeks in human lifetime:", averageWeeksInLifetime);

// Create variables to store strings
var greeting = "Hello, ";
let name = "John";
const message = greeting + name + "! Welcome.";

console.log(message);

// Get the current hour
const currentHour = new Date().getHours();

// Function to determine time of the day
function getTimeOfDay(hour) {
    if (hour >= 5 && hour < 12) {
        return "morning";
    } else if (hour >= 12 && hour < 18) {
        return "afternoon";
    } else {
        return "night";
    }
}

// Get time of the day and display a message
const timeOfDay = getTimeOfDay(currentHour);
console.log("It's currently", timeOfDay);
