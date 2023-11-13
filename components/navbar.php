<nav>
    <div class="searchContainer hide">
        <div class="searchBox">
            <input type="text" name="search" spellcheck="false" class="search" placeholder="Artistas, canciones..">
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    <div class="logo-container">
        <img src="./images/users/default.png" alt="" class="logo">
        <ul class="logo-links">
            <h3><?php echo $username; ?></h3>
            <?php if ($authenticated) : ?>
                <!-- Agregar el enlace de "Editar Perfil" aquí también -->
                <li><a href="./auth/editarperfil.php">Editar Perfil</a></li>

                <li><a href="./auth/logout.php">Cerrar Sesión</a></li>

                <?php if ($admin) : ?>
                    <li><a href="./auth/adminDashboard.php">Panel De Administración</a></li>
                <?php endif; ?>
            <?php else : ?>
                <li><a href="./auth/login.php">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>