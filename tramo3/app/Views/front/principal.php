<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amigurumis</title>
    <link rel="stylesheet" href="assets/css/miestilo.css">
</head>
<body>
    <!--Carrusel-->
    <div id="carouselExample" class="carousel slide">
   

        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?= base_url('assets/img/caitvi.png') ?>" class="d-block w-25 mx-auto" alt="...">
        <p class="carousel-text text-center">Un dúo tejido con hilos de amor, valentía y confianza
            Este set de amigurumis representa a Caitlyn y Vi, protagonistas de Arcane, en versión chibi y completamente tejidas a mano. 
            Cada muñeca mide aproximadamente 15 cm de alto, 
            con detalles que evocan sus personalidades y su vínculo especial.
            Una criada en la rigidez de Piltover y la otra forjada en las calles de Zaun. Juntas, se equilibran. 
            Donde una ve con estrategia, la otra actúa con pasión. Este set de amigurumis captura no solo su estética, sino también 
            la fuerza del vínculo que construyen en Arcane—una mezcla de confianza, tensión emocional y ternura contenida. 
            Cada puntada en estas muñecas refleja esa evolución: de extrañas a compañeras, de aliadas a algo más profundo, 
            donde las palabras sobran y los gestos lo dicen todo.
        </p>
    </div>
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/nashe.jpg') ?>" class="d-block w-25 mx-auto " alt="type 2b">
        <p class="carousel-text text-center">Ashe, comandante hija del hielo de la tribu de Avarosa, lidera las hordas más numerosas del norte. Impasible, inteligente 
            e idealista, aunque incómoda en su papel de líder,
             utiliza los poderes mágicos ancestrales de su linaje para empuñar un arco de Hielo Puro. 
            Su gente cree que Ashe es la heroína mitológica Avarosa reencarnada, y ella espera unificar Freljord una vez más al recuperar sus antiguas tierras tribales.</p>
    </div>
    <div class="carousel-item">
        <img src="<?= base_url('assets/img/porito.jpg') ?>" class="d-block w-25 mx-auto" alt="...">
        <p class="carousel-text text-center">Este tierno y legendario Poro tejido a mano trae consigo toda la magia de League of Legends. Con su suave pelaje blanco, 
            cuernitos adorables y su lengüita traviesa, es mucho más que una mascota: es símbolo de compañía, coraje y dulzura.
             Inspirado en los campos helados del Freljord, este Poro amigurumi es el guardián silencioso de las emociones del invocador. 
            Perfecto para decorar, abrazar o simplemente recordar que incluso en medio de la batalla, siempre hay lugar para una sonrisa.</p>
    </div>
    
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/morgana.jpg') ?>" class="d-block w-25 mx-auto" alt="type 2b">
        <p class="carousel-text text-center">En vistas del conflicto entre su naturaleza celestial y su naturaleza mortal, Morgana decidió atarse las alas para aceptar 
        la humanidad y deja caer el peso de su dolor y rencor sobre los deshonestos y los corruptos. Se opone a las leyes y tradiciones 
        que considera injustas y lucha por la verdad (aunque haya quien trate de reprimirla) desde las sombras de Demacia con escudos y cadenas de fuego oscuro.
         Por encima de cualquier otra cosa, Morgana cree firmemente que llegará el día en que hasta los exiliados y proscritos se alzarán de nuevo.</p>
   
    </div>
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/camille.jpeg') ?>" class="d-block w-25 mx-auto" alt="type 2b">
        <p class="carousel-text text-center">Convertida en un arma viviente diseñada para operar fuera de la ley, Camille es la jefa de espías del clan Ferros, 
        una elegante agente de élite que se asegura de que nada amenace el funcionamiento de Piltover ni de Zaun. 
        Su adaptabilidad y minuciosidad hacen que vea la técnica descuidada como una humillación con la que hay que terminar. 
        Camille es Dotada de una mente tan aguda como las hojas que esgrime, 
        ha emprendido una búsqueda de la perfección a través de las mejoras hextech a las que se ha sometido, 
        mejoras que han llevado a muchos a preguntarse si no será más máquina que mujer.</p>
    </div>
   
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Fin carrusel-->

    <section class="principal">
       