<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DataTables</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 

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
           {!! Form::open(array('route' => 'aadhaar_datatable_final.data', 'class' => 'form')) !!}

         

                <div class="line-indent"></div>
<div class="panel panel-default col-md-12" >
  <!-- Default panel contents -->
  <div class="panel-heading text-center"><h3>Aadhar Card Details</h3></div>

  <div class="panel-body">
  <div class="line-indent-small"></div>

        
                
                
                 <div class="col-md-1"><label class="control-label">City :</label></div>
                    <div class="col-md-3">
                        
                <select class="e1 col-md-10" id="agency_name" name="agency_name"> 
              <option></option>
             @foreach($bank_name as $each)
                         <option value="{{ $each->agency_name }}">{{ $each->agency_name}}</option>
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
    <table class="table ta-ble-bordered" id="aadhaar_enrolment_list-table">
        <thead>
            <tr>
               
                    <th>Id</th>
                    <th>Registrar Name</th>
                    <th>Bank Name</th>
                    <th>Contact Person</th>
                    <th>Address</th>
            </tr>
        </thead>       

    </table>
        </div>
        <div id="debug"></div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.classom/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') }}"></script>
       
        <script>


    $(function() {


        $('#aadhaar_enrolment_list-table').DataTable({
                processing: true,
                serverSide: true,
                
                ajax: {
                                        'url': '{{ route('aadhaar_datatable_final.data') }}',
                                        'type': 'POST',
                                            'data': function (d) {
                                            d.agency_name = $('select[name=agency_name]').val();
                                            },           
                                        'headers': {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            }

                                        
                                        
                                },
                columns: [
                  
                            { data: 'id', name: 'id' },
                            { data: 'registrar_name', name: 'registrar_name' },
                            { data: 'agency_name', name: 'agency_name' },
                            { data: 'address', name: 'address' },
                            { data: 'contact_person', name: 'contact_person' }
                        ]
                    }); 
                   
                });

        $(".e1").select2();

</script>

    </body>
</html>