<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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
    'like football' => true
);

$me['hobbies'] = array('Learning PHP', 'Go out with his friends', 'Shower with Pietro', 'Cooking');

$mother = array(
    'age' => 60,
    'firstname' => 'Nicole',
    'lastname' => 'Parulski',
    'favorite_movies' => array('Casablanca', 'Gone with the wind', 'The sound of music'),
    'hobbies' => array('Gardening', 'Painting', 'Traveling')
);

$soulmate = array(
    'age' => 28,
    'firstname' => 'Samantha',
    'lastname' => 'Smith',
    'favourite_movies' => array('Inception', 'Eternal Sunshine of the Spotless Mind', 'La La Land'),
    'hobbies' => array('Cooking', 'Painting', 'Gardening')
);

$me['mother'] = $mother;

$me['hobbies'][] = 'taxidermy';

$me['lastname'] = 'Durand';

echo '<pre>';
print_r($me);
echo '</pre>';

$me_hobbies_count = count($me['hobbies']);
echo "My hobbies count: " . $me_hobbies_count . "\n";

$mother_hobbies_count = count($mother['hobbies']);
echo "Mothers' hobbies count: " . $mother_hobbies_count . "\n";

$total_hobbies = $me_hobbies_count + $mother_hobbies_count;
echo "Total hobbies count: " . $total_hobbies . "\n";

echo "Like footbal?" . " " . ($me["like football"] ? "No" : "Yes");

echo "<br>";

$child_hobbies_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);

$child_hobbies_fusion = array_merge($me['hobbies'], $soulmate['hobbies']);

echo "potential child's hobbies (intersection)" . '<pre>';
print_r($child_hobbies_intersection);
echo '</pre>';

echo "potential child's hobbies (fusion)" . '<pre>';
print_r($child_hobbies_fusion);
echo '</pre>';
?>
<br>
<br>
<?php
$web_develpment = array(
    'frontend' => array(),
    'backend' => array()
);

$web_develpment['frontend'][] = 'xhtml';
$web_develpment['backend'][] = 'Ruby on Rails';
$web_develpment['frontend'][] = 'CSS';
$web_develpment['frontend'][] = 'Flash';
$web_develpment['frontend'][] = 'Javascript';

echo '<pre>';
print_r($web_develpment);
echo '</pre>';
?>