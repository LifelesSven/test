// typewriter in the banner
document.addEventListener('DOMContentLoaded', function () {
    var app = document.getElementById('typewriter');

    if (app) {
        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('Webdeveloper')
            .pauseFor(2500)
            .deleteAll()
            .pauseFor(400)
            .typeString('Musician')
            .pauseFor(2500)
            .deleteAll()
            .pauseFor(400)
            .start();
    } else {
        console.error('Element with ID "typewriter" not found.');
    }
});


document.addEventListener("DOMContentLoaded", function () {
    let savedTheme = localStorage.getItem("selectedTheme");

    if (savedTheme) {
        // Apply the saved theme
        document.getElementById("themeStylesheet").href = savedTheme;

        // Set the active class on the corresponding link
        let links = document.querySelectorAll(".dropdown-content a");
        links.forEach(link => {
            if (link.getAttribute("onclick").includes(savedTheme.split('/').pop())) {
                link.classList.add("active");
            }
        });
    }
});

function toggleDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function changeCSS(file, element) {
    // Construct the full relative path
    const fullPath = `css/themes/${file}`;
    
    // Update the theme stylesheet
    document.getElementById("themeStylesheet").href = fullPath;

    // Save the full path to localStorage
    localStorage.setItem("selectedTheme", fullPath);

    // Remove 'active' class from all links
    let links = document.querySelectorAll(".dropdown-content a");
    links.forEach(link => link.classList.remove("active"));

    // Add 'active' class to the clicked link
    element.classList.add("active");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};

// JavaScript to calculate and display age
document.addEventListener("DOMContentLoaded", function () {
    const birthDate = new Date("2005-01-22");
    const today = new Date();
    const age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    const dayDiff = today.getDate() - birthDate.getDate();

    // Adjust age if the birthday hasn't occurred yet this year
    const adjustedAge = monthDiff < 0 || (monthDiff === 0 && dayDiff < 0) ? age - 1 : age;

    // Set the age in the span with id="age"
    document.getElementById("age").textContent = adjustedAge;
});

document.addEventListener("DOMContentLoaded", function () {
    const start = new Date("2019-06-03");
    const today = new Date();

    // Helper function to check if a year is a leap year
    function isLeapYear(year) {
        return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
    }

    // Function to calculate the total number of days between two dates
    function calculateDaysBetween(startDate, endDate) {
        const oneDay = 24 * 60 * 60 * 1000; // Milliseconds in a day
        return Math.round((endDate - startDate) / oneDay);
    }

    // Calculate the total number of days between the start and today
    let totalDays = calculateDaysBetween(start, today);

    // Calculate the total number of years, considering leap years
    let totalYears = 0;
    let currentYear = start.getFullYear();

    while (totalDays > 0) {
        const daysInYear = isLeapYear(currentYear) ? 366 : 365;
        if (totalDays >= daysInYear) {
            totalYears++;
            totalDays -= daysInYear; // Decrement totalDays by the number of days in the current year
            currentYear++;
        } else {
            totalYears += totalDays / daysInYear;
            totalDays = 0; // Exit the loop
        }
    }

    // Format the result to one decimal place and replace "." with ","
    totalYears = totalYears.toFixed(1).replace(".", ",");

    // Remove trailing ",0" if it's a round number
    if (totalYears.endsWith(",0")) {
        totalYears = totalYears.slice(0, -2);
    }

    // Display the result
    document.getElementById("tijd").textContent = totalYears;
});
