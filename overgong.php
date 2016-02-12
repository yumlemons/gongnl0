<!DOCTYPE html>
<html>
    <head>
        <title>Gong.nl - Bijbanen voor ICT'ers</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <?php
            require_once "mobile_detect.php";
            $detect = new Mobile_Detect;

            if ($detect->isMobile()) { echo "
                <link rel='stylesheet' href='css/mobile_vert.css' media='all and (orientation: portrait)' />
                <link rel='stylesheet' href='css/mobile_hori.css' media='all and (orientation: landscape)' />
            "; }
            elseif ($detect->isTablet()) { echo "
                <link rel='stylesheet' href='css/tablet_vert.css' media='all and (orientation: portrait)' />
                <link rel='stylesheet' href='css/tablet_hori.css' media='all and (orientation: landscape)' />
            "; }
            else { echo "
                <link rel='stylesheet' href='css/desktop_vert.css' media='all and (orientation: portrait)' />
                <link rel='stylesheet' href='css/desktop_hori.css' media='all and (orientation: landscape)' />
            "; }
        ?>
    </head>
    <body>
        <header style="background-image: url(img/forum.png)">Gong.nl - Bijbanen voor ICT'ers</header>
        <nav>
            <a href="index.php">(Bij)banen</a>
            <a href="forum.php">Forum</a>
            <a href="inschrijven.php">Inschrijven</a>
            <a href="chalmuns.php">Chalmun's Cantina</a>
            <a href="hack_us.php">Hack Us!</a>
            <a href="overgong.php">Contact</a>
        </nav>
        </nav>
        <section>
            <aside id="left"><i>"Gong heeft ons in de loop der jaren voorzien van uitstekende jonge IT'ers waar we erg tevreden over zijn."</i></aside>
            <main>
                <h2>Contact</h2>
                <p>
                    Wij geloven erin dat wanneer de juiste mensen op de juiste plaats zitten iedereen gelukkig is. Daarom willen wij er voor zorgen dat studenten met een specifieke skillset deze skills kunnen inzetten in een bijbaan waar ze niet alleen geld verdienen maar zich ook kunnen doorontwikkelen. Een bijbaan die aansluit bij hun opleiding. Onze studenten krijgen hierdoor de werkervaring waar het bedrijfsleven om vraagt. En u krijgt de juiste persoon voor de job.<br />
                    <br />
                    Wij zijn Gong!<br />
                    <br />
                    Mr Treublaan 7<br />
                    1097 DP Amsterdam<br />
                    TEL: +31 (0)20 2170177<br />
                    <a href="mailto:crew@gong.nl">crew@gong.nl</a><br />
                    <br />
                    <a href="https://twitter.com/GongNetworks"><img src="img/twitter.png" alt="GongNetworks" /></a>
                    <a href="https://www.facebook.com/GongNL"><img src="img/facebook.png" alt="GongNL" /></a><br />
                    <br />
                    <iframe src="https://www.google.com/maps/d/embed?mid=zvzmDIVurtDk.k7lV6xpvf8Xc" style="width: 100%;" height="480"></iframe>
                </p>
            </main>
            <aside id="right">
                <b>Kandidaat</b><br />
                <i>"Gong heeft mij zeer goed geholpen met het vinden van een baan waar ik heel veel kan leren en mezelf goed kan ontwikkelen"</i><br /> - Junior Front-End Developer
            </aside>
        </section>
        <footer>
            Powered by:<br />
            <b>Gong.nl</b>
        </footer>
    </body>
</html>