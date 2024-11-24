<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Mi pag web personal::</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section id="home">
        <div class="contenido">
            <header>
                <a href="#" class="logo"><i class='bx bx-code-alt'></i>Logo</a>
                <nav class="navbar">
                    <a href="#home" class="active">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#services">SERVICES</a>
                    <a href="#skills">SKILLS</a>
                    <a href="#contactus">CONTACT US</a>
                </nav>
                <div class="icons">
                    <i class='#' id="#"></i>
                    <a href="#" class="bx  bxl-linkedin"></a>
                    <a href="#" class="bx bxl-github"></a>
                    <a href="#" class="bx bxl-whatsapp"></a>
                </div>
            </header>
            <div class="presentacion">
                <p class="mensaje">Bienvenidos</p>
                <h2>Soy <span>Hernando Zambrano</span> Ingeniero de sistemas</h2>
                <p class="descripciom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aliquid exercitationem, 
                    adipisci tempore assumenda atque, veritatis veniam animi facere quaerat quam quasi harum, eum voluptate repellendus 
                    tenetur ipsum officiis rem.</p>
                <a href="#services">Mi Experiencia</a>    
            </div>
        </div>
    </section>
    <section id="about">
        <div class="foto">
            <img src="./public/image/hernando.jpg" alt="Foto de perfil">
        </div>
        <div class="info_sobreMi">
            <p class="titulo">Quien soy?</p>
            <h2>Soy, <span>Hernando Zambrano</span></h2>
            <h3>Slogan</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus harum ex a sunt facere ea eveniet maxime modi 
                at commodi ratione amet ut explicabo ipsa, iusto autem possimus ab similique.</p>
        </div>

    </section>
    <section id="services">
        <p class="titulo">Mis Servicios</p>
        <div class="row">
            <div class="servicio">
                <span class="icon"><i class="bx bx-code-alt"></i></span>
                <h3>Desarrollo de software</h3>
                <ul>
                    <li>Desktop</li>
                    <li>Mobile</li>
                    <li>Web</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum debitis fugiat sequi commodi quos tempora 
                    consequuntur vero vel, quas at id exercitationem pariatur aliquam ipsum eos adipisci assumenda illum? Illum? </p>
            </div>
            <div class="servicio">
                <span class="icon"><i class="bx bx-code-alt"></i></span>
                <h3>Desarrollo de software</h3>
                <ul>
                    <li>Desktop</li>
                    <li>Mobile</li>
                    <li>Web</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum debitis fugiat sequi commodi quos tempora 
                    consequuntur vero vel, quas at id exercitationem pariatur aliquam ipsum eos adipisci assumenda illum? Illum? </p>
            </div>            <div class="servicio">
                <span class="icon"><i class="bx bx-code-alt"></i></span>
                <h3>Desarrollo de software</h3>
                <ul>
                    <li>Desktop</li>
                    <li>Mobile</li>
                    <li>Web</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum debitis fugiat sequi commodi quos tempora 
                    consequuntur vero vel, quas at id exercitationem pariatur aliquam ipsum eos adipisci assumenda illum? Illum? </p>
            </div>
        </div>
    </section>
    <section id="experience">
        <p class="titulo">Mi Experiencia</p>
        <div class="contenedor-experiencia">
         
        </div>
    </section>
    <section id="studies">
        <p class="titulo">Mis Estudios</p>
        <div class="contenedor-estudios">
        
        </div>
    </section>


    <section id="skills" class="contenedor-skills">
        <p class="titulo">MIS FORTALEZAS</p>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>HTML</p>
                <span class="porcentaje">80%</span>
            </div>
            <div class="barra">
                <div id="html" class="barra-progreso_html"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>CSS</p>
                <span class="porcentaje">75%</span>
            </div>
            <div class="barra">
                <div id="css" class="barra-progreso_css"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>JS</p>
                <span class="porcentaje">55%</span>
            </div>
            <div class="barra">
                <div id="js" class=""></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>PYTHON</p>
                <span class="porcentaje">80%</span>
            </div>
            <div class="barra">
                <div id="python" class=""></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>MySQL</p>
                <span class="porcentaje">60%</span>
            </div>
            <div class="barra">
                <div id="mysql" class=""></div>
            </div>
        </div>
    </section>
    <section id="contactus">
        <p class="titulo">CONTACTENOS</p>
        <form action="">
        <div class="input">
                    <span>NOMBRES Y APELLIDOS</span>
                    <input type="text" placeholder="Nombres y Apellidos">
                </div>
                <div class="input">
                    <span>NUMERO DE CONTACTO</span>
                    <input type="number" placeholder="(+57) 313 769 9271">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>ASUNTO DEL MENSAJE</span>
                    <input type="text" placeholder="Solicitud, Queja, Reclamos, Felicitaciones">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>COMENTARIOS</span>
                    <textarea name="" placeholder="Ingrese el comentario que desea transmitir" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
                    <span>COMENTARIOS</span>
                    <textarea name="" placeholder="Ingrese el comentario que desea transmitir" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="action">
                <input type="submit" value="Enviar" class="btn">
            </div>
            

        </form>
        <div class="contact-container">
          
            <div class="contact-card">
                <i class='bx bx-envelope contact-card-icon'></i>
                <h3 class="contact-card-title">Email</h3>
                <span class="contact-card-data">hernandozambrano@gmail.com</span>
            </div>

            <div class="contact-card">
                <i class='bx bxl-whatsapp contact-card-icon'></i>
                <h3 class="contact-card-title">Whatsapp</h3>
                <span class="contact-card-data">(+57) 3137699271</span>
            </div>

            <div class="contact-card">
                <i class='bx bxs-phone-call contact-card-icon'></i>
                <h3 class="contact-card-title">Celular</h3>
                <span class="contact-card-data">(+57) 3137699271</span>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-text">
            <p>Hernando Zambrano</p>
        </div>
        <div class="footer_icon">
            <a href="#"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>
    <script src="./public/js/main.js"></script>
</body>
</html> 