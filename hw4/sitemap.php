<?php
$date=date("Y-m-d");
$links=array("http://localhost:81/is24karnafel/2410/index.php", "http://localhost:81/is24karnafel/2410/info.php",
"http://localhost:81/is24karnafel/2410/about_us.php","http://localhost:81/is24karnafel/2410/contacts.php",
"http://localhost:81/is24karnafel/2410/for_clients.html","http://localhost:81/is24karnafel/2410/history.php",
"http://localhost:81/is24karnafel/2410/news.php");
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