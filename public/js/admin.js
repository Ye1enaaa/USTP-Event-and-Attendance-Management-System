function performSearch() {
    var searchInput = document.getElementById("search-input");
    var searchText = searchInput.value.toLowerCase();

    var eventNames = document.getElementsByClassName("event-name");

    for (var i = 0; i < eventNames.length; i++) {
        var eventName = eventNames[i].innerText.toLowerCase();

        if (eventName.includes(searchText)) {
            eventNames[i].parentNode.style.display = "block";
        } else {
            eventNames[i].parentNode.style.display = "none";
        }
    }
}

function toggleSidebar() {
    var sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("show");
}

// Function to display the chosen picture
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var preview = document.getElementById("preview");
            preview.style.display = "block";
            preview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    var dropdown = document.querySelector(".user-dropdown");
    var dropdownMenu = document.querySelector(".dropdown-menu");

    dropdown.addEventListener("click", function () {
        dropdown.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove("show");
        }
    });
});

var originalEventName = "";
var originalEventDesc = "";
var originalEventPlace = "";
var originalEventDate = "";

function enableEditMode() {
    // Get the form elements you want to edit
    var eventNameElement = document.querySelector(
        ".eventtitle_container h2 #eventName"
    );
    var eventDescriptionElement = document.querySelector(".eventdiscription p");
    var eventPlaceElement = document.querySelector(
        ".locationandtime_container .event-details:nth-child(1)"
    );
    var eventDateElement = document.querySelector(
        ".locationandtime_container .event-details:nth-child(2)"
    );

    // Store the original values
    originalEventName = eventNameElement.textContent;
    originalEventDesc = eventDescriptionElement.textContent;
    originalEventPlace = eventPlaceElement.textContent;
    // originalEventDate = eventDateElement.textContent;

    // Replace the text content with input fields
    eventNameElement.innerHTML = `<input type="text" id="eventNameInput" value="${originalEventName}" />`;
    eventDescriptionElement.innerHTML = `<textarea id="eventDescInput">${originalEventDesc}</textarea>`;
    eventPlaceElement.innerHTML = `<input type="text" id="eventPlaceInput" value="${originalEventPlace.substring(
        7
    )}" />`;
    // eventDateElement.innerHTML = `<input type="date" id="eventDateInput" value="${originalEventDate.substring(
    //     6
    // )}" />`;

    // Enable the save button
    var saveButton = document.getElementById("savebutton");
    saveButton.disabled = false;
}

function saveChanges() {
    // Get the edited values from the input fields
    var eventNameInput = document.getElementById("eventNameInput");
    var eventDescInput = document.getElementById("eventDescInput");
    var eventPlaceInput = document.getElementById("eventPlaceInput");
    var eventDateInput = document.getElementById("eventDateInput");

    // Update the text content with the new values
    eventNameInput.parentNode.innerHTML = eventNameInput.value;
    eventDescInput.parentNode.innerHTML = eventDescInput.value;
    eventPlaceInput.parentNode.innerHTML = `Place: ${eventPlaceInput.value}`;
    eventDateInput.parentNode.innerHTML = `Date: ${eventDateInput.value}`;

    // Disable the save button
    var saveButton = document.getElementById("savebutton");
    saveButton.disabled = true;

    // Display a confirmation message
    alert("Information updated");
}

// Add an event listener to enable the save button when changes are made
document.addEventListener("input", function (event) {
    var saveButton = document.getElementById("savebutton");
    var eventNameInput = document.getElementById("eventNameInput");
    var eventDescInput = document.getElementById("eventDescInput");
    var eventPlaceInput = document.getElementById("eventPlaceInput");
    var eventDateInput = document.getElementById("eventDateInput");

    if (
        eventNameInput.value !== originalEventName ||
        eventDescInput.value !== originalEventDesc ||
        eventPlaceInput.value !== originalEventPlace.substring(20)
    ) {
        saveButton.disabled = false;
    } else {
        saveButton.disabled = true;
    }
});

eventDescInput.addEventListener("input", function (event) {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
});
