</div> <!-- Termina el contenedor de arriba -->

    <div class="fondogris">
    	<div class="container">
        <div class="two-thirds column" style="padding:30px 0;">
        <h5 style="text-transform:uppercase;"><?php bloginfo('description'); ?></h5></div>
        <div class="one-third column contenidofijo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/footer.png" alt="Giorgio Jackson, diputado x Stgo Centro" style="margin:20px 0 5px 0;"><br /><img src="<?php echo get_template_directory_uri(); ?>/img/botonesderedes.png" alt="Giorgio Jackson, diputado x Stgo Centro" width="180" height="40" usemap="#RedesFooter" border="0">
          <map name="RedesFooter" id="RedesFooter">
            <area shape="circle" coords="54,20,16" href="http://www.facebook.com/giorgiodiputado" target="_blank" alt="Facebook" />
            <area shape="circle" coords="90,20,16" href="http://twitter.com/equipojackson" target="_blank" alt="Twitter" />
            <area shape="circle" coords="126,20,16" href="http://instagram.com/giorgiodiputado" target="_blank" alt="Instagram" />
          </map>
        </div>
        <div class="two columns" style="height:150px;">
        &nbsp;</div>
        <div class="two columns" style="height:150px;">
          <h6 style="text-transform:uppercase;">Giorgio Diputado</h6>
          <ul>
            <li class="remove-bottom">Biografía</li>
            <li class="remove-bottom">Equipo</li>
            <li class="remove-bottom">Testimonios</li>
            <li class="remove-bottom">Noticias</li>
          </ul>
          </div>
        <div class="two columns" style="height:150px;">
          <h6 style="text-transform:uppercase;">Programa</h6>
          <ul>
            <li class="remove-bottom">Diálogos ciudadanos</li>
          </ul>
        </div>
        <div class="two columns" style="height:150px;">
        <h6 style="text-transform:uppercase;">Transparencia </h6>
        <ul>
          <li class="remove-bottom">Declaración de patrimonio e impuestos</li>
        </ul>
        </div>
        <div class="two columns" style="height:150px;">
          <h6 style="text-transform:uppercase;">Participa</h6>
          <ul>
            <li class="remove-bottom">Actualiza tu domicilio</li>
            <li class="remove-bottom">Preguntas frecuentes</li>
            <li class="remove-bottom">Difunde</li>
            <li class="remove-bottom">Quiero ser voluntario</li>
          </ul>
          </div>
        <div class="two columns" style="height:150px;">
        &nbsp;</div>
      </div>
	</div><!-- container -->



<!-- 
	<!-- Footer --
	<footer class="footer">
		
		<!-- Copyright --
		<p class="copyright">
			&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?> 
			<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
		</p>
		<!-- /Copyright --
		
	</footer>
	<!-- /Footer --
	
	</div>
	<!-- /Wrapper --
    -->
	
	<!-- jQuery CDN Failsafe to CloudFlare CDN -->
	<script>window.jQuery || document.write('<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"><\/script>');</script>
	
	<!-- Google Analytics -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src='//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)})(document,'script');
	</script>
	
	<?php wp_footer(); ?>

</body>
</html>