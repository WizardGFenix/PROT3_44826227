<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger">
                    <?=session()->getFlashdata('msg')?>
                </div>
                <?php endif; ?>
                <br><br>
                <?php if(session()->get('perfil_id') == 1): ?>
                    <div>
                        <img class= "center" height="100px" width="100px" src="<?= base_url('Assets/img/kaisa.jpg') ?>">
                    </div>
                    <?php elseif(session()->get('perfil_id' == 2)): ?>
                    <div>
                        <img class= "center" height="100px" width="100px" src="<?= base_url('Assets/img/anivia.jpg') ?>">
                    </div>
                    <?php endif; ?>

        </div>
    </div>
</div>