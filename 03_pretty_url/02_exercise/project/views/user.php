<?php
$example_users = [
    1 => [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 21
    ],
    2 => [
        'name' => 'Peter',
        'surname' => 'Bauer',
        'age' => 16
    ],
    3 => [
        'name' => 'Paul',
        'surname' => 'Smith',
        'age' => 18
    ],
];
$parts = explode('/', $_SERVER['REQUEST_URI']);
array_shift($parts);
$id = $parts[1];
$user = $example_users[$id];

echo "<p>User:</p>";
echo "<p><strong>Name:</strong>" .$user['name'] ."</p>";
echo "<p><strong>Surname:</strong>" .$user['surname'] ."</p>";
echo "<p><strong>Age:</strong>" .$user['age'] ."</p>";

