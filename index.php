<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="NxtLvl" />
        <title>Elle Style Coach</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favico.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/media-styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-0" id="mainNav">
            <!-- <div class="col-12 w-100 d-flex justify-content-between position-absolute fixed-top navtop">
                <span>hola@ellestylecoach.com</span>
                <span class="d-flex justify-content-around align-items-center">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp"></i>
                </span>
            </div> -->
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase w-100 d-flex justify-content-between align-items-center">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sobremi">Sobre Mi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#asesorias">Asesorias</a></li>
                        <li class="nav-item">
                        	<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">Productos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#testimonios">Testimonios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead position-relative">
            <img src="assets/img/logo.svg" alt="logo" class="w-25 position-absolute b-0 l-0">
            <span class="marcellus position-absolute b-0 r-0 slogan">
                <span>Guapa</span> 
                <span>todos</span> 
                <span>los dias</span>
            </span>
        </header>
        <!-- Ebook -->
        <section class="page-section p-0" id="ebook">
            <div class="container-fluid mx-0 px-0">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/img/imageEbook.png" alt="imageEbook" class="img-fluid imageEbook">
                    </div>
                    <div class="col-sm-4 ebookText">
                        <span id="title1">Descarga mi ebook</span> <span id="title2">"Guapa todos los dias"</span>
                    </div>
                    <div class="col-sm-4" id="ebookDiv">
                        <form id="ebookForm" novalidate="novalidate" class="my-5 w-90">
                            <div class="form-group">
                                <input class="form-control" id="nameEbook" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Ingrese su nombre." >
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="emailEbook" type="text" placeholder="Correo Electronico *" required="required" data-validation-required-message="Ingrese su correo.">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-block text-uppercase" id="insertClientButton" type="submit">ENVIAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sobre Mi -->
        <section class="page-section p-0 my-5" id="sobremi">
            <div class="container-fluid mx-0 px-0">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre Mi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6"><img src="assets/img/aboutMe.jpg" alt="imageAboutMe" class="img-fluid"></div>
                    <div class="col-lg-6 aboutMe">
                        <p>
                            Soy <strong>Elle</strong>, <strong>coach de estilo</strong> y me dedico a ayudar a las mujeres a desarrollar su <strong>estilo personal</strong> para lograr independencia personal y profesional por medio de la auto confianza y el bienestar.
                        </p>
                        <p id="phrase">
                        	FRASE
                        </p>
                        <p id="phraseP">
                            <strong>
                                "DESCUBRE QUIEN ERES PARA CREAR EL ÉXITO A TU MEDIDA"
                                <p id="notColor">
                                    ---- SI NO ESTAS OBSESIONADA CON TU VIDA ENTONCES CAMBIALA ----
                                </p>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section p-5 my-5" id="miporque">
        	<div class="container-fluid mx-0 px-0">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase textWhite">Mi Porque</h2>
                </div>
            </div>
            <div class="row miporqueText">
            	<p>
				    Desde que tengo uso de razón me he sentido conectada con la belleza sin estridencias y en esa búsqueda me prepare en sus diferentes áreas, incluyendo el mejoramiento físico y la belleza interna, por lo que he decidido usar mi preparación para ayudar a otras mujeres a encaminarse en la búsqueda de su independencia a través de la motivación, la auto confianza y el bienestar, guiándolas en la estructura de una imagen personal que la respalde en la consecusión de sus metas.
				</p>
            </div>
        </section>
        <!-- Asesorias-->
        <section class="page-section p-0 my-5" id="asesorias">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Asesorias</h2>
                </div>
                <div class="row text-center">
                    <!-- <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                        <span class="asesorias">
                            <img src="assets/img/ll.svg" alt="Ellestylemechellange">
                        </span>
                        <h4 class="my-3">Ellestylemechellange</h4>
                        <p class="text-muted"><span>Es un reto de transformación de imagen en un mes para mujeres que quieren sentirse más seguras, empoderarse a través de la imagen, para lograr sus metas personales.</span></p>
                        <a class="btn btn-primary btn-block" data-toggle="modal" href="#ellestyle">Ver Más</a>
                    </div> -->
                    <div class="col-md-12 d-flex justify-content-center align-items-center flex-column">
                        <span class="asesorias">
                            <img src="assets/img/ds.svg" alt="imagenatumedida">
                        </span>
                        <h4 class="my-3">Diseña tu imagen a tu medida</h4>
                        <p class="text-muted">
                            <span>
                                <p>Quieres asesorarte en ciertos puntos que te ayudarán a potenciar tu imagen personal? </p>
                                <p>Te sientes segura contigo misma, pero hay ciertas cosas que desconoces acerca de la imagen y te gustaría apréndelas para dominar tu esencia personal?  O por el contrario te falta un poco de seguridad y no logras tus objetivos por falta de confianza y compromiso? </p>
                                <p>Te guiare en cada aspecto que necesites para lograr una imagen a tu medida acá te explico lo que lograrás con cada uno de nuestros asesoramientos por detallado.</p>
                            </span>
                        </p>
                        <a class="btn btn-primary btn-block" href="diseno.php">Ver Más</a>
                    </div>
               	</div>
            </div>
        </section>
        <!-- Productos-->
        <section class="page-section p-0 my-5" id="productos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Productos</h2>
                </div>
                <!-- <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Testimonios-->
        <section class="page-section py-5 m-0" id="testimonios">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase textWhite">Testimonios</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12" id="testimonialsCarousel">
                        <div>
                            <img src="assets/img/testimonios/karlameneses-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Karla Meneses
                            </h2>
                            <p class="text-center">
                                "Elle! mi vida muchas gracias, Amo tu trabajo, eres súper profesional, tienes los mejores productos, eres la mejor energía me siento feliz por el cambio tan hermoso que logras en mi mirada, es una bendición contar con personas como TU 🙌 gracias Elenny."
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/kellyherrera-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Kelly Herrera
                            </h2>
                            <p class="text-center">
                                "Conocer a Elenny como mi instructora de Pole dance en el 2014 cambio mi vida por completo. Ella es la una Diosa empoderada de si misma y su seguridad. Su influencia despertó mi pasión por el Pole dance y por la feminidad que tenía dormida en un mundo tan competitivo donde me había olvidado de que ser mujer es uno de mis súper poderes 👠🌹. Aún ella es un icono en mi vida que representa la abundancia y  la feminidad 🛍👡👑"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/darling-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Darling Rodriguez
                            </h2>
                            <p class="text-center">
                                "Elenny, para mi fue una experiencia brutal.. ver cómo me veía tan HERMOSA, que resaltaban mis ojos y siempre verme como que si estuviese maquillada ,que con solo un maquillaje sencillo y rápido me viera súper WOW ! fue genial... Incluso fuiste la que me dio confianza de colocármelas! ya que No todo el mundo sabe hacerlo... Pero contigo fue diferente, Gracias por eso 🥰😘"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/danielaramirez-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Daniela Ramírez
                            </h2>
                            <p class="text-center">
                                "Mis inicios con las pestañas fue contigo , desde entonces no he encontrado una mejor que tú .. Realzaste mi mirada! Por eso siempre donde estés te busco te persigo jajaja Porq no hay otra igual! Eres tan delicada , perfeccionista y eso me encanta .. Realizas un excelente trabajo y por supuesto con los mejores materiales , material de calidad y eso habla por si solo.. Yo lo admito no puedo vivir sin mis pestañas .. Es un accesorio más que en mi no puede faltar! ME ENCANTAN!!"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/lannyespinal-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Lany Espinal
                            </h2>
                            <p class="text-center">
                                "Elleeeee bella si eres lo máximo !! Quedé fascinada con lo que me hiciste !! Con muchas ganas de hacerlo nuevamente, desearía lucir así para siempre jejeje 🤩"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/carolinarojas-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Carolina Rojas
                            </h2>
                            <p class="text-center">
                                "Elenny, estoy muy agradecida por tus excelente servicios. La verdad excelente persona y con mucha paciencia para enseñar tu profesión! Desde el  principio supe que no sería fácil pero me diste esperanzas y motivación para seguir aprendiendo y dar un pasó más en el mundo de la belleza, muy espléndido tu trabajo! Tus teoría muy claras, hubo muchos retos, pero siempre brindando confianza y motivación para aprender y ser una profesional como TÚ! me has dejado mucha experiencia y conocimientos y con más ganas de continuar en el fascinante mundo de la belleza!"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/honadiaz-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Hona Díaz
                            </h2>
                            <p class="text-center">
                                "Elle! la mejor !!! Con esa capacidad para despertar entusiasmo,   motivación y transformando desde adentro hacia afuera y siempre innovando!!! Bella amiga y sencillamente excelente 😘❤️"
                            </p>
                        </div>
                        <div>
                            <img src="assets/img/testimonios/NhabylaGreige-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Nhabyla Greige
                            </h2>
                            <p class="text-center">
                                "Hola bella! Un trabajo impecable, altamente capacitada y preparada y amable atención. 😘😘😘"
                            </p>
                        </div><div>
                            <img src="assets/img/testimonios/faltanombre-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                ...
                            </h2>
                            <p class="text-center">
                                "Mi testimonio es genuino, gracias al trabajo impecable que has realizado en las oportunidades que hemos tenido no sólo con la extensión de las pestañas sino con el lifting. Tú profesionalismo siempre a la vanguardia de la excelencia y por ende los productos que usas para trabajar. Muchas gracias por ofrecer tan  extraordinario servicio. Ha sido una grata experiencia. Sin duda eres una referencia local importante."
                            </p>
                        </div><div>
                            <img src="assets/img/testimonios/MarthaNunez-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Martha Núñez
                            </h2>
                            <p class="text-center">
                                "Querida Elle Me siento super afortunada de haberte conocido porque más allá de ser la persona ideal para el cuidado de mis Cejas y pestañas donde  deposito toda mi confianza en tus manos porque Con un mucho profesionalismo realizas un trabajo impecable , detallista , con materiales de primera calidad y siempre me dejas una Sonrisa dibujada en la Cara satisfecha por los resultados naturales  delicados que tanto me gustan, puedo agregar que eres una maestra para explicar y asesorar en este tema. Por otro lado debo resaltar que eres una mujer fabulosa por dentro y por fuera en todos los aspectos. Gracias por tu dedicación y que ese rato  Que voy para allá me la paso increíble ... Besitos"
                            </p>
                        </div><div>
                            <img src="assets/img/testimonios/IreneRosales-min.jpeg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Irene Rosales
                            </h2>
                            <p class="text-center">
                                "Elenny Tu curso de Maquillaje fue genial. Contigo aprendí a maquillarme y cuidar mi piel antes y después del maquillaje. También me coloqué las extensiones de pestañas y me encantaron! muy naturales. Repetiría sin duda alguna. La mejor. Me encantaría tenerte aquí en Espana amiga. Muchísima suerte."
                            </p>
                        </div><div>
                            <img src="assets/img/testimonios/testi.jpg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                Shirley Marcano
                            </h2>
                            <p class="text-center">
                                "Elenny hermosa, eres la única persona el cual puedo confiarle mis pestañas, haces magia con ellas y permites que mi mirada sea otra. Haces de lo corriente, perfección. No hay palabras que puedan definir lo increíble que eres en tu labor, dedicada,apasionada, y sobre todo muy responsable! como persona excelente. Tu atención, la mejorrrr, por eso me complace ser tu clienta, y me haría las pestañas contigo una y otra vez. 🙏"
                            </p>
                        </div><div>
                            <img src="assets/img/testimonios/testi2.jpg" class="img-fluid testimonialsImg" alt="testimonios">
                            <h2>
                                ...
                            </h2>
                            <p class="text-center">
                                "Elenny maneja con profesionalismo y calidad la técnica del embellecimiento de la mirada. Explora constantemente nuevas y mejores formas de empoderar la belleza de lo femenino."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contacto-->
        <section class="page-section py-3 m-0" id="contacto">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contacto</h2>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Telefono *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Development by © Nxt Lvl 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Politica de Privacidad</a></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/slick.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>