<?php
$family = array('Nicole','Nicolas','David','Miguel');
print_r($family);
$favoriteRecipes = array(
    "Pasta Carbonara",
    "Chicken Tacos",
    "Chocolate Cake",
    "Vegetable Stir-Fry"
);
print_r($favoriteRecipes);
$favoriteFilm = array(
    "Lord of the rings",
    "Scary movie",
    "Pulp fiction",
);
$bestFilmIndex = 0;
echo $favoriteFilm[$bestFilmIndex];
?>
<br>
<?php
$me = array(
    'firstname' => 'Nicolas',
    'lastname' => 'Mateo Uroz',
    'age' => 28,
    'city' => 'Liège',
    'favorite season' => 'summer',
    'like footbal' => true
);
echo '<pre>';
print_r($me);
echo '</pre>';
echo "Like footbal?" . " " . ($me["like football"] ? "No" : "Yes");
?>