<?php include "header.php"; ?>

<body id="prices">

<h1 id="Header">Prices</h1>
<div class="div_Buttons">
    <button id="Button1" class="Buttons" onclick="window.location.href='index.php'">Home</button>
    <button id="Button2" class="Buttons" onclick="window.location.href='Prices.php'">Prices</button>
    <button id="Button3" class="Buttons" onclick="window.location.href='Contacts.php'">Contacts</button>
</div>

<div class="space"> 
</div>
<div class="container">
 <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Normal</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$100<small class="text-body-secondary fw-light">/day</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 Room</li>
              <li>lounge</li>
              <li>Emergency Support</li>
              <li>Free Wifi</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Vip</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$200<small class="text-body-secondary fw-light">/day</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2 Rooms </li>
              <li>lounge/Breakfast</li>
              <li>Emergency Support</li>
              <li>Free Wifi</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$400<small class="text-body-secondary fw-light">/day</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>4 Rooms</li>
              <li>lounge/Breakfast/Minibar</li>
              <li>Emergency Support</li>
              <li>Free Wifi</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;text-align: center;">Normal Room</th>
            <th style="width: 22%;text-align: center;">Vip Room</th>
            <th style="width: 22%;text-align: center;">Enterprise Room</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Rooms</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
            </svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">24/7 RoomService</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Mini bar</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Jacuzzi</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Guestpasses</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</div>
<div style="padding: 20px;">

</div>
<?php include "footer.php" ?>

</body>
</html>