<?php
    /* Template Name: Inicio */ 
    get_header();
?>
<section id="slider" class="template-section">
          <div class="sli">
              <h1>¡No pierdas tiempo! <br>Nosotros lo llevamos...</h1>
              <p>Envia tus documentos y paquetes sin contratiempos <br>
en varios municipios del <strong>Estado de  Morelos</strong></p>
          <a href="#" class="btn">Ver tarifas</a>
    
          </div>
    </section>
  <section id="tarifas" class="template-section">

        <div class="contenedor">
<h2>Nuestros Servicios</h2>

            <div class="grid">

                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png" alt="Logo">
                    <h3>Mensajería</h3>
                    <p >Llevamos documentos y paquetes a <strong class="azul">varios municipios de Morelos.</strong> En 2 modalidades <strong class="azul">mensajería eventual</strong>  y <strong class="azul">mensajería programada</strong></p>
                    

                </div>
                <div class="col prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mandados.png" alt="Logo">
                    <h3>Mandados</h3>
                    <p>Realizamos cualquier tipo de mandado, objetos olvidados, compras y más <br> <strong>Contáctanos</strong></p>
                    <p></p>
                </div>


            </div>
            <div class="grid">

                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cobranza1.png" alt="Logo">
                    <h3>Cobranzas</h3>
                    <p>Le ayudamos a manipular correctamente los documentos involucrados en la cobranza, evitándole inconvenientes. <br><strong> Saber más </strong></p>

                </div>
                <div class="col prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tienda en linea.png" alt="Logo">
                    <h3>Ventas</h3>
                    <p>En nuestra tienda en línea te ofrecemos artículos de oficina y los llevamos gratis a cualquier municipio del Estado de Morelos <br><strong>Ver tienda</strong> </p>
                </div>


            </div>
        </div>
    </section>
    
      <section id="beneficios" class="template-section">

        <div class="contenedor">
<h2>Beneficios</h2>

            <div class="grid">

                <div class="col2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buscamos.png" alt="Logo">
                   <p class="bus">Buscamos y entregamos tu documento o paquete en varios municipios del Estado de Morelos</p> 

                </div>
                <div class="col2 prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiempo.png" alt="Logo">
                    <p>Tiempos de entrega menores 
a 2 horas. </p>
                </div>
                <div class="col2 prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/seguridad.png" alt="Logo">
                    <p>Seguridad y confianza de que tu paquete llegará de manera puntual</p>
                </div>


            </div>
            <div class="grid">

                <div class="col2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/costos.png" alt="Logo">
                    <p>Costos más accesibles</p>

                </div>
                <div class="col2 prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/men.png" alt="Logo">
                    <p>Mensajería programada a la medida de nuestros clientes frecuentes</p>
                </div>

            <div class="col2 prueba_col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Transportador.png" alt="Logo">
                    
                   <p>Cobertura en varios municipios
del Estado de Morelos</p>
                </div>

            </div>
        </div>
    </section>
    
    <section id="zona" class="template-section">
          <h2>Zona de Cobertura</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Zona 3.png" alt="Logo">
          <div class="center"> <a href="#" class="btn">Ver tarifas por Zona</a></div>
    </section>
       <section id="tienda" class="template-section">
         <hr>
          <h2>Nuestra Tienda</h2>
         
    </section>
     <section id="pagar" class="template-section">
          <h2>¿Cómo pagar?</h2>
          
              <p>1. Por adelantado a través de tu carrito de compras<br>
              2. Al momento de la entrega: EFECTIVO o TARJETA</p>
         
    </section>
    <section id="servicio" class="template-section">

        <div class="contenedor">


            <div class="grid">

                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/PAKETEXPRESS.png" alt="Logo">
                    
                </div>
                <div class="col prueba_col">
                    <p>Paquete Express es un servicio de envíos que resuelve las  necesidades de mensajería,  mandados  y cobranzas para personas, e-commerce, empresas y negocios en Morelos, México. </p>
                     <a href="#" class="btn">Saber más</a>
                </div>


            </div>
            
        </div>
        <hr>
    </section>
    <?php include 'contacto.php'; ?>
<?php 
    get_footer();
?>