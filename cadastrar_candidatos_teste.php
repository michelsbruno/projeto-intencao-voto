<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
    <meta name="author" content="Ansonika">
    <title>Cadastro de Candidatos</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

    <title><?php echo $language["Login"]; ?> Artur / Bruno</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

    <div class="fixed-top" style="top: 10px; left: 20px;">
        <a href="home.php" class="btn btn-danger d-inline-block">SAIR</a>
    </div>


</head>

<body>
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-1 mb-md-1 text-center">
                                    <!-- <a href="index.php" class="d-block auth-logo"> -->
                                        <img src="img/logo_candidato.png" alt="" height="28">
                                    <!-- </a> -->
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Cadastro de Candidatos</h5>
                                        <p class="text-muted mt-2">Preencha as informações abaixo:</p>
                                    </div>
                                    <form class="needs-validation custom-form mt-4 pt-2" action="cadastro_candidatos.php" method="post">
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- <label for="dt_nascimento">Data de Nascimento</label> -->
                                                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                        
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="estado">Estado</label>
                                                    <?php
                                                    // Conexão com o banco de dados
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "projeto_titulo_eleitoral";

                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                                                    // Consulta para obter as cidades com seus nomes completos
                                                    $query = "SELECT estado.id_estado, CONCAT(nome_estado, ' (', id_estado, ')') as nome_completo FROM estado
                                                              ORDER BY nome_completo";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->execute();


                                                    // Preencher o campo ListBox com as cidades
                                                    echo "<select name='estado' id='estado' onchange='habilitarCidade()' class='form-control' required >";
                                                    echo "<option value=''>Selecione um estado</option>"; // Opção vazia
                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        $id_estado = $row['id_estado'];
                                                        $nome_estado = $row['nome_completo'];
                                                        echo "<option value='$id_estado'>" . htmlspecialchars($nome_estado) . "</option>";

                                                    }
                                                    echo "</select>";
                                                    // Fechar a conexão com o banco de dados
                                                    $conn = null;
                                                    ?>

                                                <script>
                                                  var cidadesPorEstado = {
                                                    AC: ["Brasileia" ,"Capixaba" ,"Cruzeiro do Sul" ,"Feijó" ,"Plácido de Castro","Rio Branco" ,"Sena Madureira" ,"Senador Guiomard" ,"Tarauacá" ,"Xapuri"],
                                                    AL: ["Arapiraca", "Coruripe", "Delmiro Gouveia", "Maceió", "Marechal Deodoro", "Palmeira dos Índios", "Penedo", "Rio Largo", "São Miguel dos Campos", "União dos Palmares"],
                                                    AM: ["Coari","Humaitá","Itacoatiara","Manacapuru","Manaus","Maués","Parintins","São Gabriel da Cachoeira","Tabatinga","Tefé"],
                                                    AP: ["Amapá","Laranjal do Jari","Macapá","Mazagão","Oiapoque","Pedra Branca do Amapari","Porto Grande","Santana","Tartarugalzinho","Vitória do Jari"],
                                                    BA: ["Alagoinhas","Camaçari","Feira de Santana","Ilhéus","Itabuna","Jequié","Juazeiro","Lauro de Freitas","Salvador","Vitória da Conquista"],
                                                    CE: ["Caucaia","Crato","Fortaleza","Iguatu","Itapipoca","Juazeiro do Norte","Maracanaú","Maranguape","Quixadá","Sobral"],
                                                    DF: ["Brasília","Ceilândia","Gama","Paranoá","Planaltina","Recanto das Emas","Samambaia","Santa Maria","Sobradinho","Taguatinga"],
                                                    ES: ["Aracruz","Cachoeiro de Itapemirim","Cariacica","Colatina","Guarapari","Linhares","São Mateus","Serra","Vila Velha","Vitória"],
                                                    GO: ["Águas Lindas de Goiás","Anápolis","Aparecida de Goiânia","Formosa","Goiânia","Luziânia","Novo Gama","Rio Verde","Trindade","Valparaíso de Goiás"],
                                                    MA: ["Açailândia","Bacabal","Balsas","Caxias","Codó","Imperatriz","Paço do Lumiar","São José de Ribamar","São Luís","Timon"],
                                                    MG: ["Belo Horizonte","Betim","Contagem","Governador Valadares","Ipatinga","Juiz de Fora","Montes Claros","Ribeirão das Neves","Uberaba","Uberlândia"],
                                                    MS: ["Aquidauana","Campo Grande","Campo Verde","Corumbá","Dourados","Naviraí","Nova Andradina","Ponta Porã","Sidrolândia","Três Lagoas"],
                                                    MT: ["Barra do Garças","Cáceres","Cuiabá","Lucas do Rio Verde","Primavera do Leste","Rondonópolis","Sinop","Sorriso","Tangará da Serra","Várzea Grande"],
                                                    PA: ["Abaetetuba","Ananindeua","Belém","Bragança","Cametá","Castanhal","Marabá","Marituba","Parauapebas","Santarém"],
                                                    PB: ["Bayeux","Cabedelo","Cajazeiras","Campina Grande","Guarabira","João Pessoa","Patos","Santa Rita","Sapé","Sousa"],
                                                    PE: ["Cabo de Santo Agostinho","Camaragibe","Caruaru","Garanhuns","Jaboatão dos Guararapes","Olinda","Paulista","Petrolina","Recife","Vitória de Santo Antão"],
                                                    PI: ["Altos","Barras","Campo Maior","Esperantina","Floriano","Parnaíba","Picos","Piripiri","Teresina","União"],
                                                    PR: ["Cascavel","Colombo","Curitiba","Foz do Iguaçu","Guarapuava","Londrina","Maringá","Paranaguá","Ponta Grossa","São José dos Pinhais"],
                                                    RJ: ["Belford Roxo","Campos dos Goytacazes","Duque de Caxias","Niterói","Nova Iguaçu","Petrópolis","Rio de Janeiro","São Gonçalo","São João de Meriti","Volta Redonda"],
                                                    RN: ["Assu","Caicó","Ceará-Mirim","Currais Novos","Macaíba","Mossoró","Natal","Parnamirim","Santa Cruz","São Gonçalo do Amarante"],
                                                    RO: ["Ariquemes","Cacoal","Guajará-Mirim","Jaru","Ji-Paraná","Ouro Preto do Oeste","Pimenta Bueno","Porto Velho","Rolim de Moura","Vilhena"],
                                                    RR: ["Amajari","Boa Vista","Bonfim","Cantá","Caracaraí","Mucajaí","Normandia","Pacaraima","Rorainópolis","São João da Baliza"],
                                                    RS: ["Canoas","Caxias do Sul","Gravataí","Novo Hamburgo","Pelotas","Porto Alegre","Rio Grande","Santa Maria","São Leopoldo","Viamão"],
                                                    SC: ["Blumenau","Chapecó","Criciúma","Florianópolis","Itajaí","Jaraguá do Sul","Joinville","Lages","Palhoça","São José"],
                                                    SE: ["Aracaju","Estância","Glória","Itabaiana","Itabaianinha","Lagarto","Nossa Senhora do Socorro","São Cristóvão","Simão Dias","Tobias Barreto"],
                                                    SP: ["Campinas","Guarulhos","Mauá","Osasco","Ribeirão Preto","Santo André","Santos","São Bernardo do Campo","São Paulo","Sorocaba"],
                                                    TO: ["Araguaína","Colinas do Tocantins","Formoso do Araguaia","Guaraí","Gurupi","Miracema do Tocantins","Palmas","Paraíso do Tocantins","Porto Nacional","Taguatinga"]
                                                 
                                                    // adicione mais estados e suas cidades correspondentes
                                                  };
                                              
                                                  function habilitarCidade() {
                                                    var estadoSelect = document.getElementById("estado");
                                                    var cidadeSelect = document.getElementById("cidade");

                                                    var estadoSelecionado = estadoSelect.value;
                                                    var cidades = cidadesPorEstado[estadoSelecionado];

                                                    // Limpar as opções atuais da lista de cidades
                                                    cidadeSelect.innerHTML = "";

                                                    // Adicionar as opções de cidades correspondentes ao estado selecionado
                                                    if (estadoSelecionado !== "") {
                                                      cidadeSelect.disabled = false;
                                                      for (var i = 0; i < cidades.length; i++) {
                                                        var option = document.createElement("option");
                                                        option.value = cidades[i];
                                                        option.text = cidades[i];
                                                        cidadeSelect.appendChild(option);
                                                      }
                                                    } else {
                                                      cidadeSelect.disabled = true;
                                                    }
                                                  }
                                                </script>

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="cidade">Cidade</label>
                                                    <?php
                                                    // Conexão com o banco de dados
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "projeto_titulo_eleitoral";

                                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                                                    // Consulta para obter as cidades com seus nomes completos
                                                    $query = "SELECT cidade.id_cidade, CONCAT(nome_cidade, ' (', nome_estado, ')') as nome_completo FROM cidade
                                                              INNER JOIN estado ON cidade.id_estado = estado.id_estado
                                                              ORDER BY nome_completo";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->execute();


                                                    // Preencher o campo ListBox com as cidades
                                                    echo "<select name='cidade' id='cidade' class='form-control' required disabled>";
                                                    echo "<option value=''>Selecione uma cidade</option>"; // Opção vazia
                                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        $id_cidade = $row['id_cidade'];
                                                        $nome_cidade = $row['nome_completo'];
                                                        echo "<option value='$id_cidade'>" . htmlspecialchars($nome_cidade) . "</option>";

                                                    }
                                                    echo "</select>";

                                                    // Fechar a conexão com o banco de dados
                                                    $conn = null;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="id_partido">Partido</label>
                                                        <?php
                                                        // Conexão com o banco de dados
                                                        $servername = "localhost";
                                                        $username = "root";
                                                        $password = "";
                                                        $dbname = "projeto_titulo_eleitoral";

                                                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                                                        // Consulta para obter os partidos
                                                        $query = "SELECT nm_partido FROM partido";
                                                        $stmt = $conn->prepare($query);
                                                        $stmt->execute();

                                                        // Preencher o campo ListBox com os partidos
                                                        echo "<select name='partido' class='form-control' required>";
                                                        echo "<option value=''>Selecione um partido</option>"; // Opção vazia
                                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                            $partido = $row['nm_partido'];
                                                            echo "<option value='$partido'>$partido</option>";
                                                        }
                                                        echo "</select>";

                                                        // Fechar a conexão com o banco de dados
                                                        $conn = null;
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="id_funcao">Cargo</label>
                                                        <select name="id_funcao" class="form-control" required>
                                                            <option value="">Selecione um cargo</option>
                                                            <option value="1">Prefeito</option>
                                                            <option value="2">Governador</option>
                                                            <option value="3">Presidente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /step-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-success btn-rounded" id="btn_submit">CADASTRAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /form -->
                                </div>
                                <!-- /auth-content -->
                            </div>
                            <!-- /flex-column -->
                        </div>
                        <!-- /w-100 -->
                    </div>
                    <!-- /auth-full-page-content -->
                </div>
                <!-- /col-xxl-3 col-lg-4 col-md-5 -->
                <div class="col-xxl-9 col-lg-8 col-md-7 d-none d-md-block">
                    <div class="auth-bg">
                        <div class="authentication-bg-overlay"></div>
                    </div>
                </div>
                <!-- /col-xxl-9 col-lg-8 col-md-7 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->
    </div>
    <!-- /auth-page -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- YOUR CUSTOM JS -->
    <script src="js/custom.js"></script>

</body>

</html>
