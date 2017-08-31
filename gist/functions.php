<?php

if (!empty($_GET)) {
  $d =  $_GET["filename"];
};

function connect() {
  $GLOBALS['connect'] = mysqli_connect('46.30.40.99', 'vh58416_gist', 'WXfrU16T', 'vh58416_gist');
};

/*
function List_My() {
  foreach (new DirectoryIterator(__DIR__ . '/snippets') as $file) {
    if ($file->isFile()) {
      $list = print_r('<a href="view.php?filename=' . $file->getFilename() . '"><li class="li-btn">' . $file->getFilename() . '</li></a>', TRUE);
      echo $list;
    }
  }
};

function list_array_function() {
  foreach (new DirectoryIterator(__DIR__ . '/snippets') as $file) {
    if ($file->isFile()) {
      $list_array[] = $file->getFilename();
      $GLOBALS['list_array'] = $list_array;
    }
  }
}
*/
function custom() {
    connect();
    $connect = $GLOBALS['connect'];
    $select = "SELECT * FROM filelist";
    $result = mysqli_query($connect, $select);
    $super = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($super as $name) {
    $list = print_r('<a href="view.php?filename=' . $name['name'] . '"><li class="li-btn">' . $name['name'] . '</li></a>', TRUE);
    echo $list;
}
};

function Read() {
  connect();
  $d = $GLOBALS['d'];
  $connect = $GLOBALS['connect'];
  $select = "SELECT content FROM filelist WHERE name='$d'";
  $result = mysqli_query($connect, $select);
  $super = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $new = $super[0];
  $norun = $new['content'];
  $nocode = htmlspecialchars($norun);
  echo $nocode;
}


