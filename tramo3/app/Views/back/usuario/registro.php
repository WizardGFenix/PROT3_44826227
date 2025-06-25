<div class="container mx-auto text-bg-dark p-4">
    <div class="text-center"> <h1>Registro</h1> </div>
    <?php $validation = \Config\Services::validation(); ?> 
                    <form method="post" action="<?php echo base_url('/enviar-form') ?>"> 
                        <?=csrf_field();?>
                        <?=csrf_field();?> <!-- genera un campo oculto o token de seguridad--> 
                        <?php if(!empty (session()->getFlashdata('msg'))):?> 
                            <div class="alert alert-danger"><?=session()->getFlashdata('msg'); ?></div> 
                        <?php endif?> 
                        


    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Caitlyn" required>
    
    <?php if($validation->getError('nombre')) {?> 
                                <div class='alert alert-danger mt-2'> 
                                    <?= $error = $validation->getError('nombre'); ?> 
                                </div> 
                            <?php }?>                         

    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Apellido</label>
    <input name="apellido" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Kiramman" required>
    
     <?php if($validation->getError('apellido')) {?> 
                                <div class='alert alert-danger mt-3'> 
                                    <?= $error = $validation->getError('apellido'); ?> 
                                </div> 
                            <?php }?>    

    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">Email</label>
    <input name="email" type="text" class="form-control" id="exampleFormControlInput3" placeholder="piltover@mail.com" required>
    
        <?php if($validation->getError('email')) {?> 
                                <div class='alert alert-danger mt-4'> 
                                    <?= $error = $validation->getError('email'); ?> 
                                </div> 
                            <?php }?> 
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput4" class="form-label">Usuario</label>
    <input name="usuario" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Usuario" required>
             
            <?php if($validation->getError('usuario')) {?> 
                                <div class='alert alert-danger mt-4'> 
                                    <?= $error = $validation->getError('usuario'); ?> 
                                </div> 
                            <?php }?> 

    </div>

    <div>
    <label for="inputPassword5" class="form-label">Contraseña</label>
    <input name="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
    <div id="passwordHelpBlock" class="form-text text-white">
        
   
    </div>
                 <?php if ($validation->getError('password')): ?> 
                                <div class="alert alert-danger mt-2"><?= $validation->getError('password'); ?></div> 
                            <?php endif; ?>

    </div>
    </div>

    <div class="d-grid gap-2 d-md-block p-3">
    <button type="submit" class="btn btn-outline-success">Registrarse</button>          
    <button type="reset" class="btn btn-outline-danger">Borrar</button>
    </div>
    </form>

</div>