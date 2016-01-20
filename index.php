<html>
  <head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<title>Pyfi | Camera</title>

<link href="lib/ionic/css/ionic.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="//code.ionicframework.com/nightly/css/ionic.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/app.js"></script>
<script src="js/controllers.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.ionicframework.com/nightly/js/ionic.bundle.js"></script>

  </head>
<body ng-app="starter">
<ion-content>

<div class="card">
  <div class="item item-divider">
    Link Account
  </div>
  <div class="card">
    <div ng-controller="post_ctrl">
    Full Name: {{firstName + " " + lastName}}
      <div class="item item-text-wrap">
        <div class="list">
          <label class="item item-input">
            <input type="text" ng-model="user" placeholder="User">
          </label>
          <label class="item item-input">
            <input type="text" ng-model="password" placeholder="Password">
          </label>        
          <label class="item item-input">
            <input type="text" ng-model="device_name" placeholder="Device's Name">
          </label>
          <label class="item item-input">
            <input type="text" ng-model="port" placeholder="Port">
          </label>          
          <button class="button button-block button-dark" ng-click="set()">Link</button>
          <h3>
            <a style="float:right" href="http://pyfi.org/account/register">Not a member yet? Register here.</a>
          </h3>
        </div>  
      </div>
    </div>
</div>

<div class="card">
  <div class="item item-divider">
    Camera 1
  </div>
    <div id="{{ x.mac }}_div" class="card">
      <div style="margin:auto">    
        <img style="border:2px solid #444;border-radius:0px 0px 3px 3px;" src="http://192.168.0.18:8081/"></img>
      </div>
    </div>
  </div>
</div>  
</div>  
<div class="card">
  <div class="item item-divider">
    Device Settings
  </div>
  <div class="card">
    <ul class="list">
      <li class="item">
        Device Name  <b>Camera 1</b>
        <button style="float:right" class="ion-edit"></button>
      </li>   
      <li class="item">
        Machine Address  <b>b827eb91903b</b>
      </li>    
      <li class="item">
        Local Internet Address  <b>192.168.0.18</b>
      </li>
      <li class="item">
        Public Internet Address  <b>68.12.157.176</b>
      </li>
      <li class="item">
        Port  <b>3033</b>
        <button style="float:right" class="ion-edit"></button>        
      </li>
      <li class="item">
        <button class="button button-block button-balanced">Update</button>
        <button style="float:right" class="button button-small button-assertive">Reboot</button>
      </li>      
    </ul> 
  </div>
</div>
</ion-content>
</body>
</html>
