<!-- Bootstrap Core CSS -->
<link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="{{ URL::asset('assets/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
<!-- <link href="../assets/metisMenu/metisMenu.min.css" rel="stylesheet">
 -->
 <!-- Custom CSS -->
<link href="{{ URL::asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">
<!-- <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet"> -->
<!-- Morris Charts CSS -->
<link href="{{ URL::asset('assets/morrisjs/morris.css') }}" rel="stylesheet">
<!-- <link href="../assets/morrisjs/morris.css" rel="stylesheet"> -->
<!-- Custom Fonts -->
<link href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<!-- <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
<!-- DataTables CSS -->
<link href="{{ URL::asset('assets/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- <link href="../assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"> -->
<!-- DataTables Responsive CSS -->
<link href="{{ URL::asset('assets/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
<!-- <link href="../assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> -->

<!-- DataTables Search Higlight CSS -->
<link href="{{ URL::asset('assets/datatables-plugins/searchHighlight/dataTables.searchHighlight.css') }}" rel="stylesheet">
<link href="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.css" rel="stylesheet">
<link href="{{ URL::asset('assets/datatables/css/buttons.dataTables.min.css') }}" rel="stylesheet">
<!-- <link href="../assets/datatables-plugins/searchHighlight/dataTables.searchHighlight.css" rel="stylesheet">
<link href="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.css" rel="stylesheet"> -->

<!-- Sweet Alert -->
<script src="{!! asset('assets/sweetalert-master/dist/sweetalert.min.js') !!}"></script>
<link rel="stylesheet" href="{!! asset('assets/sweetalert-master/dist/sweetalert.css') !!}">

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="">Back to Top</i></a>


<style type="text/css">

    div h1{
        -webkit-text-stroke: 1px white;
        color:  black;
    }

    #return-to-top {
   
        z-index: 99; /* Make sure it does not overlap */
        position: fixed;
        bottom: 20px;
        left: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        width: 130px;
        height: 40px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }
    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }
    .btn-barangay {
      color: #fff;
      background-color: #CA3AED;
      border-color: #4cae4c;
    }
    .btn-barangay:focus,
    .btn-barangay.focus {
      color: #fff;
      background-color: #AB31C8;
      border-color: #982AB2 ;
    }
    .btn-barangay:hover {
      color: #fff;
      background-color: #AB31C8;
      border-color: #982AB2;
    }

    .scrollable-menu {
    height: auto;
    max-height: 300px;
    overflow-x: hidden;
    }

    .scrollable-menu::-webkit-scrollbar {
        width: 12px;
    }
     
    .scrollable-menu::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        border-radius: 10px;
    }
     
    .scrollable-menu::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    }
    .panel{
        background: rgba(255, 255, 255, 0.8)!important;
    }

    .badge:after{
        content:"2";
        position: absolute;
        background: rgba(0,0,255,1);
        height:2rem;
        top:1rem;
        right:1.5rem;
        width:2rem;
        text-align: center;
        line-height: 2rem;;
        font-size: 1rem;
        border-radius: 50%;
        color:white;
        border:1px solid blue;
    }

/* Extra Things */
body{background: #eee ;font-family: 'Open Sans', sans-serif;}h3{font-size: 30px; font-weight: 400;text-align: center;margin-top: 50px;}h3 i{color: #444;}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header pull-right">
      <a class="navbar-brand">Payroll</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Employee List</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<!-- jQuery -->
<script src="{{ URL::asset('assets/jquery/jquery.min.js') }}"></script>
<!-- <script src="../assets/jquery/jquery.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- <script src="../assets/bootstrap/js/bootstrap.min.js"></script> -->

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('assets/metisMenu/metisMenu.min.js') }}"></script>
<!-- <script src="../assets/metisMenu/metisMenu.min.js"></script> -->

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>
<!-- <script src="../assets/dist/js/sb-admin-2.js"></script> -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ URL::asset('assets/js/light-bootstrap-dashboard.js') }}"></script>
<!-- <script src="../assets/js/light-bootstrap-dashboard.js"></script> -->

<!-- DataTables JavaScript -->
<script src="{{ URL::asset('assets/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-responsive/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/searchHighlight/dataTables.searchHighlight.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/searchHighlight/dataTables.searchHighlight.min.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/searchHighlight/jquery.highlight.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/datatables-plugins/buttons.print.min.js') }}"></script>

<!-- form validation -->
<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

<!-- Back to top -->
<script type="text/javascript">
    // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 350) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>