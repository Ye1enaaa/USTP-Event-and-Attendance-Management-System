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

//edit profile

var originalEventName = "";
var originalEventDesc = "";
var originalEventPlace = "";

function enableEditMode() {
    // Get the form elements you want to edit
    var eventNameElement = document.querySelector(
        ".eventtitle_container h2 #eventName"
    );
    var eventDescriptionElement = document.querySelector(".eventdiscription p");
    var eventPlaceElement = document.querySelector(
        ".locationandtime_container .event-details:nth-child(1)"
    );
    // var eventDateElement = document.querySelector(
    //     ".locationandtime_container .event-details:nth-child(2)"
    // );
    // var eventTimeElement = document.querySelector("#eventTime");

    // Store the original values
    originalEventName = eventNameElement.textContent;
    originalEventDesc = eventDescriptionElement.textContent;
    originalEventPlace = eventPlaceElement.textContent.trim().substring(7);
    // originalEventTime = eventTimeElement.textContent;
    // originalEventDate = eventDateElement.textContent;

    // Replace the text content with input fields
    eventNameElement.innerHTML = `<input type="text" id="eventNameInput" value="${originalEventName}" name="eventName"/>`;
    eventDescriptionElement.innerHTML = `<textarea id="eventDescInput" name="eventDesc">${originalEventDesc}</textarea>`;
    eventPlaceElement.innerHTML = `<input type="text" id="eventPlaceInput" value="${originalEventPlace.substring(
        7
    )}" />`;
    // eventDateElement.innerHTML = `<input type="date" id="eventDateInput" name="eventDate" value="${originalEventDate}" />`; // Updated to include the full originalEventDate
    // eventTimeElement.innerHTML = `<input type="text" id="eventTimeInput" value="${originalEventTime}" name="eventTime"/>`;
    // Enable the save button
    var saveButton = document.getElementById("savebutton");
    saveButton.disabled = false;
}

function saveChanges(eventId) {
    // Get the edited values from the input fields
    var eventNameInput = document.getElementById("eventNameInput");
    var eventDescInput = document.getElementById("eventDescInput");
    var eventPlaceInput = document.getElementById("eventPlaceInput");
    var eventDateInput = document
        .getElementById("eventDate")
        .textContent.trim()
        .replace("Date: ", "");
    var eventTimeInput = document.getElementById("eventTime").textContent;
    // Update the text content with the new values
    eventNameInput.parentNode.innerHTML = eventNameInput.value;
    eventDescInput.parentNode.innerHTML = eventDescInput.value;
    eventPlaceInput.parentNode.innerHTML = `Place: ${eventPlaceInput.value}`;
    // eventDateInput.parentNode.innerHTML = `Date: ${eventDateInput.value}`;

    // // Disable the save button
    // var saveButton = document.getElementById("savebutton");
    // saveButton.disabled = true;

    // // Display a confirmation message
    // alert("Information updated");

    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    var eventData = {
        eventName: eventNameInput.value,
        eventDesc: eventDescInput.value,
        eventPlace: eventPlaceInput.value,
        eventTime: eventTimeInput,
        eventDate: eventDateInput,
    };

    // Send an AJAX request to update the data in the database
    var xhr = new XMLHttpRequest();
    console.log(eventDateInput);
    var eventIds = 15;
    //var eventId = 123; // Replace with the actual event ID
    xhr.open("PUT", "/update-event/" + eventId, true); // Include the event ID in the URL
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Handle the success response
                alert("Information updated");
            } else {
                // Handle the error response
                window.location.href =
                    "http://127.0.0.1:8000/admin/event/details/" + eventId;
            }
        }
    };
    xhr.send(JSON.stringify(eventData));

    // Disable the save button
    var saveButton = document.getElementById("savebutton");
    saveButton.disabled = true;
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
