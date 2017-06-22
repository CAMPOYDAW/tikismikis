<div id="main-reservas">
    <div class="container">
        <div class="col-lg-6">
           <h2>Reserva Online</h2>
            <div class="row">
                <div class="col-lg-12">
                     <p>Un número de personas</p>
                </div>
                <div class="col-lg-12">
                    <div class="n_personas well">

                    <ul id="n_personas_list">
                        <li class="npl">
                            <button class="bot_n_personas">
                                1
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                2
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                3
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                4
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                5
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                6
                            </button>
                        </li>
                        <li class="npl">
                            <button class="bot_n_personas">
                                7
                            </button>
                        </li>
                    </ul>

                    <div id="more-pax-list">
                        <span>Solicitud para un grupo :</span>
                        <select ng-model="reservation.pax" ng-options="pax.nb_people as pax.nb_people for pax in paxSecondList" class="ng-pristine ng-valid">
                            <option value="" selected="selected"></option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <p>Seleccionar una fecha</p>
                    </div>
                    <div class="col-lg-12 well" id="calendario">

                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <p>Una hora</p>
                    </div>
                    <div class="col-lg-12 well" id="hora">
                        <div class="hora-content">
                            <div>
                               <div class="ng-scope">

                                    <h3 class="hora-subHead">Comida</h3>

                                    <ul class="hora_list">
                                        <li class="hora_li">
                                            <button class="bot_n_personas"> 13:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                14:00
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                14:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                15:00
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                15:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                16:00
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ng-scope">

                                    <h3 class="hora-subHead">Cena</h3>

                                    <ul class="hora_list">
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                20:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                21:00
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                21:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                22:00
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                22:30
                                            </button>
                                        </li>
                                        <li class="hora_li">
                                            <button class="bot_n_personas">
                                                23:00
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 well">
                <form method="POST" role="form" action="{{ url('reserva') }}" id="f_reserva" name="fr" onsubmit="return sbmt()">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="user_email" value="{{ Auth::user()->email }}">
                    <div class="row">
                        <div class="col-lg-12">
                            Reserva a nombre de : {{ Auth::user()->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            Comensales: <input type="text" name="comensales" id="comensales" value="" readonly>
                        </div>
                        <div class="col-xs-4">
                            Fecha: <input type="text" name="fecha" id="fecha" value="" readonly>
                        </div>
                        <div class="col-xs-4">
                            Hora: <input type="text" name="hora" id="hora" value="" readonly>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col-xs-12">
                            <button class="btn btn-group-justified btn-default sbmt" type="submit">Hacer reserva</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        </div>


        <div class="col-lg-6">

        </div>
    </div>
</div>