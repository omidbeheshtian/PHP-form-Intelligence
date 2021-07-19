<?php
if(isset($_GET['send'])){
    if($_GET['age'] == '50+' && $_GET['maghsad'] == 'euro' && $_GET['tamakonmali'] != '200-500'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اقامت بازنشستگی</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>
        ';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] != '18-23' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">مدل نمایندگی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] != '50+' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اقامت کاری حوزه شنگن</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n' && $_GET['taahol'] == 'mojarad' || $_GET['child'] == 'no'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">جاب آفر مشاغل 1-Tier در حوزه شنگن</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['tamakonmali'] != '200-500' || $_GET['tamakonmali'] != '500-1' && $_GET['akhzvisa'] == 'y' && $_GET['sabeghesafar'] == 'y' && $_GET['sabeghesafar'] == 'y' && $_GET['senfarzand'] <6 || $_GET['taahol'] == 'mojarad'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">فرانسه</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['tamakonmali'] != '200-500'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">آلمان</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['madraktahsili'] != 'n' && $_GET['taahol'] == 'mojarad' || $_GET['taahol'] == 'motahel' && $_GET['child'] == 'no'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">کانادا کارورزی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'canada' && $_GET['age'] != '18-23' && $_GET['job'] == 'sahebkar' && $_GET['job'] == 'azad' && $_GET['tamakonmali'] == '2+' || $_GET['tamakonmali'] == '1-2' && $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">Intra company transfer</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'canada' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['madrak'] == 'y' || $_GET['madrakbegirim'] == true && $_GET['madraktahsili'] != 'diplom' || $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-12">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-check"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">Express entry</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row m-t-25">
        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>';
    }
}
?>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI</title>
</head>
<body>
<form action="" method="GET">


    <div id="maghsad">
        <p class="omidbeheshtianp">مقصد مهاجرت:</p>
        <input type="radio" id="m1" name="maghsad" value="euro">
        <label for="m1">اروپا</label>
        <input type="radio" id="m2" name="maghsad" value="canada">
        <label for="m2">کانادا</label>
    </div>







    <div id="age">
    <p class="omidbeheshtianp">بازه سنی:</p>
    <select class="input100" name="age">
            <option value="18-23">18 تا 23 سال</option>
            <option value="23-35">23 تا 35 سال</option>
            <option value="35-50">35 تا 50 سال</option>
            <option value="50+">بالای 50 سال</option>
        </select>
    </div>










    <div id="job">
        <p class="omidbeheshtianp">شغل:</p>
        <select class="input100" name="job">
            <option value="karmand">کارمند</option>
            <option value="sahebkar">صاحب کسب و کار</option>
            <option value="azad">شغل آزاد</option>
            <option value="adameshteghal">عدم اشتغال</option>
        </select>
    </div>











    <div id="tamakonmali">
        <p class="omidbeheshtianp">تمکن مالی:</p>
        <select class="input100" name="tamakonmali">
            <option value="200-500">200 میلیون تا 500 میلیون</option>
            <option value="500-1">500 میلیون تا 1 میلیارد</option>
            <option value="1-2">1 میلیارد تا 2 میلیارد</option>
            <option value="2+">2 میلیارد به بالا</option>
        </select>
    </div>










    <div id="madrak">
        <p class="omidbeheshtianp">مدرک زبان انگلیسی:</p>
        <input type="radio" id="z1" name="madrak" value="y" onclick="madraknomre()">
        <label for="z1">دارم</label>
        <input type="radio" id="z2" name="madrak" value="n" onclick="madrakbegir()">
        <label for="z2">ندارم</label>
        <div id="madraknomre" style="display:none;">
            <input type="text" placeholder="نمره مدرک" name="nomre" style="border-radius:12px; padding:3px;">
        </div>
        <div id="madrakbegir" style="display:none;">
                <input type="checkbox" name="madrakbegirim" id="madrakbegirim">
                <label for="madrakbegirim">میتوانم اخذ کنم</label>
        </div>
    </div>












    <div id="madrakgheyr">
        <p class="omidbeheshtianp">مدرک زبان غیر از انگلیسی:</p>
        <input type="radio" id="mg1" name="madrakgheyr" value="y" onclick="madrakgheyrhide()">
        <label for="mg1">دارم</label>
        <input type="radio" id="mg2" name="madrakgheyr" value="n" onclick="madgheyrhide2()">
        <label for="mg2">ندارم</label>
        <div id="madrakgheyrhide" style="display:none;">
            <p class="omidbeheshtianp">زبان مدرک:</p>
            <select class="input100" name="madrakgheyrenglish">
                <option value="france">فرانسه</option>
                <option value="germany">آلمانی</option>
                <option value="spain">اسپانیایی</option>
                <option value="swed">سوئدی</option>
                <option value="gheyre">غیره</option>
            </select>
        </div>
    </div>













    <div id="madraktahsili">
        <p class="omidbeheshtianp">مدرک تحصیلی:</p>
        <select class="input100" name="madraktahsili">
            <option value="n">ندارم</option>
            <option value="diplom">دیپلم</option>
            <option value="karshenasi">کارشناسی</option>
            <option value="karshenasiarshad">کارشناسی ارشد</option>
            <option value="doctor">دکتری</option>
        </select>
    </div>














    <div id="sabeghesafar">
        <p class="omidbeheshtianp">سابقه سفری:</p>
        <input type="radio" id="sf1" name="sabeghesafar" value="y">
        <label for="sf1">دارم</label>
        <input type="radio" id="sf2" name="sabeghesafar" value="n">
        <label for="sf2">ندارم</label>
    </div>














    <div id="taahol">
        <p class="omidbeheshtianp">وضعیت تاهل:</p>
        <input type="radio" id="t1" name="taahol" value="motahel" onclick="farzand()">
        <label for="t1">متاهل</label>
        <input type="radio" id="t2" name="taahol" value="mojarad" onclick="farzandhide()">
        <label for="t2">مجرد</label>
        <div id="2tt" style="display:none;">
        <p class="omidbeheshtianp">فرزند:</p>
        <input type="radio" id="yc" name="child" value="yes" onclick="tedadfarzzand()">
            <label for="yc">دارم</label>
            <input type="radio" id="nc" name="child" value="no" onclick="tedadfarzandhide()">
            <label for="nc">ندارم</label>
            <div id="tedadfarzand" style="display:none;">
            <p class="omidbeheshtianp">تعداد فرزند:</p>
                <input type="number" name="tedadfarzand" style="border-radius:12px; padding:3px;">
                <p class="omidbeheshtianp">سن فرزند:</p>
                <input type="number" name="senfarzand" style="border-radius:12px; padding:3px;">
            </div>
        </div>
    </div>










    <div id="akhzvisa">
        <p class="omidbeheshtianp">سابقه اقدام جهت اخذ هر نوع ویزا یا اقامت:</p>
        <input type="radio" id="av1" name="akhzvisa" value="y" onclick="rejectvisa()">
        <label for="av1">دارم</label>
        <input type="radio" id="av2" name="akhzvisa" value="n" onclick="rejecthide()">
        <label for="av2">ندارم</label>
        <div id="rejectvisa" style="display:none;">
                <p class="omidbeheshtianp">سابقه ریجکت ویزا :</p>
                <input type="radio" id="re1" name="reject" value="y" onclick="noevisa()">
                <label for="re1">دارم</label>
                <input type="radio" id="re2" name="reject" value="n" onclick="noevisahide()">
                <label for="re2">ندارم</label>
                <div id="noevisareject" style="display:none">
                    <p class="omidbeheshtianp">نوع ویزا:</p>
                    <input type="radio" id="tr1" name="typevisareject" value="shengen">
                    <label for="tr1">شنگن</label>
                    <input type="radio" id="tr2" name="typevisareject" value="notshengen">
                    <label for="tr2">غیر شنگن</label>
                </div>
            </div>
    </div>








    <div>
    <button class="login100-form-btn" name="send">ادامه</button>
    </div>





</form>
<script>
function farzand() {
  document.getElementById("2tt").style.display = "block";
}
function farzandhide() {
    document.getElementById("2tt").style.display = "none";
}
function madrakbegir() {
    document.getElementById("madrakbegir").style.display = "block";
    document.getElementById("madraknomre").style.display = "none";
}
function madraknomre() {
    document.getElementById("madraknomre").style.display = "block";
    document.getElementById("madrakbegir").style.display = "none";
}
function madrakgheyrhide() {
    document.getElementById("madrakgheyrhide").style.display = "block";
}
function madgheyrhide2() {
    document.getElementById("madrakgheyrhide").style.display = "none";
}
function tedadfarzzand() {
    document.getElementById("tedadfarzand").style.display = "block";
}
function tedadfarzandhide() {
    document.getElementById("tedadfarzand").style.display = "none";
}
function rejectvisa() {
    document.getElementById("rejectvisa").style.display = "block";
}
function rejecthide() {
    document.getElementById("rejectvisa").style.display = "none";
}
function noevisa() {
    document.getElementById("noevisareject").style.display = "block";
}
function noevisahide() {
    document.getElementById("noevisareject").style.display = "none";
}
</script>
</body>
</html>