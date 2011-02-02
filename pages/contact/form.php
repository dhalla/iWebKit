<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title>BDEW</title>
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/head.inc.php"); ?>

</head>
<body>
    
    <!-- Topbar -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/topbar.inc.php"); ?>
    
    <div id="tributton"><div class="links">
    <a href="/pages/contact/contact.php">Adresse</a><a href="/pages/contact/route.php">Anfahrt</a><a href="/pages/contact/form.php" id="pressed">Formular</a>
    </div></div> 
    
    <!-- Content -->
    <div id="content">
        <form action="#" method="POST">
        <ul class="pageitem">            
            <!-- Introtext -->
            <li class="textbox">
                <span class="header">Kontaktformular</span>
                <p>Bitte geben Sie eine gültige E-Mail- oder Telefonadresse an, da wir sie ansonsten nicht kontaktieren können.</p>
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
                <span class="name">Telefon</span>
                <input placeholder="" type="tel" />
            </li>
            <li class="smallfield">
                <span class="name">E-Mail</span>
                <input placeholder="" type="email" />
            </li>
            <li class="select">
                <select name="example">
                    <option value="1">Betreff</option> 
                	<option value="2">Anfrage</option>
                	<option value="2">Information</option>
                	<option value="2">Bla</option>
                	<option value="2">Blubb</option>
                </select>
                <span class="arrow"></ span>
            </li> 
            <li class="textbox">
                <p>Ihre Nachricht für uns:</p>
            </li>  
            <li class="textbox"><textarea name="TextArea" rows="4"></textarea></li>      
            <li class="button"><input name="name" type="submit" value="Absenden" /></li>                       
        </ul>
        </form>
    </div>
    
    <!-- Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.inc.php"); ?>

</body>
</html>
