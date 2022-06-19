

<div id="twinkle_smtp_main">

    <div id="twinkle_smtp_header">
        <div class="twinkle_smtp_header_logo"></div>
        <div class="twinkle_smtp_header_nav">
            <div class="twinkle_smtp_header_nav_item" onclick="twinkle_smtp_analytics_init()">Analytics</div>
            <div class="twinkle_smtp_header_nav_item" onclick="twinkle_smtp_settings_init()">Settings</div>
        </div>
    </div>


    <div id="twinkle_smtp_container">
        <?php include EASY_LEARN_PATH . "backend/templates/views/analytics.php"; ?>
        <?php include EASY_LEARN_PATH . "backend/templates/views/settings.php"; ?>
    </div>


</div>


<script type="text/javascript">

    jQuery(document).ready(function($){
        'use strict';

        twinkle_smtp_analytics_init();

    });

</script>