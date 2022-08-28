<?php

$img = $img ?? [];

foreach ($img as $key => $val) : ?>
    <figure>
        <img src="<?= $key ?>" alt= "<?= $val ?>">
    </figure>
<?php endforeach; ?>
