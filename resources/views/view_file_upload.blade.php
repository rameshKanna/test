<html>
   <body>
      
      <?php
         echo Form::open(array('url' => '/showuploadFile','files'=>'true'));
         //echo 'Select the file to upload.';
         echo Form::file('file');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>
   
   </body>
</html>