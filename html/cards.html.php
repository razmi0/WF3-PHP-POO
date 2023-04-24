


<div class="row">
    <div class="card col-4">
        <h5 class="card-title">Batman salue Superman</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Batman->sayHello($Superman); ?>
            </p>
            <?= include "html/footer_card.html.php" ?>;
        </div>
    </div>
    <div class="card col-4">
        <h5 class="card-title">Superman salue Batman</h5>
        <div class="card-body">
            <p class="card-text">
                <?= $Superman->sayHello($Batman); ?>
            </p>
        </div>
        <div class="card-footer">
            <?= getHeroStats($Batman, $Superman); ?>
        </div>
    </div>
    <div class="card col-4">
        <h5 class="card-title">Card title</h5>
        <div class="card-body">
            <p class="card-text">This is some text within a card body.</p>
        </div>
        <div class="card-footer">
            Card footer
        </div>
    </div>
</div>