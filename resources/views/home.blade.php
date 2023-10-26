<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=marketdatadb', 'root', 'Gluck@1010');

// Prepare the SQL query
$sql = 'SELECT market_data.title, market_data.auction_day, raw_data.name, raw_data.type, raw_data.kg, raw_data.region FROM market_data JOIN raw_data ON market_data.auction_day = raw_data.auction_day';

// Execute the query
$stmt = $db->prepare($sql);
$stmt->execute();

// Fetch the results
$results = $stmt->fetchAll();

// Close the database connection
$db = null;

// Create an array to store the data for each auction day
$auction_day_data = [];

// Iterate over the results and group the data by auction day
foreach ($results as $row) {
    $auction_day = $row['auction_day'];

    if (!isset($auction_day_data[$auction_day])) {
        $auction_day_data[$auction_day] = [];
    }

    $auction_day_data[$auction_day][] = $row;
}

// Iterate over the auction day data and display it
foreach ($auction_day_data as $auction_day => $rows) {
    echo '<h1>' . $auction_day . ' - ' . $rows[0]['title'] . '</h1>';

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>type</th>';
    echo '<th>Kg</th>';
    echo '<th>Region</th>';
    echo '<th>auction day</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td>' . $row['kg'] . '</td>';
        echo '<td>' . $row['region'] . '</td>';
        echo '<td>' . $row['auction_day'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

?>


<?php

$firstName = 'Denis';
$lastName = 'Ruvelian';

// Get the initials of the name
$initials = substr($firstName, 0, 1) . '.' . substr($lastName, 0, 1);

echo $initials;

?>
<!--Gets the initial of a single name based on the space bar delimiter-->
<?php
function getInitials($name) {
    $initials = '';
    $words = explode(' ', $name);
    foreach ($words as $word) {
        $initials .= $word[0];
    }
    return $initials;
}

$name = 'VISION TEA BROKERS LIMITED';
$initials = getInitials($name);

echo $initials;
?>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 5px;
    }

    th {
        background-color: #ccc;
    }

    td {
        text-align: center;
    }

    button{
        margin: 10px;
    }

</style>
