<?php
/// استعدعاء ملف الأتصال بقاعدة البيانات
include("../include/config.php");
$view_query_ads = "SELECT * FROM `comments` WHERE id_ads = \"$ads_id\"";
$unicode_arabic = mysqli_query($mysqli, "SET NAMES 'utf8'");
$view_execution_ads = mysqli_query($mysqli, $view_query_ads);
$i = 1;
while ($inf_ads_co = mysqli_fetch_array($view_execution_ads)) {

    $His_announcement_s_aa = $inf_ads_co["id_His_response"];
    /// استعدعاء ملف الأتصال بقاعدة البيانات
    include("../include/config.php");
    mysqli_query($mysqli, "SET NAMES 'utf8'");
    $query_login_m_ad02 = "SELECT * FROM `members` where id = \"$His_announcement_s_aa\" ";
    $result_query_m_ad02 = mysqli_query($mysqli, $query_login_m_ad02);
    $Data_member_m_ad02 = mysqli_fetch_array($result_query_m_ad02);
    $group_num_m_ad02 = $Data_member_m_ad02["groupnumber"];
    $username_member_2_m_ad02 = $Data_member_m_ad02["username"];
    $id_user_m_ad02 = $Data_member_m_ad02["id"];
    $i_final = $i++;


    ?>


    <div class="comment comment_div">
        <div class="row comment_high">
            <div class="col-xs-12  col-sm-12 col-md-9 col-lg-9 comment_header">
                ››
                رد رقم <a href="#<?php echo $inf_ads_co["id"]; ?>"
                          name="<?php echo $inf_ads_co["id"]; ?>"><?php echo $i_final; ?></a>

                <?php if ($group_num === "1" || $group_num === "2") { ?>
                    <span class="label label-success" style="font-size:12px;"> رقم الرد الأصلي :
                        <?php echo $inf_ads_co["id"]; ?></span>
                <?php } ?>

                <br>››
                &nbsp; <a href="<?php echo $fixed_htaccess; ?>users/<?php echo $username_member_2_m_ad02; ?>"
                          class="username"><?php echo $username_member_2_m_ad02; ?></a>

                <?php if ($group_num_m_ad02 === "1") { ?><span class="label label-success"> مدير الموقع</span><?php } ?>

                <?php if ($group_num_m_ad02 === "6") { ?><span class="label label-success">عضو</span><?php } ?>

                <?php if ($His_announcement_s === $id_user_m_ad02) { ?>
                    <span class="label label-success">المعلن</span><?php } ?>
                <?php if ($group_num_m_ad02 === "2") { ?>
                    <span class="label label-success">مشرف الموقع</span><?php } ?>

                <?php if ($group_num_m_ad02 === "5") { ?><span class="label label-success"> عضو محظور</span><?php } ?>
                <br>››
                &nbsp; <?php echo timeago($inf_ads_co["Time_added_co"]); ?>


            </div>

            <div class="col-xs-12  col-sm-12 col-md-3 col-lg-3 ">


                <div style="clear:both;"></div>


                <script>
                    function Report1(str) {
                        if (str == "") {
                            document.getElementById(".myDivs").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else { // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById(".myDivs").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo $fixed_htaccess; ?>Report.php?r=1&q=" + str, true);
                        xmlhttp.send();
                    }
                </script>


                <script>
                    function Report2(str) {
                        if (str == "") {
                            document.getElementById(".myDiv").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else { // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById(".myDiv").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo $fixed_htaccess; ?>Report.php?r=2&q=" + str, true);
                        xmlhttp.send();
                    }
                </script>


                <script>
                    function Report3(str) {
                        if (str == "") {
                            document.getElementById(".myDivs").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else { // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById(".myDivs").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "<?php echo $fixed_htaccess; ?>Report.php?r=3&q=" + str, true);
                        xmlhttp.send();
                    }
                </script>


                <div class="myDivs">
                    <button class="btn btn-primary btn-xs" id="<?php echo $inf_ads_co["id"]; ?>" type="button"
                            rel="popover"
                            data-content="إبلاغ عن العضو: <br /> <a href=<?php echo $fixed_htaccess; ?>users/<?php echo $username_member_2_m_ad02; ?> class=username><?php echo $username_member_2_m_ad02; ?></a>
			<br /> <br />

				<button  value=<?php echo $inf_ads_co["id"]; ?> rel=&quot;<?php echo $inf_ads_co["id"]; ?>&quot; class=&quot;btn btn-primary btn-xs&quot; onclick=Report1(this.value)>بخس السلعة</button><br />

				<button value=<?php echo $inf_ads_co["id"]; ?> rel=&quot;<?php echo $inf_ads_co["id"]; ?>&quot;  class=&quot;btn btn-primary btn-xs&quot; onclick=Report2(this.value)>رد غير لائق</button><br />
                           <?php
                            if ($id_user_m_ad === $id_member) {
                                ?>
								<button value=<?php echo $inf_ads_co["id"]; ?> rel=&quot;<?php echo $inf_ads_co["id"]; ?>&quot;  class=&quot;btn btn-primary btn-xs&quot; onclick=Report3(this.value)>عدم الجدية في الشراء</button> <br/>
                                <?php } ?>
 " data-original-title="" title=""><i class="fa fa-flag"> </i> إبلاغ
                    </button>
                </div>


            </div>
        </div>

        <div style="clear:both;"></div>


        <div class="comment_body">


            <?php echo $inf_ads_co["text"]; ?>

        </div>

        <div class="adsheader">


            <a href="<?php echo $fixed_htaccess; ?>sendpm.php?username=<?php echo $username_member_2_m_ad02; ?>&title=بخصوص ردك على الإعلان رقم <?php echo $ads_id; ?>"><i
                    class="fa fa-envelope"></i> إرسال رسالة خاصة</a>


            <hr>

            <?php
            if ($id_user_m_ad === $id_member || $group_num === "1" || $group_num === "2") {
                ?>

                <?php
                if ($id_user_m_ad02 !== $id_member || $group_num === "1" || $group_num === "2") {
                    ?>
                    <a href="<?php echo $fixed_htaccess; ?>block.php?comment_id=<?php echo $inf_ads_co["id"]; ?>&amp;ads_id=<?php echo $ads_id; ?>&block_username=<?php echo $username_member_2_m_ad02; ?>"><i
                            class="fa fa-trash-o"></i>&nbsp; حذف الرد + منع العضو من
                        الرد: <?php echo $username_member_2_m_ad02; ?> </a>


                    <br>

                    <?php
                }
            }
            ?>


        </div>

    </div>


    <?php
}
?>
