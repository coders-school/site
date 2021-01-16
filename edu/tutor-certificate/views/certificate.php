<?php
/**
 * Template for displaying certificate
 *
 * @since v.1.5.1
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Certificate
 * @version 1.5.1
 */

get_header(); ?>

    <style>
        body {
            background-color: #e9ebee;
        }
        .tutor-certificate-container {
            display: flex;
            flex-wrap: wrap;
            margin-left: -30px;
            margin-bottom: 50px;
            font-family: "OpenSans";
        }
        .tutor-certificate-container > div {
            margin-left: 30px;
        }
        .tutor-certificate-img-container {
            width: calc(74% - 30px);
        }
        .tutor-certificate-img-container img {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 32px 34px 0 rgba(219, 215, 215, 0.61);
            background-color: #ffffff;
        }
        .tutor-certificate-sidebar {
            width: calc(26% - 30px);
            padding-top: 50px;
        }
        .tutor-certificate-btn-group {
            display: flex;
            flex-wrap: wrap;
        }
        .tutor-certificate-btn-group .tutor-copy-link{
            width: calc(80% - 15px);
            margin-right: 15px;
        }
        .tutor-certificate-btn-group .tutor-share-btn{
            width: 20%;
        }
        .tutor-certificate-sidebar-btn-container > div {
            margin-bottom: 15px;
        }
        .tutor-certificate-sidebar-btn-container button {
            text-transform: uppercase;
        }
        .tutor-certificate-sidebar-btn-container button i {
            font-size: 20px;
        }
        .tutor-certificate-sidebar-btn-container button i.tutor-icon-share {
            margin-right: 0;
        }
        .tutor-certificate-sidebar-btn-container .bordered-btn {
            background: transparent;
        }
        .tutor-certificate-sidebar-btn-container .download-btn {
            height: 46px;
            position: relative;
            justify-content: left;
        }
        .tutor-certificate-sidebar-btn-container .download-btn i {
            text-align: right;
            width: 42px;
            display: inline-block;
            border-left: 1px solid #033cc5;
            padding: 15px;
            position: absolute;
            right: 0;
            bottom: 0;
            top: 0;
        }
        .tutor-certificate-sidebar-course {
            margin-top: 75px;
        }
        .tutor-certificate-sidebar-course h3{
            font-size: 18px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.56;
            color: #4b5981;
        }
        .tutor-certificate-sidebar-course .tutor-star-rating-group {
            display: block;
            margin-bottom: 5px;
        }
        .tutor-certificate-sidebar-course h1.course-name{
            font-size: 18px;
            margin-bottom: 20px;
        }
        .tutor-sidebar-course-title {
            font-size: 20px;
            line-height: 1.56;
            margin-bottom: 20px;
            color: #4b5981;
        }
        .tutor-sidebar-course-author {
            font-size: 14px;
            display: flex;
        }
        .tutor-sidebar-course-author img {
            height: 25px;
            width: 25px;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 7px;
        }
        .tutor-dropdown {
            position: relative;
        }
        .tutor-dropdown-content {
            display: none;
            top: 58px;
            right: 0;
            position: absolute;
            box-shadow: 0 22px 24px 0 rgba(219, 215, 215, 0.61);
            z-index: 999;
        }
        .tutor-dropdown-content:before {
            content: "";
            position: absolute;
            right: 20px;
            background: -webkit-linear-gradient(135deg, transparent 50%, white 50%);
            background: linear-gradient(-45deg, transparent 50%, white 50%);
            height: 10px;
            width: 10px;
            border-radius: 3px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            top: -4px;
            z-index: -1;
        }
        .tutor-dropdown-content ul {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }
        .tutor-dropdown-content ul li {
            border-right: 1px solid #e9ebee;
        }
        .tutor-dropdown-content ul li a:hover {
            background: #fbfbfb;
            cursor: pointer;
        }
        .tutor-dropdown-content li:last-child {
            border-right: none;
        }
        .tutor-dropdown-content li a {
            color: #1d1f37;
            font-size: 16px;
            text-decoration: none;
            line-height: 47px;
            text-align: center;
            padding: 0 20px;
            display: block;
            background-color: #ffffff;
        }
        .tutor-dropdown-content ul li:first-child a {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .tutor-dropdown-content ul li:last-child a {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }



        .tutor-dropdown-content .tutor-social-share-wrap button{
            color: #81878F;
            background: #ffffff;
            padding: 10px 15px;
        }
        .tutor-dropdown-content .tutor-social-share-wrap button:hover {
            color: #1b52d8;
        }
        .tutor-show {
            display: block;
        }
        @media (max-width: 767px) {
            .tutor-certificate-img-container {
                width: 100%;
            }
            .tutor-certificate-sidebar {
                width: 100%;
            }
            .tutor-certificate-sidebar-course {
                margin-top: 45px;
            }
        }
        @media (min-width : 768px) and (max-width : 1024px) {
            .tutor-certificate-img-container {
                width: calc(70% - 30px);
            }
            .tutor-certificate-sidebar {
                width: calc(30% - 30px);
            }
        }
    </style>

    <div class="<?php tutor_container_classes(); ?>">
		<?php do_action('tutor_certificate/before_content'); ?>

        <div class="tutor-certificate-container">
            <div class="tutor-certificate-img-container">
                <img id="tutor-pro-certificate-preview" src="<?php echo $cert_img; ?>" />
            </div>

            <div class="tutor-certificate-sidebar">
                <div class="tutor-certificate-sidebar-btn-container">
                    <div class="tutor-dropdown">
                        <button class="tutor-dropbtn tutor-btn tutor-button-block download-btn"><?php _e('Download Certificate', 'tutor-pro'); ?> <i class="tutor-icon-download"></i></button>
                        <div class="tutor-dropdown-content">
                            <ul>
                                <li>
                                    <a id="tutor-pro-certificate-download-pdf" data-cert_hash="<?php echo $cert_hash; ?>" data-course_id="<?php echo $course_id; ?>">
                                        <i class="tutor-icon-pdf"></i> <?php _e('PDF', 'tutor-pro'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="tutor-pro-certificate-download-image">
                                        <i class="tutor-icon-jpg"></i> <?php _e('JPG', 'tutor-pro'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tutor-certificate-btn-group tutor-dropdown">
                        <button class="tutor-copy-link tutor-btn bordered-btn tutor-button-block"><i class="tutor-icon-copy"></i> <?php _e('Copy Link', 'tutor-pro'); ?></button>
                        <div class="tutor-share-btn">
                            <button class="tutor-dropbtn tutor-btn bordered-btn tutor-button-block"><i class="tutor-icon-share"></i></button>
                            <div class="tutor-dropdown-content">
								<?php tutor_social_share(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tutor-certificate-sidebar-course">
                    <h3><?php _e('About Course', 'tutor-pro'); ?></h3>
                    <div class="tutor-course-loop-level"><?php echo get_tutor_course_level($course->ID); ?></div>
					<?php
					$course_rating = tutor_utils()->get_course_rating($course->ID);
					tutor_utils()->star_rating_generator($course_rating->rating_avg);
					?>

                    <h1 class="course-name"><a href="<?php echo $course->guid; ?>" class="tutor-sidebar-course-title"><?php echo $course->post_title;
                    ?></a></h1>
                    <div class="tutor-sidebar-course-author">
                        <img src="<?php echo get_avatar_url($course->post_author); ?>"/>
                        <span>
                            <?php _e('by', 'tutor-pro'); ?>
                            <a href="<?php echo tutor_utils()->profile_url($course->post_author); ?>">
                                <strong><?php echo get_the_author_meta('display_name', $course->post_author); ?></strong>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .wrap -->

<?php get_footer();