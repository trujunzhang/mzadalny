<div class="contact">

    <?php if ($time_add_ads + (60 * 60 * 24 * 60) > time()) { ?>
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
        <?php
    }
    ?>
</div>