<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="./index.js"></script>
</head>

<body>
    <div class="Signup">
        <form id="form" method="post" action="SignUpProcess.php">

            <h1>

                <head>Sign Up</head>
            </h1>
            <div class="form-input">
                <br>
                <label for="UserName"></label>
                <input type="text" id="UserName" name="UserName" placeholder="Username" >
                <i class='bx bxs-user'></i>
                <div class="error"></div>
            </div>
                <br>
            <div class="form-input">
                <label for="email"></label>
                <input type="text" id="email" name="email" placeholder=" E-mail" >
                <i class='bx bxs-envelope'></i>
                <div class="error"></div>
            </div>
                <br>
            <div class="form-input">
                <label for="phone"></label>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" >
                <i class='bx bxs-phone' ></i>
                <div class="error"></div>
            </div>
                <br>
            <div class="form-input">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password">
                <i class='bx bxs-lock'></i>
                <div class="error"></div>
            </div>
                <br>
            <div class="form-input">
                <label for="password1"></label>
                <input type="password" id="password1" name="password1" placeholder="Re-Enter Password">
                <i class='bx bxs-lock'></i>
                <div class="error"></div>
            </div>
                <br>
            
            <button type="submit" class="confirm" >Sign up</button>
    </div>
    </form>


</body>

</html>