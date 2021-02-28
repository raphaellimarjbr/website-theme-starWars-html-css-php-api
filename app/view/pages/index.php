    <?php include_once "../layout/header.php"; ?>
    <?php require_once DIR_CONTROLLER."controllerList.php"; ?>
        <div id="container">
            <div class="page">
                <div id="articles">
                    <?php new ControllerList(); ?>
                </div>
            </div>
        </div>
    <?php include_once "../layout/footer.php" ?>