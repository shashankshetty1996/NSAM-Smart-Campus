<?php
      require 'db_con.php';
      session_start();
      if(!$_SESSION['sname']) {
        header('Location: index.php?action=Please Login to continue');
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico">
    
    <title>NSAM First Grade College</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/mdb.min.css" rel="stylesheet" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Average' rel='stylesheet' />
  </head>
  <body>
    <div class="view hm-black-strong">
        <div class="full-bg-img">
            <!--/.Navbar-->
            <div class="container">
                <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-primary">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#" data-toggle="modal" data-target="#about-college">NSAM Smart Campus</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#profile">Profile</a></li>
                        <li><a data-toggle="tab" href="#attendance">Attendance</a></li>
                        <li><a data-toggle="tab" href="#syllabus">Syllabus</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-right:35px">   
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-lg" name="logout" aria-hidden="true"></i>Logout</a></li>
                        <li></li>
                    </ul>
                    </div>
                </nav>
            </div>
            <div class="modal fade" id="about-college" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="modal-title w-100" id="myModalLabel">NSAM First Grade College</h2>
                        </div>
                        <!--Body-->
                        <div class="modal-body">
                            <p class="aboutModal">Dr. Nitte Shankara Adyanthaya Memorial First Grade College was established in 1988. The college is named after Dr. Nitte Shankara Adyanthaya, a philanthropic medical practitioner who contributed immensely to the upliftment of Nitte village.</p>
                            <p class="aboutModal">Dr. Nitte Shankara Adyanthaya Memorial High School which is the first fruit of Nitte Education Trust was founded in 1980 by Justice K. S. Hegde, the former speaker of Lokasabha. It was upgraded as a Pre- University College in 1983 offering two years Pre-University Education (Karnataka PU Board) in Science and Commerce streams. The college was granted permanent affiliation to the Mangalore University and recognised by the University Grants Commission (UGC) for research funding and development grants in 1998. Dr. Nitte Shankara Adyanthaya Memorial First Grade College was accredited with an A grade by the National Assessment and Accreditation Council in Dec. 2009.</p>
                            <h3>Aim</h3>
                            <p class="aboutModal">The College aims to instill in the students, the ability for analysis and judgement, the ability to relate to professional problems and to draw upon his or her resources for understanding and meaningful action and to inculcate values to draw out a desire for authenticity and sincerity.</p>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <div class="container flex-center">
                <div class="row">
                <h2 style="text-align:right;"><?php echo "Welcome ".$_SESSION['sname'];?></h2>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>HOME</h3>
                            <p>Nihil voluptatem quia et provident facilis autem a assumenda. Reprehenderit enim ut quia qui veritatis et qui accusantium. Et et est fuga et aut. Sapiente laboriosam vitae cum alias architecto voluptatem facere. Vel totam eaque modi illo nisi. Aperiam provident voluptatem autem iste.
 
Omnis illum itaque est non. Accusamus dolor sequi consequatur. Tempora molestias optio quia. Adipisci quas odit soluta rem debitis quo.
 
Quibusdam facilis non asperiores molestiae quae ex sit rem ipsum. Error odio labore qui aspernatur. Magni quisquam facilis deleniti voluptas. Eos nostrum autem sunt. Modi saepe blanditiis saepe id ut sit nostrum in rerum. Quisquam omnis deserunt autem blanditiis ut pariatur.</p>  
                        </div>
                        <div id="profile" class="tab-pane fade">
                            <h3>Profile</h3>
                            <p>Enim rem cumque. Qui corrupti repudiandae quas quasi. Et consectetur sint ea.
 
Cum et cupiditate sed magnam est possimus error fugiat qui. Sint et minima minus soluta eos sequi eos. Rem maxime eveniet sint accusantium optio. Rerum eos nobis ipsam et itaque eum quaerat cum quo. Distinctio rerum maiores doloribus quis ea quae nulla. Ut officia eos fugiat sed voluptatem ratione dicta et qui.
 
Et ab ad velit ratione ad veniam. Ab quisquam quis temporibus. Rerum sequi id dolorum similique non. Distinctio facere ipsum rerum odio voluptate voluptatem. Minus est eius officia consequatur.</p>
                        </div>
                        <div id="attendance" class="tab-pane fade">
                            <h3>Attendance</h3>
                            <p>Veritatis magnam iure aliquam consequatur. Harum temporibus dolorem. Recusandae vel esse sapiente. Sapiente delectus provident sunt odit quis similique aut qui voluptatem. Dolores et sint assumenda enim. Occaecati ipsum soluta deserunt sit repellat perspiciatis recusandae architecto.
 
Magni molestiae maxime molestiae. Ipsa ab fugiat veniam earum accusantium. Vel aut voluptates sit assumenda laboriosam. Ducimus ipsum illum dolores sunt.
 
Voluptatem sit placeat culpa unde ratione. Quas deserunt dolor. Ut vel minima et laudantium. Sunt excepturi placeat cupiditate voluptas accusamus cumque eaque doloremque atque.</p>
                        </div>
                        <div id="syllabus" class="tab-pane fade">
                            <h3>Syllabus</h3>
                            <p>Facilis veniam dignissimos aliquid aut occaecati cupiditate. Iusto ipsum voluptatum voluptatum. Quas necessitatibus nemo et voluptas et numquam et.
 
Quam cumque illum dolor libero error voluptatibus accusantium. Aliquid veniam nulla fugit repudiandae rerum qui quo et consequatur. Ad dolor iure officiis rem maiores labore quia architecto nam. Sed incidunt vero. Culpa praesentium error necessitatibus optio repellat dolorem sequi.
 
Ullam aut delectus quam omnis. Dolor voluptas et eos quia harum voluptatem. Nobis cum modi debitis impedit vel quia cum. Molestiae reiciendis ut eum aut atque dolor dolorum. Vitae nam culpa est veritatis voluptas non fugit dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-right">powered-by:Finite Loop</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/mdb.min.js"></script>

    <script src="js/tether.min.js"></script>
    
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
    <script type="text/javascript">
        window.sr = ScrollReveal();
    </script>
  </body>
</html>