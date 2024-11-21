<!DOCTYPE html>
<html lang="fa" dir="rtl">
    
    <?php
        include 'adress.php';
    ?>
<link rel="icon" type="image/x-icon" href=" <?php $adress ?>images/icon.ico">
    <?php 
        if ($_GET["Status"] == "NOK"){
            ?>
            <div class="alert alert-warning" role="alert">
                متاسفانه پرداخت انجام نشد
            </div>
            <?php
        }else if ($_GET["Status"] == "COK"){
            ?>
            <div class="alert alert-warning" role="alert">
                مبلغ باید بالای 10 هزار ریال باشد
            </div>
            <?php
        }
    
    ?>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        

    </head>
    <body>

    <div class="container text-center">

        <div class="row">



            <div class="col">
            
            </div>


            <div class="col-8">

                <img class="set_logo" src="images/logo.png" alt="">

                <div class="text_head">
                تیتر
                </div>

                <div class="text">
                 توضیحات اول.
                </div>
                
                <img class="set_line" src="images/line.png" alt="">

                <div class="text_Button">
                توضیحات دوم
                </div>

                <div class="text_Button_2">
                سال
                </div>
                <br>

            
                <form class="set_form"  action="send.php" method="POST">
                    <div class="form-floating">
                        <input class="form-control" type="text" placeholder="مبلغ" name="price"  id="numberInput" >
                        <label for="floatingTextarea">مبلغ (ریال)</label>
                    </div>
                    <br>
                    <button class="btn"><img class="img_btn" src="images/button.png" alt="Snow"></button>
                    <br><br><br>
                </form>

            </div>



            <div class="col">
            
            </div>



        </div>
    </div>
                
    <footer>
        تمام حقوق مربوط به سایت .... می باشد 
    </footer>
    
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>     
  <script>
    const numberWithCommas = (number) => {
      return number.toLocaleString();
    };

    document.getElementById("numberInput").addEventListener("input", function() {
      const inputElement = this;
      const inputValue = inputElement.value.replace(/,/g, ''); // Remove existing commas
      const parsedValue = parseFloat(inputValue); // Parse the number

      // Check if the input is a valid number
      if (!isNaN(parsedValue)) {
        const formattedValue = numberWithCommas(parsedValue); // Format with commas
        inputElement.value = formattedValue;
      } else {
        inputElement.value = ''; // Clear the input if not a valid number
      }
    });
  </script>
    
    </body>


</html>