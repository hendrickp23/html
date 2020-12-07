<?php
echo "<pre>":
    print_r($_POST);
echo '</pre>';
  
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '') {
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

             // submit the form
            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Product = $_POST['product'];
            $Message = $_POST['message'];
            $File = $_POST['file'];
        
        
            $to = "hendrickp23@gmail.com";
            $body = "";
        
            $body .= "From: ".$Name. "\r\n";
            $body .= "Email: ".$Email. "\r\n";
            $body .= "Product: ".$Product. "\r\n";
            $body .= "File: ".$File. "\r\n";
            
            mail ($to, $Email, $body )

            $message_sent = true;
        }


    
    
    
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embroid•Her</title>
    <link rel="icon" type="image/ico" href="images/favicon.ico" />
    <link rel="stylesheet" href="styles.css"  />
</head>

<body>

    <?php
        if($message_sent) :
    ?>

        <h3>Thank's I'll contact you as soon as i can!</h3>

    <?php
        else:
    ?>
        
        <div class="container">
            <form action="" method="POST" class="cform"> 
                <div class="form">
                    <label for="name" class="formlabel">Name</label>
                    <input type="text" class="formcontrol" id="name" name="name" placeholder="Put your name here..." tabindex="1" required>
                </div>
                <div class="form">
                    <label for="email" class="formlabel">Email</label>
                    <input type="text" class="formcontrol" id="email" name="email" placeholder="Put your email here..." tabindex="2" required>
                </div>
                <div class="form">
                    <label for="product" class="formlabel">Product</label>
                    <select class="formcontrol" id="product" name="poduct" placeholder="" tabindex="3">
                        <option value="gsshirt">Grey Sweatshirt</option>
                        <option value="tsshirt">Tie Dye Sweatshirt</option>
                        <option value="ssshirt">Short Sleeve Shirt</option>
                    </select>
                </div>
                <div class="form">
                    <label for="message" class="formlabel">Message</label>
                    <textarea class="formcontrol" rows="10" cols="40" id="message" name="message" placeholder="Write your message here..." tabindex="4"></textarea>
                </div>
                <div>
                    Upload a file: <input type="file" class="filein" name="selectedfile" tabindex="5">
                </div>
                <br><div>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    <?php
    endif;
    ?>
    </section>
    <footer>
        © 2020 Embroid•Her
       <p><a href="https://www.instagram.com/em.broid.her/"><img src="images/insta.png" height="20px" width="20px"alt="https://www.instagram.com/em.broid.her/"></a></p>
    </footer>

</body>
</html>