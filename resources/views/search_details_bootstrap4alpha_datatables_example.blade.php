<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DataTables</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
       
        
 

    <!-- Custom CSS -->
       

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <br><br><br><br>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" href="#">Brokerage Free - Aadhar Card Services</a></b>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <body>
        <div class="container">
           {!! Form::open(array('route' => 'datatable_final.data', 'class' => 'form')) !!}

         

                <div class="line-indent"></div>
<div class="panel panel-default col-md-12" >
  <!-- Default panel contents -->
  <div class="panel-heading text-center"><h3>Aadhar Card Details</h3></div>

  <div class="panel-body">
  <div class="line-indent-small"></div>

        
                
                
                 <div class="col-md-1"><label class="control-label">City :</label></div>
                    <div class="col-md-3">
                        
                <select class="e1 col-md-10" name="district"> 
              <option></option>
             @foreach($district as $each)
                         <option value="{{ $each->district }}">{{ $each->district}},{{$each->state}}</option>
                        @endforeach 

                    
                   </select>
                   </div>
                    
                <div class="col-md-1">
                 <button type="submit" class="btn btn-md btn-primary">Subject</button>
                 </div>

    </div>
    </div>

    <hr>
            
        </form>

            

        <hr>
        <br><br><br>
    <table class="table ta-ble-bordered" id="aadhar-table">
        <thead>
            <tr>
               
                <th>Registrar Name</th>
                <th>Agency Name</th>
                <th>Center Summary</th>
                <th>Contact Person</th>
                <th>Mobile Number</th>
                <th>Date</th>
                <th>Center Type</th>
            </tr>
        </thead>       

    </table>
        </div>
        <div id="debug"></div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') }}"></script>
       
        <script>


    $(function() {


        $('#aadhar-table').DataTable({
                processing: true,
                serverSide: true,
                //  ajax: {
                // url: 'https://datatables.yajrabox7.com/eloquent/column-search-data',
                // method: 'GET'
                // },
                ajax: '{!! route('datatable_final.data') !!}',
                // ajax: {
                //     url:  '{!! route('datatable_final.data') !!}'
                //     //  type: "POST"
                //      },
                // ajax: {
                //                         'url': '{{ route('datatable_final.data') }}',
                //                         // 'type': 'POST',
                //                         // method: 'GET'
                                        
                                        
                //                 },
                columns: [
                  
                    { data: 'registrar_name', name: 'registrar_name' },
                    { data: 'agency_name', name: 'agency_name' },
                    { data: 'center_summary', name: 'center_summary' },
                    { data: 'contact_person', name: 'contact_person' },
                    { data: 'mobile_nbr', name: 'mobile_nbr' },
                    { data: 'date', name: 'date' },
                    { data: 'center_type', name: 'center_type' }
                        ]
                    }); 
                   
                });

        $(".e1").select2();

</script>

    </body>
</html>