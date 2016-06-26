<div class="contact">

    <?php if ($time_add_ads + (60 * 60 * 24 * 60) > time()) { ?>
        <?php
        $is_opensooq_contact = false;
        if (strpos($ads_contact, 'base64') !== false) {
            $is_opensooq_contact = true;
            $opensooq_phone_id = explode(",", $ads_contact)[1];
            mysqli_query($mysqli, "SET NAMES 'utf8'");
            $query_keyinformation_print = "SELECT * FROM `opensooq_phone` WHERE id = \"$opensooq_phone_id\" ";
            $result_keyinformation_print = mysqli_query($mysqli, $query_keyinformation_print);
            $print_value_opensooq_phone = mysqli_fetch_array($result_keyinformation_print);
            $ads_contact = 'data:image/jpeg;base64,' + $print_value_opensooq_phone["phone"];
        }

        ?>
        <span class="label label-success">وسيلة الإتصال :</span>
        <strong>
            <?php echo $ads_contact; ?>
            <i class="fa fa-phone"></i>
        </strong>
        <br> <br>
    <?php } else { ?>
        <div class="alert alert-info">
            هذا الإعلان قديم، لقد تم إزالة معلومات الإتصال بصاحب الإعلان،بإمكانك التواصل مع صاحب
            الإعلان
            عن طريق الرد على الإعلان أو عبر الرسائل الخاصة.
        </div>
    <?php } ?>
</div>