<?php
    
    $name = $_GET["name"];
   
    $password = $_GET["password"];
   ?>
<?php include "header.php"?>
<body>

    <h1 id="Header">Log in</h1>
    <div class="div_Buttons">
        <button id="Button1" class="Buttons" onclick="window.location.href='index.php'">Home</button>
        <button id="Button2" class="Buttons" onclick="window.location.href='Prices.php'">Prices</button>
        <button id="Button3" class="Buttons" onclick="window.location.href='Contacts.php'">Contacts</button>
    </div>

<div id="div_form" class="forms">
    <b>UserName:</b>
    <input type="form" class="inputs" id="name">
    <b>Password:</b>
    <input type="form" class="inputs" id="password">
    <button onclick="" id="sign_in_button">Sign In</button>
</div>

<?php include "footer.php" ?>



</body>
</html>