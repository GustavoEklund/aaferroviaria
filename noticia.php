<?php
    // Connect to database aaferroviaria
    include_once('classes/connect.inc.php');
    try {
        // Try to query news from id from url param
        $id = $_GET['n'];
        $getNews = $connect->prepare('
            select tbl_news.nwsId, nwsShortTitle, nwsTitle, nwsContent, nwsDate, nwsMainImage, nwsImages 
            from aaferroviaria.tbl_news where nwsId=:getId
        ');
        $getNews->bindParam('getId', $id, PDO::PARAM_INT);
        $getNews->execute();
        // Tetch objects to $show array
        $show = $getNews->fetchObject();

        /* Objects:
         * nwsId
         * nwsShortTitle
         * nwsTitle
         * nwsContent
         * nwsDate
         * nwsMainImage
         * nwsImages
         */
    } catch (PDOException $error) {
        // If it give some error, show it on screen
        echo $error;
    }

    if (!empty($show)) {
        $title = $show->nwsShortTitle . ' - Associação Atlética Ferroviária - Pindamonhangaba';
        include_once 'classes/head.inc.php';
?>
        <!-- Start News Title -->
        <section class="row w-100 mt-10">
            <div class="container-fluid ml-5">
                <h1 class="font-weight-bold text-uppercase"><?php echo $show->nwsTitle; ?></h1>
                <p class="text-muted">
                    Publicado dia
<?php
                    // Transform date in array
                    $date = explode('-', $show->nwsDate);

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
                    // Print date in brazilian format
                    echo $date[2] . ' de ' . $date[1] . ' de ' . $date[0];
?>
                </p>
            </div>
        </section>
        <!-- End News Title -->
        <!-- Start Main Content -->
        <main class="container-fluid mt-4 d-flex">
            <!-- Start News -->
            <section class="col-md-8 col-sm-12">
                <div class="card mb-3 px-0 border-0 shadow">
                    <img class="card-img-top" src="uploads/<?php echo $show->nwsMainImage; ?>" alt="<?php echo $show->nwsMainImage; ?>">
                    <div class="card-body">
                        <?php echo $show->nwsContent; ?>
                        <div class="row d-flex flex-wrap" id="image-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <?php
                                $images = explode(',', $show->nwsImages);
                                if (sizeof($images) > 1) {
                                    for ($i = 0; $i < sizeof($images); $i++) {
                            ?>
                                        <figure class="col-sm-4 col-md-3 col-lg-3 col-xl-3" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="uploads/<?php echo $images[$i]; ?>" itemprop="contentUrl" data-size="1024x600">
                                                <img src="uploads/<?php echo $images[$i]; ?>" itemprop="thumbnail" alt="<?php echo $show->nwsTitle; ?>" class="border-radius-10" style="max-width: 100%;">
                                            </a>
                                        </figure>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <!-- Start Pswp Image Viewer -->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="pswp__bg"></div> <!-- Background -->
                            <div class="pswp__scroll-wrap">
                                <!-- Start Slide Containers -->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <!-- End Slide Containers -->
                                <!-- Start Pswp Controls -->
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <div class="pswp__counter"></div>
                                        <button class="pswp__button pswp__button--close" title="Fechar (Esc)"></button>
                                        <button class="pswp__button pswp__button--share" title="Compartilhar / Baixar"></button>
                                        <button class="pswp__button pswp__button--fs" title="Tela cheia"></button>
                                        <button class="pswp__button pswp__button--zoom" title="Zoom +/-"></button>
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Anterior (seta esquerda)"></button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Próximo (seta direita)"></button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                    <!-- End Pswp Controls -->
                                </div>
                            </div>
                        </div>
                        <!-- End Pswp Image Viewer -->
                    </div>
                </div>
            </section>
            <!-- End News -->
<?php
    } else {
        $title = 'Nenhuma notícia encontrada - Associação Atlética Ferroviária - Pindamonhangaba';
        include_once 'classes/head.inc.php';
?>
        <section class="row w-100 mt-10">
            <div class="container-fluid ml-5">
                <h1 class="font-weight-bold text-uppercase">Nenhuma notícia encontrada</h1>
            </div>
        </section>
        <main class="container-fluid mt-4 d-flex">
        <!-- Start News -->
        <section class="col-md-8 col-sm-12">
            <div class="card mb-3 px-0 border-0 shadow">
                <div class="card-body">
                    <p class="card-text">Nenhum conteúdo encontrado.</p>
                </div>
            </div>
        </section>
        <!-- End News -->
<?php
    }

    include_once 'classes/trending.inc.php';
?>
        </main>
        <!-- End Main Content -->
<?php
    include_once 'classes/lastNews.inc.php';
    include_once 'classes/footer.inc.php';
?>
<script>
    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for(var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes
                if(figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };

                if(figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if(linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && ( fn(el) ? el : closest(el.parentNode, fn) );
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if(!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if(childNodes[i].nodeType !== 1) {
                    continue;
                }

                if(childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }



            if(index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe( index, clickedGallery );
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if(hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if(!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if(pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if(params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                }

            };

            // PhotoSwipe opened from URL
            if(fromURL) {
                if(options.galleryPIDs) {
                    // parse real index when custom PIDs are used
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for(var j = 0; j < items.length; j++) {
                        if(items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if(isNaN(options.index) ) {
                return;
            }

            if(disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll( gallerySelector );

        for(var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i+1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if(hashData.pid && hashData.gid) {
            openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
        }
    };

    // execute above function
    initPhotoSwipeFromDOM('#image-gallery');
</script>
