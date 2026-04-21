<head>
    <?php require_once(STATIC_PATH . 'colors.php') ?>
</head>


<style>
    /* Regras Gerais  */
    body {
        display: flex;
        gap: 10px;
        flex-direction: column;
    }

    /* FIM Regras Gerais */

    /* NAV BAR */
    #navbar {
        padding: 10px;
        background-color: var(--background-primary);
        --bs-navbar-color: var(--color-item);
    }

    #navbar .navbar-brand {
        color: var(--color-item) !important;
    }



    .nav-row {
        display: flex;
        gap: 5px;
    }
    

    /* FIM NAV BAR */

    .hero {
        background-color: var(--background-second);
        padding: 10px;
    }

    .container-lg {
        display: flex;
        flex-direction: column;
        gap: 20px;
        color: var(--item-teste);
    }
</style>