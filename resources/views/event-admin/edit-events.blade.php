<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: #201a50;"><i class="far fa-edit" style="color: #fdc718;"></i> EDIT EVENT</h2>
    <div class="card">
  <div class="card-header">Edit Product</div>
  <div class="card-body">
      
      <form action="{{ route('update-event', ['id' => $event->id]) }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$event->id}}" id="id" />
        <div class="form-group">
                <label for="eventName" style="color: #201a50;">Event Name:</label>
                <input type="text" name="eventName" id="eventName" value="{{$event->eventName}}">
            </div>
            <div class="form-group">
                <label for="eventDate" style="color: #201a50;">Event Date:</label>
                <input type="text" name="eventDate" id="eventDate" value="{{$event->eventDate}}">
            </div>
            <div class="form-group">
                <label for="eventTime" style="color: #201a50;">Event Time:</label>
                <input type="text" name="eventTime" id="eventTime" value="{{$event->eventTime}}">
            </div>
            <div class="form-group">
                <label for="eventPlace" style="color: #201a50;">Event Place:</label>
                <input type="text" name="eventPlace" id="eventPlace" value="{{$event->eventPlace}}">
            </div>
            <div class="form-group">
                <label for="eventDesc" style="color: #201a50;">Event Description:</label>
                <input type="text" name="eventDesc" id="eventDesc" value="{{$event->eventDesc}}">
            </div>
            <div class="form-group">
                <label for="eventPicture" style="color: #201a50;">Event Picture:</label>
                <input type="file" name="eventPicture" id="eventPicture" value="{{$event->eventPicture}}" onchange="readURL(this)">
                <img id="preview" src="#" alt="Chosen Picture" style="display: none; width: 250px; margin-left: 10px;">
            </div>
            <div class="form-buttons">
                <button type="submit" class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 rounded-lg">Submit</button>
                <button type="cancel" class="flex justify-center items-center danger-button font-bold py-2 px-10 rounded-lg">Cancel</button>
    </form>
   
  </div>
</div>
</body>
</html>