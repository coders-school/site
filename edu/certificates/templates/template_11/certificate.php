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

        <h3>Certificate of completion</h3>
        <p>This is to certify that </p>
        <h1>
            Martin Wilson
        <!--
        -->
        </h1>
        <p> has successfully completed the course</p>
        <h2>Multithreading: condition variable, atomic, call once</h2>

    </div>

    <div class="logo">
        <img src="<?php echo $this->template['url'].'logo.png'; ?>" />
    </div>

    <div class="certificate-footer">
        <table>
            <tr>
                <td class="first-col"><p>Wrocław, 3rd February 2021</p></td>
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
                <td class="first-col"> <p>
                    48/2021

                </p> </td>
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
