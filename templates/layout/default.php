<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['bootstrap.min.css']) ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script(['bootstrap.bundle.min.js']) ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <nav class="container navbar navbar-expand-lg navbar-light bg-light">

                <?= $this->Html->link(
                    $this->Html->image('https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo-black.svg', [
                        'height' => 32,
                        'width' => 40,
                    ]),
                    '/',
                    [
                        'class' => 'navbar-brand',
                        'escape' => false,
                    ]
                ) ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <?= $this->Html->link(__('Mes notes'), ['controller' => 'Notes', 'action' => 'index'], ['class' => "nav-link"]) ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="row">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            One Project a Day - with CakePHP
        </footer>
    </div>
</body>

</html>
