<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/common/popup.css">
  <link rel="stylesheet" type="text/css" href="../../css/common/layout.css">
  <title class="popupDOMTitle">AddEventPopup</title>
</head>
<body>
  <div class="title">
    <h3>Add Event</h3>
  </div>
  <div class="closeBtn" id="closeBtn">
    <img src="../../css/assets/icons/xmark-solid.svg" />
  </div>
  <form id="addEventForm">
    <div class="row">
      <div class="col full">
        <div class="title">Title</div>
        <div class="value">
          <input type="text" id="title" name="title" placeholder="Event Title" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col half">
        <div class="title">Start Date</div>
        <div class="value">
          <input type="date" id="start" name="start" required>
        </div>
      </div>
      <div class="col half">
        <div class="Title">Start Time</div>
        <div class="value">
          <input type="time" id="startTime" name="startTime" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col half">
        <div class="title">End Date</div>
        <div class="value">
          <input type="date" id="end" name="end" required>
        </div>
      </div>
      <div class="col half">
        <div class="Title">End Time</div>
        <div class="value">
          <input type="time" id="endTime" name="endTime" required>
        </div>
      </div>
    </div>

    <button class="popupSubmitBtn" type="submit">Add Event</button>
  </form>
</body>
</html>

