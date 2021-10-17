<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Oct 17 2021 07:54:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="616bd0b69c8d4909bd21ac7f" data-wf-site="616bd0b69c8d49eddf21ac7e">
<head>
  <meta charset="utf-8">
  <title>IT Service</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/formular-f1c458.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="wf-section"><img src="images/Schön_Klinik_Verwaltung_logo.svg.png" loading="lazy" width="160" sizes="160px" srcset="images/Schön_Klinik_Verwaltung_logo.svg.png 500w, images/Schön_Klinik_Verwaltung_logo.svg.png 800w, images/Schön_Klinik_Verwaltung_logo.svg.png 1080w, images/Schön_Klinik_Verwaltung_logo.svg.png 1200w" alt=""></div>
  <div class="wf-section">
    <div class="w-layout-grid grid">
      <h1 id="w-node-a1043964-77b6-ccc1-e138-07a75d09d9bd-bd21ac7f" class="heading">IT Support Anfrage</h1>
      <h2 id="w-node-_061ede2f-e021-b76b-7c1b-1233e1922a59-bd21ac7f" class="heading-2">Allgemeine Informationen zum Ersteller</h2>
      <div id="w-node-_170998da-d14e-0b1d-f192-04396d39c418-bd21ac7f" class="w-form">
        <form id="email-form-test" name="email-form-test" data-name="Email Form" method="post" action="index.php" enctype="multipart/form-data">
          <div class="columns w-row">
            <div class="w-col w-col-6"><label for="tf_name">Name</label><input type="text" class="w-input" maxlength="256" name="tf_name" data-name="tf_name" placeholder="Maria Musterfrau" value="<?php echo $_SESSION['u_name']; ?>" id="tf_name"><label for="tf_abteilung">Abteilung</label><input type="text" class="w-input" maxlength="256" name="tf_abteilung" value=<?php echo $_SESSION['u_abteilung']; ?> data-name="tf_abteilung" placeholder="Personalwesen" id="tf_abteilung" required=""><label for="tf_email">Email</label><input type="text" class="w-input" maxlength="256" name="tf_email" value=<?php echo $_SESSION['u_email']; ?> data-name="tf_email" placeholder="email@schoen-klinik.de" id="tf_email" required=""></div>
            <div class="column w-col w-col-6"><label for="tf_computername">Computername</label><input type="text" class="w-input" maxlength="256" name="tf_computername" value=<?php echo $_SESSION['u_computername']; ?> data-name="tf_computername" placeholder="SKSLE000" id="tf_computername" required=""><label for="tf_telefon">Telefon</label><input type="text" class="w-input" maxlength="256" name="tf_telefon" value=<?php echo $_SESSION['u_telefon']; ?> data-name="tf_telefon" placeholder="08051/69500" id="tf_telefon" required=""><label for="tf_standort">Standort</label><input type="text" class="w-input" maxlength="256" name="tf_standort" value= <?php echo $_SESSION['u_standort']; ?> data-name="tf_standort" placeholder="SKS" id="tf_standort" required=""></div>
          </div><label for="upload-files">Anhänge</label><input type="file" class="w-input" name="upload-files" multiple id="upload-files" /><label for="tf_nachricht" class="field-label">Nachricht</label><textarea placeholder="Nachrichttext" maxlength="5000" id="tf_nachricht" name="tf_nachricht" data-name="tf_nachricht" class="w-input"></textarea><input type="submit" name="sbtNachricht" value="Senden" data-wait="Bitte warten..." class="submit-button w-button">
        </form>
        
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=616bd0b69c8d49eddf21ac7e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
