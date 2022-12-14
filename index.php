<?php  
       $conn=new mysqli("localhost","root","","mabdd");
       if($conn->connect_error){
         echo $conn->connect_error;
         die();
       }//connexion à la base de donnée
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bd49620da9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Accueil</a></li>
                    <li><a href="#about">A propos</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>UI/UX Designer</p>
                <h1>Salut, Je suis <span>Basile Djago</span><br> et je suis du Bénin</h1>
            </div>
        </div>
    </div>
    <!--A propos-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/background.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">A propos de moi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem necessitatibus, ab ullam, nihil aperiam illum repudiandae velit aspernatur nobis, nulla modi nesciunt? Hic praesentium neque tenetur velit itaque deserunt ea!</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI?UX</span><br>Designing Web/App interfaces</li>
                            <li><span>Web Development</span><br>Web app Development</li>
                            <li><span>App Development</span><br>Building Android/iOS apps</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2021 - Current</span><br>UI/UX Design Training at ET Institute</li>
                            <li><span>2019 - 2021</span><br>Team lead at StarApp LLC.</li>
                            <li><span>2017 - 2019</span><br>UI/UX Design Executive at Coin Digital ltd.</li>
                            <li><span>2016 - 2017</span><br>Internship at ekart eCommerce.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2016</span><br>UI/UX Design Training at ET Institute</li>
                            <li><span>2016</span><br>MBA From MIT Bangalore</li>
                            <li><span>2014</span><br>BBA From ISM Bangalore</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------Services------------>
    <div id="services">
        <div class="container">
            <h1 class="sub-title">Mes Services</h1>
            <div class="services-list">
                <div>
                    <i class="fas fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolorem est et obcaecati incidunt tenetur totam fugit quae, maxime eveniet perferendis illum ratione! Ipsum deserunt, ullam magni neque eveniet in?</p>
                    <a href="#">learn more</a>
                </div>
                <div>
                    <i class="fas fa-crop-alt"></i>
                    <h2>UI/UX Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolorem est et obcaecati incidunt tenetur totam fugit quae, maxime eveniet perferendis illum ratione! Ipsum deserunt, ullam magni neque eveniet in?</p>
                    <a href="#">learn more</a>
                </div>
                <div>
                    <i class="fab fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolorem est et obcaecati incidunt tenetur totam fugit quae, maxime eveniet perferendis illum ratione! Ipsum deserunt, ullam magni neque eveniet in?</p>
                    <a href="#">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <!-------------Portfolio------------>
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">Mon travail</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>The app connects you yo the talented people around the world.
                        Download it from play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The app connects you yo the talented people around the world.
                        Download it from play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png">
                    <div class="layer">
                        <h3>Online Shopping App</h3>
                        <p>The app connects you yo the talented people around the world.
                        Download it from play store.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>

    <!----------------------Contact-------------------->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contactez-moi</h1>
                    <p ><i class="fas fa-paper-plane"></i>djagob33@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i>00229 91-53-70-31</p>
                    <div class="social-icons">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form name="submit-to-google-sheet">
                        <input type="text" name="Name" placeholder="Votre nom" required>
                        <input type="email" name="Email" placeholder="Votre E-mail" required>
                        <textarea name="Message" rows="6" placeholder="Votre message"></textarea>
                        <button type="submit" class="btn btn2">Soumettre</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © Basile. Made with <i class="fas fa-heart"></i> by Easy Tutorials</p>
        </div>
    </div>

    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");


        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

    </script>

    <script>

        var sidemenu = document.getElementById("sidemenu");

        function openmenu(){
            sidemenu.style.right = "0";
        }

        function closemenu(){
            sidemenu.style.right = "-200px"
        }


    </script>

<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzKspCjb3-0H0jyItjxx_cAb84UWJ_B6ZymcNBvrIVO6CSx6bretR9iBms9UJgwQdF7/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML = "Message envoyé avec succes"
            setTimeout(function(){
                msg.innerHTML = ""
            }, 5000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>


<?php

if( isset($_REQUEST ["nom"]) && isset($_REQUEST["prenom"])&& isset($_REQUEST ["age"]) && isset($_REQUEST["sexe"])){
$nom =$_GET["nom"];
$prenom =$_GET["prenom"];
$age =$_GET["age"];
$sexe =$_GET["sexe"];//pour récupérer les informations du formulaire

$sql="INSERT INTO eleves(nom,prenoms,sexe,Age) VALUES ('$nom', '$prenom','$sexe','$age')"; //insertion(enregistrement) d'une valeur dans le champ nom
$result = $conn -> query($sql);  //pour lancer la requete

if ($result == 1) {
  echo "Nom: ".$nom;
  echo "<br>";
  echo "Prénoms: ".$prenom;
  echo "<br>";
  echo "Age : ".$age;
  echo "<br>";
  echo "Sexe: ".$sexe;
  
  
}else{
  echo "erreur d'enregistrement";
}


}
  else{
    echo ' <a href="session.php">Retourner</a>';
  }

//session_destroy();//permet de supprimer les informations de la session




 
//   $sql="CREATE DATABASE mabdd";
//   $sql="CREATE TABLE eleve(
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     nom VARCHAR(100) NOT NULL,
//     prenom VARCHAR(100) NOT NULL,
//     sexe VARCHAR(100) NOT NULL,
//     Age INT(11)
// )";//creation de table eleve
 // $conn -> query($sql);// lancement de la requete
?>
</body>
</html>