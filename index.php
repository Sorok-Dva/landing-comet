<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="description" content="Comet, une solution simple et transparente pour vous faciliter la vie."/>
            <meta name="author" content="Llyam Garcia, Comet Yolo"/>
            <meta name="keywords" content="Comet"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="icon" type="image/x-icon" href="https://s3.eu-west-2.amazonaws.com/comet-assets/CO_yellow.png"
                  sizes="16x16">
            <link rel="icon" type="image/x-icon" href="https://s3.eu-west-2.amazonaws.com/comet-assets/CO_yellow.png"
                  sizes="32x32">
            <link rel="shortcut icon" type="image/x-icon" href="https://s3.eu-west-2.amazonaws.com/comet-assets/CO_yellow.png">

            <title>comet</title>
            <!-- meta facebook -->
            <meta property="og:type" content="website"/>
            <meta property="og:title" content="comet - la nouvelle manière de travailler tech/data">
            <meta property="og:description"
                  content="comet connecte les meilleurs freelances tech/data avec les entreprises les plus innovantes."/>
            <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/comet-assets/facebook_thumbnail.png"/>
            <meta property="og:url" content="https://www.hellocomet.co"/>
            <meta name="google-site-verification" content="tyyUOHqUeawLMCeyfRLjWDuO75EMRT_q1PHaeIS2FJY"/>
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="bogus"/>
            <link href="assets/css/helloComet-1536.css" rel="stylesheet" type="text/css" media="bogus"/>
            <link href="assets/css/helloComet-1536-responsive.css" rel="stylesheet" type="text/css" media="bogus"/>
        </head>


        <body id="background-landing">

            <a class="clicks1" target="_blank"
               href="https://s3.eu-west-2.amazonaws.com/comet-assets/Comet_Mentions+L%C3%A9gales.pdf" id="mention"
               style="bottom: 2rem;">MENTIONS LÉGALES</a>
            <a class="clicks" target="_blank" href="https://app.hellocomet.co/connexion_free" style="top: 3rem">
                <img src="https://s3.eu-west-2.amazonaws.com/comet-assets/Fichier1.svg" style="height:30px">
                CONNEXION </a>

            <div>
                <div class="container first-container" style="margin-top: 2rem;">
                    <div class="col-lg-6">
                        <img src="assets/images/svg/logo.svg" alt="Comet" class="logo">
                    </div>
                </div>


                <div class="container" style="padding-bottom: 6rem">
                    <h2 id="we-are-comet" class="col-lg-8">Nous sommes <b><u>comet</u></b>,
                        <br>la nouvelle manière
                        <br>de travailler en tech/data
                    </h2>

                    <div class="col-lg-12">
                        <img src="assets/images/svg/we-are-separator.svg" alt="separator" class="we-are-comet-separator">
                    </div>

                    <div id="presentation" class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <h3>
                            <b><u>comet</u></b> connecte les meilleurs freelances tech/data avec les entreprises les plus
                            innovantes.
                        </h3>
                    </div>

                    <div id="callActions" class="col-lg-8">
                        <div class="col-xs-12 col-sm-12 col-lg-5">
                            <div>
                                <img src="assets/images/svg/astronaut.svg" alt="Freelances" class="astronaut center hidden-xs">
                                <div id="freelances-text" class="center destination col-xs-12 col-sm-12 col-lg-12">Freelances</div>
                            </div>
                            <button id="freelancesActionButton" name="Freelance_Landing_Button"
                                    class="cta-button btn col-xs-12 col-sm-12 col-lg-12 center">
                                    <span class="center">
                                        Rejoindre Comet
                                        <img src="assets/images/left-arrow.png" alt="Rejoindre Comet" class="leftArrow">
                                    </span>
                            </button>
                        </div>
                        <hr class="hidden-lg col-xs-12 col-md-11">
                        <div class="col-xs-12 col-sm-12 col-lg-5">
                            <img src="assets/images/svg/planet.svg" alt="Freelances" class="planet center hidden-xs">
                            <div id="business-text" class="col-xs-12 destination col-sm-12 col-lg-12 center">Entreprises</div>
                            <button id="businessActionButton" name="Entreprise_Landing_Button"
                                    class="cta-button btn col-xs-12 col-sm-12 col-lg-12 center">
                                    <span class="center">
                                        Trouver un freelance
                                        <img src="assets/images/left-arrow.png" alt="Trouver un freelance" class="leftArrow">
                                    </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="toexport" class="hidden">
                <!-- hidden -->
                <div class="alert alerty alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <div class="container">
                        <div class=col-xs-12>
                            <span id="us" style="padding-left:2rem">skillee</span> décolle et devient <b><u>comet</u></b>. Découvrez
                            pourquoi dans <a target="_blank"
                                             href="https://newsroom.hellocomet.co/from-skillee-to-comet-814ca0b98657"> <strong>cet
                                    article.</strong></a>
                        </div>
                    </div>
                </div>
            </div>

            <script
                    src="https://code.jquery.com/jquery-3.2.1.min.js"
                    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                    crossorigin="anonymous"></script>
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/js/index.js" type="text/javascript"></script>
            <!-- tracking segment -->
            <script type="text/javascript">
                !function () {
                    var analytics = window.analytics = window.analytics || [];
                    if (!analytics.initialize)if (analytics.invoked) window.console && console.error && console.error("Segment snippet included twice."); else {
                        analytics.invoked = !0;
                        analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on"];
                        analytics.factory = function (t) {
                            return function () {
                                var e = Array.prototype.slice.call(arguments);
                                e.unshift(t);
                                analytics.push(e);
                                return analytics
                            }
                        };
                        for (var t = 0; t < analytics.methods.length; t++) {
                            var e = analytics.methods[t];
                            analytics[e] = analytics.factory(e)
                        }
                        analytics.load = function (t) {
                            var e = document.createElement("script");
                            e.type = "text/javascript";
                            e.async = !0;
                            e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";
                            var n = document.getElementsByTagName("script")[0];
                            n.parentNode.insertBefore(e, n)
                        };
                        analytics.SNIPPET_VERSION = "4.0.0";
                        analytics.load("7iOqS9L3PoyGRj04HhCqfZfkR7ofjIFV");
                        analytics.page({})
                        // { Intercom: { hideDefaultLauncher: true }}
                    }
                }();
                //         Hotjar Tracking Code for http://www.hellocomet.co
                (function (h, o, t, j, a, r) {
                    h.hj = h.hj || function () {
                            (h.hj.q = h.hj.q || []).push(arguments)
                        };
                    h._hjSettings = {hjid: 485099, hjsv: 5};
                    a = o.getElementsByTagName('head')[0];
                    r = o.createElement('script');
                    r.async = 1;
                    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                    a.appendChild(r);
                })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');

                if (location.protocol !== 'https:')
                    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);

                $('.cta-button').on('mouseover', function () {
                    $($(this).parent().find("img")[0]).addClass('floating');
                }).on('mouseout', function () {
                    $($(this).parent().find("img")[0]).removeClass('floating');
                })

                setTimeout(popup, 2000);

                function popup() {
                    $("#toexport").insertBefore("body").animate({opacity: 0.9}, 1500).fadeIn(2000).removeClass('hidden');
                    $(".first-container").css("margin-top", "-1rem");
                }
                $(".clicks").css('top', '10rem');
                $(document).on('click', '.close', function () {
                    $(".clicks").css('top', '3rem');
                })
                $(document).ready(function () {
                    var link_f = $('.cta-button');
                    $.each(link_f, function (index, value) {
                        if ($(value).attr('name').includes("Freelance")) {
                            var libel = 'Freelance_sign_up'
                        }
                        else {
                            var libel = 'Entreprise_sign_up'
                        }
                        analytics.trackLink($(value), 'Click_CTA', {
                            category: libel,
                            label: $(value).attr('name'),
                        });
                    });
                })
            </script>

            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="assets/css/helloComet-1536.css" rel="stylesheet" type="text/css"/>
            <link href="assets/css/helloComet-1536-responsive.css" rel="stylesheet" type="text/css"/>
        </body>
    </html>