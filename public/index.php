<?php




?>

<link rel="stylesheet" href="./css/style.css">

<body class="body">
    <h1>Kies je nieuwsbrief</h1>
    <form action="api.php" method="get" class="form">
        <label for="email">
            <input type="text" id="email" class="textVeld" placeholder="Email" required>
        </label>
        <div class="wrapper1">
            <div>
                <p>Nieuwsbrief 1</p>
                <input type="checkbox" id="checkbox" class="checkbox">
            </div>
            <div>
                <p>Nieuwsbrief 2</p>
                <input type="checkbox" id="checkbox" class="checkbox">
            </div>
        </div>
        <input type="submit" id="button" class="button" value="Verstuur">
    </form>
</body>