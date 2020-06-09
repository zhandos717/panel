<?
    function get_cheta() {
        $sql = "SELECT * FROM `cheta`";

        $result = mysqli_query($link, $sql);

        echo '<pre>';
        var_dump($result);
        echo '</pre>';

    }

    get_cheta();
    