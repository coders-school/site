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
		$hour_text = '';
		$min_text = '';
		if ($durationHours) {
			$hour_text = $durationHours.' ';
			$hour_text .= ($durationHours > 1) ? __('hours', 'tutor-pro') : __('hour', 'tutor-pro');
		}
		if ($durationMinutes) {
			$min_text = $durationMinutes.' ';
			$min_text .= ($durationMinutes > 1) ? __('minutes', 'tutor-pro') : __('minute', 'tutor-pro');
		}
		$duration_text = $hour_text.' '.$min_text;
		?>
        <h3>Certificate of completion</h3>
        <p>This is to certify that</p>
        <h1><?php echo $user->first_name, ' ', $user->last_name; ?></h1>
        <!-- <h1> -->

        <!--
        -->
        <!-- </h1> -->
        <p> has successfully completed the course</p>
        <!-- <h2><php echo $course->post_title; ?></h2> -->
        <h2><?php echo $course->post_title; ?></h2>
        <!-- <h2>Lambda expressions</h2> -->
    </div>

    <div class="logo">
        <img src="<?php echo $this->template['url'].'logo.png'; ?>" />
    </div>

    <div class="certificate-footer">
        <table>
            <tr>
                <td class="first-col"><p>Wrocław, <?php echo date('jS F Y', strtotime( $completed->completion_date) ); ?></p></td>
                <!-- <td class="first-col"><p>Wrocław, 1st October 2020</p></td> -->
                <!-- <td class="first-col"><p><?php echo 'Wrocław, '.$completed_date; ?></p>/td> -->
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
</div>

<div id="watermark">
    <img src="<?php echo $this->template['url'].'background.jpeg'; ?>" height="100%" width="100%" />
</div>


</body>
</html>