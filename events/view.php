<?php

    include "config.php";

    $sql = "SELECT *FROM customer";

    $result = $conn->query($sql)

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/view.css">
        <link rel="stylesheet" href="css/event.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Handjet:wght@200;300;700&family=Inconsolata:wght@300;400;600;700;800&family=
		Poppins:wght@100;200;300;400;600;700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/471c4e19ff.js" crossorigin="anonymous"></script>
    </head>

<body>
    <!---Header-->
			<header style="top: 0;">
			<div class="nav-position" style="position: sticky; top: 0;">
				<div>
					<img class="logoimg" src="images/icons/logo-removebg.png" alt="logo" ></img>
				</div>
	
				<div class="nav" style="background: linear-gradient(to right, #00093c, #2d0b00) ; height: 76.5px;">
					<ul>
						<div class="topnav">
                        <li><a class="active" href="../Register/Home.html"> HOME </a></li>
						<li><a href="../booking/about.html"> ABOUT </a></li>
						<li><a href="../dining/dining.html"> DINING </a></li>
						<li><a href="events.html"> EVENTS </a></li>
						<li><a href="../booking/booking.php"> BOOK NOW </a></li>
						<li><a href="../contact/contact.html">CONTACT</a></li>
						</div>
						
						<div id="log_sign"> 
							<li class="log">
								<button class="login-button">
									<a href="../Register/login.html" style="text-decoration: none;">Login
									</a>
								</button>
							</li>
							<li class="sign">
								<button class="signup">
									<a href="../Register/Register.html">
										Sign Up
									</a>
								</button>
							</li>
						</div> 
					</ul>
				</div>
			</div>
		</header>

 <!---Header ends-->
 <br><br><br><br><br><br>
    <div id="container1" style="margin: top 100px; margin: bottom 500px;" >
        <h2 id="headtable" style="text-align:center; margin-bottom: 20px; color:white; font-size:50px">customer</h2>
    <table class="table1"  style="border:1px solid black;  border-collapse: collapse; margin:auto; BACKGROUND-COLOR: white; width:80%;">
        <head>
            <tr>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">ID</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">package</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">date</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">title</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">first name</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">last name</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">email</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">phone</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">message</th>
            </tr>
        </thread>
    </tbody>
        <?php
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){

        ?>
                    <tr>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['id']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['package']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['date_inq']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['title']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['firstname']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['lastname']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['email']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['phone']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['message_1']; ?> </td>
                    <td style="border:1px solid black;  border-collapse: collapse; padding:10px;">
                    <div style="margin: auto;">
                        <button style="background-color: lightgreen; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                <a class="update" style="color: white;"  href="update.php?id=<?php echo $row['id']; ?>">
                                    Edit
                                </a>
                        </button>
                                
                        <button style="background-color: #f77463; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                <a class="danger" style="color: white;" href="delete.php?id=<?php echo $row['id']; ?>">
                                    Delete
                                </a>
                        </button>
                    </div>
                    </td>
                    </tr>

                    <?php
                }
            }
            ?>

            </tbody>
        </table>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!---------- footer section begin-------------->
	<footer style="bottom:0;">
    
<div class="row" >
    <div class="col">
        <img src="images/icons/logo.png" style="width: 70px;height: 70px; " class="logoFooter">
        <br><br>
        <p><i>"Your ideal location for <br> memorable occasions."</i></p>
    </div>
    <div class="col">
            <h3>Office</h3>
            <p>THE ROYAL OAK</p>
            <br>
            <p>21, HIKKADUWA RD</p>
            <br>
            <p>COLOMBO 07</p>
            <p class="email-id">royaloak@gmail.com</p>
            <h4>+94 112 458 974</h4>
    </div>
    <div class="col">
            <h3>Links</h3>
            <ul>
            <li><a class="active" href="../Register/Home.html"> HOME </a></li>
						<li><a href="../booking/about.html"> ABOUT </a></li>
						<li><a href="../dining/dining.html"> DINING </a></li>
						<li><a href="events.html"> EVENTS </a></li>
						<li><a href="../booking/booking.php"> BOOK NOW </a></li>
						<li><a href="../contact/contact.html">CONTACT</a></li>
                        <li><a href="Terms&Cond.html">TERMS & CONDITIONS</a></li>
            </ul>
    </div>
    <div class="col">
            <h3>Follow us on Social Media</h3>
            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-x-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
    </div>
</div>
</footer>
<!---Footer End-->
    </body>
    </html>