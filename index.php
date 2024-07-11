<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php

    // SQL QUERY 
    $query = "SELECT * FROM products ";

    // FETCHING DATA FROM DATABASE 
    $result = $conn->query($query);

    if ($result->num_rows > 0) { ?>
        <div class="card-container">
            <?php


            // OUTPUT DATA OF EACH ROW 
            while ($row = $result->fetch_assoc()) { ?>
                <div class="card">
                    <img src="<?php echo $row["image"]; ?>" alt="Movie Image" class="card-image" />
                    <div class="card-content">
                        <h2 class="card-title"><?php echo $row["name"]; ?></h2>
                        <p class="card-price"><?php echo $row["price"]; ?></p>
                        <div class="card-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        <div class="card-button-container">
                            <button class="card-button">
                                <?php
                                if ($row["stock"]) {
                                    echo "In Stock";
                                }
                                ?>
                            </button>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "0 results";
        }

        ?>
        </div>


</body>

</html>