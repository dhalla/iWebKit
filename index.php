<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title>BDEW</title>
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/head.inc.php"); ?>

</head>
<body>
    
    <!-- Topbar -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/topbar.home.inc.php"); ?>
    
    <div class="searchbox">
    	<form action="" method="get">
        <fieldset>
    		<input id="search" placeholder="Suche" type="text" /><input id="submit" type="hidden" />
        </fieldset>
        </form>
    </div>    
    
    <!-- Content -->
    <div id="content">
        <!-- <span class="graytitle">Bundesverband der Energie- und Wasserwirtschaft</span> -->
        <ul class="pageitem">            
            <!-- Introtext -->
            <li class="textbox">
            <img src="/images/bdew_logo.gif" alt="" class="center" />
                <span class="header">Bundesverband der Energie- und Wasserwirtschaft</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </li>
            <!-- Menu Items -->
            <li class="menu"><a href="/pages/about/about.php"><span class="name">Über uns</span><span class="comment">Wir stellen uns vor</span><span class="arrow"></span></a></li>                
            <li class="menu"><a href="/pages/news/rss.php"><img alt="News" src="/images/rss-icon.png" /><span class="name">News</span><span class="arrow"></span></a></li>                
            <li class="menu"><a href="/pages/events/list.php"><img alt="Events" src="/images/schedule-icon.png" /><span class="name">Veranstaltungen</span><span class="arrow"></span></a></li>                
            <li class="menu"><a href="/pages/persons/list.php"><img alt="Ansprechpartner" src="/images/user-icon.png" /><span class="name">Ansprechpartner</span><span class="arrow"></span></a></li>                
            <li class="menu"><a href="/pages/contact/contact.php"><img alt="Kontakt" src="/images/contact-icon.png" /><span class="name">Kontakt/Anfahrt</span><span class="arrow"></span></a></li>                
        </ul>
    </div>
    
    <!-- Footer -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer.inc.php"); ?>

</body>
</html>
