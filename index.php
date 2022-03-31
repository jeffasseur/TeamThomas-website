<?php

    include_once("members.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Thomas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/styles.css?"> -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <!--clamp() voor responsive fontsize-->
    <?php include_once("nav.inc.php"); ?>

    <header>
        <div class="left">
            <img src="assets/Group 28.svg" alt="planets icon" class="asset__planet hide-mobile">
            <h1>We are Team Thomas</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique molestias repudiandae tempore at veniam debitis, vero tempora ex neque ipsam pariatur praesentium. Labore odit quidem, suscipit repellat similique explicabo omnis.</p>
            <a href="projects.php" class="button">Projecten</a>
        </div>
        <div class="right">
            <img src="assets/Group 28.svg" alt="planets icon" class="asset__planet hide-desktop">
            <img src="./assets/JFV_TeamThomas_BTS-23.jpg" alt="Groepsfoto Team Thomas" class="hide-desktop">
        </div>
    </header>

    <main>
        <section class="mission">
                <p class="mission__txt">Onze missie is het verbinden van alle individuen in en rond de Karmelietentuin in Mechelen.</p>
        </section>

        <section class="team">
            <div class="wie"><p>Wie zijn we?</p></div>

            <div class="team__space hide-mobile"></div>
            
            <div class="team__member">
                <?php foreach($members as $member): ?>
                    <div class="member-box" 
                        style="background-image: url(<?php echo $member["frontPic"];?>);"
                        onMouseLeave="this.style.backgroundImage='url(<?php echo $member["frontPic"];?>)'" 
                        onMouseOver="this.style.backgroundImage='url(<?php echo $member["backPic"];?>)'"
                    >
                        <h3 class="member__name"><?php echo $member["name"]; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="inputform">

                <div class="formtitle">
                    <h2>Laat al je vragen maar aan ons over</h2>
                    <p>Aarzelf niet om ons even te contacteren met al je vragen of als je gewoon een toffe babbel nodig hebt.</p>
                </div>
                <div class="form">
                    <form action="mailto:Hey@teamthomas.be" method="get" enctype="text/plain">
                        <input type="text" name="email" id="email" placeholder="Je e-mailadres">
                        <input type="text" name="name" id="name" placeholder="Je naam">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Je bericht"></textarea>
                        <input type="submit" id="submit" value="Verstuur" class="button">
                    </form>
                </div>

        </section>
    </main>

    <?php include_once("footer.inc.php"); ?>
</body>
</html>