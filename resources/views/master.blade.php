<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('lineicons/style.css') }}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('js/chart-master/Chart.js') }}"></script>
    @yield('header')
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>UMBARA</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="{{ URL::asset('img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">UMBARA</h5>
              	  
                  <li class="mt">
                      <a href="{{URL::to('beli')}}" class="@yield('pembelian-menu-status')">
                          <i class="fa fa-ticket"></i>
                          <span>Pembelian Tiket</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="{{URL::to('customer')}}" class="@yield('customer-menu-status')">
                          <i class="fa fa-user"></i>
                          <span>Customer</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="{{URL::to('transaksi')}}" class="@yield('transaksi-menu-status')">
                          <i class="fa fa-credit-card"></i>
                          <span>Transaksi</span>
                      </a>
                  </li>
        
                  <li class="sub-menu">
                      <a href="{{URL::to('laporan')}}" class="@yield('laporan-menu-status')">
                          <i class="fa fa-file-pdf-o"></i>
                          <span>Laporan</span>
                      </a>
                  </li>
        
                  <li class="sub-menu">
                      <a href="{{URL::to('pengeluaran')}}" class="@yield('pengeluaran-menu-status')">
                          <i class="fa fa-book"></i>
                          <span>Pengeluaran</span>
                      </a>
                  </li>
        
                  <li class="sub-menu">
                      <a href="{{URL::to('pengaturan')}}" class="@yield('pengaturan-menu-status')">
                          <i class="fa fa-gear"></i>
                          <span>Pengaturan</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      @yield('main-content')

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - UMBARA Travel
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ URL::asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.sparkline.js') }}"></script>


    <!--common script for all pages-->
    <script src="{{ URL::asset('js/common-scripts.js') }}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('js/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/gritter-conf.js') }}"></script>

    <!--script for this page-->
    <script src="{{ URL::asset('js/sparkline-chart.js') }}"></script>    
	<script src="{{ URL::asset('js/zabuto_calendar.js') }}"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Selamat Datang!',
            // (string | mandatory) the text inside the notification
            text: 'Sistem ini berfungsi sebagai alat bantu untuk pengelolaan tiket dan laporan milik UMBARA Travel.',
            // (string | optional) the image to display on the left
            image: '{{ URL::asset("/img/ui-sam.jpg") }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 5000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    @yield('footer')

  </body>
</html>
