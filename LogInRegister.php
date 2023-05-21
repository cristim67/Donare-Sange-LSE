<!DOCTYPE html>


<?php require_once "controllerUserData.php"; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/LogInRegister.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="main">
        <div class="content" id="content">
            <div class="login">
                <form class="form" action="LogInRegister.php" method="POST" autocomplete="">
                                  <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <label for="chk" aria-hidden="true" class="loginf" id="logLabel">Log in</label>
                    <input class="input"  id="logInp" type="email" name="email" placeholder="E-mail upb" required value="<?php echo $email ?>">
                    <input class="input" id="logInp" type="password" name="password" placeholder="Parola" required>
                    <button class="cssbuttons-io-button"  type="submit" name="login" value="Login"> Log In
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor"
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z">
                                </path>
                            </svg>
                        </div>
                    </button>
                </form>
            </div>

            <div class="register" id="register">
                <form class="form" action="LogInRegister.php" method="POST" autocomplete="">
                    
                              <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <label for="chk" aria-hidden="true" class="registerf" id="regLabel" >Register</label>
                    <input class="input" id="regInp"type="text" name="name" placeholder="Nume" required value="<?php echo $name ?>">
                    <input type="text" id="regInp" name="phone"
       placeholder="Numar de telefon" required>
                    <input class="input" id="regInp"  type="email" name="email" placeholder="E-mail Upb" required value="<?php echo $email ?>">
                    <input class="input" id="regInp"" type="password" name="password" placeholder="Parola" required>
                    <input type="password" id="regInp"type="password" name="cpassword" placeholder="Confirmare parola" required>
                    <button class="cssbuttons-io-button" id="buttonReg"  type="submit" name="signup" value="Signup"> Register
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor"
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z">
                                </path>
                            </svg>
                        </div>
                    </button>
            </div>
        </div>
    </div>
</body>

<script src="/js/LogInRegister.js"></script>

</html>