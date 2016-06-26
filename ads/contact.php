<div class="contact">
    <style>
        .phoneNumber {
            margin: 15px auto 0;
            background-color: #87b821;
            color: #fff;
            overflow: hidden;
            border-bottom: solid 5px #759b26;
            border-radius: 2px;
        }

        .phoneNumber > span:first-child {
            padding: 19px 3px 18px 10px;
            border-left: solid 1px #b0d27d;
            padding-right: 6px;
            font-size: 24px;
            margin-left: 0
        }

        .phoneNumber > span {
            display: table-cell;
            vertical-align: middle
        }

        .sellerPhone {
            width: 220px;
            text-align: center;
            border-right: solid 1px #5e8226;
            padding: 10px 0;
            cursor: pointer
        }

    </style>

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
            $ads_contact = $print_value_opensooq_phone["phone"];
        }
        ?>

        <?php if ($is_opensooq_contact == true) { ?>
            <div class="col-xs-4  col-sm-4 col-md-4 col-lg-3" style="display: inline;">
                <span class="label label-success">وسيلة الإتصال :</span>
                <div class="phoneNumber">
                    <span class="fa fa-phone"></span>
                    <span dir="ltr" class="tableCell center sellerPhone ">
                        <img src="data:image/jpeg;base64,<?php echo $ads_contact; ?>">
                    </span>
                </div>
            </div>
            <div class="clear"></div>
        <?php } else { ?>
            <span class="label label-success">وسيلة الإتصال :</span>
            <strong>
                <?php echo $ads_contact; ?>
                <i class="fa fa-phone"></i>
            </strong>
        <?php } ?>
        <br> <br>
    <?php } else { ?>
        <div class="alert alert-info">
            هذا الإعلان قديم، لقد تم إزالة معلومات الإتصال بصاحب الإعلان،بإمكانك التواصل مع صاحب
            الإعلان
            عن طريق الرد على الإعلان أو عبر الرسائل الخاصة.
        </div>
    <?php } ?>
</div>