<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payslip</title>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-toggle.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 400px;
    overflow-y: auto;
}
.data:hover{
    color:red;
}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('nav')
        

        <div id="page-wrapper" style="padding-top: 0%; background-color: #F0F3F4  ;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Payslip</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Miranda, Harrelson
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div class="col-lg-6">
                        <div class="row">
                          <div class="col-xs-6">
                            <div>Address:</div>
                            <div>Department:</div>
                            <div>Position:</div>
                            <div>Pay Rate:</div>
                          </div>
                          <div class="col-xs-6">
                            <div>Pasig City</div>
                            <div>Admin</div>
                            <div>TA</div>
                            <div>Php 15,000</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row">
                          <div class="col-xs-6">
                            <div>Pag-ibig No:</div>
                            <div>Philhealth No:</div>
                            <div>SSS No:</div>
                            <div>TIN:</div>
                          </div>
                          <div class="col-xs-6">
                            <div>123</div>
                            <div>456</div>
                            <div>789</div>
                            <div>1545</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div> 
            <div class="row" style="padding-bottom: 5%;">
              <p>PAYROLL HERE</p>
            </div>       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- Morris Charts JavaScript -->
    <script src="../assets/raphael/raphael.min.js"></script>
    <script src="../assets/morrisjs/morris.min.js"></script>
    <script src="../assets/data/morris-data.js"></script>
    <script src="../assets/js/bootstrap-toggle.js"></script>
    <script src="{!! asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')!!}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        
            var t = $('#datatable').DataTable({
                responsive: true,
                searchHighlight: true,
                "columnDefs": [
                    { 
                      "sortable" : false, 
                      "searchable": false,
                      "targets": 0
                    }
                ],
                "order": [[ 1, 'asc' ]]
            });
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
      });
    </script>
    <script type="text/javascript">
      $('#delete').click(function(e){
         e.preventDefault();
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'Cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false,
          closeOnConfirm: false,
          closeOnCancel: false
        }, 
        function (isConfirm){
          if(isConfirm){
            swal(
            'Deleted!',
            'Employee has been deleted.',
            'success'
          )
          }else{
            swal("Cancelled", "Something went wrong!", "error");
          }
        });
      });
    </script>

</body>

</html>
