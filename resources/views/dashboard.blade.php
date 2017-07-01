<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee List</title>

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
                    <h1 class="page-header">Employees</h1>
                </div>
                <div class="col-lg-12">
                  <button class="btn btn-danger m-b-30 pull-right" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Employee</button><br><br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" style="padding-bottom: 5%;">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        All Employees
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <table id="datatable" class="table table-hover mails m-0 table table-actions-bar" width="100%">
                          <thead>
                            <tr>
                              <th style="max-width: 10px;"></th>
                              <th style="max-width: 95px;">Employee ID</th>
                              <th>Name</th>
                              <th>Address</th>
                              <th>Position</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td>12</td>
                              <td>Miranda, Harrelson Tagle</td>
                              <td>Pasig City</td>
                              <td>TA</td>
                              <td><a href="{{URL::Route('payslip')}}"><button class="btn btn-success m-b-30">View Payslip</button></a>
                                  <button class="btn btn-danger m-b-30" id="delete" data-toggle="tooltip" title='Delete Employee'><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                          </tbody>
                        </table> 
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add New Employee</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <div class="form-group col-md-4">
                    <label class="control-label">First Name</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="First Name">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Middle Name</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Middle Name">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Last Name</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Last Name">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Department</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Department">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Position</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Position">
                </div>
                <div class="form-group col-md-4">
                  <label class='control-label' for='empPayRate'>Pay Rate</label>
                    <div class='input-group'>
                      <span class="input-group-addon">₱</span>
                      <input class='form-control' name="empPayRate" id="empPayRate" min="0" max="1000000000" type='text' value="15000">
                    </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label class="control-label">SSS no.</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="SSS no.">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">Pag-ibig no.</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Pag-ibig no.">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">Philhealth no.</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Philhealth no.">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">Tin no.</label>
                    <input type="text" name="fname" class="form-control input-xs" id="InputFName" placeholder="Tin no.">
                </div>
              </div>
              <p>DAGDAG NA LANG YUNG KULANG</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
          </div>
          
        </div>
      </div>
    <!-- End of Modal -->

    

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
