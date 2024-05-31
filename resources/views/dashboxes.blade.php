<!--<!DOCTYPE html>
<html>

<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  height: 30%;
  width: 23%;
  padding: 70px;
  margin-right: 10px;
}

.clearfix::after {
  display: flex;
  content: "";
  clear: both;
  display: table;
}

@media (max-width: 300px){
    .clearfix {
        flex-direction: column;
    }
}

</style>



<div class="clearfix">
  <div class="box" style="background-color:#bbb">
  <p>Some text inside the box.</p>
  </div>
  <div class="box" style="background-color:#ccc">
  <p>Some text inside the box.</p>
  </div>
  <div class="box" style="background-color:#ddd">
  <p>Some text inside the box.</p>
  </div>
</div>
</html>-->
<!--<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  height: 30%;
  width: 23%;
  padding: 5%; /* Adjust padding for inner content */
  margin-right: 2%; /* Adjust margin between boxes */
}

.clearfix::after {
  content: "";
  display: table;
  clear: both;
}

@media (max-width: 768px) {
  .box {
    width: 48%; /* Adjust width for smaller screens */
    margin-right: 5%; /* Adjust margin between boxes */
  }
}

@media (max-width: 480px) {
  .box {
    width: 100%; /* Full width for smallest screens */
    margin-right: 0; /* Remove margin for smaller screens */
  }
}

.column {
  float: left;
  height: 30%
  width: 23%;
  padding: 5%;
  margin-right: 2%;
}

/* Clearfix (clear floats)
row::after {
  content: "";
  clear: both;
  display: table;
}*/
</style>

</html>
-->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

  /* Add this CSS code to your existing stylesheet */
/* Adjust padding and margins for different screen sizes */
@media (max-width: 768px) {
  .p-4, .p-md-5, .pt-5 {
    padding: 10px !important;
    margin: 0 !important;
  }
}

/* Adjust text size and spacing for smaller screens */
@media (max-width: 576px) {
  .p-md-5, .pt-5 {
    font-size: 10px !important;
    line-height: 1.5 !important;
  }
}

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 -15px; /* Adjust margin to handle spacing */
  }
  .gallery-item {
    flex: 0 0 23%; /* Each item takes up 23% of the container width */
    margin-bottom: 20px; /* Add some space between rows */
    padding: 0 15px; /* Adjust padding to handle spacing */
    text-align: center;
  }
  .gallery-item img {
    max-width: 100%;
    min-width: 100%;
    height: 70%;
  }
  .textbox {
    margin-top: 0px; /* Add some space between image and textbox */
    text-align:center;
    background-color: #c6c6c6;
    width: 100%;
    height: 27%;
  }
  .textbox p{
    font-size: 12px;
    color: rgb(44, 44, 44);
  }
  .textbox a{
    color: black;
    font-weight: bold;
  }
  .textbox a:hover{
    color:rgb(255, 255, 255);
  }
</style>
</html>
