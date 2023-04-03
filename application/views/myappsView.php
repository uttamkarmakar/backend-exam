<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/myappStyle.css">
  <title>My Applications</title>
</head>

<body>
  <div class="container">
    <div class="flex-wrapper">
      <div class="content">
        <?php
        for ($i = 0; $i < count($downloadedApp); $i++) { ?>
          <h2>Downloaded App<?php echo $downloadedApp[$i]['app_name']; ?></h2>
          <h3>
            <?php echo $downloadedApp[$i]['Descroption']; ?>
          </h3>
          <span>
            <img src="<?php echo $downloadedApp[$i]['Image']; ?>" alt="" class="image">
          </span>
          <span>
            Developer : <?php echo $downloadedApp[$i]['Developer']; ?>
          </span>
          <span>
            Review: <?php echo $downloadedApp[$i]['review']; ?>
          </span>
          <span>
            File type : <?php echo $downloadedApp[$i]['file']; ?>
          </span>

        <?php }
        ?>
      </div>
    </div>
  </div>
</body>

</html>
