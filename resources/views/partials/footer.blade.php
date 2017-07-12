<div class="et_pb_section et_pb_section_parallax et_pb_fullwidth_section  et_pb_section_6 et_pb_with_background et_section_regular et_section_transparent">
    <div class="et_parallax_bg" >

    </div>

    <div class="et_pb_fullwidth_code et_pb_module  et_pb_fullwidth_code_6">
        <section class="consaltant"> <div class="container">
                <section id="gkBottom5">
                    <div class="gkCols6 gkPage">
                        <div class="box bigtitle negativemargin gkmod-1"><div class="content">

                                <div class="custom bigtitle negativemargin">

                                    <div class="gkColumns" data-cols="4">
                                        <div>
                                            <h3 style="color: #fff;">OPINIONES</h3>
                                            <ul>
                                                <li><a href="{{ C_TRIP }}" target="_blank"><i class="fa fa-tripadvisor fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>TRIPADVISOR<small>Opiniones de nuestro clientes</small></a></li>
                                                <li><a href="{{ C_FOURSQUARE }}" target="_blank"><i class="fa fa-foursquare fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>FOURSQUARE<small>Opiniones de nuestros clientes</small></a></li>

                                            </ul>
                                        </div>
                                        <div>
                                            <h3 style="color: #fff;">DIRECCIÓN</h3>
                                            <ul>
                                                <li><a href="{{ C_WEB }}"><i class="fa fa-home fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>{{ C_EMPRESA }}<small>{{ substr(C_WEB,7) }}</small></a></li>
                                                <li><a href="{{ C_MAPS }}" TARGET="_blank"><i class="fa fa-map-marker fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>{{ C_DIRECCION }}<small>{{ C_CP }} - {{ C_POBLACION }} [{{ C_PROVINCIA }}]</small></a></li>
                                                <li><a href="{{ url(Auth::user()?'/contacto':'/login-public') }}"><i class="fa fa-envelope fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>EMAIL<small>{{ C_EMAIL }}</small></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h3 style="color: #fff;">CONTACTO</h3>
                                            <ul>
                                                <li><a href="tel:{{ C_TFIJO }}"><i class="fa fa-phone-square fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i><strong>{{ C_TFIJO }}</strong><small>Teléfono fijo</small></a></li>
                                                <li><a href="tel:{{ C_TMOVIL }}"><i class="fa fa-mobile fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i><strong>{{ C_TMOVIL }}</strong><small>Teléfono móvil</small></a></li>
                                                <li><a href="{{ C_FACEBOOK }}" target="_blank"><i class="fa fa-facebook-square fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i><strong>{{ C_EMPRESA }}</strong><small>Facebook</small></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h3 style="color: #fff;">PRIVACIDAD</h3>
                                            <ul>
                                                <li><a href={{ url('/privacidad') }}><i class="fa fa-lock fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>Privacidad<small>Protección de datos</small></a></li>
                                                <li><a href="{{ url('/privacidad') }}"><i class="fa fa-code-fork fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>Cookies<small>Política de navegación</small></a></li>
                                                <li><a href="/sitemap.xml"><i class="fa fa-sitemap fa-fw" style="color: #fff; font-size: 24px; vertical-align: -20%;"></i>Mapa del sitio<small>Xmap</small></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                </section>
        </section>
    </div>
</div>
<section class="footer_main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div id="text-3" class="et_pb_widget widget_text">
                    <div class="textwidget">




                        <script>(function(){var js,fs,d=document,id="tars-widget-script",b="https://tars-file-upload.s3.amazonaws.com/share/";if(!d.getElementById(id)){js=d.createElement("script");js.id=id;js.type="text/javascript";js.src=b+"js/widget.js";fs=d.getElementsByTagName("script")[0];fs.parentNode.insertBefore(js,fs)}})();</script></div>
                </div> <!-- end .et_pb_widget -->
                <p class="footer-copy">© 2017 Antonio Campoy.</p>
            </div>

            <div class="col-xs-12 col-sm-4">
                <ul class="et-social-icons">

                    <li class="et-social-icon et-social-facebook">
                        <a href="{{ C_FACEBOOK }}" class="icon" target="_blank">
                            <i class="fa fa-facebook-square fa-fw" style="color: #fff;font-size: 24px;vertical-align: -20%;" data-original-title="" title=""></i>
                        </a>
                    </li>
                    <li class="et-social-icon et-social-google-plus">
                        <a href="{{ C_TWITTER }}" class="icon" target="_blank">
                            <i class="fa fa-twitter-square fa-fw" style="color: #fff;font-size: 24px;vertical-align: -20%;" data-original-title="" title=""></i>
                        </a>
                    </li>
                    <li class="et-social-icon et-social-rss">
                        <a href="{{ C_LINKEDIN }}" class="icon" target="_blank">
                            <i class="fa fa-linkedin-square fa-fw" style="color: #fff;font-size: 24px;vertical-align: -20%;" data-original-title="" title=""></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>