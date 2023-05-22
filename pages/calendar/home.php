<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
    <script src="../../js/calendar.js"></script>
    <script src="../../js/PopupManager.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/calendar/calendar.css">
    <title>Document</title>
</head>
<body>
    <div id="headerContainer" class="header">
        <div class="backBtn"
             id="backBtn">
            <img src="../../css/assets/icons/angle-left-solid.svg" />
        </div>
        <div class="nextBtn"
             id="nextBtn">
            <img src="../../css/assets/icons/angle-right-solid.svg" />
        </div>
        <div id="viewDate" class="viewDate"></div>
        <div class="buttonContainer">
            <div id="dayButton">Day</div>
            <div id="weekButton">Week</div>
            <div id="monthButton">Month</div>
            <div id="yearButton">Year</div>
        </div>
        <div class="addEventButtonContainer">
            <div id="addEventButton">Add Event</div>
        </div>
    </div>
    <div class="mainSection">
        <div class="modules"></div>
        <div id="calendar" class="calendar"></div>
        <div class="action_bar"></div>
        <div class="popup" id="popup">
            <?php include 'createmode/addEvent.php'; ?>
        </div>
        <div class="calendar-overlay" id="calendar-overlay"></div>
    </div>
</body>
</html>