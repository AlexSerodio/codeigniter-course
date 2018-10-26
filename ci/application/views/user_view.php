<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>User View</title>
</head>
<body>
    <h1>
        <?php
            // echo $results;

            // variable $results recieved from the users controller
            foreach($results as $object) {
                echo $object->user . '<br>';
            }
        ?>
    </h1>
</body>
</html>