<?php
$date=date("Y-m-d");
$links=array("http://localhost:81/homework/hw3/index.php", "http://localhost:81/homework/hw3/prices.php",
"http://localhost:81/homework/hw3/published.php","http://localhost:81/homework/hw3/publishing.php",
"http://localhost:81/homework/hw3/rules.php","http://localhost:81/homework/hw3/admin.php",
"http://localhost:81/homework/hw3/contacts.php");
$string="<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
for($i=0; $i<7; $i++){
    $string.="
    <url>
    <loc>".$links[$i]."</loc>
    <lastmod>".$date."</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.8</priority>
    </url>";
}
$string.="</urlset>";
$f = fopen("sitemap.xml","w");
fwrite($f, $string);
fclose($f);
?>

<form action="" method="POST">
    <input type="submit" value="создать">
</form>