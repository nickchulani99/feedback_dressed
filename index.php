<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
    
  </head>
  <body>

      <section id="logo">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-xs-center">
                    <img src="img/my-logo.png" class="img-fluid"/>
                </div>
                
            </div>
        </div>
      </section>
      
      <section id="intro">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">

                    <p>Please spare some time and fill in.</p>
                </div>
                
            </div>  
        </div>
      </section>
      
      
   
      
      <section id="icons">
        <div class="container">
            <div class="row">
            
                
                
            </div>  
        </div>
      </section>
      
      <section id="signup">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
              <!--       <form class="form-inline" role="form" method="post" action="insert.php">
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
                        <button type="submit" class="btn btn-signup btn-sm" name="submit" value="submit">Sign me up</button>
                    </form> -->
                    

                    <form action="insert.php" method="post">
  <!-- Name : --> <i class="fa fa-user fa-2x" aria-hidden="true"></i> <input type="text" name="username" placeholder="Name / 
ชื่อ" required> 
    &nbsp;
  <!-- Email : --> <i class="fa fa-envelope-o fa-2x" aria-hidden="true"> &nbsp;</i><input type="text" name="email" placeholder="Email / อีเมล" required>
  &nbsp;
  <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i> <input type='text' name="phone" placeholder="phone / โทรศัพท์" maxlength="10">

<hr/>

                <p>
 <i class="fa fa-venus-mars " aria-hidden="true"></i>Gender:
<select name="gender">
  <option value="">Select...</option>
   <option value="M">Male</option>
  <option value="F">Female</option>
</select>
</p>



         <p>
<i class="fa fa-birthday-cake " aria-hidden="true"></i> Age:
<select name="age"  style="width: 290px">
  <option value="">Select...</option>
  <option value="Under20">Under 20</option>
  <option value="21:30">21 - 30</option>
  <option value="31-40">31 - 40</option>
  <option value="41-50">41 - 50</option>
  <option value="51-60">51 - 60</option>
  <option value="Over 60">Over 60</option>
  
</select>
</p>


  <p>
<i class="fa fa-microphone" aria-hidden="true"></i>
<select name="heard"  style="width: 290px">
  <option value="">How did you hear about us.</option>
  <option value="Friends"><i class="fa fa-users" aria-hidden="true">Friends</i></option>
  <option value="SocialMedia">Social Media</option>
  <option value="Advertisment">Advertisment</option>
  <option value="PassedBy">Passed By</option>
  <option value="Tripadvisor">Tripadvisor</option>
  <option value="Other">Other</option>
  
</select>
</p>

 <p>
<i class="fa fa-star-half-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>

<select name="rate" style="width: 290px">
  <option value="">Rate Your Overall Experience</option>
  <option value="Bad">Bad</option>
  <option value="Very Bad">Very Bad</option>
  <option value="Neutral">Neutral</option>
  <option value="Good">Good</option>
  <option value="Excellent">Excellent</option>
  
  
</select>
</p>
<!--  <input type="text"   class="bigText" name="improve"  placeholder="Provide some comments" size="35"  />  -->
<!--  <textarea rows="4" cols="50" name="improve"  placeholder="Please Suggest any areas of improvement"></textarea> -->

<textarea rows="3" cols="50" name="improve" placeholder="Provide some comments / โปรดให้ความคิดเห็นบางส่วน" >
</textarea>
 
<hr/>
  <input type="submit" value="Submit" class="submit">
  
</form>
<p> &nbsp;</p>
<!-- 
Retrieve Email -->
<!-- <form action="email.php" method="post">
<input type="submit" value="Retrieve">
  
</form> -->

                   
                    
                </div>
                
            </div>  
        </div>
      </section>
    <!--   <div class="col-md-12">
                    <ul class="list-inline">
                        <a href="http://www.twitter.com" target="blank">
                        <li class="list-inline-item">
                       <i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li>
                        </a>

                        <a href="https://www.facebook.com/DressedThailand/" target="blank"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
                        <a href="http://www.google.com" target="blank"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
                        <a href="https://www.instagram.com/dressedthailand/" target="blank"><li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li></a>
                    </ul>
                </div>

 -->


    <!-- jQuery first, then Bootstrap JS. -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  
          
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.countdown.js"></script>
      
    
      
      
  </body>
</html>