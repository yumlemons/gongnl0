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
        <header style="background-image: url(img/overgong.png)">Gong.nl - Bijbanen voor ICT'ers</header>
        <nav>
            <a href="index.php">(Bij)banen</a>
            <a href="forum.php">Forum</a>
            <a href="inschrijven.php">Inschrijven</a>
            <a href="chalmuns.php">Chalmun's Cantina</a>
            <a href="hack_us.php">Hack Us!</a>
            <a href="overgong.php">Contact</a>
        </nav>
        <section>
            <aside id="left"><i>"Gong heeft ons in de loop der jaren voorzien van uitstekende jonge IT'ers waar we erg tevreden over zijn."</i></aside>
            <main>
                <h2 style="font-family: 'Ubuntu Mono', 'System', 'Consolas'; font-weight: 900;">/>hack_us</h2>
                <p>
                    Je hebt een C.V.? That's cute! Maar om in de beroemde woorden van Linus Torvalds te spreken: "<i>Talk is cheap, show me the code!</i>".<br />
                    <br />
                    Hier komen binnenkort leuke hack-opdrachten!<br />
                    <br />
                    Nog niet ingeschreven voor een (bij)baan die bij je past? Doe dat dan nu <a href="inschrijven.html">hier</a>.
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