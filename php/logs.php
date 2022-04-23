<?php
include '../locations.php';
include DBH;

$query_string = "SELECT logs.* , users.UserID , users.UserLogin FROM `logs` LEFT JOIN `users` ON logs.UserID = users.UserID ORDER BY `LogsID` DESC";
$query = mysqli_query(CONN, $query_string);
$result_counter = mysqli_num_rows($query);
$number_of_pages = 9 % $result_counter;
$limit_per_page = 9;
$lp = 0;


if ($result_counter > 0) {

    while ($row = mysqli_fetch_assoc($query)) {
        ++$lp;
        $date = $row['LogsDate'];
        $type = $row['LogsTypeOfInfo'];
        $text = $row['LogsText'];
        $user = $row['UserLogin'];
        switch($type){
            case 1:
                $type = 'success';
                break;
            case 2:
                $type = 'warning';
                break;
            case 3:
                $type = 'danger';
                break;
        }

        echo '<p class="px-5 py-2 rounded-3 text-white bg-'.$type.'">', $text, ' | User : ', $user, ' | At: ', $date, '</p>
        ';
        if ($lp > $limit_per_page) {
            break;
        }
    }
}
