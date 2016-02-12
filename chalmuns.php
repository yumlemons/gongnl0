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
        <header style="background-image: url(img/cantina.png)">Gong.nl - Bijbanen voor ICT'ers</header>
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
                <h2>Chalmun's Cantina</h2>
                <p>
                    Wil je samen met ons een event organiseren? Of zoek jij sponsors voor je event neem dan contact met ons op via <a href="mailto:events@gong.nl">events@gong.nl</a>
                </p>
            </main>
            <aside id="right">
                Aankomende evenementen games industrie<br />
                <br />
                <b>29 en 30 September</b><br />
                <a href="http://www.dutchgamegarden.nl/nieuws/nieuwsdetail/indigo-2015-in-tivolivredenburg-op-29-30-september-266/">Indigo 2015</a><br />
                <br />
                <b>9, 10 en 11 Oktober</b><br />
                <a href="http://firstlookfestival.nl/">Firstlook Festival</a><br />
                <br />
                <b>10 November</b><br />
                <a href="https://www.fallout4.com/age-gate">Fall Out 4 komt uit!</a>
            </aside>
        </section>
        <footer>
            Powered by:<br />
            <b>Gong.nl</b>
        </footer>
    </body>
</html>