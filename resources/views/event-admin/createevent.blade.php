<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: #201a50;"><i class="far fa-edit" style="color: #fdc718;"></i> CREATE EVENT</h2>
    <div class="form-container">    
        <form action="{{route('add.event')}}" method="post" enctype="multipart/form-data">
            @csrf         
            <div class="form-group">
                <label for="eventName" style="color: #201a50;">Event Name:</label>
                <input type="text" name="eventName" id="eventName" placeholder="Event Name">
            </div>
            <div class="form-group">
                <label for="eventDate" style="color: #201a50;">Event Date:</label>
                <input type="date" name="eventDate" id="eventDate" placeholder="Event Date">
            </div>
            <div class="form-group">
                <label for="eventTime" style="color: #201a50;">Event Time:</label>
                <input type="time" name="eventTime" id="eventTime" placeholder="Event Time">
            </div>
            <div class="form-group">
                <label for="eventPlace" style="color: #201a50;">Event Place:</label>
                <input type="text" name="eventPlace" id="eventPlace" placeholder="Event Place">
            </div>
            <div class="form-group">
                <label for="eventDesc" style="color: #201a50;">Event Description:</label>
                <input type="text" name="eventDesc" id="eventDesc" placeholder="Event Description">
            </div>
            <div class="form-group">
                <label for="eventPicture" style="color: #201a50;">Event Picture:</label>
                <input type="file" name="eventPicture" id="eventPicture" placeholder="Event Picture" onchange="readURL(this)">
                <img id="preview" src="#" alt="Chosen Picture" style="display: none; width: 250px; margin-left: 10px;">
            </div>
            <div class="form-buttons">
                <button type="submit" class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 rounded-lg">Submit</button>
                <button type="cancel" class="flex justify-center items-center danger-button font-bold py-2 px-10 rounded-lg">Cancel</button>
        </form>
    </div>
</body>
</html>