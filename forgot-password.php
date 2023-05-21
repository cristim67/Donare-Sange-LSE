<?php require_once "controllerUserData.php"; ?>
<?php require_once "request.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="Donare de Sange">
    <meta name="keywords"
        content="ETTI, Donare de sange, LSE, DEPARTAMENTUL IT, Facultatea de Electronică, Telecomunicaţii şi Tehnologia Informaţiei">
    <meta name="author" content="Departamentul IT LSE">

    <title>Donare de sange</title>
    <link rel="stylesheet" href="/css/forgot-password.css">
    <link rel="icon" type="image/x-icon" href="img/LSE favi.png">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>

<body>
    <div class="container">
        <form action="forgot-password.php" method="POST" autocomplete="">
            <h2 class="text-center1">Aţi uitat parola</h2>
            <p class="text-center2">Introduceți mail-ul contului Upb</p>
            <?php
                if(count($errors) > 0){
                    ?>
            <div class="alert alert-danger text-center">
                <?php 
                            foreach($errors as $error){
                                echo $error;
                            }
                        ?>
            </div>
            <?php
                }
            ?>
            <div class="form-group">
                <label for="email"></label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Introduceți mail-ul Upb"
                    required value="<?php echo $email ?>">
                <input class="form-control-button" type="submit" name="check-email" value="Continue">
            </div>
        </form>
    </div>
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 3227970, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</body>

</html>