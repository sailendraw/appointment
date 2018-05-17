@include('includes.header')

<body class="page-index has-hero">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

  <!-- ======== @Region: #navigation ======== -->
  @include('includes.navigation')

</div>

<body class="page-about">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.8">

<!-- ======== @Region: #content ======== -->
<div id="content">
  <div class="container" id="about">
    <div class="row">
      <!--main content-->
      <div class="col-md-9 col-md-push-3">
        <div class="page-header">
          <h1>
            About Us
            <small>How it all began</small>
          </h1>
        </div>
        <div class="block block-border-bottom-grey block-pd-sm">
          <h3 class="block-title">
            What Makes Us Tick!
          </h3>
          <img src="img/misc/about-us.png" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
          <p>Elit pellentesque dolor facilisis aenean eu tempor, phasellus lundium risus dolor, augue, ridiculus nascetur odio ridiculus? Hac ac, adipiscing ut dapibus. Adipiscing cras in? Magna nisi augue odio! Pellentesque magnis? Lacus integer magnis
            purus sed mus lorem aliquam lectus, placerat pellentesque quis, nunc urna turpis lorem. Etiam velit, augue sed magnis placerat! In cras, dignissim lorem, porttitor in velit in, nisi vut a cursus cum, odio sagittis nisi turpis? Mus penatibus
            non, pulvinar porttitor arcu hac ut et ac integer? Ultricies est etiam sit. Urna ridiculus facilisis pulvinar, ultrices augue? Parturient velit non tincidunt sit sagittis pulvinar phasellus rhoncus hac! Sit porta. Tristique, hac. Porttitor
            adipiscing ac. Ac tincidunt a porttitor natoque auctor ultricies! Proin nunc scelerisque? Habitasse adipiscing? Cursus.</p>
          <p>Elit pellentesque dolor facilisis aenean eu tempor, phasellus lundium risus dolor, augue, ridiculus nascetur odio ridiculus? Hac ac, adipiscing ut dapibus. Adipiscing cras in? Magna nisi augue odio! Pellentesque magnis? Lacus integer magnis
            purus sed mus lorem aliquam lectus, placerat pellentesque quis, nunc urna turpis lorem. Etiam velit, augue sed magnis placerat! In cras, dignissim lorem, porttitor in velit in, nisi vut a cursus cum, odio sagittis nisi turpis? Mus penatibus
            non, pulvinar porttitor arcu hac ut et ac integer? Ultricies est etiam sit. Urna ridiculus facilisis pulvinar, ultrices augue? Parturient velit non tincidunt sit sagittis pulvinar phasellus rhoncus hac! Sit porta. Tristique, hac. Porttitor
            adipiscing ac. Ac tincidunt a porttitor natoque auctor ultricies! Proin nunc scelerisque? Habitasse adipiscing? Cursus.</p>
        </div>
        <div class="block-highlight block-pd-h block-pd-sm">
          <h3 class="block-title">
            Our Mission
          </h3>
          <p class="text-fancy">Vel in amet mauris? Turpis pulvinar a proin tincidunt pid, vel odio lundium sit, cras. Duis mattis porttitor nunc elementum eros, in turpis nec. Lectus dictumst risus ut ac porta, urna ac vel, a ut dis!</p>
        </div>
      </div>
      <!-- sidebar -->
      <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
        <ul class="nav nav-pills nav-stacked">
          <li class="active">
            <a href="{{ URL::route('aboutUs')}}" class="first">
              About Us
              <small>How It All Began</small>
            </a>
          </li>
          <li>
            <a href="#contactUs">
              Contact Us
              <small>How to get in touch</small>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@include('includes.footer')
</body>

</html>
