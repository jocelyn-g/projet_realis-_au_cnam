@extends('app')


@section('title', 'Menu')

@section('content')
    <h1>Menu</h1>

    <div class="menu_flex">
        <?php foreach($categories as $categorie):?>

            <div class="categorie">
                <h2>
                    <?= $categorie->nom ?>
                </h2>
            </div>

            <?php foreach($categorie->plats as $plat):?>
                <div class="plat">
                    <p>
                        <?= $plat->nom ?>
                    </p>
                    <p>
                        <?= $plat->prix ?> CFA
                    </p>
                </div>

            <?php endforeach ?>
        <?php endforeach ?>
    </div>

    

@endsection

