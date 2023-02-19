<!DOCTYPE html>
<html class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>OFFICIAL_BINS</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="vertical-layout" style="background-color:#1E1E1E;" data-color="bg-gradient-x-purple-blue">
    <style>
        h5,
        h4 {
            color: white;
        }

        .text-center {
            background-color: #0e0e0e;
            border: 1px solid #525252;
            border-radius: 5px;
        }

        textarea {
            color: white;
            resize: none;
        }

        .text-center::placeholder {
            color: white;
        }

        .text-center:focus {
            background-color: #0e0e0e;
        }

        textarea::-webkit-scrollbar {
            width: 5px;
            background-color: #112132;
        }

        textarea::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #2e4964;
        }

        .lista_reprovadass {
            color: #747474;
        }

        .card-body {
            background-color: #000000;
            border-radius: 5px;
        }

        .text-center {
            border: none;
        }

        .badge-success,
        .btn-success {
            background-color: #ffe74c;
            color: black;
            border: none;
        }

        .btn-success:hover {
            background-color: #c9b63c;
            border: none;
            color: black;
            shadow: hidden;
        }

        .aprovadas {
            background-color: #35a7ff;
            color: black;
        }

        .badge-danger {
            background-color: #ff5964;
            color: black;
        }

        .html body .content .content-wrapper {
            background-color: #112132;
        }

        .btn-bg-gradient {
            background-image: linear-gradient(to right, #FF8008 0%, #FFC837 51%, #FF8008 100%);
            margin: 5px;
            width: 49%;
            padding: 12px 40px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
            -webkit-box-shadow: 0 0 0 0 #514a9d;
        }

        .btn-bg-gradient:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }

        .btn-bg-gradient-x {
            background-image: linear-gradient(to right, #ee0979 0%, #ff6a00 51%, #ee0979 100%);
            margin: 5px;
            padding: 12px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
            -webkit-box-shadow: 0 0 0 0 #514a9d;
        }

        .btn-bg-gradient-x:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }

        .statusbar {
            height: 320px;
            padding-top: 50px;
        }

        .hr-statusbar {
            border: none;
            height: 1px;
            background-color: #3c5c7c;
        }
    </style>

    <body class="vertical-layout" data-color="bg-gradient-x-purple-blue">
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-wrapper-before mb-3">
                </div>
                <div class="content-body">
                    <div class="mt-2"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="mb-2"><strong>OFFICIAL_BINS</strong></h4>

                                    <textarea rows="8" class="form-control text-center form-checker mb-2" placeholder="ENTER YOUR CARDS HERE"></textarea>
                                    <textarea rows="1" class="form-control text-center" style="width: 100%; float: right margin-bottom: 5px;" id="cst" placeholder="CUSTOM AMOUNT [ OPTIONAL ]"></textarea><br>
                                    <select name="gate" id="gate" class="form-control" style="margin-bottom: 5px;" <option </option>
	            <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1.php">STRIPE CHARGE : $1</option>
                <option style="background:rgba(16, 15, 154, 0.281);color:rgb(25, 208, 1);color:white" value="gate/eur1.php">STRIPE CHARGE : €1</option>
</select>
                                    <br>
                                    <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i> START</button>
                                    <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i> STOP</button>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">

                                    <a style="display:block;font-size:16px;font-weight:500;text-align:center;border-radius:8px;padding:5px;background:#389ce9;text-decoration:none;color:#fff;" href="https://telegram.me/Official_Bins" target="_blank"><svg style="width:30px;height:20px;vertical-align:middle;margin:0px 5px;" viewBox="0 0 21 18"><g fill="none"><path fill="#ffffff" d="M0.554,7.092 L19.117,0.078 C19.737,-0.156 20.429,0.156 20.663,0.776 C20.745,0.994 20.763,1.23 20.713,1.457 L17.513,16.059 C17.351,16.799 16.62,17.268 15.88,17.105 C15.696,17.065 15.523,16.987 15.37,16.877 L8.997,12.271 C8.614,11.994 8.527,11.458 8.805,11.074 C8.835,11.033 8.869,10.994 8.905,10.958 L15.458,4.661 C15.594,4.53 15.598,4.313 15.467,4.176 C15.354,4.059 15.174,4.037 15.036,4.125 L6.104,9.795 C5.575,10.131 4.922,10.207 4.329,10.002 L0.577,8.704 C0.13,8.55 -0.107,8.061 0.047,7.614 C0.131,7.374 0.316,7.182 0.554,7.092 Z"></path></g></svg>Join Us For Updates - @Official_Bins</a>


                                    <h5>TOTAL<span class="badge badge-primary float-right carregadas">0</span></h5>
                                    <hr>

                                    <h5>CHARGED<span class="badge badge-success float-right charge">0</span></h5>
                                    <hr>

                                    <h5>CVV<span class="badge badge-success float-right cvvs">0</span></h5>
                                    <hr>

                                    <h5>CCN<span class="badge badge-success float-right aprovadas">0</span></h5>
                                    <hr>

                                    <h5>DEAD<span class="badge badge-danger float-right reprovadas">0</span></h5>
                                    <hr>

                                    <h5>LIMIT<span class="badge badge-success float-right">5000</span></h5>




                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
                                        <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>
                                    </div>
                                    <h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>
                                    <div id='lista_charge'></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <button type="show" class="btn btn-primary btn-sm show-live"><i class="fa fa-eye-slash"></i></button>
                                        <button class="btn btn-success btn-sm btn-copy2"><i class="fa fa-copy"></i></button>
                                    </div>
                                    <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV</h4>
                                    <div id='lista_cvvs'></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
                                        <button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>
                                    </div>
                                    <h4 class="card-title mb-1"><i class="fa fa-times text-success"></i> CCN</h4>
                                    <div id='lista_aprovadas'></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED</h4>
                                    <div style='display: none;' id='lista_reprovadas'></div>
                                </div>
                            </div>
                        </div>

                        </section>
                    </div>
                </div>
            </div>

            <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

            <style>
                footer {
                    text-align: center;
                    padding: 3px;
                    background-color: #ffffff;
                    color: #000000;
                }
            </style>
            <script>
                $(document).ready(function() {

                    Swal.fire({
                        title: "OFFICIAL_BINS",
                        text: "TG - @OFFICIAL_BINS",
                        icon: "success",
                        timer: 1000,
                        confirmButtonText: "OK",
                        timer: 1000,
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary'
                    });

                    $('.show-charge').click(function() {
                        var type = $('.show-charge').attr('type');
                        $('#lista_charge').slideToggle();
                        if (type == 'show') {
                            $('.show-charge').html('<i class="fa fa-eye"></i>');
                            $('.show-charge').attr('type', 'hidden');
                        } else {
                            $('.show-charge').html('<i class="fa fa-eye-slash"></i>');
                            $('.show-charge').attr('type', 'show');
                        }
                    });

                    $('.show-live').click(function() {
                        var type = $('.show-live').attr('type');
                        $('#lista_cvvs').slideToggle();
                        if (type == 'show') {
                            $('.show-live').html('<i class="fa fa-eye"></i>');
                            $('.show-live').attr('type', 'hidden');
                        } else {
                            $('.show-live').html('<i class="fa fa-eye-slash"></i>');
                            $('.show-live').attr('type', 'show');
                        }
                    });

                    $('.show-lives').click(function() {
                        var type = $('.show-lives').attr('type');
                        $('#lista_aprovadas').slideToggle();
                        if (type == 'show') {
                            $('.show-lives').html('<i class="fa fa-eye"></i>');
                            $('.show-lives').attr('type', 'hidden');
                        } else {
                            $('.show-lives').html('<i class="fa fa-eye-slash"></i>');
                            $('.show-lives').attr('type', 'show');
                        }
                    });

                    $('.show-dies').click(function() {
                        var type = $('.show-dies').attr('type');
                        $('#lista_reprovadas').slideToggle();
                        if (type == 'show') {
                            $('.show-dies').html('<i class="fa fa-eye"></i>');
                            $('.show-dies').attr('type', 'hidden');
                        } else {
                            $('.show-dies').html('<i class="fa fa-eye-slash"></i>');
                            $('.show-dies').attr('type', 'show');
                        }
                    });

                    $('.btn-trash').click(function() {
                        Swal.fire({
                            title: 'REMOVED DEAD',
                            icon: 'success',
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end',
                            timer: 3000
                        });
                        $('#lista_reprovadas').text('');
                    });

                    $('.btn-copy1').click(function() {
                        Swal.fire({
                            title: 'COPIED CHARGED',
                            icon: 'success',
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end',
                            timer: 3000
                        });
                        var lista_charge = document.getElementById('lista_charge').innerText;
                        var textarea = document.createElement("textarea");
                        textarea.value = lista_charge;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);
                    });

                    $('.btn-copy2').click(function() {
                        Swal.fire({
                            title: 'COPIED CVV',
                            icon: 'success',
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end',
                            timer: 3000
                        });
                        var lista_live = document.getElementById('lista_cvvs').innerText;
                        var textarea = document.createElement("textarea");
                        textarea.value = lista_live;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);
                    });

                    $('.btn-copy').click(function() {
                        Swal.fire({
                            title: 'COPIED CCN',
                            icon: 'success',
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end',
                            timer: 3000
                        });
                        var lista_lives = document.getElementById('lista_aprovadas').innerText;
                        var textarea = document.createElement("textarea");
                        textarea.value = lista_lives;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);
                    });


                    $('.btn-play').click(function() {
                        var sec = $("#sec").val();
                        var cst = $("#cst").val();
                        var e = document.getElementById("gate");
                        var gate = e.options[e.selectedIndex].value;
                        var lista = $('.form-checker').val().trim();
                        var array = lista.split('\n');
                        var charge = 0,
                            live = 0,
                            lives = 0,
                            dies = 0,
                            testadas = 0,
                            txt = '';

                        if (!lista) {
                            Swal.fire({
                                title: 'You did not provide a card :(',
                                icon: 'error',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            return false;
                        }

                        Swal.fire({
                            title: 'Your cards are being checked...',
                            icon: 'success',
                            showConfirmButton: false,
                            toast: true,
                            position: 'top-end',
                            timer: 3000
                        });

                        var line = array.filter(function(value) {
                            if (value.trim() !== "") {
                                txt += value.trim() + '\n';
                                return value.trim();
                            }
                        });

                        /*
                        var line = array.filter(function(value){
                        return(value.trim() !== "");
                        });
                        */

                        var total = line.length;


                        /*
                        line.forEach(function(value){
                        txt += value + '\n';
                        });
                        */

                        $('.form-checker').val(txt.trim());
                        // ảo ma hả, đừng lấy code chứ !!
                        if (total > 5000) {
                            Swal.fire({
                                title: 'YOU CAN NOT PERFORM THAT ACTION: REDUCE NUMBER OF CARDS TO <4999',
                                icon: 'warning',
                                showConfirmButton: false,
                                toast: true,
                                position: 'top-end',
                                timer: 3000
                            });
                            return false;
                        }

                        $('.carregadas').text(total);
                        $('.btn-play').attr('disabled', true);
                        $('.btn-stop').attr('disabled', false);

                        line.forEach(function(data) {
                            var callBack = $.ajax({
                                url: gate + '?lista=' + data + '&sec=' + sec + '&cst=' + cst,
                                success: function(retorno) {
                                    if (retorno.indexOf("CHARGED") >= 0) {
                                        $('#lista_charge').append(retorno);
                                        removelinha();
                                        charge = charge + 1;
                                    } else if (retorno.indexOf("CVV") >= 0) {
                                        $('#lista_cvvs').append(retorno);
                                        removelinha();
                                        live = live + 1;
                                    } else if (retorno.indexOf("CCN") >= 0) {
                                        $('#lista_aprovadas').append(retorno);
                                        removelinha();
                                        lives = lives + 1;
                                    } else {
                                        $('#lista_reprovadas').append(retorno);
                                        removelinha();
                                        dies = dies + 1;
                                    }
                                    testadas = charge + live + lives + dies;
                                    $('.charge').text(charge);
                                    $('.cvvs').text(live);
                                    $('.aprovadas').text(lives);
                                    $('.reprovadas').text(dies);
                                    $('.testadas').text(testadas);

                                    if (testadas == total) {
                                        Swal.fire({
                                            title: 'ALL CARDS HAS BEEN CHECKED',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            toast: true,
                                            position: 'top-end',
                                            timer: 3000
                                        });
                                        $('.btn-play').attr('disabled', false);
                                        $('.btn-stop').attr('disabled', true);
                                    }
                                }
                            });
                            $('.btn-stop').click(function() {
                                Swal.fire({
                                    title: 'PAUSED',
                                    icon: 'warning',
                                    showConfirmButton: false,
                                    toast: true,
                                    position: 'top-end',
                                    timer: 3000
                                });
                                $('.btn-play').attr('disabled', false);
                                $('.btn-stop').attr('disabled', true);
                                callBack.abort();
                                return false;
                            });
                        });
                    });
                });

                function removelinha() {
                    var lines = $('.form-checker').val().split('\n');
                    lines.splice(0, 1);
                    $('.form-checker').val(lines.join("\n"));
                }
            </script>

    </body>

</html>