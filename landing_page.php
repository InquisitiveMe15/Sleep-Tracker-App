<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleep Tracker App Landing Page</title>
    <link rel="stylesheet" type="text/css" href="landing_page.css">


</head>


<body>
    <header>

        <!-- <a href="#" class="logo">Logo</a> -->
        <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/whatsapp/273/sleeping-face_1f634.png">
        <ul>
            <li><a href="#landing_page" class="active">Home</a></li>
            <li><a href="#sec">About</a></li>
            <li><a href="./sleep_tracker_signin_page.php">Signin</a></li>
            <!-- <li><a href="#">Contact Us</a></li> -->
        </ul>
    </header>
    <section>
        <img src="stars.jpeg" id="stars">
        <img src="moon.jpeg" id="moon">                           
        <img src="mountains_behind.jpeg" id="mountains_behind">
        <h2 id="text">Sleeeep Tracker</h2>
        <a href="./sleep_tracker_signup_page.php" id="btn">Signup!!</a>
        <img src="mountains_front.jpeg" id="mountains_front">


    </section>
    <div class="sec" id="sec">

        <h2>How it Works</h2>
        <p>Sleeeep Tracker helps you to track your sleep and helps you to understand your sleep patterns, create necessary changes to your sleep pattern and get a refreshed morning after a good night's sleep.</p>

    </div>
    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountain_behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountain_front');
        let header = document.querySelector('header');

        window.addEventListener('scroll', function () {

            let value = window.scrollY;
            stars.style.left = value * 0.25 + 'px';
            moon.style.top = value * 1.05 + 'px';
            mountains_behind.style.top = value * 0.5 + 'px';
            mountains_front.style.top = value * 0 + 'px';
            text.style.marginRight = value * 4 + 'px';
            text.style.marginTop = value * 1.5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            header.style.top = value * 0.5 + 'px';




        })
    </script>

</body>

</html>