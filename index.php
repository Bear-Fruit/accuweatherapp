<?php  
    $error= "ERROR: API requests depleted, using old data.";
    //EXAMPLE OF JSON RESPONSE
    $json_string = '{
        "Headline": {
          "EffectiveDate": "2019-02-27T07:00:00+02:00",
          "EffectiveEpochDate": 1551243600,
          "Severity": 7,
          "Text": "Very warm Wednesday",
          "Category": "heat",
          "EndDate": "2019-02-27T19:00:00+02:00",
          "EndEpochDate": 1551286800,
          "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/extended-weather-forecast/243939?lang=en-us",
          "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?lang=en-us"
        },
        "DailyForecasts": [
          {
            "Date": "2019-02-26T07:00:00+02:00",
            "EpochDate": 1551157200,
            "Temperature": {
              "Minimum": {
                "Value": 63,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 91,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "Day": {
              "Icon": 4,
              "IconPhrase": "Intermittent clouds"
            },
            "Night": {
              "Icon": 33,
              "IconPhrase": "Clear"
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=1&lang=en-us",
            "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=1&lang=en-us"
          },
          {
            "Date": "2019-02-27T07:00:00+02:00",
            "EpochDate": 1551243600,
            "Temperature": {
              "Minimum": {
                "Value": 66,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 96,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "Day": {
              "Icon": 1,
              "IconPhrase": "Sunny"
            },
            "Night": {
              "Icon": 34,
              "IconPhrase": "Mostly clear"
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=2&lang=en-us",
            "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=2&lang=en-us"
          },
          {
            "Date": "2019-02-28T07:00:00+02:00",
            "EpochDate": 1551330000,
            "Temperature": {
              "Minimum": {
                "Value": 68,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 98,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "Day": {
              "Icon": 1,
              "IconPhrase": "Sunny"
            },
            "Night": {
              "Icon": 35,
              "IconPhrase": "Partly cloudy"
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=3&lang=en-us",
            "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=3&lang=en-us"
          },
          {
            "Date": "2019-03-01T07:00:00+02:00",
            "EpochDate": 1551416400,
            "Temperature": {
              "Minimum": {
                "Value": 67,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 97,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "Day": {
              "Icon": 3,
              "IconPhrase": "Partly sunny"
            },
            "Night": {
              "Icon": 35,
              "IconPhrase": "Partly cloudy"
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=4&lang=en-us",
            "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=4&lang=en-us"
          },
          {
            "Date": "2019-03-02T07:00:00+02:00",
            "EpochDate": 1551502800,
            "Temperature": {
              "Minimum": {
                "Value": 69,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 97,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "Day": {
              "Icon": 3,
              "IconPhrase": "Partly sunny"
            },
            "Night": {
              "Icon": 34,
              "IconPhrase": "Mostly clear"
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=5&lang=en-us",
            "Link": "http://www.accuweather.com/en/na/windhoek/243939/daily-weather-forecast/243939?day=5&lang=en-us"
          }
        ]
      }';
    /*  UNCOMMENT IF YOU HAVE APIKEY
        $api_key = "YOUR ACCUWEATHER APIKEY HERE";
        $city="ACCUWEATHER CITY LOCATION NUMBER";
        $url = "http://dataservice.accuweather.com/forecasts/v1/daily/5day/$city?apikey=$api_key";
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $json_string = curl_exec($ch);
        $error= "";
    */
    $parsed_json = json_decode($json_string,true);
    //var_dump($json_string);
    //var_dump($parsed_json);
   // echo $parsed_json['error'];
  // echo $parsed_json['DailyForecasts'][0]['Date'];
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" media="screen" href="css/style.css">
    </head>
    <body>
      <!-- The Modal -->
        <div id="myModal" class="modal">


        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p style="font-size:20px;">RESOURCES</p>
          <div class="modal-main">
            
              <a href="https://www.linkedin.com/in/lazarus-uusiku-5369b3167/" class="modal-element" >
                <center><img src="icons/person.png" class="more-img"></center>
                <p class="modal-element-text">Lazarus Uusiku</p>
              </a>
              <a href="#" class="modal-element" >
                <center><img src="icons/git.png" class="more-img" ></center>
                <p class="modal-element-text">GITHUB</p>
              </a>
              <a href="https://befonts.com/blanka-font.html" class="modal-element" >
                <center><img src="icons/font.png" class="more-img" ></center>
                <p class="modal-element-text">Blanka</p>
              </a>
              <a href="https://vincentgarreau.com/particles.js" class="modal-element" >
                <center><img src="icons/dots.png" class="more-img";></center>
                <p class="modal-element-text">JS background</p>
              </a>
          </div>
          

        </div>
        </div>
        <main >
                <div class="back" id="particles-js"></div>
                <div class="error" ><?php echo $error; ?></div>
                <div class="title"><h1>ATUHE Tech</h1></div>
                <div class="more"><center></center><button id="myBtn"><img src="icons/more.png"></button></div>
                <div class="city" id="msg"><h3 style="font-size:30px;">Windhoek</h3><span id="text_target"></span></div>
                
                <div class="card "  >
                    
                    <div class="me card-max1" style="font-family:Blanka;" ><?php echo (round(($parsed_json['DailyForecasts'][0]['Temperature']['Maximum']['Value']-32)/1.8)); ?>&#176;</div>
                    <div class="card-min1">Minimum: <?php echo (round(($parsed_json['DailyForecasts'][0]['Temperature']['Minimum']['Value']-32)/1.8)); ?>&#176;C</div>
                    <div class="card-icon1"><center><img src="wicons/<?php echo $parsed_json['DailyForecasts'][0]['Day']['Icon']; ?>-s.png"></center></div>
                    <div class=" card-date1"><?php $date=date_create($parsed_json['DailyForecasts'][0]['Date']); echo date_format($date,"M d "); ?></div>
                    <div class="card-des1" style="font-family:Blanka;"><?php echo $parsed_json['DailyForecasts'][0]['Day']['IconPhrase']; ?></div>
                </div>
                    <div class="minicard one">
                            <div class="card-day" style="font-size: 20px;"><?php $date=date_create($parsed_json['DailyForecasts'][1]['Date']); echo date_format($date,"l "); ?></div>
                            <div class="card-date" style="font-size: 20px;"><?php $date=date_create($parsed_json['DailyForecasts'][1]['Date']); echo date_format($date,"M d "); ?></div>
                            <div class="card-max" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][1]['Temperature']['Maximum']['Value']-32)/1.8)); ?>&#176;</div>
                        
                            <div class="card-des"><?php echo $parsed_json['DailyForecasts'][1]['Day']['IconPhrase']; ?></div>
                            <div class="card-icon"><center><img src="wicons/<?php echo $parsed_json['DailyForecasts'][1]['Day']['Icon']; ?>-s.png"></center></div>
                            <div class="card-min" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][1]['Temperature']['Minimum']['Value']-32)/1.8));; ?>&#176;</div>
                    </div>
                    <div class="minicard two">
                            <div class="card-day" style="font-size: 20px;"><?php $date=date_create($parsed_json['DailyForecasts'][2]['Date']); echo date_format($date,"l "); ?></div>
                            <div class="card-date" style="font-size: 20px;"><?php $date=date_create($parsed_json['DailyForecasts'][2]['Date']); echo date_format($date,"M d "); ?></div>
                            <div class="card-max" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][2]['Temperature']['Maximum']['Value']-32)/1.8)); ?>&#176;</div>
                            <div class="card-icon"><center><img src="wicons/<?php echo $parsed_json['DailyForecasts'][2]['Day']['Icon']; ?>-s.png"></center></div>
                            <div class="card-min" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][2]['Temperature']['Minimum']['Value']-32)/1.8));; ?>&#176;C</div>
                            <div class="card-des"><?php echo $parsed_json['DailyForecasts'][2]['Day']['IconPhrase']; ?></div>
                            
                    </div>
                    <div class="minicard three">
                            <div class="card-day" style="font-size: 20px;"><?php $date=date_create($parsed_json['DailyForecasts'][3]['Date']); echo date_format($date,"l "); ?></div>
                            <div class="card-date" style="font-size: 20px;" ><?php $date=date_create($parsed_json['DailyForecasts'][3]['Date']); echo date_format($date,"M d "); ?></div>
                            <div class="card-max" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][3]['Temperature']['Maximum']['Value']-32)/1.8)); ?>&#176;</div>
                            <div class="card-icon "><center><img src="wicons/<?php echo $parsed_json['DailyForecasts'][3]['Day']['Icon']; ?>-s.png"></center></div>
                            <div class="card-min" style="font-size: 15px;"><?php echo (round(($parsed_json['DailyForecasts'][3]['Temperature']['Minimum']['Value']-32)/1.8));; ?>&#176;C</div>
                            <div class="card-des"><?php echo $parsed_json['DailyForecasts'][3]['Day']['IconPhrase']; ?></div> 
                            
                    </div> 
                    <div class='minicard four'></div>
                    <div class='minicard five'></div>

        </main>
        
        <!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>
<script>
var showText = function (target, message, index, interval) {    
  if (index < message.length) { 
    $(target).append(message[index++]); 
    setTimeout(function () { showText(target, message, index, interval); }, interval); 
  } 
}
    
$(function () { 
 
  showText("#msg", "Hello, World!", 0, 500);    
 
}); 
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var x = document.getElementsByTagName("MAIN")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  x.style.filter = "blur(15px)";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  x.style.filter = "blur(0px)";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    x.style.filter = "blur(0px)";
  }
}
</script>
    </body>
</html>
