<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>JQUERY UYGULAMA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #F2F2F2;
        }

        .minboy {
            background-color: #FFF;
            min-height: 300px;
            border-radius: 10px;
            border: 1px solid #B8B8B8;

        }

        .bas {
            background-color: #B7B7B7;
            max-height: 40px;
            border-radius: 5px;


        }

        p {
            background: gold;
            padding: 10px;
        }
    </style>


    <script>
        $(document).ready(function(e) {

            // Karakter Saydırma
            $("#mesaj").on("keyup", function() {
                $("#yaz").html($(this).val().length);
            });

            // Sınırlı Karakter Saydırma
            $("#sinir").keypress(function() {
                var anlikdeger = $("#sinir").val();
                uzunluk = anlikdeger.length;
                sinir = 10;

                kalan = parseInt(sinir - uzunluk);
                $("#sinirsayisi").text(kalan);

                if (kalan <= 0) {
                    $("#sinir").val((anlikdeger).substring(0, uzunluk - 1));
                }
            });

            // anlık hesaplama
            $("#deger1").bind("input", function() {
                var gelendeger = $("#deger1").val();
                var gelendeger2 = $("#deger2").val();

                var toplamsayimiz = Number(gelendeger) + Number(gelendeger2);

                $("#toplamdeger").html(toplamsayimiz);

            });

            $("#deger2").bind("input", function() {
                var gelendeger = $("#deger1").val();
                var gelendeger2 = $("#deger2").val();

                var toplamsayimiz = Number(gelendeger) + Number(gelendeger2);

                $("#toplamdeger").html(toplamsayimiz);

            });

            // Load etme
            $("#yuklesin").click(function() {

                $("#yuklenecek").load("harici.php?sayfa=herseyloadicin");

            });

            // Div değiştirme
            $("#degistir").click(function() {
                if ($("#toplamdeger").text().trim() == "") {
                    var gelmisdeger = "Gelebilecek veri yok";

                } else {
                    var gelmisdeger = $("#toplamdeger").text();
                }

                $("#degistirdiv").html(gelmisdeger);

            });

            // Eleman Oluştur
            $("#olustur").click(function() {
                
                $("#elemantutucu").append('<input type="text" class="form-control mt-3">');
            });

            // Tıklama ile saklama
            $("#paragraftutucu p").click(function() {
                
                $(this).hide();

            });

        });
    </script>

</head>

<body>


    <div class="container-fluid">
        <div class="row bg-dark text-center text-warning">
            <div class="col-lg-12">
                <h2>JQUERY İLE ETKİLEŞİM ÖRNEKLERİ</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Karakter Saydırma </h5>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea id="mesaj" class="form-control mt-2" row="5"></textarea>
                            </div>
                            <h1 id="yaz">

                            </h1>


                        </div>

                    </div>


                </div>

            </div>

            <!--********************* -->

            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Sınırlı karakter kontrol</h5>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea id="sinir" class="form-control mt-2" row="5"></textarea>
                            </div>
                            <h1 id="sinirsayisi">

                            </h1>






                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->

            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Anlık Hesaplama</h5>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="deger1" class="form-control mt-2 mb-3" type="text">
                                <input id="deger2" class="form-control mb-3" type="text">

                            </div>
                            <h1 id="toplamdeger">

                            </h1>



                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->


            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Harici sayfadan veriyi Load Etme</h5>
                        <div class="col-lg-12">

                            <div id="yuklesin" class="text-warning bg-dark p-2 m-2">
                                Gelsin

                            </div>
                            <div id="yuklenecek" class="border table-cordered-font-weight-bold" style="height: 100px;">

                            </div>



                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->

            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Div İçeriği Değiştirme</h5>
                        <div class="col-lg-12">
                            <div id="degistir" class="text-white bg-info p-2 m-2">
                                Değiştir

                            </div>
                            <div id="degistirdiv" class="border table-cordered-font-weight-bold" style="height: 100px;">
                                Bu sabit bir değer içeriğidir.
                            </div>


                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->

            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Form elemanı Ekleme </h5>
                        <div class="col-lg-12">
                            <a class="btn btn-success" id="olustur">Oluştur</a>

                            <div id="elemantutucu">

                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->

            <div class="col-lg-4 ">
                <div class="row p-1 m-1 minboy">

                    <div class="col-lg-12  clearfix text-center">
                        <h5 class="border-bottom mb-1 bas">Tıklama ile saklama eventi</h5>
                        <div id="paragraftutucu" class="col-lg-12">
                            <p>1. Tıkla da gideyim ben</p>
                            <p>2. Tıkla da gideyim ben</p>
                            <p>3. Tıkla da gideyim ben</p>
                            <p>4. Tıkla da gideyim ben</p>

                        </div>

                    </div>


                </div>

            </div>
            <!--********************* -->

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>