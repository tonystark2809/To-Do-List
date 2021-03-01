<?php

$link = mysqli_connect("localhost", "root", "", "work");
if ($_POST) {
    $query = "INSERT INTO works VALUES " . mysqli_real_escape_string($link, $_POST['workText']);
    $result = mysqli_query($link, $query);
}

?>

<html>

<head>

    <title>ToDo</title>

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <div id="error">
        <?php

        $query = "SLECT * FROM work";
        $result - mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 0) {
            echo "<h3>Work can't be empty</h3>";
        }

        ?>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div class="heading">

        TO-DO LIST

    </div>

    <p>Enter the work in the input field to add in the list</p>

    <p>Click the work to mark it as complete</p>

    <p>Click on the work to remove it from the list</p>

    <div class="form">

        <form>

            <input placeholder="Type Your Work Here" name="workText" id="workText" type="text">

            <button type="button" id="addWork" class="material-icons">create</button>

        </form>

    </div>


    <ul id="list">

        <?php

        $query = "SLECT * FROM work";
        $result - mysqli_query($link, $query);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li onclick = "removeWork(this)">' . $row['work'] . '</li>';
            }
        }

        ?>

    </ul>

    <script src="app.js"></script>

</body>

</html>