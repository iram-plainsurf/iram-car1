<?php

require('./includes/links.php');
?>
    <title>:: Morris Garage ::</title> 
 </head>
    <body>
         <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <br><br><br><br><br>
                    <div class="panel panel-success">
                         <div class="panel-heading">Backup Data</div>
                         <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                     <div class="row">
                        <div class="col-md-6" >
                            <div class="main-box mb-red">
                             
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Import</h5>
                                <form action="public/import.php" class="md-form" method="POST" enctype="multipart/form-data">
                                  <div class="file-field">
                                    <div class="btn btn-sm">
                                      <span></span>
                                      <input type="file" name="jsonFile" id="jsonFile">
                                    </div>
                                    <div class="file-path-wrapper">
                                   <input name="import" type="submit" value="Import">
                                    </div>
                                  </div>
                                </form>
                               
                          
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="main-box mb-pink">
                            <a href="public/export.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Export</h5>
                            </a>
                        </div>
                    </div>                  
                </div>
            </div>
      </div>
</div>
</div>
</div>
</body>

      <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
</html>
