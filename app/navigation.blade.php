 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Brokerage Free - QR CODE</a>
    </div>
    <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul> -->
        <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}" style="color: #e3f2fd;">Home</a>
                    </li>           
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/create_qr_code') }}" style="color: #e3f2fd;">QRCODE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/downloads') }}" style="color: #e3f2fd;">Downloads</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/contact_us') }}" style="color: #e3f2fd;">Contact us</a>
                    </li>
        </ul>
  </div>
</nav>