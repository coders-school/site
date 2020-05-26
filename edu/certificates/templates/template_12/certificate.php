<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Coders School certificate</title>
    <style type="text/css"><?php $this->pdf_style(); ?></style>
</head>
<body>

<div class="certificate-wrap">

    <div class="certificate-content">
		<?php
		$hour_text = '';
		$min_text = '';
		if ($durationHours){
			if ($durationHours > 1){
				$hour_text = $durationHours.' hours';
			}else{
				$hour_text = $durationHours.' hour';
			}
		}
		if ($durationMinutes){
			if ($durationMinutes > 1){
				$min_text = $durationMinutes.' minutes';
			}else{
				$min_text = $durationMinutes.' minute';
			}
		}
		$duration_text= $hour_text.' '.$min_text;
		?>
        <h3>Certificate of completion</h3>
        <p>This is to certify that</p>
        <h1><?php echo $user->display_name; ?></h1>
        <p> has successfully completed <?php echo $duration_text; ?> the course</p>
        <h2><?php echo $course->post_title; ?></h2>
    </div>

    <div class="logo">
        <img src="<?php echo $this->template['url'].'preview.png'; ?>" />
    </div>

    <div class="certificate-footer">
        <table>
            <tr>
                <td class="first-col"><p>Wrocław, <?php echo date('jS F Y', strtotime( $completed->completion_date) ); ?></p></td>
                <td class="last-col">
                    <div class="signature-wrap">
						<?php
						$signature_id = tutor_utils()->get_option('tutor_cert_signature_image_id');
						$certURL = TUTOR_CERT()->url.'/assets/images/signature.png';
						if ($signature_id){
							$certURL = wp_get_attachment_url($signature_id);
						}
						?>
                        <img src="<?php echo $certURL; ?>" />
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
                <!--td class="first-col"> <p>15/2020</p> </td-->
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