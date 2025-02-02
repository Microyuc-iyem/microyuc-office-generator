<?php
require_once './config/db_connect.php';
require_once './includes/functions.php';

$sidebar_active = 'inicio';

$header_title = 'Inicio';

check_login();

require_once './includes/header.php';
?>
<div class="dashboard__home">
    <div class="dashboard__card">
        <h2 class="card__title">
            <svg xmlns="http://www.w3.org/2000/svg" class="card__icon" fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Cartas generadas
        </h2>
        <a href="cartas.php" class="card__number">
            <?php
            $dash_carta_query = "SELECT * FROM carta";
            $dash_carta_query_run = mysqli_query($conn, $dash_carta_query);

            if ($cartas_total = mysqli_num_rows($dash_carta_query_run)) {
                echo $cartas_total;
            } else {
                echo "Sin datos";
            }
            ?>
        </a>
    </div>
    <div class="dashboard__card">
        <h2 class="card__title">
            <svg xmlns="http://www.w3.org/2000/svg" class="card__icon" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Bitácoras generadas
        </h2>
        <a href="bitacoras.php" class="card__number">
            <?php
            $dash_bitacora_query = "SELECT * FROM bitacora";
            $dash_bitacora_query_run = mysqli_query($conn, $dash_bitacora_query);

            if ($bitacoras_total = mysqli_num_rows($dash_bitacora_query_run)) {
                echo $bitacoras_total;
            } else {
                echo "Sin datos";
            }
            ?>
        </a>
    </div>
</div>
</main>
</div>
</body>
</html>