<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla, dolor mollis pulvinar dapibus, urna leo maximus tellus, a iaculis dolor justo ut mi. Etiam cursus gravida commodo. Fusce id neque velit. Nunc consectetur pulvinar metus, nec tincidunt mi interdum posuere. Vestibulum pellentesque elit a lectus faucibus, eget efficitur metus imperdiet. Suspendisse vestibulum vehicula massa, rutrum vulputate est aliquam sed. Cras ut mollis justo, nec mattis dolor. In aliquet aliquam lectus quis hendrerit.

Aliquam augue odio, imperdiet vel eros ut, iaculis vestibulum nisl. Sed eu libero dictum, efficitur tellus ac, venenatis ipsum. Mauris lacinia tincidunt est, in egestas ligula pellentesque eu. Nam malesuada leo a ex rutrum, vel posuere neque commodo. Proin luctus justo ut commodo aliquet. Morbi eget nisi ex. Donec accumsan euismod ultrices. Curabitur porttitor ullamcorper ipsum vitae pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at nulla et nibh vestibulum iaculis id sed risus. Mauris sed velit ut est posuere pellentesque non id tortor. Praesent semper tortor nisi.

In ut arcu neque. Donec in ante maximus, tincidunt erat id, interdum leo. In tempor elit eu felis auctor, ac pellentesque neque sagittis. Pellentesque metus felis, venenatis et elit vitae, placerat fringilla diam. Fusce feugiat convallis mauris nec tincidunt. Nam quam felis, consequat eu sagittis sit amet, commodo vel ante. Aliquam mattis nisl sit amet enim consectetur tristique. Ut ut est nunc. Aenean vel mi eget metus vestibulum hendrerit consequat in diam. Aliquam volutpat et erat vel posuere. Vivamus ultricies, ante sit amet cursus aliquam, mi tellus efficitur urna, sed vestibulum dui risus dignissim ligula. Suspendisse potenti.

Quisque interdum fermentum justo ut pulvinar. Phasellus eleifend enim a eros luctus, eget pulvinar eros accumsan. Aenean placerat at ligula a fermentum. Nunc id volutpat augue, quis dictum nibh. Proin aliquet lectus neque, at consequat quam porta eget. Quisque ullamcorper pellentesque sem at commodo. Phasellus eu luctus sapien.

Phasellus turpis magna, malesuada consequat metus vitae, venenatis mollis sem. Pellentesque ut justo nunc. Integer cursus neque non magna fermentum placerat. Suspendisse non lorem semper, eleifend dui ac, finibus ligula. Aenean faucibus ultricies dui, vel consequat mauris fringilla non. Phasellus et nulla a ante ornare tristique. Donec vitae dui convallis massa aliquet laoreet non eu mauris. Maecenas in congue lacus, id tempor nunc. Integer efficitur est quam, at mattis erat lobortis id. Proin non posuere ligula, in facilisis purus. Proin commodo orci id quam elementum, id mollis risus semper. Nunc condimentum mi et augue tincidunt feugiat. Nulla maximus arcu mi, quis pharetra mauris fermentum non. Aliquam quis ex dignissim, bibendum tortor et, aliquam ante. Fusce massa sapien, pharetra ut lorem in, interdum luctus massa. Nam malesuada metus quis lorem molestie, a venenatis risus aliquam.";

    echo "<p style='color:green;'>$str</p>";

    echo "<br>";

    echo "<p style='color:blue;'>".strtoupper($str)."</p>";
    
    echo "<br>";
    
    echo "<span style='color:red;'>".strlen($str)."</span>";

    echo "<br>";

    echo "<span style='color:yellow;'>".str_word_count($str). "</span>";
    ?>
</body>
</html>