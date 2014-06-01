<!DOCTYPE html>
<html>
<head>
 <title>Tugas Layanan Web</title>
 <link href="web.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="isi">
 <div id="atas">
  <div id="logo">
  <img src="img/logo.png" alt="logo">
  </div>
  <div id="nav">
  <ul class="nav-link">
     <li id="acitve-nav"><a href="index.php">Home</a></li>
     <li><a href="tugas.php">Tugas</a></li>
     <li><a href="about.php">About</a></li>
     <li><a href="contact.php">Contact</a></li>
  </ul>
  </div>
 </div>
 <div id="konten">
 <br>
 <h1>Parsing dari situs web http://techno.okezone.com/breaking/56 </h1>
 <?php
$file ="http://techno.okezone.com/breaking/56";
$doc = new DOMDocument();
$doc->loadHTMLFile($file);

$xpath = new DOMXpath($doc);
$elements = $xpath->query("//div[@class='subkanal-content-list fl']/ul/li");
if (!is_null($elements)) {
  foreach ($elements as $element) {
    

    $nodes = $element->childNodes;
    foreach ($nodes as $node) {
      echo "<table><tr><td>". $node->nodeValue. "</td></tr></table>";
    }
  }
}
?>
 
 </div>
 <div id="footer">
  <div id="footer-link">
  <a href="index.php">Home</a> | <a href="tugas.php">Tugas</a> | <a href="about.php">About</a> | <a href="contact.php">Contact</a>
  </div>
  <div id="footer-copy">
  <p>&copy; Tugas Layanan Web E 2011</p>
  </div>
 </div>
</div>

</body>
</html>
