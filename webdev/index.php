<?php include "header.php"; ?>

<link href="styleHome.css" rel="stylesheet">
<title>My Website</title>    
</head>

<body id="home">
<div class="heads">
    <img src="images/8664791_building_construction_estate_icon.png" alt="building" width="50px" height="50px" class="headImage">
    <h1 id="HeaderHome">Home</h1>
</div>
<div class="div_Buttons">
    <button id="Button1" class="Buttons" onclick="window.location.href='index.php'">Home</button>
    <button id="Button2" class="Buttons" onclick="window.location.href='Prices.php'">Prices</button>
    <button id="Button3" class="Buttons" onclick="window.location.href='Contacts.php'">Contacts</button>
    <button id="Button12" class="Buttons" onclick="buttonsColor()">Background Colors Buttons</button>
    <button id="Button22" class="Buttons" onclick="changeImage()">changeImage</button>
    <button id="Button32" class="Buttons" onclick="chose_color()">blue</button>
</div>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Options
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="log-in.php">Log in</a></li>
      <li><a class="dropdown-item" href="sign-up.php">Sign up</a></li>
      <li><a class="dropdown-item" onclick="buttonsColor()">Change Buttons bg-color</a></li>
      <li><a class="dropdown-item" onclick="changeImage()">change Image</a></li>
      <li><a class="dropdown-item" id="item5" onclick="chose_color()">blue</a></li>
    </ul>
  </div>

<p id="randText">
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore<br/>
     et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br/>
      Stet clita kasd gubergren, no sea takimata sanctus ests Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet<br/>
      , consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat<br/>
      , sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no se<br/>
      a takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, se<br/>
      d diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et<br/>
       accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum do<br/>
       lor sit amet.   <br/>

    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugia<br/>
    t nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augu<br/>
    e duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
</p>
<img src="images/city_night2.png"alt="city" id="mult_images">
<div style="padding: 10px;">

</div>
<?php include "footer.php" ?>


<script>
    var change = 0;
    var colorName = "blue" ;
    let Button_text;
    var dropped=false;

    function buttonsColor(){
    var buttons = document.getElementsByClassName('Buttons');
    var colors =[]
    
    for (var i=0; i<buttons.length;i++){
        buttons[i].style.backgroundColor = colorName;
    }
    }
    function changeImage(){
        
     if(change==0){
      let image = document.getElementById("mult_images").src= "images/Melbourne_at_night.png";
      change++;
     }
     else if(change==1){
      let image = document.getElementById("mult_images").src= "images/475669-Jersey-City.png";
      change++;
     }
     else if(change==2){
      let image = document.getElementById("mult_images").src= "images/city_night2.png";
      change = 0;
     }

    }
    window.onload = function(){
        setInterval(changeImage,5000);
     }

    function chose_color(){
        switch(colorName){
        case "blue":
            colorName = "red"
            Button_text = document.getElementById("Button32").innerText = colorName;
            break
        case "red":
            colorName="green"
            Button_text = document.getElementById("Button32").innerText = colorName;
            break
        case "green":
            colorName="black"
            Button_text = document.getElementById("Button32").innerText = colorName;
            break
        case "black":
            colorName="blue"
            Button_text = document.getElementById("Button32").innerText = colorName;
            break
       }
    }
    function Dropdown(){

        let drop = document.getElementById("dropDisplay").classList.toggle("show");
    }
</script>

</body>
</html>