<div class="container">

    <nav class="main-menu">
        <div class="menu-list-wrapper">
            <ul class="menu-list">
                <?php foreach (collection('main-menu-items') as $item) : ?>
                    <li class="menu-item">
                        <a class="menu-link <?= $item->isActive() ? 'active' : '' ?>" href="<?= $item->url() ?>">
                            <?= $item->title() ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </nav>

    <h2><?= $site->title() ?></h2>
    <h4><?= $page->title() ?></h4>

</div>