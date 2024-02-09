<?php
session_start();

 $language = isset($_SESSION['language']) ? $_SESSION['language'] : 'english';

 include "languages/{$language}.php";

 
if (isset($_GET['language'])) {
    
    $selectedLanguage = $_GET['language'];

    
    $_SESSION['language'] = $selectedLanguage;

 
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <title>Chanchal Sarkar - Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <header class="bg-dark text-white text-center py-5">><?php echo $lang['head']; ?>
        


  <div class="navbar">
        <a href="#home">Chanchal Sarkar</a> 
       
        <div class="navbar-right">
        <?php echo $lang['nav']; ?>
           
        </div>
        <ul class="bottom-list">
        <li>Change Language<a href="?language=english"><img src="in.png" width="40px" alt="English Flag">  <a href="?language=japanese"><img src="jp.png" width="40px" alt="Japanese Flag"></a></a></li>
        
    </ul>
    </div>


    </header>
    <div class="img">
    <img src="g.jpg" alt="Design Image"  style=" width: 250px;">
    <div class="text-right">
    <?php echo $lang['main']; ?>
       
        </div>
    
    </div>
    
    <section id="skills" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4"><b>Skills</b></h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Coding Skills</h4><br>
                    <ul>
                        
                       
                        <li>HTML/CSS</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:90%">90%</div>
                          </div><br>


                        
                        <li>JavaScript</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-red w3-center" style="width:60%">60%</div>
                          </div><br>
                        <li>Python</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:40%">40%</div>
                          </div><br>
                          <li>DBMS</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:70%">70%</div>
                          </div><br>
                          <li>PHP</li>
                          <div class="w3-light-grey">
                              <div class="w3-container w3-green w3-center" style="width:55%">50%</div>
                            </div><br>
                         
                        



                          
                    </ul>
                     
                   
                </div>
                
                <div class="col-md-6">
                    <h4>Designing and Office Works</h4><br>
                    <ul>
                        <li>Web Designing</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-orange w3-center" style="width:80%">80%</div>
                        </div><br>
                        <li>UI/UX</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:90%">90%</div>
                        </div><br>
                        <li>Logo/ poster</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:80%">80%</div>
                        </div><br>
                        <li>MS Office package</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:90%">90%</div>
                        </div><br>
                        <li>Video / Photo Editing</li>
                        <div class="w3-light-grey">
                            <div class="w3-container w3-green w3-center" style="width:100%">100%</div>
                        </div><br>
                    </ul>
                    <!-- Add an image tag with the source and alt attributes -->
                  
                </div>
                <div id="skills" class="background-white">
                    <div class="container">
                      <h2>Basic knowledge</h2>
                      <ul class="skills-list">
                        <li>Docker</li>
                        <li>C++</li>
                        <li>R Language</li>
                        <li>QGIS</li>
                        <li>Data cleaning</li>
                        
                        <li>Basic IoT</li>
                        <!-- Add more skills as needed -->
                      </ul>
                    </div>
                  </div>
                  
           
                
            </div>
            
        </div>   
       
    </section>
    <div id="skills" class="background-white">
        <div class="cont">
        <?php echo $lang['cont']; ?>
          
            <li>JLPT N3</li>
            <li>NAT 3Q</li>
            <li>JLPT N4</li>
            
          </ul>
        </div>
      </div>

    <section id="activities" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4"><b>My Projects</b></h2>
            
            <a href="https://ikitai.in"><div class="card">
                 <img src="logo.png"> 
                <p>ikitai.in<br>
                    A consultaion site </p>
              </div></a>
             
              
        </div>
    </section>

    <section id="motivation" class="py-5">
        <div class="container">
       
        <?php echo $lang['container']; ?>
           
        </div>
    </section>

    <section id="education" class="py-5">
        <div class="container">
        <?php echo $lang['prof']; ?>
           
        </div>
    </section>




    <footer class="bg-dark text-white text-center py-3">
        <p>Contact me at: chanchal.sarkar@aol.com</p>
        <img src="renraku.jpg" width="10%">
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
