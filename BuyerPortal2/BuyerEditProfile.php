<?php

    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = $sessphonenumber";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
        $pan = $row['buyer_pan'];
        $phone = $row['buyer_phone'];
        $address = $row['buyer_addr'];
        $account= $row['buyer_bank']; 
        $comp = $row['buyer_comp'];
        $license = $row['buyer_license'];
        $mail = $row['buyer_mail'];
        $user = $row['buyer_username'];
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 450px;
            line-height: 40px; 
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color:rgb(0, 172, 230);
        
        }
        
        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/buyerLogin.jpeg);
            border: chartreuse;
        }
        
        #innerbox {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }
        
        input {
            padding: 7px;
            margin: 10px;
             border-color:rgb(0, 172, 230);
            display: inline-block;
            border-radius: 16px;
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: rgb(0, 191, 255);
            border-radius: 16px;
            border-color: rgb(0, 172, 230);
            width: 44%;
        }
        
        input[type="submit"]:hover {
                background-color: rgb(0, 153, 255);
            outline: none;
            color:  rgb(255,255,255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }
        textarea{
             border-width: 3px; 
             border-radius: 16px; 
             border-color:rgb(0, 172, 230);
            
            
        }
   
            
        .in-icons {
           text-align: center;
        }
            
        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }
        .just{
            float:left;
            margin:0px;
            position:absolute;
            left:0;
             top:0px; 
        
        }
        .again{
            cursor: pointer;
            font-size: 24px; 
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left:100px;


        }
        .say{
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            border-color: rgb(3, 66, 34);
            width: 96%;
            padding : 10px;
            padding-left:10px;
            padding-right:10px;
            background-color: rgb(0, 191, 255);
            border-radius: 16px;
            border-color: rgb(0, 172, 230);    
        }

        .say:hover{
            background-color: rgb(0, 153, 255);
            outline: none;
            color:  rgb(255,255,255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 80%;
            font-size: 18px;

        }
        .just{
            float:left;
            margin-left:1%;
            margin:20px;
            position:absolute;
            left:0;
            top:0px; 
            text-shadow: 1px 1px 1px black;
        }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
    

    <div class="just">
        <a  href="bhome.php"> <img src="agro-logo.ico" alt=""></a>
    </div>


    <div class="box">
       <!-- <div id = "innerbox"> -->
        <form action="" method = "post">
             <table align = "center" >

                <tr colspan = 2>
                    <h1> प्रोफ़ाइल संपादित करें</h1>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>नाम :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $name;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>पैन कार्ड नंबर</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="20" disabled><?php echo $pan;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>कंपनी :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $comp;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>लाइसेंस :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $license;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <div class="in-icons">
                    <td>
                        <label><b>ईमेल आईडी :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="18" value="" disabled><?php echo $mail;?></textarea><br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                    <label><b>उपयोगकर्ता नाम :</b></label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $user; ?>" />  <br> 
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>फ़ोन :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone;?>"/> <br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                        <label><b>पता :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address;?> "/> <br>
                    </td>
                </tr>

                <tr align = "center">
                    <td>
                    <label><b>बैंक खाता संख्या</b></label>
                    </td>
                    <td>
                        <input type="number" name="bank" value="<?php echo $account; ?>" />  <br> 
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>

                <tr colspan =2 align = "center">
                    <td colspan =2>
                        <input type="submit" name="confirm" value="पुष्टि करे">
                    </td>
                </tr>
            </table>
        </form>
        <div class="again">
            <td colspan =2><a href="BuyerChangePassword.php"><button class="say">पासवर्ड बदलें</button></a></td>
        </div>
 
    </div>
  


</body>
</html>

<?php

    include("../Includes/db.php");

    if (isset($_POST['confirm']))
    {
        $phone = mysqli_real_escape_string( $con,$_POST['phonenumber']);
        $address = mysqli_real_escape_string( $con,$_POST['address']);
        $account = mysqli_real_escape_string( $con,$_POST['bank']);   
        $user = mysqli_real_escape_string( $con,$_POST['username']);   
        
        $query = "update buyerregistration 
                  set buyer_phone = '$phone', buyer_username = '$user', 
                  buyer_addr = '$address', buyer_bank = '$account' 
                  where buyer_id in 
                  (select buyer_id from buyerregistration 
                  where buyer_phone='$sessphonenumber')"; 
        echo $query;
       

        $run = mysqli_query($con, $query);

        $_SESSION['phonenumber'] = $phone;
       echo "<script>window.open('BuyerProfile.php','_self')</script>";
    }
?>