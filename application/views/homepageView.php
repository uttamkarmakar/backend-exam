<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/homeStyle.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <title>HomePage</title>
</head>
<div class="header">
  <nav>
    <div class="logo">
      <a href="/">MyApps.com</a>
    </div>
  </nav>

</div>

<body>
  <div class="container">
    <div class="sticky-sidebar">
    </div>
  </div>
  <form method="POST" action="myapps" enctype="multipart/form-data ">
    <input type="hidden" value="" id="card_one" name="card_one" />
    <input type="submit" value="click here to download" id="download" class="btn btn-primary btn-lg" style="display:none"/>
  </form>
  </div>

  <?php
  for ($i = 0; $i < count($appData); $i++) { ?>
    <section id="posts-container">
      <article class="post">
        <div class="post__content<?php echo $appData[$i]['id']; ?>" id="post_div">
          <header class="post__header">
            <?php echo $appData[$i]['Descroption']; ?>
            <p class="post__user">
              <?php echo $appData[$i]['Developer']; ?>
            </p>
          </header>
          <div class="post__body">
            <p class="caption">
              <!-- <i class="fa fa-inr"></i> <?php echo $appData[$i]['PRICE']; ?> -->
            </p>
            <img class="post__img" id="post_image" src="<?php echo $appData[$i]['Image']; ?>" alt="">
          </div>
          <div class="post__footer">
            <span>
              <?php
              echo $appData[$i]['review'];
              ?>
            </span>
            <span>
              <?php
              echo $appData[$i]['file'];
              ?>
            </span>
            <button type="button" class="btn btn-primary downloadBtn" rel="<?php echo $appData[$i]['id']; ?>">
              Download
            </button>
          </div>

        </div>
      </article>
    </section>
  <?php } ?>
  <script src="../../public/assets/js/homePage.js"></script>
</body>

</html>
