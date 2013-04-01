</div> <!-- Termina el contenedor de arriba -->

    <div class="fondogris">
    	<div class="container">

		<!-- Cambia -->
        <div class="two columns menudeabajo">
          <h6 style="text-transform:uppercase;">Giorgio Diputado</h6>
          <ul>
            <li class="remove-bottom"><a href="<?php echo get_page_link(5); ?>">En Primera Persona</a></li>
            <!-- <li class="remove-bottom">Equipo</li> -->
            <li class="remove-bottom"><a href="<?php echo get_page_link(79); ?>">Testimonios</a></li>
          </ul>
        </div>
        <div class="two columns menudeabajo">
          <h6 style="text-transform:uppercase;">Programa</h6>
          <ul>
            <li class="remove-bottom"><a href="<?php echo get_page_link(78); ?>">Diálogos ciudadanos</a></li>
          </ul>
        </div>
        <!-- <div class="two columns menudeabajo">
          <h6 style="text-transform:uppercase;">Transparencia </h6>
          <ul>
          	<li class="remove-bottom">Declaración de patrimonio e impuestos</li>
          </ul>
        </div> -->
        <div class="two columns menudeabajo">
          <h6 style="text-transform:uppercase;">Participa</h6>
          <ul>
            <li class="remove-bottom"><a href="<?php echo get_page_link(83); ?>">Actualiza tu domicilio</a></li>
            <!-- <li class="remove-bottom">Preguntas frecuentes</li>
            <li class="remove-bottom">Difunde</li> -->
            <li class="remove-bottom"><a href="<?php echo get_page_link(81); ?>">Quiero ser voluntario</a></li>
          </ul>
        </div>
        <div class="two columns menudeabajo">
		</div>

		<!-- Se queda -->
        <div class="one-third column contenidofijo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/footer.png" alt="Giorgio Jackson, diputado x Stgo Centro" style="margin:20px 0 5px 0;"><br /><img src="<?php echo get_template_directory_uri(); ?>/img/botonesderedes.png" alt="Giorgio Jackson, diputado x Stgo Centro" width="180" height="40" usemap="#RedesFooter" border="0">
          <map name="RedesFooter" id="RedesFooter">
            <area shape="circle" coords="54,20,16" href="http://www.facebook.com/giorgiodiputado" target="_blank" alt="Facebook" />
            <area shape="circle" coords="90,20,16" href="http://twitter.com/equipojackson" target="_blank" alt="Twitter" />
            <area shape="circle" coords="126,20,16" href="http://instagram.com/giorgiodiputado" target="_blank" alt="Instagram" />
          </map>
        </div>
      </div><!-- /container -->
	</div><!-- /fondogris -->



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
	
    <!-- Bootstrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>

    
	<!-- jQuery CDN Failsafe to CloudFlare CDN -->
	<script>window.jQuery || document.write('<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"><\/script>');</script>
	
	<!-- Google Analytics -->
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38373118-1']);
  _gaq.push(['_setDomainName', 'giorgiojackson.cl']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    
    
  

	<?php wp_footer(); ?>

</body>
</html>