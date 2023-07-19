<style>
    .cor_titulo{
        color: #ffffff; /* Define a cor do texto como branco */
        background-color: #5F8575; /* Define a cor de fundo como #198754 */
    }

    .icone {
        width: 50px; /* Defina a largura desejada */
        height: auto; /* A altura será ajustada proporcionalmente */
    }

    .navbar {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4); /* Adiciona uma sombra na parte de baixo do menu */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-color" style="background-color: #5F8575;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="cor_titulo"><img src="img/logo.png" alt="Ícone" class="icone"><b> Pesquisa Eleitoral</b></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php session_start(); ?>
            </ul>
        </div>
    </div>
</nav>