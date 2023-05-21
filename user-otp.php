<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>
<?php require_once "otpsadasd.php"; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/user-otp.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
          <form action="user-otp.php" method="POST" autocomplete="off">
        <div class="verificare">
            <div class="text-verif-cod">Verificare cod</div>
            <div class="box-inf">
                Am trimis un cod de verificare pe adresa ta 
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="otp" placeholder="Introdu codul de verificare" required>
                <input class="form-control-button" type="submit" name="check" value="Submit">
            </div>
            
    </form>
            
        </div>
        <!--<div class="blog-principal">-->
        <!--    <div class="left-side">-->
        <!--        <div class="patrat">-->

        <!--            <div class="sus">-->
        <!--                <div class="facebook">-->
        <!--                    <a href="https://www.facebook.com/lseorgro">-->
        <!--                        <i class="fa fa-facebook"></i>-->
        <!--                    </a>-->
        <!--                </div>-->

        <!--                <div class="instagram">-->
        <!--                    <a href="https://www.instagram.com/ligastudentilorelectronistilse/">-->
        <!--                        <i class="fa fa-instagram"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="jos">-->
        <!--                <div class="youtube">-->
        <!--                    <a href="https://www.youtube.com/@lsebucuresti">-->
        <!--                        <i class="fa fa-youtube"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--                <div class="google">-->
        <!--                    <a href="https://lsebucuresti.org/">-->
        <!--                        <i class="fa fa-google"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="middle-side">-->
        <!--        <div class="title">-->
        <!--            <span class="colorat">Donare </span>-->
        <!--            <span class="nocolor">LSE </span>-->
        <!--            <span class="colorat">Sange</span>-->
        <!--        </div>-->

        <!--        <div class="buttonsPages">-->
        <!--            <button class="home" onclick="location.href='index.php'">Acasa</button>-->
        <!--            <button class="programari" onclick="location.href='calendar.php'">Programari</button>-->
        <!--            <button class="logari" onclick="location.href='LogInRegister.php'">Logare</button>-->
        <!--        </div>-->

        <!--        <div class="copyright">Departamentul IT &#169; 2023</div>-->
        <!--    </div>-->

        <!--    <div class="left-sidePhone">-->
        <!--        <div class="patrat">-->

        <!--            <div class="sus">-->
        <!--                <div class="facebook">-->
        <!--                    <a href="https://www.facebook.com/lseorgro">-->
        <!--                        <i class="fa fa-facebook"></i>-->
        <!--                    </a>-->
        <!--                </div>-->

        <!--                <div class="instagram">-->
        <!--                    <a href="https://www.instagram.com/ligastudentilorelectronistilse/">-->
        <!--                        <i class="fa fa-instagram"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="jos">-->
        <!--                <div class="youtube">-->
        <!--                    <a href="https://www.youtube.com/@lsebucuresti">-->
        <!--                        <i class="fa fa-youtube"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--                <div class="google">-->
        <!--                    <a href="https://lsebucuresti.org/">-->
        <!--                        <i class="fa fa-google"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="right-side">-->
        <!--        <div class="text">Contacteaza-ne</div>-->
        <!--        <input type="email" placeholder="Email" class="email">-->
        <!--        <input type="text" placeholder="Message" class="message">-->
        <!--        <input type="submit" value="Trimite" class="send-button">-->
        <!--    </div>-->

        <!--    <div class="copyrightPhone">Departamentul IT &#169; 2023</div>-->
        <!--</div>-->
    </div>
</body>

</html>