<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JULES' ISLANDS OF PERSONALITY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;
        }

        .w3-half img {
            margin-bottom: -6px;
            margin-top: 16px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-half img:hover {
            opacity: 1
        }
    </style>
</head>

<body>

    <!--NAVBAR-->
    <nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding"
        style="z-index:3; width:300px; font-weight:bold; background-color: #121234;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft"
            style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
            <h3 class="w3-padding-64" style="color: white;"><b>JULES' ISLANDS<br>OF PERSONALITY</b></h3>
        </div>

        <!--BUTTONS-->
        <div class="w3-bar-block">
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" style="color: white;">HOME</a>
            <?php
                $getQuery = "SELECT * FROM islandsOfPersonality";
                $nameResult = executeQuery($getQuery);

                while ($row = mysqli_fetch_array($nameResult)) {
            ?>
            <a style="text-transform: uppercase; color: <?php echo $row['color'];?>" 
                href="#<?php echo 'island-' . $row['islandOfPersonalityID']; ?>" 
                onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">
                <?php 
                    echo $row['name'];
                ?>
            </a>

            <?php
                }
            ?>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!--HEADER-->
        <div class="w3-container" style="margin-top:80px" id="showcase">
            <h1><b>JULES' ISLANDS OF PERSONALITY</b></h1>
        </div>

        <!--FRIENDSHIP LAGOON-->
        <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 1";
        $friendshipLagoonResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($friendshipLagoonResult)) {
        ?>
        
        <div class="w3-container w3-content" 
            style="max-width:100%;" 
            id="<?php echo 'island-' .  $row['islandOfPersonalityID'];?>">
            <h1 style="font-weight: bold; color: <?php echo $row['color'];?>" id="<?php echo 'island-' . $row['islandOfPersonalityID']; ?>"><b> <?php echo $row['name'];?> </b></h1>
            <p> <?php echo $row['shortDescription'];?> </p>
            <p style="text-align: justify;"> <?php echo $row['longDescription'];?> </p>

            <?php
                $getQuery = "SELECT * FROM `islandContents` WHERE islandOfPersonalityID = 1";
                $friendshipLagoonResult = executeQuery($getQuery);

                $counter = 0;
                echo '<div class="w3-row w3-padding-32">';

                while ($row = mysqli_fetch_array($friendshipLagoonResult)) {
                    echo '<div class="w3-half w3-content w3-center">';
                    echo '<img src="' . $row['image'] . '" alt="' . $row['content'] . '" style="width:100%; padding: 10px;" onclick="onClick(this)">';
                    echo '</div>';

                    $counter++;

                    if ($counter % 4 == 0) {
                    echo '</div>';
                    echo '<div class="w3-row w3-padding-32">';
                    }
                }

                echo '</div>';
            ?>
        </div>

        <?php
            }
        ?>

        <!--SOCIETY SHORE-->
        <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 2";
        $societyShoreResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($societyShoreResult)) {
        ?>
        
        <div class="w3-container w3-content" 
            style="max-width:100%;" 
            id="<?php echo 'island-' .  $row['islandOfPersonalityID'];?>">
            <h1 style="font-weight: bold; color: <?php echo $row['color'];?>" id="<?php echo 'island-' . $row['islandOfPersonalityID']; ?>"><b> <?php echo $row['name'];?> </b></h1>
            <p> <?php echo $row['shortDescription'];?> </p>
            <p style="text-align: justify;"> <?php echo $row['longDescription'];?> </p>

            <?php
                $getQuery = "SELECT * FROM `islandContents` WHERE islandOfPersonalityID = 2";
                $societyShoreResult = executeQuery($getQuery);

                $counter = 0;
                echo '<div class="w3-row w3-padding-32">';

                while ($row = mysqli_fetch_array($societyShoreResult)) {
                    echo '<div class="w3-quarter w3-content w3-center">';
                    echo '<h2>' . $row['content'] . '</h2>';
                    echo '<img src="' . $row['image'] . '" alt="Random Name" style="width:100%; padding: 10px;" onclick="onClick(this)">';
                    echo '</div>';

                    $counter++;

                    if ($counter % 4 == 0) {
                    echo '</div>';
                    echo '<div class="w3-row w3-padding-32">';
                    }
                }

                echo '</div>';
            ?>
        </div>

        <?php
            }
        ?>

        <!--MELODY MIRAGE-->
        <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 4";
        $melodyMirageResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($melodyMirageResult)) {
        ?>
        
        <div class="w3-container w3-content" 
            style="max-width:100%;" 
            id="<?php echo 'island-' .  $row['islandOfPersonalityID'];?>">
            <h1 style="font-weight: bold; color: <?php echo $row['color'];?>" id="<?php echo 'island-' . $row['islandOfPersonalityID']; ?>"><b> <?php echo $row['name'];?> </b></h1>
            <p> <?php echo $row['shortDescription'];?> </p>
            <p style="text-align: justify;"> <?php echo $row['longDescription'];?> </p>

            <?php
                $getQuery = "SELECT * FROM `islandContents` WHERE islandOfPersonalityID = 4";
                $melodyMirageResult = executeQuery($getQuery);

                $counter = 0;
                echo '<div class="w3-row w3-padding-32">';

                while ($row = mysqli_fetch_array($melodyMirageResult)) {
                    echo '<div class="w3-quarter w3-content w3-center">';
                    echo '<h3>' . $row['content'] . '</h3>';
                    echo '<img src="' . $row['image'] . '" alt="Random Name" style="width:100%; padding: 10px;" onclick="onClick(this)">';
                    echo '</div>';

                    $counter++;

                    if ($counter % 4 == 0) {
                    echo '</div>';
                    echo '<div class="w3-row w3-padding-32">';
                    }
                }

                echo '</div>';
            ?>
        </div>

        <?php
            }
        ?>

        <!--HARMONY ISLE-->
        <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 5";
        $harmonyIsleResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($harmonyIsleResult)) {
        ?>
        
        <div class="w3-container w3-content" 
            style="max-width:100%;" 
            id="<?php echo 'island-' .  $row['islandOfPersonalityID'];?>">
            <h1 style="font-weight: bold; color: <?php echo $row['color'];?>" id="<?php echo 'island-' . $row['islandOfPersonalityID']; ?>"><b> <?php echo $row['name'];?> </b></h1>
            <p> <?php echo $row['shortDescription'];?> </p>
            <p style="text-align: justify;"> <?php echo $row['longDescription'];?> </p>

            <?php
                $getQuery = "SELECT * FROM `islandContents` WHERE islandOfPersonalityID = 5";
                $harmonyIsleResult = executeQuery($getQuery);

                $counter = 0;
                echo '<div class="w3-row w3-padding-32">';

                while ($row = mysqli_fetch_array($harmonyIsleResult)) {
                    echo '<div class="w3-third w3-content w3-center">';
                    echo '<h3>' . $row['content'] . '</h3>';
                    echo '<img src="' . $row['image'] . '" alt="Random Name" style="width:100%; padding: 10px;" onclick="onClick(this)">';
                    echo '</div>';

                    $counter++;

                    if ($counter % 3 == 0) {
                    echo '</div>';
                    echo '<div class="w3-row w3-padding-32">';
                    }
                }

                echo '</div>';
            ?>
        </div>

        <?php
            }
        ?>
        
            <!-- Modal for full size images on click -->
            <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
                <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
                <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                    <img id="img01" class="w3-image">
                    <p id="caption"></p>
                </div>
            </div>
            
        </div>

    <!-- W3.CSS Container -->
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS"
                target="_blank" class="w3-hover-opacity">w3.css</a></p>
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

</body>

</html>