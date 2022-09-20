<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .float-right {
        float: right;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/dashboard.css') !!}" rel="stylesheet">
</head>
<body>

    <!-- @include('layouts.partials.dashboard-navbar') -->

  <div id="wrapper">
    <div class="overlay"></div>
      <!-- Sidebar -->
      @include('layouts.partials.dashboard-sidebar')
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
     <div id="page-content-wrapper">
       @include('layouts.partials.dashboard-sidebar-button')

        <div class="container">
          <div class="row">
            @yield('content')
          </div>z
        </div>
      </div>
    </div>
  </div>

    <!-- <main class="container mt-5">
      <div class="row">
        <div class="col-1">
          @include('layouts.partials.dashboard-sidebar')
        </div>
        <div class="col-10">
          @yield('content')
        </div>
      </div>
    </main> -->
    <script
         src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"
       ></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script type="text/javascript">
      $(document).ready(function () {
      var trigger = $('.hamburger'),
          overlay = $('.overlay'),
         isClosed = false;

        trigger.click(function () {
          hamburger_cross();
        });

        function hamburger_cross() {

          if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
          } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
          }
        }

        $('[data-toggle="offcanvas"]').click(function () {
              $('#wrapper').toggleClass('toggled');
        });
      });
    </script>

  </body>
</html>
