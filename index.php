<?php $title = 'PHP Projects' ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?= $title ?></title>

</head>
<body>

<h1><?= $title ?></h1>
<ul>
  <?php
      $dir = new DirectoryIterator('.');
      $ignoredList = array('.', '..', 'css', '.c9', '.git');
      
      foreach($dir as $fileInfo) {
        if($fileInfo->isDir() && !in_array($fileInfo->getfilename(), $ignoredList)) {
          echo "<li><a href=\"{$fileInfo->getfilename()}\">{$fileInfo->getfilename()}</a></li>";  
        }
      }
  ?>
</ul>

</body>
</html>