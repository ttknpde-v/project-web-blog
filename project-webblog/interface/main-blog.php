<!DOCTYPE html>
<?php require('../modules/direct-db.php');  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-mainblog.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../image/idea.png">
    <title>welcome to my blog</title>
</head>
<body>
            <!-- menu or navbar -->
            <div class="control-menu">
                <nav class="nav-menu">
                    <ul class="nav nav-tabs nav-justified mb-3">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="">home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#comment">comment</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>


            <!-- greeting -->
            <div class="control-greeting">
                <strong class="greet">information about programming languege</strong>
            </div>


            <!-- บทนำ blog -->
            <div class="">
                <section class="grid-card">
                    <div class="card">
                        <img class="card-img-top" src="../image/the-java-programming.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Java language</h5>
                            <p class="card-text">
                                What is Java? Java is a popular programming language, created in 1995.
                                It is owned by Oracle, and more than 3 billion devices run Java. It is used for Mobile 
                                applications (specially Android apps) , Web applications , ...
                            </p>
                            <a class="btn btn-primary" href="">read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="../image/the-c-programming.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">C language</h5>
                            <p class="card-text">
                                What is C? C is a general-purpose programming language created by Dennis Ritchie at the Bell Laboratories in 1972.
                                C is strongly associated with UNIX, as it was developed to write the UNIX operating system.
                            </p>
                            <a class="btn btn-primary" href="">read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="../image/the-php-programming.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Php language</h5>
                            <p class="card-text">
                                What is PHP? PHP is an amazing and popular language! It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
                                It is deep enough to run large social networks! , ...
                            </p>
                            <a class="btn btn-primary" href="">read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="../image/the-sql-programming.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Sql language</h5>
                            <p class="card-text">
                                What is SQL? SQL is a standard language for accessing and manipulating databases.
                                SQL lets you access and manipulate databases SQL became a standard of the American National (ANSI) in 1986
                            </p>
                            <a class="btn btn-primary" href="">read more</a>
                        </div>
                    </div>
                </section>
            </div>




            <!-- card profile -->
            <div class="">
                <section class="control-card" id="about">
                    <div class="profile">    
                        <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-body text-center">
                                        <img class="rounded-circle img-fluid" id="img-profile"  src="../image/person.png" alt="">
                                        <h5 class="my-3">I'm Beer</h5>
                                        <p class="text-muted mb-1">this's my first web - blog</p>
                                        <p class="text-muted mb-3">can I help you?</p>
                                        
                                        <div class="d-flex justify-content-center mb-2">
                                            <button type="button" class="btn btn-primary"><a href="https://www.facebook.com/thitikorn.beer.14" target="_blank" style="color: #ffff; text-decoration: none;" >follow</a> </button>    
                                        </div>

                                    </div>
                                </div>        
                            </div>
                    </div>
                        
                    <div class="profile">
                        <div class="col-lg-10">
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">full name</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted">Thitikorn Beer</p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">email</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted">thitikorn-n@rmutp.ac.th</p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">mobile</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted">064-676-06XX</p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">address</p>
                                            </div>

                                            <div class="col-sm-9">
                                                <p class="text-muted">Bangkok , in Thailand</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                        </div>
                    </div>
                </section>
            </div>



            <!-- form  -->
            <div id="comment">
                <form action="" method="post" >
                    
                    <div class="form-outline mb-4">
                        <div class="grid-input">
                            <div class="input">
                                <label class="form-lable" for="">name</label>
                            </div>
                            <div class="input">
                                <input class="form-control" type="text" name="name" id="" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="grid-input">
                            <div class="input">
                                <label class="form-lable" for="">email</label>
                            </div>
                            <div class="input">
                                <input class="form-control" type="email" name="email" id="" required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-outline mb-4">
                        <div class="control-textar">
                                <label class="form-lable" for=""></label>
                                <textarea class="form-control" name="comment" id="" cols="" rows="10" placeholder="you can advise me...."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="control-btn">
                        <button class="btn btn-primary btn-block mb-4" type="submit" name="send">send</button>
                        <button class="btn btn-primary btn-block mb-4" type="reset">reset</button>
                    </div>

                </form>

                <!-- if click submit -->
                <?php if(isset($_POST['send'])) { ?> 
                <div class="control-alert">
                    <?php if($comment != "") { 
                    ?>
                        <div class="alert alert-success">
                            success !!

                        </div>
                    <?php                             
                           
                          } else {
                    ?>
                         <div class="alert alert-danger">
                            try again !! you forgot to<a href="main-blog.php"> comment</a>
                        </div>
                    <?php 
                            } 
                        }
                    ?>    
                </div>     
            </div>



            <!-- show comment -->
            <?php 
                    # show comment
                     while($result_arr = mysqli_fetch_array($result_query) ) { ?>
            <div>
                <div class="contro-card">
                <div class="card text-center">
                    <div class="card-hearder">name <?php echo "".$result_arr[1]; ?></div>
                    <div class="card-body">
                        <h4 class="card-title">comment</h4>
                        <p class="card-text"><?php echo "".$result_arr[4]; ?></p>
                    </div>
                    <div class="card-footer text-muted">date time <?php echo "".$result_arr[3]; ?></div>
                </div>
                </div>
            </div>
            <?php } ?>    
</body>
</html>