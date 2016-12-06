<?php require_once "connection.php";?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ORARAS</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">ORARAS</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="accident_info.php">Accident Info</a>
                        </li>
                        <li>
                            <a href="accident_statistics.php">Accident Statistics</a>
                        </li>

                        <li>
                            <a href="events.php">Events</a>
                        </li>
                        <li>
                            <a href="government_rules.php">Government Rules</a>
                        </li>
                        <li>
                            <a href="complain_opinion.php">Complain & Opinion</a>
                        </li>
                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                         <li>
                                <a href="user_login.php"> User Login</a>
                            </li>
                           
                            <li>
                                <a href="admin_login.php">Admin Login</a>
                            </li>

                             <li>
                                <a href="registration.php">Sign up</a>
                            </li>
                           
                            <li>
                                <a href="profile.php"> See Profile</a>
                            </li>

                           
                
                        </ul>
                    </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Record New Accident_Info</h1>
                    
                   <div class="all-data-form">
                       
                        <form method="POST">
                             <label for="location">Location:</label><br />
                                <select name="division" id="division">
                                 <option>  Division  </option>
                                
                         <?php
                        $result = mysql_query("SELECT DISTINCT division FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["division"] ?>"><?php echo $name["division"] ?></option>;
                                <?php
                            }
                        }
                           }
                      else{
                        "";
                            }
                          ?>
                        </select>
                               <select name="district" id="district">
                                 <option>  District </option>
                                
                         <?php
                        $result = mysql_query("SELECT DISTINCT district FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["district"] ?>"><?php echo $name["district"] ?></option>;
                                <?php
                            }
                        }
                           }
                      else{
                        "";
                            }
                          ?>
                        </select>
                                <select name="thana" id="thana">
                                    <option>  Thana </option> 
                                      <?php
                        $result = mysql_query("SELECT DISTINCT id,thana FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["id"] ?>"><?php echo $name["thana"] ?></option>;
                                <?php
                            }
                        }
                           }
                      else{
                        "";
                            }
                          ?>

                          </select>
                              <div class="form-group">
                                <label for="road">Road:</label>
                                <input type="text" class="form-control"  placeholder="road" name="road">
                              </div>
                              <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="time" class="form-control"  placeholder="time" name="time">
                              </div>

                              <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control"  placeholder="date" name="date">
                              </div>

                              <div class="form-group">
                                <label for="number_of_death_person">Number Of Death Person:</label>
                                <input type="number" class="form-control"  placeholder="number of death person" name="number_of_death">
                              </div>

                              <div class="form-group">
                                <label for="number_of_injured_person">Number Of Injured Person:</label>
                                <input type="number" class="form-control"  placeholder="number of injured person" name="number_of_injured">
                              </div>


                              <div class="form-group">
                                <label for="image">Image</label>
                                <input class="upload" type="file" name="Add_pic" value="" >
                               
                              </div>
                             
                              <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                            </form>
                   </div>
                   					
            </div>
              
            </div>
            <!-- /.row -->

            <hr>

           
             <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-6 col-md-6 ">
                         <p>Copyright © (CSE 29th Batch(Day)DIU)</p>
                    </div>
                    <div class="col-md-6 text-right">
                         <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->
      </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>

</html>


<?php 
if (isset($_POST['submit'])) {
            $division = $_POST['division'];
            $district = $_POST['district'];
            $thana = $_POST['thana'];
            $road = $_POST['road'];
            $time = $_POST['time'];
            $date = $_POST['date'];
            $number_of_death =$_POST['number_of_death'];
            $number_of_injured =$_POST['number_of_injured'];

          /*Image Upload*/
            $temp = $_FILES['Add_pic']['tmp_name'];
            $name_img = $_FILES['Add_pic']['name'];
            /*Divide name*/
            $div = explode('.', $name_img);
            $exten = end($div);
            $name_img = mktime() . '.' . $exten;
            $name_img = 'upload/' .  $name_img;
            move_uploaded_file($temp, $name_img);

   

                               

         $sql = "INSERT INTO accident_info(division, district, thana, road, time, date, number_of_death, number_of_injured, image) VALUES 
         ('$division','$district','$thana','$road','$time','$date','$number_of_death','$number_of_injured','$name_img')";
            
            if (mysql_query($sql)) {

                // $we=mysql_query($sql);

                  //echo"$we";          
            }
            else{
                 echo"mysql_query($sql)";
            }
        }



?>