<!-- FIRST ROW -->
<div class="row mt-3">
    <div class="card col-4">
        <h5 class="card-title text-center">Batman salue Superman</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->sayHello($Superman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Superman salue Batman</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Superman->sayHello($Batman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Batman attaque Superman</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->doAttack($Superman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
</div>

<!-- SECOND ROW -->

<div class="row mt-3">
    <div class="card col-4">
        <h5 class="card-title text-center">
            Superman riposte d'une attaque suivi d'une super attaque
        </h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Superman->doAttack($Batman) ?>
            </p>
            <p class="card-text">
                <?= $Superman->doSuperAttack($Batman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Batman , furax , fait une super attaque</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->doSuperAttack($Superman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Superman se soigne 😔</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Superman->doHeal() ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
</div>

<!-- THIRD ROW -->

<div class="row mt-3">
    <div class="card col-4">
        <h5 class="card-title text-center">
            Superman encore affaiblie lance une double attaque
        </h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Superman->doAttack($Batman) ?>
            </p>
            <p class="card-text">
                <?= $Superman->doAttack($Batman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Batman répond d'une attaque simple suivi d'une attaque secrète🔋</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->doAttack($Superman) ?>
            </p>
            <p class="card-text">
                <?= $Batman->doSneakyAttack($Superman) ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
    <div class="card col-4">
        <h5 class="card-title text-center">Superman est au tapie et Batman gagne un point d'expérience</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->setExperienceUp() ?>
            </p>
        </div>
        <?= include "html/cards/footer_card.html.php" ?>
    </div>
</div>