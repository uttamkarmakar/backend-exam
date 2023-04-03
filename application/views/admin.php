<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/adminStyle.css">
  <title>Document</title>
</head>

<body>
  <div class="login">
    <h5>Login Form</h5>
    <form action="admin" enctype="multipart/form-data" method="post">
      <input type="text" name="appName" placeholder="Enter app name" value="" class="text">
      <input type="text" name="appDesc" placeholder="Enter the app description" value="" class="text">
      <input type="file" name="appImage" placeholder="Enter the app image" value="" class="text">
      <input type="text" name="appDeveloper" placeholder="Enter the app developer name" value="" class="text">
      <input type="text" name="appReview" placeholder="Enter the app review" value="" class="text">
      <input type="text" name="appFilename" placeholder="Enter the app filename" value="" class="text">
      <input type="number" name="appId" placeholder="Enter the app id" value="" class="text">
      <input type="submit" name="launchApp" value="Launch app" class="btn">
    </form>
  </div>
</body>

</html>