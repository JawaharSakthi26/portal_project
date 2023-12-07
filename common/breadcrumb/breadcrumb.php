<ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <?php
    foreach ($breadcrumbs as $key => $value) {
        if ($key != '')
            echo '<li class="breadcrumb-item"><a href="' . $key . '">' . $value . '</a></li>';
        else
            echo '<li class="breadcrumb-item active">' . $value . '</li>';
    }
    ?>
</ol>