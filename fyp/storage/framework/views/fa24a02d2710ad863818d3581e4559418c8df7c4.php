<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rectangle Boxes with Images and Text</title>
<style>
    .container {
      display: flex;
      flex-wrap: wrap;
    }
    .box {
      width: auto; /* Adjust the width as needed */
      margin: 10px;
      padding: 10px;
      border: 1px solid #1e2a2a;
      display: flex;
      background-color: #82C6C6;
    }
    .box img {
      max-width: 250px; /* Adjust the image size */
      margin-right: 10px;
      max-height: 350px;
    }
    .box p {
      margin: 0;
      color: black;
    }
    .box a {
    text-decoration: none; /* Remove underline from links */
    color: blue; /* Change link color */
    font-weight: bold; /* Make the titles bold */
  }
  </style>





<!--<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 800px;
        margin: 0 auto;
    }

    .box {
        width: calc(50% - 10px);
        margin-bottom: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .box img {
        width: 50%;
        float: left;
    }

    .box .content {
        padding: 10px;
        box-sizing: border-box;
        width: auto;
        float: left;
    }
</style>-->

</html>
<?php /**PATH C:\Users\User\Documents\GitHub\fyp\fyp\resources\views/articleboxes.blade.php ENDPATH**/ ?>