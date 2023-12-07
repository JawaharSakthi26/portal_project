<ol class="breadcrumb justify-content-end">
    <?php
    $pageValue = isset($_GET['page']) ? $_GET['page'] : '';

    $pageValue = preg_replace("/[^a-zA-Z0-9]/", " ", $pageValue);

    if ($pageValue) {
        echo '<li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">' . ucfirst($pageValue) . '</li>';
    }
    ?>
</ol>
