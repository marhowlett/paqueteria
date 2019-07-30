<?php
    /* Template Name: Servicios */ 
    get_header();
?>
 <section id="servicio" class="template-section">

        <div class="contenedor">
<h2>Nuestros Servicios</h2>

            <div class="grid">

                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mensaje.png" alt="Logo">
                    
                </div>
                <div class="col prueba_col">
                    <h3 class="rojo">Mensajería</h3>
                    <p>Buscamos y entregamos tus documentos y paquetes <strong class="azul">varios municipios del Estado Morelos.</strong> En 2 modalidades <strong>mensajería eventual  y mensaría programada.</strong></p>
                </div>


            </div>
            
        </div>
       
    </section>
    <section id="mensaje" class="template-section">

        <div class="contenedor">

            <div class="grid">

                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box_white.png" alt="Logo">
                    <h3 class="rojo">Mensajería Eventual</h3>
                    <p>Garantizando su ejecución en tiempo y forma a través de personal altamente capacitado y confiable.</p>
                    
                </div>
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="Logo">
                    <h3 class="rojo">Mensajería Programada</h3>
                    <p>Ofrecemos paquetes de entregas con costo fijo mensual, adaptándonos a las necesidades de nuestros clientes. </p>
                    
                </div>

            </div>
            
        </div>
       
    </section>
        <section id="cobra" class="template-section">

        <div class="contenedor">

            <div class="grid">

                <div class="col ">
                   <h3 class="rojo">Cobranzas</h3>
                   <p>Contamos con un <strong class="azul">departamento especializado</strong> en gestión de cobranzas, una tarea extremadamente sensible en el circuito comercial de toda empresa.</p>
                   <p>Realizar una cobranza es una <strong class="azul">gestión</strong> que involucra varios documentos cuya incorrecta manipulación puede generar una serie de inconvenientes al departamento de finanzas y legales.</p>
                   <p>Nuestro departamento especializado en cobranzas realiza una <strong class="azul">gestión</strong> impecable, evitándole inconvenientes relacionados con la incorrecta manipulación de los documentos involucrados.</p>
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/104.png" alt="Logo">
                </div>
                <div class="col">
                    <div class="mod">
                        <p class="modali">Esta modalidad de Mensajería Programada puede ayudarlos <strong class="azul">reducir costos</strong>, cuando realizan varias entregas en un mes. <a href="https://enviospaqueteexpress.com/servicios-de-envios/#contacto"><strong>Contáctanos</strong></a> para obtener un paquete de entregas personalizado.</p>
                    </div>
                     <h3 class="rojo manda">Mandados</h3>
                   <p>Para <strong class="azul">ahorrarte</strong> tiempo y dinero realizamos cualquier tipo de mandado, objetos olvidados, compras y más, <a href="https://enviospaqueteexpress.com/servicios-de-envios/#contacto"><strong>contáctanos</strong></a> y te ayudaremos.  </p>
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/manda.png" alt="Logo">
                </div>

            </div>
            
        </div>
        <hr>
    </section>
<?php include 'contacto.php'; ?>
<?php 
    get_footer();
?>