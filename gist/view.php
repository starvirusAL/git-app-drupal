<?php
require_once "functions.php";
//list_array_function();
//  $check  = strpos($d, '..');
//  if ($check!==false or !$d or in_array($d, $list_array)!==true) {
//   http_response_code(404);
//    exit;
//  };
?>
<!DOCTYPE html>
<html>
<head>
    <title>GIST app</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <div class="container-fluid">
    <a href="index.php" id="title"><h2>GIST-APP, v.05.08</h2></a>
        <div class="row">
        <div class="col-md-3">
        <h4>Choose file:</h4>
            <ul class="list-unstyled">
                <!-- printing the list of files in /snippets -->
                <?php
                        custom();
                        ?>
            </ul>
        </div>
        <div class="col-md-9">
            <a href="<?php echo 'edit.php?filename=' . $d; ?>"><button id="editBtn" type="button" class="btn btn-success">EDIT</button></a>
                    <a target="_blank" href="<?php echo 'plaintext.php?filename=' . $d; ?>"><button id="openBtn" type="button" class="btn btn-info">OPEN <img src="img/n-tab.png" width="16"></button></a>
                    <h3 id="filename"><?php echo $d; ?></h3>
                    <textarea class="form-control top-buffer" rows="10" style="min-width: 100%" disabled><?php Read(); ?></textarea>
                    <button id="saveBtn" type="button" class="btn btn-primary pull-right mt-5 top-buffer" disabled>Save</button> 
        </div>
      </div>
    </div>

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>