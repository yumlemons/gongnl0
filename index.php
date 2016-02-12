<!DOCTYPE html>
<html>
    <head>
        <title>Gong.nl - Bijbanen voor ICT'ers</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <?php
            require_once "mobile_detect.php";
            $detect = new Mobile_Detect;

            if ($detect->isMobile() && !$detect->isTablet()){
                echo "
                    <link rel='stylesheet' href='css/mobile_vert.css' media='all and (orientation: portrait)' />
                    <link rel='stylesheet' href='css/mobile_hori.css' media='all and (orientation: landscape)' />
                ";
            }
            else {
                echo "
                    <link rel='stylesheet' href='css/desktop_vert.css' media='all and (orientation: portrait)' />
                    <link rel='stylesheet' href='css/desktop_hori.css' media='all and (orientation: landscape)' />
                ";
            }

        ?>
    </head>
    <body>
        <header style="background-image: url(img/bijbaan.png)">Gong.nl - Bijbanen voor ICT'ers</header>
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
                <h2>Bijbanen</h2>
                <h3><i>"Here's to the crazy ones..."</i></h3><br />
                <p>
                    Gong Networks is een voor- en door studentencommunity die als doel heeft het plaatsen van IT-studenten op kick-ass bijbanen die aansluiten bij de skills van de student en die de mogelijkheid bieden relevante werkervaring op te doen bij diverse snelgroeiende IT- bedrijven. We hebben een 10-tal coole bedrijven waar we altijd (programmeurs, developers, backend, frontend, UX, UI en designers) kunnen plaatsen. Echter we redeneren altijd vanuit de student en zullen een bijbaan zoeken die bij jouw ontwikkelwens aansluit. Door onze ervaring in de IT kunnen we je altijd een eerlijk beeld schetsen van je kansen op de arbeidsmarkt.<br /><br />
                    We helpen je graag bij het vinden van de bijbaan die aansluit bij je opleiding!<br /><br />
                    Schrijf je <a href="#">hier</a> in.
                </p><br /><hr><br />
                <h4>Wij zijn nog op zoek naar:</h4>
                
                <!-- Can be EASILY automized with while() -->
                <table>
                    <tr><td style="background-image: url(img/NET_begin_moz.png)" class="offer_prefix"><span>24u</span></td><td class="offer_article">
                        <h1>Junior .NET (C#) Webdeveloper in of vlakbij Utrecht...Is that U?</h1>
                        <p>Je kent C#, ASP, .NET of je bent in ieder geval ambiteus om het te leren. Ervaring is dus niet vereist maar is zeker een pre. Is that U? Je woont in Utrecht of omgeving en je barst van de creativiteit...is that really U? Je bent een echte teamplayer (the capture the flag kind of teamplayer) en je bent bezig met een HBO/WO studie of hebt die zojuist afgerond..wait, it is U isn't it? Nog niet ingeschreven? <a href="#">Schrijf je in</a> en begin bij "Vertel iets over jezelf" met: Yes, it is me (en vertel dan alsnog iets over jezelf)</p>
                        </td></tr>
                </table><br />
                
                <table>
                    <tr><td style="background-image: url(img/iOS_advanced_moz.png)" class="offer_prefix"><span>24u</span></td><td class="offer_article">
                        <h1>Advanced objective-C developer in Amsterdam Who can hit the ground running!</h1>
                        <p>Doe jij bijna niets anders dan Objective-C, heb je al apps in de appstore/playstore? Is geen term voor jou onbekend en denk je dat je meteen kan meedraaien in een team van developers? Are U the Woz to our Jobs?Schrijf je dan in voor een bijbaan in Objective-C. Oh one more thing...Het is in het hartje van Amsterdam op fietsafstand van centraal. Nog niet ingeschreven? <a href="#">Schrijf je in</a> en begin bij "Vertel iets over jezelf" met: the Woz (en vertel dan alsnog iets over jezelf)</p>
                        </td></tr>
                </table>
                
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