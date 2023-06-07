<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Account</title>
  <style>
    /* Add your custom CSS styles here */
    .img-circle {
      padding: 0px 0px;
      border-radius: 50%;
      right:50px;
      left:50px;
      top:10;
      background: linear-gradient(to right, #DDDBDF 100%, #DFB0DA 80%);
     
    }
    .img-size-2 {
      width: 150px;
      height: 150px;
      object-fit:cover;
    }

    .row {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: normal;
      align-items: normal;
      align-content: normal;
      
      
    }
    .col-md-6 {
      flex: 0 0 45%;
      max-width: 50%;
      padding-right: 15px;
      padding-left: 15px;
      
    }
    .panel {
      margin-bottom: 50px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .panel-heading {
      padding: 10px 15px;
      border-bottom: 1px solid #ddd;
      background-color: #f5f5f5;
    }
    .panel-heading span {
      margin-right: 100x;
      font-family: helvetica;
      font-weight: bold;
      color: #14396A !important;
      font-size: 14px;
      
    }
    .panel-body {
      padding: 50px;
      background: #A7CFDF;
      background: linear-gradient(to right, #A7CFDF 0%, #A7CFDF 0%);
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-control {
      display: block;
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #FFFFFF;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
      color: #FFFFFF;
      background-color: #337ab7;
      border-color: #2e6da4;
    }
    .btn-default {
      color: #333;
      background-color: #fff;
      border-color: #ccc;
    }
    .btn-file {
      position: flex;
      overflow: hidden;
    }
    .btn-file input[type="file"] {
      position: absolute;
      top: 10;
      right: 10;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      opacity: 0;
      outline: none;
      background: white;
      cursor: inherit;
      display: block;
    }
  </style>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-heading clearfix">
              <span class="glyphicon glyphicon-camera"></span>
              <span>PROFILE</span>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4">
                <img class="img-circle img-size-2  " src="" alt="" id="profileImage">
              </div>
              <div class="col-md-8">
                <form class="form" action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="file_upload" multiple="multiple" class="btn btn-default btn-file" id="imageInput" />
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-warning">Change</button>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <span class="glyphicon glyphicon-edit"></span>
            <span>EDIT MY ACCOUNT</span>
          </div>
          <div class="panel-body">
            <form method="post" action="#" class="clearfix">
              <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="name" class="form-control" name="name" value="">
              </div>
              <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" class="form-control" name="username" value="">
              </div>
              <div class="form-group clearfix">
                <button type="submit" name="update" class="btn btn-info">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
    document.getElementById("imageInput").addEventListener("change", function(event) {
      var selectedFile = event.target.files[0];

      if (selectedFile) {
        var reader = new FileReader();
        reader.onload = function(event) {
          var profileImage = document.querySelector("#profileImage");
          profileImage.src = event.target.result;
        };
        reader.readAsDataURL(selectedFile);
      }
    });
  </script>
</body>

</html>