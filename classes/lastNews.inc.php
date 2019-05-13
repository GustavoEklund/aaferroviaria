<!-- Start Title -->
<section class="row w-100 mt-5">
    <div class="container-fluid ml-5">
        <h1 class="font-weight-bold text-uppercase"><i class="far fa-newspaper"></i> Últimas notícias</h1>
    </div>
</section>
<!-- End Title -->
<!-- Start News -->
<section class="container-fluid mt-4 d-flex">
    <section class="col-md-8 col-sm-12">
        <?php
        // Connect to database aaferroviaria
        include_once('classes/connect.inc.php');
        try {
            // Try to query news decreasing order and limit of 3 posts
            $getNews = $connect->prepare('
                                                select tbl_news.nwsId, nwsShortTitle, nwsTitle, nwsDate, nwsSmallImage 
                                                from aaferroviaria.tbl_news
                                                order by date(nwsDate)
                                                desc
                                                limit 3
                                            ');
            $getNews->execute();
            /* Index menu:
             * nwsId - 0
             * nwsShortTitle - 1
             * nwsTitle - 2
             * nwsDate - 3
             * nwsSmallImage - 4
             */
            // For each post, show his content on html
            foreach ($getNews as $show) {
                ?>
                <div class="card mb-3 px-0 border-0 shadow">
                    <a href="noticia?n=<?php echo $show[0]; ?>" class="text-decoration-none">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-3">
                                <img class="card-img-horizontal" src="uploads/<?php echo $show[4]; ?>" alt="<?php echo $show[1]; ?>">
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-9">
                                <div class="card-body">
                                    <h5 class="card-title text-dark text-uppercase font-weight-bold"><?php echo $show[1]; ?></h5>
                                    <p class="card-text"><?php echo $show[2]; ?></p>
                                    <br>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php
                                            // Transform date in array
                                            $date = explode('-', $show[3]);

                                            // Transform number in name of month
                                            switch ($date[1]) {
                                                case 1:
                                                    $date[1] = 'janeiro';
                                                    break;
                                                case 2:
                                                    $date[1] = 'fevereiro';
                                                    break;
                                                case 3:
                                                    $date[1] = 'março';
                                                    break;
                                                case 4:
                                                    $date[1] = 'abril';
                                                    break;
                                                case 5:
                                                    $date[1] = 'maio';
                                                    break;
                                                case 6:
                                                    $date[1] = 'junho';
                                                    break;
                                                case 7:
                                                    $date[1] = 'julho';
                                                    break;
                                                case 8:
                                                    $date[1] = 'agosto';
                                                    break;
                                                case 9:
                                                    $date[1] = 'setembro';
                                                    break;
                                                case 10:
                                                    $date[1] = 'outubro';
                                                    break;
                                                case 11:
                                                    $date[1] = 'novembro';
                                                    break;
                                                case 12:
                                                    $date[1] = 'dezembro';
                                                    break;
                                                default:
                                                    $date[1] = '???';
                                            }
                                            // Print date in brazilian form
                                            echo $date[2].' de '.$date[1].' de '.$date[0];
                                            ?>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
        } catch (PDOException $error) {
            // If it give some error, show it on screen
            echo $error;
        }
        ?>
    </section>
</section>
<!-- End News -->