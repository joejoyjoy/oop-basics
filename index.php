<?php
include 'baseClass.php';
include 'inherits.php';
include 'interface.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php - Base Class</title>
</head>

<body>

    <?php
    // Constructor
    echo "<h2>Person info | Constructor</h2>";
    $client1 = new Delivery("Jhon", "dev@info.com", "Keyboard");
    echo $client1->name . "<br>";
    echo $client1->email . "<br>";
    echo $client1->selectedProduct . "<br>";

    echo "<br><br>";

    // Method for insert
    echo "<h2>Person info | Method for insert</h2>";
    $client1->setName("Tommy");
    echo $client1->name . "<br>";
    $client1->setEmail("tommy@info.com");
    echo $client1->email . "<br>";
    $client1->setProduct("Monitor 27in");
    echo $client1->selectedProduct . "<br>";

    echo "<br><br>";

    // Inherit to change name
    echo "<h2>Person info | Inherit to change name</h2>";
    $client1->changeName("Robert");
    echo $client1->name . "<br>";
    echo $client1->email . "<br>";
    echo $client1->selectedProduct . "<br>";

    echo "<br><br>";

    // Static function
    echo "<h2>Delivery details | Static function</h2>";
    echo Delivery::$estiDate . "<br>";
    echo $client1->deliveryDate() . "<br>";

    echo "<br><br>";

    // Abstract Method
    echo "<h2>Duration of delivery | Abstract Method</h2>";
    echo $client1->getDelivery() . "<br>";

    echo "<br><br>";

    // Interfaces
    echo "<h2>Method for payment chosen | Interface</h2>";

    echo '<form action="" method="post">
            <button name="pay" value="Paypal">Paypal</button>
        </form>';
    echo '<form action="" method="post">
            <button name="pay" value="Visa">Visa</button>
        </form>';
    echo '<form action="" method="post">
            <button name="pay" value="Cash">Cash</button>
        </form>';
    if (empty(@htmlspecialchars($_POST["pay"])) == false) {
        $chosenPay = @htmlspecialchars($_POST["pay"]);
        $paymentType = new $chosenPay();
        $buyProduct = new BuyProduct();
        echo $buyProduct->pay($paymentType);
    };

    ?>

</body>

</html>