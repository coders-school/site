<?php

function fetch_gamipress_points($user_id) {
    global $wpdb;
    $points = $wpdb->get_var(
        "SELECT meta_value as points
        FROM    $wpdb->usermeta
        WHERE   user_id = $user_id
                AND meta_key = '_gamipress_xp_points';"
    );
    return $points;
}

function fix_date($course_id, $original_date) {
    if ($course_id == 4043) {
        return "6th August 2020";
    }
    return date('jS F Y', strtotime($original_date));
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Coders School certificate</title>
    <style type="text/css"><?php $this->pdf_style(); ?></style>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=VT323&display=swap" rel="stylesheet">
</head>
<body>

<div class="certificate-wrap">

    <div class="certificate-content">

        <?php
        $points = fetch_gamipress_points($user->ID);
        $min_points = 292;
        if ($points < $min_points) {
            echo "<p>Sorry $user->first_name, you don't have enough points to earn this certificate.</p>";
            echo "<p>You need at least ".$min_points." points but you have only ".$points.". Keep working!</p>";
        } else {
        ?>

        <h3>Certificate of completion</h3>
        <p>This is to certify that </p>
        <h1><?php echo $user->first_name, ' ', $user->last_name ?></h1>
        <!-- TODO: if $user->first_name.empty() or $user->last_name.empty() then echo "Hello there! Please set your first and last name in your profile first!" -->
        <p> has successfully completed the course</p>
        <h2><?php echo $course->post_title; ?></h2>

        <?php } ?>
    </div>

    <div class="logo">
        <img src="<?php echo $this->template['url'].'logo.png'; ?>" />
    </div>

    <?php if ($points >= $min_points) { ?>
    <div class="certificate-footer">
        <table>
            <tr>
                <td class="first-col"><p>Wrocław, <?php echo fix_date($course_id, $completed->completion_date); ?></p></td>
                <!-- <td class="first-col"><p>Wrocław, 1st October 2020</p></td> -->
                <td class="last-col">
                    <div class="signature-wrap">
                        <img src="<?php echo $signature_image_url; ?>" />
                    </div>
                </td>
            </tr>

            <tr>
                <td class="first-col">
                    <p> <strong>Valid Certificate ID</strong> </p>
                </td>
                <td class="last-col">
                    <p class="certificate-author-name"> <strong><?php echo tutor_utils()->get_option('tutor_cert_authorised_name'); ?></strong> </p>
                </td>
            </tr>
            <tr>
                <td class="first-col"><p><?php echo $completed->completed_hash; ?></p></td>
                <!--td class="first-col"> <p>
                    99/2020

                </p> </td-->
                <td class="last-col"><?php echo tutor_utils()->get_option('tutor_cert_authorised_company_name'); ?></td>
            </tr>
        </table>
    </div>
    <?php } ?>
</div>

<div id="watermark">
<?php if ($points >= $min_points) { ?>
    <img src="<?php echo $this->template['url'].'background.jpeg'; ?>" height="100%" width="100%" />
<?php } ?>
</div>

</body>
</html>
