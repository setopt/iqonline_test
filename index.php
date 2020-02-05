<html lang="ru">
    <head>
        <title>Вклады</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/script.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#date" ).datepicker({
                    dateFormat: 'dd.mm.yy',
                } );
            } );
            $(function(){
                $( "#slider_sum" ).slider({
                    classes:{
                        "ui-slider": "slider"
                    },
                    min: 1000,
                    max: 3000000,
                    value: 1000,
                    step:1000,
                    slide: function( event, ui ) {
                        $( "#sum" ).val(  ui.value  );
                    }
                });

                $( "#sum" ).val( $( "#slider_sum" ).slider( 'value' ));

            });
            $(function(){
                $( "#slider_summadd" ).slider({
                    classes:{
                        "ui-slider": "slider"
                    },
                    min: 1000,
                    max: 3000000,
                    value: 1000,
                    step:1000,
                    slide: function( event, ui ) {
                        $( "#summadd" ).val(  ui.value  );
                    }
                });
                $( "#summadd" ).val( $( "#slider_summadd" ).slider( 'value' ));

            });
        </script>
    </head>
    <body>
        <div class ='container'>
            <header class="navbar-expand-lg">
                <div class="logo">
                    <img src = "images/logo.jpg" alt="Логотип">
                    <div class = "numbers">
                        <p>8-800-100-5005</p>
                        <p>+7 (3452) 522-000</p>
                    </div>
                </div>
                <div class="navbar justify-content-md-center header-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href = "#">Кредитные карты</a></li>
                        <li class="nav-item active"><a href = "#">Вклады</a></li>
                        <li class="nav-item"><a href = "#">Дебетовая карта</a></li>
                        <li class="nav-item"><a href = "#">Страхование</a></li>
                        <li class="nav-item"><a href = "#">Друзья</a></li>
                        <li class="nav-item"><a href = "#">Интернет-банк</a></li>
                    </ul>
                </div>
            </header>
            <ol class="breadcrumb">
                <li><a href="#">Главная</a> - </li>
                <li><a href="#">Вклады</a> - </li>
                <li class="active">Калькулятор</li>
            </ol>

            <div class="calc card">

                <form class="calc_form">
                    <h2>Калькулятор</h2>
                    <div>
                        <label for="date">Дата оформления вклада</label>
                        <input id ='date' type="text" name="date" >
                    </div>
                    <div>
                        <label for="sum">Сумма вклада</label>
                        <input type="number" id ='sum' name="sum" min ='1000' max='3000000' step='1000' onkeypress="return false">
                        <div id="slider_sum"><span>1 тыс. руб</span><span>3 000 000</span></div>
                    </div>
                    <div>
                        <label for ="term">Срок вклада</label>
                        <select id="term" name ="term">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="radio_group">
                        <label>Пополнение вклада</label>
                        <div>
                            <label>Нет
                                    <input name ="deposit_fill" type="radio" value="no" checked>
                            </label>
                            <label>Да
                                    <input name ="deposit_fill" type="radio" value="yes">
                            </label>
                        </div>
                    </div>


                    <div>
                        <label for="summadd">Сумма пополнения вклада</label>
                        <input type="number" id="summadd" name="summadd" min ='1000' max='3000000' step='1000' onkeypress="return false">
                        <div id="slider_summadd"><span>1 тыс. руб</span><span>3 000 000</span></div>
                    </div>
                    <div class="result_group">
                        <button type="button" class="btn" id="calc_res">Расчитать</button>
                        <p><span style="color:#687c43;">Результат:</span> <span id="result"></span></p>
                    </div>
                </form>
            </div>
        </div>
        <footer class="page-footer font-small">
            <div class="container">
                <div>
                    <ul class="navbar-footer">
                        <li class="nav-item"><a href = "#">Кредитные карты</a></li>
                        <li class="nav-item active"><a href = "#">Вклады</a></li>
                        <li class="nav-item"><a href = "#">Дебетовая карта</a></li>
                        <li class="nav-item"><a href = "#">Страхование</a></li>
                        <li class="nav-item"><a href = "#">Друзья</a></li>
                        <li class="nav-item"><a href = "#">Интернет-банк</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </body>
</html>