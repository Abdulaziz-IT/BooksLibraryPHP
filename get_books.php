<?php 
function get_all_books()
{
    $get_all_books_query = "SELECT * FROM Books;";
    $response = $GLOBALS['conn']->query($get_all_books_query);
    if ($response && $response->num_rows > 0) {
        while ($row = $response->fetch_array()) {
            echo '<div> <a target="_blank" href="'. $row["Link"] . '"> <img src= "' . $row["Image"] . '" width="218" height ="218"> <br>';
            echo '<span class="title">' . $row["Title"] . '</span> <br>';
            echo 'Author: <span class="authors">' . $row["Author"] . '</span>. <br>';
            echo 'Stars: <span class="stars">' . $row["Stars"] . '</span> / 5.0. <br>';
            echo 'Reviews: <span class="reviews">' . $row["Reviews"] . '</span> Customer reviews. <br>';
            echo 'Price: <span class="price">' . $row["Price"] . '</span> $. <br>';
            echo 'Data Published: <span class="published">' . $row["Date"] . '</span> <br> <br>';
            echo '</a> </div>';
        }
    } else {
        echo '<h2>Your database doesnt have any books yet!</h2>';
    }
}
?>