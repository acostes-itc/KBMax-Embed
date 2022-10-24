<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed_v1</title>
</head>
<body>
    <center> <h1>Integration KBMax</h1> </center>

    <?php
        if (!empty($_POST))
        {
            //print_r($_POST); 
            extract($_POST);
            $isPost = true;
        }else {$isPost = false; $int_fCuisine = null;}
    ?>
    <form method='post'>
        <label for='id_cuisine'>Nombre de disjoncteur pour la cuisine : </label>
        <input type='number' name='int_fCuisine' id='id_cuisine' min="0" max="16" required>
        <input type='submit' value='Subscribe!'>
    </form>

    <script src="https://itc-dev.kbmax.com/embed.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var config = new kbmax.ConfiguratorEmbed({
                kbmaxUrl: "https://itc-dev.kbmax.com",
                elementId: "viewer",
                configuratorId: 64,
                //configureProductId: 
                showHeader: false,
                showDrawer: false,
                showMove: false,
                bindToFormSelector: "",
                loadStyle: "none",
            });
            
            var isPost = <?php echo json_encode($isPost); ?>;
            if (isPost == true)
            {
                var int_fCuisine = <?php if($int_fCuisine != null)echo json_encode($int_fCuisine); else echo 'null'; ?>;
                console.log(int_fCuisine);
                if (int_fCuisine != 'null'){
                config.setFields({
                    "fCuisine": int_fCuisine
                });}
            }else return;
                       
        });
    </script>
    <div id="viewer" style="height: 800px;"></div>

</body>
</html>