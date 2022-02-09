<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <!--En tête-->
    <nav>
        <div class="navigation">

            <h1>SUBMIT USER INFORMATIONS</h1>
            <br>
            <h3>Verify email validity </h3>
        </div>
    </nav>
    <!--container formulaire-->

    <div id="section">
        <div class="container">
            <form action="signup.inc.php" method="post" id="form">
                <input type="text" name="name" placeholder="Nom de famille..." >
                <br>
                <input type="text" name ="email" placeholder="Email...">
                <br>
                <button type="submit" name="submit" id="button">SUBMIT</button>
            </form>
        </div>
</div>





</body>
</html>