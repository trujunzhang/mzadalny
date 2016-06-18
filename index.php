<?php
session_start();
ob_start();
include("include/config_header.php");
/// استعدعاء ملف الأتصال بقاعدة البيانات
include("include/config.php");
mysqli_query($mysqli, "SET NAMES 'utf8'");
$query_keyinformation_print = "SELECT * FROM `keyinformation` WHERE id = \"1\" ";
$result_keyinformation_print = mysqli_query($mysqli, $query_keyinformation_print);
$print_value = mysqli_fetch_array($result_keyinformation_print);
?>
<!DOCTYPE html>
<html lang="ar-sa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>المزاد العلني</title>
    <meta name="description"
          content="حراج .حراج .المزاد العلني سوق سعودي لبيع وشراء السيارات و العقارات  و المواشي وجميع السلع الأخرى المستعمله والجديده ..">
    <meta name="keywords" content="حراج,المزاد العلني,بيع,للبيع,السوق,مزاد علني,للحراج,نشتري,نبيع">
    <link href="templates/default/css/bootstrap.rtl.min.css" rel="stylesheet" media="screen">
    <link href="templates/default/css/custom3.css?v=1.4" rel="stylesheet" media="screen">
    <link href="templates/default/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="templates/default/css/custom-icon-fonts.css?v=1.1">
    <script async src="templates/default/js/analytics.js"></script>
    <script src="templates/default/js/respond.min.js"></script>
    <script src="templates/default/js/html5shiv.js" type="text/javascript"></script>
    <script src="templates/default/js/respond.proxy.js"></script>
    <script src="templates/default/js/jquery-1.10.1.min.js"></script>
    <script src="templates/default/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="templates/default/js/cars.js"></script>
    <script src="templates/default/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="templates/default/js/v5.js"></script>
</head>
<body>


<style>

    .navbar {
        background: #1f6cca !important;
    }

    .headmenu a {
        color: #1f6cca !important;
    }

    .moreoptions {
        border-bottom: 1px dotted #1f6cca !important;
        color: #1f6cca !important;
    }

    a {
        color: #1f6cca;
    }

    table.tableAds tbody tr th {
        background: #1f6cca;
    }

    a.city-head {
        background-color: #1f6cca;
    }
</style>

<div class="headmenu hidden-xs">
    <a href="index.php"> الرئيسية</a>
    <!--<a href="__/السيارات"> حراج السيارات</a>
    <a href="__/الأجهزة"> أجهزة</a>
    <a href="__/العقارات"> عقارات</a>
    <a href="tags/484/مواشي وحيوانات وطيور">حيوانات و طيور</a>
    <a href="tags/493/خدمات"> خدمات</a>-->

    <a href="__/ السيارات"> السيارات</a>

    <a href="__/الأجهزة"> الأجهزة</a>

    <a href="__/العقارات"> العقارات</a>

    <a href="__/مواشي و حيوانات و طيور"> مواشي و حيوانات و طيور</a>

    <a href="__/خدمات"> خدمات</a>


    <a href="sitemap.php"> المزيد</a>
    <a href="advsearch.php"> البحث</a>
</div>


<header class="navbar  navbar" role="navigation">
    <div class="container">
        <div class="navbar-header ">
            <a href="index.php" class="logo "> <img src="templates/default/images2/haraj-logo.png" alt="المزاد العلني"></a>
        </div>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-60812442-1', 'auto');
            ga('send', 'pageview');

        </script>


        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <p class="navbar-text navbar-right visible-xs ">
            <a href="login.php">تسجيل الدخول </a>
        </p>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-right menu">

                <li><a href="login.php">تسجيل الدخول </a></li>

                <li><a href="register.php"> التسجيل بالموقع</a></li>

                <li class="visible-xs"><a href="commission.php">حساب عمولة الموقع</a></li>

                <li class="divider visible-xs"></li>
                <li class="visible-xs"><a
                        href="__/%D8%AD%D8%B1%D8%A7%D8%AC%20%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%B1%D8%A7%D8%AA"> حراج
                        السيارات</a></li>
                <li class="visible-xs"><a
                        href="__/%D8%AD%D8%B1%D8%A7%D8%AC%20%D8%A7%D9%84%D8%A3%D8%AC%D9%87%D8%B2%D8%A9"> أجهزة</a></li>
                <li class="visible-xs"><a href="__/%D8%AD%D8%B1%D8%A7%D8%AC%20%D8%A7%D9%84%D8%B9%D9%82%D8%A7%D8%B1">
                        عقارات</a></li>
                <li class="visible-xs"><a
                        href="tags/%D9%85%D9%88%D8%A7%D8%B4%D9%8A%20%D9%88%D8%AD%D9%8A%D9%88%D8%A7%D9%86%D8%A7%D8%AA%20%D9%88%D8%B7%D9%8A%D9%88%D8%B1">
                        مواشي و حيوانات و طيور</a></li>
                <li class="visible-xs"><a href="tags/%D8%AE%D8%AF%D9%85%D8%A7%D8%AA"> خدمات</a></li>
                <li class="visible-xs"><a href="sitemap.php"> المزيد</a></li>
                <li class="visible-xs"><a href="advsearch.php"> البحث</a></li>
                <li class="visible-xs"><a href="contact.php">اتصل بنا</a></li>


                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" class="dropdown" href="#"> <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu pull-right">


                        <li><a href="advsearch.php"> البحث المتقدم</a></li>
                        <li><a href="commission.php">حساب عمولة الموقع</a></li>
                        <li><a href="contact.php">اتصل بنا</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>
            </ul>
        </div>


    </div>
</header>


<?php
include("header.php"); // استدعاء ملف الهيدر
?>


<div class="row" id="wrapper">

    <?php
    include("menu_right_1_index.php"); //  استدعاء ملف القائمة الجانبية
    ?>

    <div class="col-xs-12  col-sm-9 col-md-9 col-lg-9 " id="secondDiv">
        <?php
        include("search.php")
        ?>

        <div class="main-col">

            <?php
            include("main_top.php")
            ?>

            <?php
            include("include/functions/ftime.php");
            /// استعدعاء ملف الأتصال بقاعدة البيانات
            include("include/config.php");
            mysqli_query($mysqli, "SET NAMES 'utf8'");
            $query_ads = "SELECT * FROM `ads` WHERE close_ads = \"0\" and type_ads_or = \"1\" ORDER BY Last_updated_Ad DESC";
            $query_ads_ex = mysqli_query($mysqli, $query_ads);
            $query_ads_ex_num_co = mysqli_num_rows($query_ads_ex);
            if ($query_ads_ex_num_co > 0) {
                ?>

                <table class="table tableAds table-borderedAds ">

                    <tbody>
                    <tr>

                        <th></th>
                        <th style="text-align:right;">العروض</th>
                        <th>المدينة</th>
                        <th>المعلن</th>

                        <th>قبل</th>
                    </tr>


                    <?php
                    include("include/config.php");
                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $query_ads = "SELECT * FROM `ads` WHERE close_ads = \"0\" and type_ads_or = \"1\" and fixed_home = \"1\" ORDER BY Last_updated_Ad DESC";
                    $query_ads_ex = mysqli_query($mysqli, $query_ads);
                    while ($row = mysqli_fetch_array($query_ads_ex)) {
                        $ads_city = $row["ads_city"];
                        $id_ads = $row["id"];
                        $His_announcement = $row["His_announcement"];
                        $image_link = $row["image_link"];
                        $Time_added = timeago($row["Time_added"]);


                        $view_query_ads = "SELECT * FROM `comments` WHERE id_ads = \"$id_ads\"";
                        $unicode_arabic = mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $view_execution_ads = mysqli_query($mysqli, $view_query_ads);
                        $num_ex_ads_query = mysqli_num_rows($view_execution_ads);


                        mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $query_login_m_ad = "SELECT * FROM `members` where id = \"$His_announcement\" ";
                        $result_query_m_ad = mysqli_query($mysqli, $query_login_m_ad);
                        $Data_member_m_ad = mysqli_fetch_array($result_query_m_ad);
                        $group_num_m_ad = $Data_member_m_ad["groupnumber"];
                        $username_member_2_m_ad = $Data_member_m_ad["username"];
                        $id_user_m_ad = $Data_member_m_ad["id"];

                        mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $query_keyinformation_print_city = "SELECT * FROM `cities` WHERE id = \"$ads_city\" ";
                        $result_keyinformation_print_city = mysqli_query($mysqli, $query_keyinformation_print_city);
                        $print_value_city = mysqli_fetch_array($result_keyinformation_print_city);
                        $ads_city_name = $print_value_city["text"];
                        $ads_city_id = $print_value_city["id"];


                        ?>


                        </tr>
                        <tr>
                            <td><i class="star fa fa-star fa-lg"></i></td>
                            <td>
                                <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>"><?php echo $row["ads_title"]; ?></a>

                                <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>">

                                    <?php if (empty($image_link)) {
                                    } else { ?>&nbsp;<i class="fa fa-camera-retro black"></i>  <?php } ?>

                                </a><?php if ($num_ex_ads_query === 0) {
                                } else { ?>&nbsp; <?php echo $num_ex_ads_query ?> ردود <?php } ?></td>

                            <td>
                                <a href="<?php echo $url_hraj; ?>city/<?php echo $row["ads_city"]; ?>/<?php echo $ads_city_name; ?>"
                                   class="smallsize">
                                    <?php echo $ads_city_name; ?></a></td>

                            <td><a href="<?php echo $url_hraj; ?>users/<?php echo $username_member_2_m_ad; ?>"
                                   class="smallsize"><?php echo $username_member_2_m_ad; ?></a></td>

                            <td><?php echo $Time_added; ?></td>
                        </tr>
                        <?php
                    }
                    ?>







                    <?php
                    /*
                     Place code to connect to your DB here.
                    */
                    $fixed_query_php = "and type_ads_or = \"1\" and fixed_home = \"0\" and fixed_tub = \"0\" and fixed_sec = \"0\" and fixed_sec2 = \"0\" and fixed_sec3 = \"0\"";
                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    include("include/config.php"); // include your code to connect to DB.
                    $tbl_name = "ads";  //your table name
                    // How many adjacent pages should be shown on each side?
                    $adjacents = 2;
                    /*
                       First get total number of rows in data table.
                       If you have a WHERE clause in your query, make sure you mirror it here.
                    */

                    $query = "SELECT COUNT(*) as num FROM $tbl_name WHERE close_ads = \"0\" $fixed_query_php ORDER BY Last_updated_Ad DESC";
                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $total_pages = mysqli_fetch_array(mysqli_query($mysqli, $query));
                    $total_pages = $total_pages["num"];

                    /* Setup vars for query. */
                    $targetpage = "index.php";  //your file name  (the name of this file)
                    $limit = 40;         //how many items to show per page

                    $start = 0;        //if no page var is given, set start to 0
                    $page = 0;
                    if (isset($_GET["page"])) {
                        $page = $_GET["page"];
                        $start = ($page - 1) * $limit;    //first item to display on this page
                    }

                    /* Get data. */
                    $sql = "SELECT * FROM `$tbl_name` WHERE close_ads = \"0\" $fixed_query_php ORDER BY Last_updated_Ad DESC LIMIT $start, $limit";
                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $result = mysqli_query($mysqli, $sql);

                    /* Setup page vars for display. */
                    if ($page == 0) $page = 1;     //if no page var is given, default to 1.
                    $prev = $page - 1;       //previous page is page - 1
                    $next = $page + 1;       //next page is page + 1
                    $lastpage = ceil($total_pages / $limit);  //lastpage is = total pages / items per page, rounded up.
                    $lpm1 = $lastpage - 1;      //last page minus 1

                    /*
                     Now we apply our rules and draw the pagination object.
                     We're actually saving the code to a variable in case we want to draw it more than once.
                    */
                    $pagination = "";
                    if ($lastpage > 1) {
                        $pagination .= "<ul class=\"pagination pagination-lg\">
";
                        //previous button
                        if ($page > 1)
                            $pagination .= "";
                        else
                            $pagination .= "";

                        //pages
                        if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
                        {
                            for ($counter = 1; $counter <= $lastpage; $counter++) {
                                if ($counter == $page)
                                    $pagination .= "<li class=\"active\"><a href=\"\">$counter</a></li>"; // a not link
                                else
                                    $pagination .= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
                            }
                        } elseif ($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
                        {
                            //close to beginning; only hide later pages
                            if ($page < 1 + ($adjacents * 2)) {
                                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                                    if ($counter == $page)
                                        $pagination .= "<li class=\"active\"><a href=\"\">$counter</a></li>"; // a not link
                                    else
                                        $pagination .= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
                                }
                                $pagination .= "...";
                                $pagination .= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
                                $pagination .= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";
                            } //in middle; hide some front and some back
                            elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                                $pagination .= "<li><a href=\"$targetpage?page=1\">1</a></li>";
                                $pagination .= "<li><a href=\"$targetpage?page=2\">2</a></li>";
                                $pagination .= "...";
                                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                                    if ($counter == $page)
                                        $pagination .= "<li class=\"active\"><a href=\"\">$counter</a></li>"; //a not link
                                    else
                                        $pagination .= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
                                }
                                $pagination .= "...";
                                $pagination .= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
                                $pagination .= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";
                            } //close to end; only hide early pages
                            else {
                                $pagination .= "<li><a href=\"$targetpage?page=1\">1</a></li>";
                                $pagination .= "<li><a href=\"$targetpage?page=2\">2</a></li>";
                                $pagination .= "...";
                                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                                    if ($counter == $page)

                                        $pagination .= "<li class=\"active\"><a href=\"$counter\">$counter</a></li>"; // a
                                    else
                                        $pagination .= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
                                }
                            }
                        }

                        //next button
                        if ($page < $counter - 1)
                            $pagination .= "";
                        else
                            $pagination .= "";
                        $pagination .= "</ul>\n";
                    }
                    ?>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $ads_city = $row["ads_city"];
                        $id_ads = $row["id"];
                        $His_announcement = $row["His_announcement"];
                        $image_link = $row["image_link"];
                        $Time_added = timeago($row["Time_added"]);


                        $view_query_ads = "SELECT * FROM `comments` WHERE id_ads = \"$id_ads\"";
                        $unicode_arabic = mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $view_execution_ads = mysqli_query($mysqli, $view_query_ads);
                        $num_ex_ads_query = mysqli_num_rows($view_execution_ads);


                        mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $query_login_m_ad = "SELECT * FROM `members` where id = \"$His_announcement\" ";
                        $result_query_m_ad = mysqli_query($mysqli, $query_login_m_ad);
                        $Data_member_m_ad = mysqli_fetch_array($result_query_m_ad);
                        $group_num_m_ad = $Data_member_m_ad["groupnumber"];
                        $username_member_2_m_ad = $Data_member_m_ad["username"];
                        $id_user_m_ad = $Data_member_m_ad["id"];

                        mysqli_query($mysqli, "SET NAMES 'utf8'");
                        $query_keyinformation_print_city = "SELECT * FROM `cities` WHERE id = \"$ads_city\" ";
                        $result_keyinformation_print_city = mysqli_query($mysqli, $query_keyinformation_print_city);
                        $print_value_city = mysqli_fetch_array($result_keyinformation_print_city);
                        $ads_city_name = $print_value_city["text"];
                        $ads_city_id = $print_value_city["id"];


                        ?>


                        </tr>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td>
                                <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>"><?php echo $row["ads_title"]; ?></a>

                                <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>">

                                    <?php if (empty($image_link)) {
                                    } else { ?>&nbsp;<i class="fa fa-camera-retro black"></i>  <?php } ?>

                                </a><?php if ($num_ex_ads_query === 0) {
                                } else { ?>&nbsp; <?php echo $num_ex_ads_query ?> ردود <?php } ?></td>

                            <td>
                                <a href="<?php echo $url_hraj; ?>city/<?php echo $row["ads_city"]; ?>/<?php echo $ads_city_name; ?>"
                                   class="smallsize">
                                    <?php echo $ads_city_name; ?></a></td>

                            <td><a href="<?php echo $url_hraj; ?>users/<?php echo $username_member_2_m_ad; ?>"
                                   class="smallsize"><?php echo $username_member_2_m_ad; ?></a></td>

                            <td><?php echo $Time_added; ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                    </tbody>
                </table>


                <?= $pagination; ?>


                <?php
            } else {
                ?>
                <div class="alert alert-info">
                    لا يتوفر اعلانات في الوقت الحالي ليتم عرضها
                </div>
                <?php
            }

            ?>

        </div>

    </div>

    <br>
    <hr>
    <br>


    <div class="hidden-xs">


        <h3>الطلبات </h3>


        <?php
        include("include/config.php");
        mysqli_query($mysqli, "SET NAMES 'utf8'");
        $query_ads = "SELECT * FROM `ads` WHERE close_ads = \"0\" and type_ads_or = \"2\" ORDER BY Last_updated_Ad DESC LIMIT 5";
        $query_ads_ex = mysqli_query($mysqli, $query_ads);
        $query_ads_ex_num = mysqli_num_rows($query_ads_ex);
        if ($query_ads_ex_num > 0) {
            ?>

            <table class="table tableAds table-borderedAds ">

                <tbody>
                <tr>

                    <th></th>
                    <th>الطلبات</th>
                    <th>المدينة</th>
                    <th>المعلن</th>

                    <th>قبل</th>
                </tr>


                <?php
                while ($row = mysqli_fetch_array($query_ads_ex)) {
                    $ads_city = $row["ads_city"];
                    $id_ads = $row["id"];
                    $His_announcement = $row["His_announcement"];
                    $image_link = $row["image_link"];
                    $Time_added = timeago($row["Time_added"]);


                    $view_query_ads = "SELECT * FROM `comments` WHERE id_ads = \"$id_ads\"";
                    $unicode_arabic = mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $view_execution_ads = mysqli_query($mysqli, $view_query_ads);
                    $num_ex_ads_query = mysqli_num_rows($view_execution_ads);


                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $query_login_m_ad = "SELECT * FROM `members` where id = \"$His_announcement\" ";
                    $result_query_m_ad = mysqli_query($mysqli, $query_login_m_ad);
                    $Data_member_m_ad = mysqli_fetch_array($result_query_m_ad);
                    $group_num_m_ad = $Data_member_m_ad["groupnumber"];
                    $username_member_2_m_ad = $Data_member_m_ad["username"];
                    $id_user_m_ad = $Data_member_m_ad["id"];

                    mysqli_query($mysqli, "SET NAMES 'utf8'");
                    $query_keyinformation_print_city = "SELECT * FROM `cities` WHERE id = \"$ads_city\" ";
                    $result_keyinformation_print_city = mysqli_query($mysqli, $query_keyinformation_print_city);
                    $print_value_city = mysqli_fetch_array($result_keyinformation_print_city);
                    $ads_city_name = $print_value_city["text"];
                    $ads_city_id = $print_value_city["id"];


                    ?>


                    </tr>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td>
                            <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>"><?php echo $row["ads_title"]; ?></a>

                            <a href="<?php echo $url_hraj; ?>ads/<?php echo $row["id"]; ?>/<?php echo $row["ads_title"]; ?>">

                                <?php if (empty($image_link)) {
                                } else { ?>&nbsp;<i class="fa fa-camera-retro black"></i>  <?php } ?>

                            </a><?php if ($num_ex_ads_query === 0) {
                            } else { ?>&nbsp; <?php echo $num_ex_ads_query ?> ردود <?php } ?></td>

                        <td>
                            <a href="<?php echo $url_hraj; ?>city/<?php echo $row["ads_city"]; ?>/<?php echo $ads_city_name; ?>"
                               class="smallsize">
                                <?php echo $ads_city_name; ?></a></td>

                        <td><a href="<?php echo $url_hraj; ?>users/<?php echo $username_member_2_m_ad; ?>"
                               class="smallsize"><?php echo $username_member_2_m_ad; ?></a></td>

                        <td><?php echo $Time_added; ?></td>
                    </tr>
                    <?php
                }
                ?>


                </tbody>
            </table>


            <a href="order.php" class="tag">المزيد من الطلبات</a>
            <?php
        } else {
            ?>
            <div class="alert alert-info">
                لا يتوفر طلبات في الوقت الحالي
            </div>
            <?php
        }

        ?>

    </div>


</div>


<?php
include("footer.php"); // استدعاء ملف الهيدر
?>

<br>


<script aria-hidden="true" type="application/x-lastpass" id="hiddenlpsubmitdiv" style="display: none;"></script>


<script>try {
        (function () {
            for (var lastpass_iter = 0; lastpass_iter < document.forms.length; lastpass_iter++) {
                var lastpass_f = document.forms[lastpass_iter];
                if (typeof(lastpass_f.lpsubmitorig2) == "undefined") {
                    lastpass_f.lpsubmitorig2 = lastpass_f.submit;
                    if (typeof(lastpass_f.lpsubmitorig2) == 'object') {
                        continue;
                    }
                    lastpass_f.submit = function () {
                        var form = this;
                        var customEvent = document.createEvent("Event");
                        customEvent.initEvent("lpCustomEvent", true, true);
                        var d = document.getElementById("hiddenlpsubmitdiv");
                        if (d) {
                            for (var i = 0; i < document.forms.length; i++) {
                                if (document.forms[i] == form) {
                                    if (typeof(d.innerText) != 'undefined') {
                                        d.innerText = i.toString();
                                    } else {
                                        d.textContent = i.toString();
                                    }
                                }
                            }
                            d.dispatchEvent(customEvent);
                        }
                        form.lpsubmitorig2();
                    }
                }
            }
        })()
    } catch (e) {
    }</script>

</body>
</html>