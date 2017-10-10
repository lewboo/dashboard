<!doctype html>
<html style="height: 100%;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HomeDash">
  <meta name="theme-color" content="#689F38">
  <meta name="msapplication-navbutton-color" content="#689F38">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.css">
  <base href="/">
  <title>Home Dashboard</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
  <script src="dashboard/js/home-dash.js"></script>
</head>

<body onload="startTime()" style="background-color: #000; color: #FFF; width: 100%; height: 100%; margin: 0px; padding: 0px; overflow: hidden;" scroll="no">
  <div style="overflow: hidden; width: 100%; height: 100%;">
    <div id="time" class="<?php print strtolower(date("F")); ?>" style="width: 512px; height: 250px; text-align: center; vertical-align: middle; float: left; border-radius: 2px; margin: 2px;">
      <div style="padding-top: 45px;">
        <div id="clock" style="font-size: 100px;"></div>
        <div style="font-size: 30px;"><?php print date("l, F d"); ?></div>
      </div>
    </div>
    <div id="weather" style="width: 440px; height: 250px; float: left; border-radius: 2px; margin: 2px;">
      <h2></h2>
      <ul>
        <li id="forecast-open-1"></li>
        <li id="forecast-open-2"></li>
        <li id="forecast-open-3"></li>
        <li id="forecast-open-4"></li>
      </ul>
      <div id="forecast-1">
        <div class="forecast"></div>
        <h3 class="date"></h3>
        <h3 class="temps"></h3>
      </div>
      <div id="forecast-2">
        <div class="forecast"></div>
        <h3 class="date"></h3>
        <h3 class="temps"></h3>
      </div>
      <div id="forecast-3">
        <div class="forecast"></div>
        <h3 class="date"></h3>
        <h3 class="temps"></h3>
      </div>
      <div id="forecast-4">
        <div class="forecast"></div>
        <h3 class="date"></h3>
        <h3 class="temps"></h3>
      </div>
    </div>
    <iframe width="512px" height="340px" src="https://app.actiontiles.com/panel/a8d24daf-0de1-449f-ab2f-3a03954d51e3" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>
    <iframe src="" width="440" height="340" style="border:none;  border-radius: 2px; background-color: #4caf50; margin: 2px; float: left;"></iframe>

  </div>
</body>
</html>
