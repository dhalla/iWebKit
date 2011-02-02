<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title>BDEW</title>
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/head.inc.php"); ?>

</head>
<body>
    
    <!-- Topbar -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/topbar.events.inc.php"); ?>
    
    <!-- In-Event Navigation -->
    <div id="duobutton"><div class="links"><a href="/pages/events/wasserpreiskalk.php">Beschreibung</a><a href="/pages/events/attend.php" id="pressed">Anmelden</a></div></div>
       
    <!-- Content -->
    <div id="content">
        <span class="graytitle">Veranstaltung "Wasserpreiskalkulation"</span>
        <form>
        <ul class="pageitem">            
            <li class="textbox">
                <span class="header">Hamburg, 3.2.2011</span>
                <p>
                    Titel: Wasserpreiskalkulation<br />
                    Termin: 03.02.2011<br />
                    Ort: Hamburg<br />
                    630,- f. BDEW-Mitglieder<br />
                    830,- f. Nicht-Mitglieder
                </p>
            </li>                
            <li class="radiobutton">
                <span class="name">Herr</span><input name="gender" type="radio" value="A" />
            </li>
            <li class="radiobutton">
                <span class="name">Frau</span><input name="gender" type="radio" value="B" />
            </li>
            <li class="smallfield">
                <span class="name">Name</span>
                <input placeholder="" type="text" />
            </li>
            <li class="smallfield">
                <span class="name">Firma</span>
                <input placeholder="" type="text" />
            </li>
            <li class="smallfield">
                <span class="name">Anzahl Personen</span>
                <input placeholder="" type="tel" />
            </li>
            <li class="smallfield">
                <span class="name">E-Mail</span>
                <input placeholder="" type="email" />
            </li>
            <li class="button"><input name="name" type="submit" value="Absenden" /></li>                             
        </ul>
        </form>
    </div>
    
    <!-- Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.inc.php"); ?>

</body>
</html>
