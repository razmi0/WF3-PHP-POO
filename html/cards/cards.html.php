<!-- FIRST ROW -->
<div class="row mt-3">
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Batman salue Superman 👋</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic ">
                <?php $Batman->sayHello($Superman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3 ">
        <h5 class="card-title text-center">Superman salue Batman 👋</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Superman->sayHello($Batman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Batman attaque Superman 💢</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Batman->doAttack($Superman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
</div>

<!-- SECOND ROW -->

<div class="row mt-3">
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">
            Superman riposte d'une attaque suivi d'une super attaque 💢
        </h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Superman
                    ->doAttack($Batman)
                    ->doSuperAttack($Batman)
                ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Batman , furax , fait une super attaque 💢</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Batman->doSuperAttack($Superman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Superman se soigne 😔</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Superman->doHeal() ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
</div>

<!-- THIRD ROW -->

<div class="row mt-3">
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">
            Superman encore affaiblie lance une double attaque 💢
        </h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Superman->doAttack($Batman)->doAttack($Batman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Batman répond d'une attaque simple suivi d'une attaque secrète 💢🔋</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Batman->doAttack($Superman)->doSneakyAttack($Superman) ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
    <div class="card col-4 py-3 px-3">
        <h5 class="card-title text-center">Superman est au tapie et Batman gagne un point d'expérience 👍</h5>
        <div class="card-body">
            <p class="card-text text-center fst-italic">
                <?php $Batman->experienceUp() ?>
            </p>
        </div>
        <div class="card-footer">
            <?php displayHeroStats($Batman, $Superman) ?>
        </div>
    </div>
</div>