<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cresissimo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        
        <link rel="stylesheet" href="./credissimo.css?<?php echo time(); ?>">
    </head>
    <body>
        
        <div class="mainContainer container-fluid">
            
            <nav class="navigation navbar navbar-expand-md bg-dark navbar-dark">
                  <!-- Toggler/collapsibe Button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div id="collapsibleNavbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><img class="home" src="./images/img_trans.gif">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><img class="images" src="./images/img_trans.gif">Images</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><img class="contacts" src="./images/img_trans.gif">Contacts</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><img class="menulevel" src="./images/img_trans.gif">Menu Level 1</a>
                              </li>
                        </ul>
                  </div>
                  <form class="navigation-form form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="">
                      <button class="btn my-2 my-sm-0 form-control" type="button">search</button>
                  </form>
            </nav>
            
            <section class="siteTitle container-fluid font-weight-bold text-center">
                <p class="display-3"><span>My rotated site title</span></p>
            </section>
            
            <section class="imageGallery container-fluid">
                <div class="row align-items-start text-center">
                    <div class="col">
                        <img src="./images/zima.jpg" class="img-responsive img-thumbnail" alt="zima" height="30" width="30">
                    </div>
                    <div class="col">
                        <img src="./images/zima.jpg" class="img-responsive img-thumbnail" alt="zima" height="30" width="30">
                    </div>
                    <div class="col">
                        <img src="./images/zima.jpg" class="img-responsive img-thumbnail" alt="zima" height="30" width="30">
                    </div>
                    <div class="col">
                        <img src="./images/zima.jpg" class="img-responsive img-thumbnail" alt="zima" height="30" width="30">
                    </div>
                    <div class="col">
                        <img src="./images/zima.jpg" class="img-responsive img-thumbnail" alt="zima" height="30" width="30">
                    </div>
                </div>
            </section>

            <section class="contactForm container-fluid">
                <form method="post" action="google.com" class="form-inline">
                        <legend>This is our contact form</legend>
                        <fieldset>
                            <label for="username" class="form-check-label middle"><em>Enter username</em></label><input type="text" id="username" name="username" class="form-control"></fieldset>
                        <fieldset>
                            <label for="email" class="form-check-label middle"><strong><em>Enter email</em></strong></label><input type="email" id="email" name="email" class="form-control">
                        </fieldset>
                        <fieldset>
                            <label for="text" class="form-check-label"><u>Enter text</u></label><textarea id="text" rows="5" class="form-control"></textarea>
                        </fieldset>
                        <fieldset>
                            <label for="button" class="form-check-label middle"><del>SEND THE FORM</del></label><button id="button" class="btn form-control" type="button">send form</button>
                        </fieldset>
                </form>
            </section>
            
            <footer class="footer container-fluid">
                <nav class="navigation navbar navbar-expand bg-dark navbar-dark">
                    <ul class="navbar-nav"> 
                        <li class="nav-item"> 
                            <!--google+ share button-->
                            <a href="https://plus.google.com/share?url=http://tzvetan.altervista.org" class="nav-link" onclick="javascript:window.open(this.href,
                            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=30,width=30');return false;" title="Share on Google+"><img class="google" src="./images/img_trans.gif"></a>
                        </li>  
                        <li class="nav-item">
                            <!--linkedin share button-->
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A//tzvetan.altervista.org&title=WebGL%20and%20Architecture&summary=architect%20Tzvetan%20Marinov%20personal%20web%20page&source=my%20own%20page" class="nav-link" onclick="javascript:window.open(this.href,
                              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=30,width=30');return false;" title="Share on linkedIn"><img class="linkedin" src="./images/img_trans.gif"></a>
                        </li>
                        <li class="nav-item">
                            <!--twitter share button-->        
                            <a href="http://www.twitter.com/shareArticle?mini=true&url=http%3A//tzvetan.altervista.org&title=WebGL%20and%20Architecture&summary=architect%20Tzvetan%20Marinov%20personal%20web%20page&source=my%20own%20page" class="nav-link" onclick="javascript:window.open(this.href,
                              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=30,width=30');return false;" title="Share on linkedIn"><img class="twitter" src="./images/img_trans.gif"></a> 
                        </li>
                        <li class="nav-item">
                            <!--wordpress share button-->        
                            <a href="http://www.wordpress.com/shareArticle?mini=true&url=http%3A//tzvetan.altervista.org&title=WebGL%20and%20Architecture&summary=architect%20Tzvetan%20Marinov%20personal%20web%20page&source=my%20own%20page" class="nav-link" onclick="javascript:window.open(this.href,
                              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=30,width=30');return false;" title="Share on linkedIn"><img class="wordpress" src="./images/img_trans.gif"></a> 
                        </li>
                        <li class="nav-item">
                            <!--facebook share button-->        
                            <a href="https://www.facebook.com/sharer.php?u=http://tzvetan.altervista.org" class="nav-link" onclick="javascript:window.open(this.href,
                            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=30,width=30');return false;" title="Share on Facebook"><img class="facebook" src="./images/img_trans.gif"></a> 
                        </li>
                    </ul> 
                </nav>
            </footer>
            
        </div>
        
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
