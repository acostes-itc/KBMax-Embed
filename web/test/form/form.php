<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire, php to javascript</title>
</head>
<body>
    <center> <h1> Form PHP to JS </h1> </center>

    <!-- <script type="text/javascript" src="form.js"></script> -->

    <?php
        if (!empty($_POST))
        {
            print_r($_POST); extract($_POST);
            $isPost = true;
        }
    ?>
    
    <br><br><br>
    ---------------------------------------------
    <br><br><br>

    <form method='post'>

        <label for='id_name'>Enter your name: </label>
        <input type='text' name='name' id='id_name' required>
        <br>
        <input type='submit' value='Subscribe!'>

    </form>

    <script>
        var isPost = <?php echo json_encode($isPost); ?>;
        if (isPost)
        {
            var nom = <?php echo json_encode($name); ?>;
            document.write(nom);
        }
    </script>

</body>
</html>