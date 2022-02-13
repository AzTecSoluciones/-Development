    
    <footer>
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class= "separador"> | </span>'
            );

            wp_nav_menu($args);
        ?> 

        <div class="ubicacion">
                <p>San Luis Potosi Service Center, # 10700, Colonia La Raza </p>
                <p>Teléfono: (+52) 444 854 54 98</p>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> </p>
    </footer>
    
    
    <?php wp_footer();?>

</body>
</html>
