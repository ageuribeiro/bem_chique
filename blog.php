<?php
include_once("cabecalho.php");
require_once("conexao.php");
require_once("config.php");
?>
<body>
    <section>
        <div class="container">
            <main class="container">
                <div class="p-4 p-md-5 my-5 rounded text-body-emphasis bg-body-bemchique">
                    <div class="col-lg-6 px-0">
                        <?php
                        $query = $pdo->query("SELECT * FROM blog WHERE date = CURDATE() OR date = (SELECT MAX(date) FROM blog) ORDER BY id DESC LIMIT 1");
                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                        for ($i = 0; $i < count($res); $i++) {
                            foreach ($res[$i] as $key => $value) {
                            }


                            $title = $res[$i]['titulo'];
                            $subtitle = $res[$i]['subtitulo'];
                            $keywords = $res[$i]['keywords'];
                            $shorttext = $res[$i]['shorttext'];
                            $author = $res[$i]['author'];

                        ?>
                            <h1 class="display-4 fst-italic"><?php echo $title; ?></h1>
                            <p class="lead my-3"><?php echo $subtitle ?></p>
                            <p class="lead my-3"><?php echo $shorttext ?></p>
                            <small class=" small my-3 fst-italic">Por <?php echo $author; ?></small>
                            <p class=" mb-0"><a href="#blog-post" class="text-body-emphasis fw-bold">Continue lendo...</a></p>

                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static ">
                                <?php
                                $query = $pdo->query('SELECT * FROM blog WHERE categoria = "Mundo" AND (DATE = CURDATE() OR DATE = (SELECT MAX(date) FROM blog WHERE categoria = "Mundo"))');
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($res); $i++) {
                                    foreach ($res[$i] as $key => $value) {
                                    }

                                    $categoria = $res[$i]['categoria'];
                                    $title = $res[$i]['titulo'];
                                    $date = $res[$i]['date'];
                                    $content = $res[$i]['content'];
                                    $shorttext = $res[$i]['shorttext'];
                                    $author = $res[$i]['author'];
                                ?>

                                    <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $categoria ?></strong>
                                    <h3 class="mb-0"><?php echo $title ?></h3>
                                    <div class="mb-1 text-body-secondary"><?php echo $date; ?></div>
                                    <p class="card-text mb-auto two-lines post"><?php echo $shorttext; ?></p>
                                <?php
                                }
                                ?>
                                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue lendo
                                    <svg class="bi">
                                        <use xlink:href="#chevron-right" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                            <?php
                                $query = $pdo->query('SELECT * FROM blog WHERE categoria = "Design" AND (DATE = CURDATE() OR DATE = (SELECT MAX(date) FROM blog WHERE categoria = "Design"))');
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                for ($i = 0; $i < count($res); $i++) {
                                    foreach ($res[$i] as $key => $value) {
                                    }

                                    $categoria = $res[$i]['categoria'];
                                    $title = $res[$i]['titulo'];
                                    $date = $res[$i]['date'];
                                    $content = $res[$i]['content'];
                                    $shorttext = $res[$i]['shorttext'];
                                    $author = $res[$i]['author'];
                                ?>

                                    <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $categoria ?></strong>
                                    <h3 class="mb-0"><?php echo $title ?></h3>
                                    <div class="mb-1 text-body-secondary"><?php echo $date; ?></div>
                                    <p class="card-text mb-auto two-lines post"><?php echo $shorttext; ?></p>
                                <?php
                                }
                                ?>
                                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue lendo
                                    <svg class="bi">
                                        <use xlink:href="#chevron-right" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-md-8">

                        <article class="blog-post" id="blog-post">
                            <?php
                            // SELECT * FROM blog 
                            // SELECT * FROM blog WHERE date = CURDATE() OR date = (SELECT MAX(date) FROM blog) ORDER BY id DESC LIMIT 1
                            $query = $pdo->query("SELECT * FROM blog ");
                            $res = $query->fetchAll(PDO::FETCH_ASSOC);

                            for ($i = 0; $i < count($res); $i++) {
                                foreach ($res[$i] as $key => $value) {
                                }


                                $title = $res[$i]['titulo'];
                                $subtitle = $res[$i]['subtitulo'];
                                $keywords = $res[$i]['keywords'];
                                $content = $res[$i]['content'];
                                $author = $res[$i]['author'];
                                $date = $res[$i]['date'];
                                $url_article = $res[$i]['url_article'];

                            ?>
                                <h2 class="display-5 link-body-emphasis mb-1" id="<?php echo $url_article ?>"><?php echo $title ?></h2>
                                <p class="blog-post-meta"><?php echo $date ?> <a href="#"><?php echo $author ?></a></p>

                                <p> <code> <?php echo $keywords ?></code></p>
                                <hr>
                                <p> <?php echo $content ?></p>
                        <?php
                            }
                        ?>
                        </article>



                    </div>

                    <div class="col-md-4">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 bg-body-tertiary rounded">
                                <h4 class="fst-italic">Sobre</h4>
                                <p class="mb-0">A loja "Bem Chique" tem a missão de promover a moda com ética, valorizando clientes e colaboradores. Sua visão é ser uma marca distinta, oferecendo moda de alta qualidade com preços acessíveis e compromisso com a sustentabilidade. Seus valores incluem a valorização dos clientes e o enriquecimento de suas vidas com produtos exclusivos.</p>
                            </div>

                            <div>
                                <h4 class="fst-italic">Recent posts</h4>
                                <ul class="list-unstyled">
                                    <?php
                                        //SELECT * FROM blog ORDER BY data_publicacao DESC LIMIT 3;
                                        $query = $pdo->query("SELECT * FROM blog ORDER BY date DESC LIMIT 3");
                                        $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                        for ($i = 0; $i < count($res); $i++) {
                                            foreach ($res[$i] as $key => $value) {
                                            }
                                            $title = $res[$i]['titulo'];
                                            $date = $res[$i]['date'];
                                            $url_article = $res[$i]['url_article'];

                                            $formattedDate = date("F j, Y", strtotime($date));

                                    ?>
                                    <li>
                                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#<?php echo $url_article?>">
                                            <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <rect width="100%" height="100%" fill="#777" />
                                            </svg>
                                            <div class="col-lg-8">
                                                <h6 class="mb-0"><?php echo $title ?></h6>
                                                <small class="text-body-secondary"><?php echo $formattedDate ?></small>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="p-4">
                                <h4 class="fst-italic">Redes Sociais</h4>
                                <ol class="list-unstyled">
                                    <li><a href="<?php echo $instagram ?>">Instagram</a></li>
                                    <li><a href="<?php echo $facebook?>">Facebook</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </section>
    <section id="rodape">
        <?php
        require_once("rodape.php");
        ?>
    </section>
    <script src="js/script.js"></script>
</body>