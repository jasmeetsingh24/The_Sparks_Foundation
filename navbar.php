<!-- navbar -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
    </style>
</head>

<body>
    <header>
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" id="logo"></a>
        <ul class="navigation">
            <li><a class="bts df" class="nav-link" href="index.php" onclick="toggleMenu();">Home</a></li><br>
            <li><a class="bts df" class="nav-link" href="aboutme.php" onclick="toggleMenu();">About Me</a></li><br>
            <li><a class="bts df" class="nav-link" href="contact.php" onclick="toggleMenu();">Contact</a></li>

        </ul>

    </header>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation')
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>