<div class="container mx-auto text-bg-dark p-4">
    <div class="text-center"> <h1>Iniciar Sesion</h1> </div>

    
       <?php if(!empty (session()->getFlashdata('msg'))):?> 
           <div class="alert alert-danger"><?=session()->getFlashdata('msg'); ?></div> 
                <?php endif?>

    <form method="post" action="<?php echo base_url('/enviarlogin')?>">
    <div class="mb-3">
    <label for="exampleFormControlInput4" class="form-label">Usuario</label>
    <input name="usuario" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Usuario" required>
    </div>

    <div>
    <label for="inputPassword5" class="form-label">Contraseña</label>
    <input name="password" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
    </div>

    <div class="d-grid gap-2 d-md-block p-3">
    <button type="submit" class="btn btn-outline-success">Iniciar sesion</button>
    <button type="reset" class="btn btn-outline-danger">Borrar</button>
       
    </div>
    </form>

    <div class="text-center">¿Aun no te uniste al mundo de Runaterra Porixtos? <a href="registro">Registrate</a></div>

</div>


<!--div class="mb-3 row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
  </div>
</div>
<div class="mb-3 row">
  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" id="inputPassword">
  </div>
</div>


<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
</div-->