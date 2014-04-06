<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Prueba</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

    </head>
    <body>
        <? /*
        <article>
        <h1>Resultados</h1>
        <p>Petiones 30 posts</p>
        
        <h2>Handlebars</h2>  
        <hr />
        <p>Pruebas en webwait. 10 llamadas cada 10 segundos: Media: 0.40, Mediana: 0.37, Desviación: 0.07</p>
        <p>Con el excerpt 0.40	0.38	0.04</p>
        <p>Pruebas en Chrome page load</p>
        
        <?php 
            $resultados = array(1.70, 1.10, 1.11, 1.46, 1.10, 1.07, 1.06, 1.22, 1.22, 1.17); 
            echo '<pre>' . print_r($resultados) . '</pre>';
            echo '<p>Media: ' . $average = array_sum($resultados) / count($resultados) . '</p>';
            
            $resultados = array(1.38, 1.29, 1.17, 1.15, 1.14, 1.11, 1.13, 1.12, 1.39, 1.13, 1.20, 1.16); 
            echo '<pre>' . print_r($resultados) . '</pre>';
            echo '<p>Media: ' . $average = array_sum($resultados) / count($resultados) . '</p>';
            
            $resultados = array(1.52, 1.24, 1.16, 1.26, 1.11, 1.11, 1.09, 1.09, 1.64, 1.12, 1.14, 1.09); 
            echo '<pre>' . print_r($resultados) . '</pre>';
            echo '<p>Precompiled: ' . $average = array_sum($resultados) / count($resultados) . '</p>';            
        
        ?>
        
        <h2>HTML</h2>  
        <hr />
        <p><strong>0.40	0.38 0.06</strong></p>
        <p>prueba con el excerpt 0.40	0.38	0.06</p>
        <p>Pruebas en Chrome page load</p>
        
        <?php 
            $resultados = array(1.76, 1.12, 1.09, 1.15, 1.13, 1.07, 1.09, 1.09, 1.12); 
            echo '<pre>' . print_r($resultados) . '</pre>';
            echo '<p>Media: ' . $average = array_sum($resultados) / count($resultados) . '</p>';
            
            $resultados = array(1.32, 1.15, 1.24, 1.20, 1.15, 1.19, 1.16, 1.17, 1.18, 1.23, 1.17, 1.20); 
            echo '<pre>' . print_r($resultados) . '</pre>';
            echo '<p>Media: ' . $average = array_sum($resultados) / count($resultados) . '</p>';            
        
        ?>        
        
	    </article>
	    */ ?>

	    <div id="main"><!-- MAIN--></div>


	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/bower_components/handlebars/handlebars.runtime.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/post.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"><\/script>')</script>
	<script>window.ajaxUrl = "<?php echo get_template_directory_uri()?>/ajax.php";</script>
	<script src="<?php echo get_template_directory_uri()?>/app.js"></script>

    </body>
</html>