<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/assets/images/logo.jpeg" type="image/jpeg">
    <nav>
        <ul>
             <?php foreach ($menuItems as $title => $url): ?>
                <li>
                    <a href="<?= $url ?>" <?= $_SERVER['REQUEST_URI'] == $url ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

