<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Mon PortFolio</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row bandeau">
                <div class="col-2">
                    <img src="../E-Portfolio/images/fading-logo.png" height="40px" alt="" />
                </div>
                <div class="col-6">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home
                                        <!-- <span class="sr-only">(current)</span> -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#competences">Compétences</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row banniere">
                <!-- <div class="logo">
            <img src="../E-Portfolio/images/fading-logo2.png" alt="" />
          </div> -->
                <div class="title"></div>
                <img src="../E-Portfolio/images/realistic-workplace.webp" alt="" />
            </div>
        </header>
        <section>
            <article>
                <h2 id="services">MES SERVICES</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                    porttitor hendrerit nibh non ultricies. Phasellus eu condimentum
                    odio. Proin in magna vel dui semper elementum. Donec pulvinar nibh
                    vel nisl varius vehicula. Sed efficitur, augue vel consectetur
                    sollicitudin, ipsum dui interdum justo, vitae porta arcu diam ut
                    leo. Morbi lorem massa, sollicitudin quis nunc id, vestibulum
                    tincidunt mauris. Curabitur quis nisl sit amet nisi bibendum porta
                    sit amet scelerisque elit.
                    <br />
                    Maecenas elementum mauris vitae arcu mollis, sed interdum erat
                    porttitor. Aliquam sit amet urna interdum arcu interdum dictum vitae
                    sit amet purus. Mauris aliquam mauris ante, nec faucibus lectus
                    tempus vitae. Nunc nisi est, scelerisque non accumsan vel, tristique
                    quis turpis. In non sem rutrum, luctus nisi vel, efficitur arcu.
                    Pellentesque et sem risus. Nulla erat orci, luctus et scelerisque
                    id, elementum vel lectus. Donec eleifend molestie egestas. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit.
                    <br />
                    Cras eu quam vitae nulla tempor varius. Aenean eget mauris
                    fringilla, eleifend nisi sed, luctus purus. Nunc ante metus,
                    convallis id augue et, lacinia finibus nulla. Sed at facilisis
                    tortor. Nam a nulla tortor. Aliquam vel risus mi. Morbi pretium
                    tellus arcu, vel lobortis leo pharetra sed. Maecenas venenatis velit
                    vel lectus maximus mattis. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. In eros mauris,
                    tincidunt vel magna eu, tristique rhoncus dui. Etiam porttitor erat
                    eget lorem hendrerit commodo. Aenean condimentum, lorem quis blandit
                    imperdiet, est felis rhoncus lacus, sit amet sodales risus leo eu
                    ante. Pellentesque et aliquet ipsum.
                </p>
            </article>

            <article>
                <div class="row">
                    <div class="col">
                        <h2 id="competences">MES COMPETENCES</h2>
                    </div>
                </div>
                <aside class="row">
                    <?php
                    include_once 'tableau_evolution/valeur.php';
                    include 'tableau_evolution/aside_frontEnd.php';
                    include 'tableau_evolution/aside_backEnd.php';
                    ?>

                    <h5 class="row justify-content-center">LEGENDE</h5>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                    0%
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <!-- ----------- -->
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    25%
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    50%
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    75%
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    100%
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                </aside>
            </article>
        </section>
        <footer id="contact">
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Fluid jumbotron</h1>
                            <p class="lead">
                                This is a modified jumbotron that occupies the entire
                                horizontal space of its parent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>

</html>