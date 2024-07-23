<?php
 
$jsonFilePath = __DIR__ . '/../media/data.json';
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

if (!$data) {
    die("Error decoding JSON data");
}

foreach ($data['categories'] as $category) {
    echo "<div class='div-24'>";
    echo "<div class='div-25'>";
    echo "<div class='column-5'>";
    echo "<div class='div-26'>";
    echo "<div class='div-27'>";
    echo "<button class='div-28'>All</button>";
    echo "<button class='div-29'>" . $category['name'] . "</button>";
    echo "</div>";
    echo "<div class='div-30'>";
    echo "<div class='div-31'>Sort By</div>";
    echo "<select class='div-33'>";
    echo "<option value='newest'>Newest</option>";
    echo "</select>";
    echo "</div>";
    echo "<div class='div-34'>";
    echo "<a href='#' class='div-35'>See More</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='column-6'>";
    echo "<div class='div-37'>";
    echo "<div class='div-38'>";
    echo "<button class='div-39'>Landing Page</button>";
    echo "<button class='div-40'>Other</button>";
    echo "<button class='div-41'>Other</button>";
    echo "</div>";
    echo "<div class='div-42'>";
    echo "<div class='div-43'>Lowered</div>";
    echo "<select class='div-45'>";
    echo "<option value='10'>$10</option>";
    echo "</select>";
    echo "</div>";

    echo "<div class='div-46'>";
    echo "<div class='div-47'>";
    
    foreach ($category['items'] as $item) {
        echo "<div class='column-7'>";
        echo "<div class='div-48'>";
        echo "<div class='div-49'><a href='#' class='div-50'>See More</a></div>";
        echo "<div class='div-51'>";
        echo $item['title'];
        echo "<br />";
        echo $item['description'];
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>
