<footer id="piePagina">
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        
        <?php 
          if($logueado){
          ?>  
            <li><a href="perfil.html">Mi Perfil</a></li>);
            <?php
            } else{
            ?>
            <li><a href="login.html">Login</a></li>
            <li><a href="registro.html">Registrate</a></li> 
          <?php 
          }
          ?>
        
        <li><a href="login.html">Login</a></li>
      </ul>
</footer>