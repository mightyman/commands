<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal Command</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
            {{-- Confirm Modal --}}
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm-modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">          
                <h4 class="modal-title" id="myModalLabel">Confirm ?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn-confirm-yes">Yes</button>
                <button type="button" class="btn btn-primary" id="btn-confirm-no">No</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var confirm_form;
        
        
         
        var formCofirm = function(callback){  
          //btn-confirm  
          $(".btn-confirm").on("click", function(){
            console.log("hi htere");
            confirm_form = $(this).closest("div").find("form"); 
            $("#confirm-modal").modal('show');
          }); 
          $("#btn-confirm-yes").on("click", function(){            
            callback(true);

            console.log("old one");
            $("#confirm-modal").modal('hide');
          });
          
          $("#btn-confirm-no").on("click", function(){
            callback(false);
            $("#confirm-modal").modal('hide');
          });
        };
    
      formCofirm(function(confirm){
        if(confirm){   
          console.log(confirm_form);
          confirm_form.submit();
          
        }else{
          
        }
      });
      </script>
</body>

<style>
    .spacer
    {
        height: 30px !important;
    }

    .mt2{
        margin-top: 15px !important;
    }    
</style>
</html>

