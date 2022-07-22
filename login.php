<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT APPLICATION</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <section class="form login">

            <header>Chat App</header>

            <form action="#">

                <!-- error message -->
                <div class="error-txt">This is an error message!</div>

                <!-- email address of user -->
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter Your Email Adress">
                </div>

                <!-- password -->
                <div class="field input ">
                    <label>Password</label>
                    <input type="password" placeholder=" Enter Your Password"><i class="fas fa-eye">
                    </i>
                </div>

                <!-- submit button -->
                <div class="field button">
                    <input type="submit" value="Continue To Chat">
                </div>

                <div class="link">Not yet singed up?
                    <a href="#">Sing Up now</a>
                </div>

            </form>
        </section>
    </div>

    <script src="js\password-show-hide.js"></script>
</body>

</html>