<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoHomePageController extends AbstractController
{
    /**
     * @Route("/", name="indexpage")
     */    public function notindex(): Response
    {
        return $this->render('demo_home_page/index.html.twig', [
            'controller_name' => 'DemoHomePageController',
        ]);
    }
    /**
     * @Route("/reservation-form", name="reservation-form")
     */
    public function reservationForm()
    {
        return $this->render('reservation-form.twig');
    }
    /**
     * @Route("/index-rtl-sp-layout2", name="index-rtl-sp-layout2")
     */
    public function indexRtlSpLayout2()
    {
        return $this->render('index-rtl-sp-layout2.twig');
    }
    /**
     * @Route("/index-rtl-sp-layout3", name="index-rtl-sp-layout3")
     */
    public function indexRtlSpLayout3()
    {
        return $this->render('index-rtl-sp-layout3.twig');
    }
    /**
     * @Route("/index-rtl-sp-layout4", name="index-rtl-sp-layout4")
     */
    public function indexRtlSpLayout4()
    {
        return $this->render('index-rtl-sp-layout4.twig');
    }
    /**
     * @Route("/index-dark-sp-layout1", name="index-dark-sp-layout1")
     */
    public function indexDarkSpLayout1()
    {
        return $this->render('index-dark-sp-layout1.twig');
    }
    /**
     * @Route("/index-dark-sp-layout2", name="index-dark-sp-layout2")
     */
    public function indexDarkSpLayout2()
    {
        return $this->render('index-dark-sp-layout2.twig');
    }
    /**
     * @Route("/index-dark-sp-layout3", name="index-dark-sp-layout3")
     */
    public function indexDarkSpLayout3()
    {
        return $this->render('index-dark-sp-layout3.twig');
    }
    /**
     * @Route("/index-dark-sp-layout4", name="index-dark-sp-layout4")
     */
    public function indexDarkSpLayout4()
    {
        return $this->render('index-dark-sp-layout4.twig');
    }
    /**
     * @Route("/form-login-style2", name="form-login-style2")
     */
    public function formLoginStyle2()
    {
        return $this->render('form-login-style2.twig');
    }
    /**
     * @Route("/form-login-style3", name="form-login-style3")
     */
    public function formLoginStyle3()
    {
        return $this->render('form-login-style3.twig');
    }
    /**
     * @Route("/form-register-style2", name="form-register-style2")
     */
    public function formRegisterStyle2()
    {
        return $this->render('form-register-style2.twig');
    }
    /**
     * @Route("/form-register-style3", name="form-register-style3")
     */
    public function formRegisterStyle3()
    {
        return $this->render('form-register-style3.twig');
    }
    /**
     * @Route("/form-appointment-style2", name="form-appointment-style2")
     */
    public function formAppointmentStyle2()
    {
        return $this->render('form-appointment-style2.twig');
    }
    /**
     * @Route("/form-appointment-style3", name="form-appointment-style3")
     */
    public function formAppointmentStyle3()
    {
        return $this->render('form-appointment-style3.twig');
    }
    /**
     * @Route("/form-quick-contact-style2", name="form-quick-contact-style2")
     */
    public function formQuickContactStyle2()
    {
        return $this->render('form-quick-contact-style2.twig');
    }
    /**
     * @Route("/form-quick-contact-style3", name="form-quick-contact-style3")
     */
    public function formQuickContactStyle3()
    {
        return $this->render('form-quick-contact-style3.twig');
    }
    /**
     * @Route("/form-job-apply-style2", name="form-job-apply-style2")
     */
    public function formJobApplyStyle2()
    {
        return $this->render('form-job-apply-style2.twig');
    }
    /**
     * @Route("/form-job-apply-style3", name="form-job-apply-style3")
     */
    public function formJobApplyStyle3()
    {
        return $this->render('form-job-apply-style3.twig');
    }
    /**
     * @Route("/page-404-style1", name="page-404-style1")
     */
    public function page404Style1()
    {
        return $this->render('page-404-style1.twig');
    }
    /**
     * @Route("/page-404-style2", name="page-404-style2")
     */
    public function page404Style2()
    {
        return $this->render('page-404-style2.twig');
    }
    /**
     * @Route("/page-404-style3", name="page-404-style3")
     */
    public function page404Style3()
    {
        return $this->render('page-404-style3.twig');
    }
    /**
     * @Route("/page-under-construction-style1", name="page-under-construction-style1")
     */
    public function pageUnderConstructionStyle1()
    {
        return $this->render('page-under-construction-style1.twig');
    }
    /**
     * @Route("/page-under-construction-style2", name="page-under-construction-style2")
     */
    public function pageUnderConstructionStyle2()
    {
        return $this->render('page-under-construction-style2.twig');
    }
    /**
     * @Route("/page-under-construction-style3", name="page-under-construction-style3")
     */
    public function pageUnderConstructionStyle3()
    {
        return $this->render('page-under-construction-style3.twig');
    }
    /**
     * @Route("/page-under-construction-style4", name="page-under-construction-style4")
     */
    public function pageUnderConstructionStyle4()
    {
        return $this->render('page-under-construction-style4.twig');
    }
    /**
     * @Route("/page-coming-soon-style1", name="page-coming-soon-style1")
     */
    public function pageComingSoonStyle1()
    {
        return $this->render('page-coming-soon-style1.twig');
    }
    /**
     * @Route("/page-coming-soon-style2", name="page-coming-soon-style2")
     */
    public function pageComingSoonStyle2()
    {
        return $this->render('page-coming-soon-style2.twig');
    }
    /**
     * @Route("/page-coming-soon-style3", name="page-coming-soon-style3")
     */
    public function pageComingSoonStyle3()
    {
        return $this->render('page-coming-soon-style3.twig');
    }
    /**
     * @Route("/shortcode-working-process", name="shortcode-working-process")
     */
    public function shortcodeWorkingProcess()
    {
        return $this->render('shortcode-working-process.twig');
    }
    /**
     * @Route("/shortcode-widgets", name="shortcode-widgets")
     */
    public function shortcodeWidgets()
    {
        return $this->render('shortcode-widgets.twig');
    }
    /**
     * @Route("/shortcode-vertical-timeline", name="shortcode-vertical-timeline")
     */
    public function shortcodeVerticalTimeline()
    {
        return $this->render('shortcode-vertical-timeline.twig');
    }
    /**
     * @Route("/shortcode-typography", name="shortcode-typography")
     */
    public function shortcodeTypography()
    {
        return $this->render('shortcode-typography.twig');
    }
    /**
     * @Route("/shortcode-twitter", name="shortcode-twitter")
     */
    public function shortcodeTwitter()
    {
        return $this->render('shortcode-twitter.twig');
    }
    /**
     * @Route("/shortcode-timer-slick-circular", name="shortcode-timer-slick-circular")
     */
    public function shortcodeTimerSlickCircular()
    {
        return $this->render('shortcode-timer-slick-circular.twig');
    }
    /**
     * @Route("/shortcode-timer-flipclock", name="shortcode-timer-flipclock")
     */
    public function shortcodeTimerFlipclock()
    {
        return $this->render('shortcode-timer-flipclock.twig');
    }
    /**
     * @Route("/shortcode-timer-final-countdown", name="shortcode-timer-final-countdown")
     */
    public function shortcodeTimerFinalCountdown()
    {
        return $this->render('shortcode-timer-final-countdown.twig');
    }
    /**
     * @Route("/shortcode-title", name="shortcode-title")
     */
    public function shortcodeTitle()
    {
        return $this->render('shortcode-title.twig');
    }
    /**
     * @Route("/shortcode-thumbnails-carousels", name="shortcode-thumbnails-carousels")
     */
    public function shortcodeThumbnailsCarousels()
    {
        return $this->render('shortcode-thumbnails-carousels.twig');
    }
    /**
     * @Route("/shortcode-textblock", name="shortcode-textblock")
     */
    public function shortcodeTextblock()
    {
        return $this->render('shortcode-textblock.twig');
    }
    /**
     * @Route("/shortcode-tabs", name="shortcode-tabs")
     */
    public function shortcodeTabs()
    {
        return $this->render('shortcode-tabs.twig');
    }
    /**
     * @Route("/shortcode-tables", name="shortcode-tables")
     */
    public function shortcodeTables()
    {
        return $this->render('shortcode-tables.twig');
    }
    /**
     * @Route("/shortcode-subscribe", name="shortcode-subscribe")
     */
    public function shortcodeSubscribe()
    {
        return $this->render('shortcode-subscribe.twig');
    }
    /**
     * @Route("/shortcode-styled-icons", name="shortcode-styled-icons")
     */
    public function shortcodeStyledIcons()
    {
        return $this->render('shortcode-styled-icons.twig');
    }
    /**
     * @Route("/shortcode-smoothscrolling", name="shortcode-smoothscrolling")
     */
    public function shortcodeSmoothscrolling()
    {
        return $this->render('shortcode-smoothscrolling.twig');
    }
    /**
     * @Route("/shortcode-sliders", name="shortcode-sliders")
     */
    public function shortcodeSliders()
    {
        return $this->render('shortcode-sliders.twig');
    }
    /**
     * @Route("/shortcode-sitemap", name="shortcode-sitemap")
     */
    public function shortcodeSitemap()
    {
        return $this->render('shortcode-sitemap.twig');
    }
    /**
     * @Route("/shortcode-separator", name="shortcode-separator")
     */
    public function shortcodeSeparator()
    {
        return $this->render('shortcode-separator.twig');
    }
    /**
     * @Route("/shortcode-responsive", name="shortcode-responsive")
     */
    public function shortcodeResponsive()
    {
        return $this->render('shortcode-responsive.twig');
    }
    /**
     * @Route("/shortcode-progressbar", name="shortcode-progressbar")
     */
    public function shortcodeProgressbar()
    {
        return $this->render('shortcode-progressbar.twig');
    }
    /**
     * @Route("/shortcode-pagination", name="shortcode-pagination")
     */
    public function shortcodePagination()
    {
        return $this->render('shortcode-pagination.twig');
    }
    /**
     * @Route("/shortcode-owl-carousel", name="shortcode-owl-carousel")
     */
    public function shortcodeOwlCarousel()
    {
        return $this->render('shortcode-owl-carousel.twig');
    }
    /**
     * @Route("/shortcode-navigation", name="shortcode-navigation")
     */
    public function shortcodeNavigation()
    {
        return $this->render('shortcode-navigation.twig');
    }
    /**
     * @Route("/shortcode-modal-lightbox", name="shortcode-modal-lightbox")
     */
    public function shortcodeModalLightbox()
    {
        return $this->render('shortcode-modal-lightbox.twig');
    }
    /**
     * @Route("/shortcode-modal-bootstrap", name="shortcode-modal-bootstrap")
     */
    public function shortcodeModalBootstrap()
    {
        return $this->render('shortcode-modal-bootstrap.twig');
    }
    /**
     * @Route("/shortcode-media-embed", name="shortcode-media-embed")
     */
    public function shortcodeMediaEmbed()
    {
        return $this->render('shortcode-media-embed.twig');
    }
    /**
     * @Route("/shortcode-maps", name="shortcode-maps")
     */
    public function shortcodeMaps()
    {
        return $this->render('shortcode-maps.twig');
    }
    /**
     * @Route("/shortcode-lists", name="shortcode-lists")
     */
    public function shortcodeLists()
    {
        return $this->render('shortcode-lists.twig');
    }
    /**
     * @Route("/shortcode-listgroup-panels", name="shortcode-listgroup-panels")
     */
    public function shortcodeListgroupPanels()
    {
        return $this->render('shortcode-listgroup-panels.twig');
    }
    /**
     * @Route("/shortcode-labels-badges", name="shortcode-labels-badges")
     */
    public function shortcodeLabelsBadges()
    {
        return $this->render('shortcode-labels-badges.twig');
    }
    /**
     * @Route("/shortcode-instagram", name="shortcode-instagram")
     */
    public function shortcodeInstagram()
    {
        return $this->render('shortcode-instagram.twig');
    }
    /**
     * @Route("/shortcode-image-box", name="shortcode-image-box")
     */
    public function shortcodeImageBox()
    {
        return $this->render('shortcode-image-box.twig');
    }
    /**
     * @Route("/shortcode-icon-strokegap", name="shortcode-icon-strokegap")
     */
    public function shortcodeIconStrokegap()
    {
        return $this->render('shortcode-icon-strokegap.twig');
    }
    /**
     * @Route("/shortcode-icon-fontawesome-tutorial", name="shortcode-icon-fontawesome-tutorial")
     */
    public function shortcodeIconFontawesomeTutorial()
    {
        return $this->render('shortcode-icon-fontawesome-tutorial.twig');
    }
    /**
     * @Route("/shortcode-icon-fontawesome", name="shortcode-icon-fontawesome")
     */
    public function shortcodeIconFontawesome()
    {
        return $this->render('shortcode-icon-fontawesome.twig');
    }
    /**
     * @Route("/shortcode-icon-flat-color-icons", name="shortcode-icon-flat-color-icons")
     */
    public function shortcodeIconFlatColorIcons()
    {
        return $this->render('shortcode-icon-flat-color-icons.twig');
    }
    /**
     * @Route("/shortcode-icon-elegant-icons", name="shortcode-icon-elegant-icons")
     */
    public function shortcodeIconElegantIcons()
    {
        return $this->render('shortcode-icon-elegant-icons.twig');
    }
    /**
     * @Route("/shortcode-icon-7stroke", name="shortcode-icon-7stroke")
     */
    public function shortcodeIcon7stroke()
    {
        return $this->render('shortcode-icon-7stroke.twig');
    }
    /**
     * @Route("/shortcode-iconbox", name="shortcode-iconbox")
     */
    public function shortcodeIconbox()
    {
        return $this->render('shortcode-iconbox.twig');
    }
    /**
     * @Route("/shortcode-forms", name="shortcode-forms")
     */
    public function shortcodeForms()
    {
        return $this->render('shortcode-forms.twig');
    }
    /**
     * @Route("/shortcode-flipbox", name="shortcode-flipbox")
     */
    public function shortcodeFlipbox()
    {
        return $this->render('shortcode-flipbox.twig');
    }
    /**
     * @Route("/shortcode-flickr-feed", name="shortcode-flickr-feed")
     */
    public function shortcodeFlickrFeed()
    {
        return $this->render('shortcode-flickr-feed.twig');
    }
    /**
     * @Route("/shortcode-datetime-datepair", name="shortcode-datetime-datepair")
     */
    public function shortcodeDatetimeDatepair()
    {
        return $this->render('shortcode-datetime-datepair.twig');
    }
    /**
     * @Route("/shortcode-datetime-datetimepicker", name="shortcode-datetime-datetimepicker")
     */
    public function shortcodeDatetimeDatetimepicker()
    {
        return $this->render('shortcode-datetime-datetimepicker.twig');
    }
    /**
     * @Route("/shortcode-datetime-timepicker", name="shortcode-datetime-timepicker")
     */
    public function shortcodeDatetimeTimepicker()
    {
        return $this->render('shortcode-datetime-timepicker.twig');
    }
    /**
     * @Route("/shortcode-datetime-datepicker", name="shortcode-datetime-datepicker")
     */
    public function shortcodeDatetimeDatepicker()
    {
        return $this->render('shortcode-datetime-datepicker.twig');
    }
    /**
     * @Route("/shortcode-dropcaps", name="shortcode-dropcaps")
     */
    public function shortcodeDropcaps()
    {
        return $this->render('shortcode-dropcaps.twig');
    }
    /**
     * @Route("/shortcode-divider", name="shortcode-divider")
     */
    public function shortcodeDivider()
    {
        return $this->render('shortcode-divider.twig');
    }
    /**
     * @Route("/shortcode-columns-grids", name="shortcode-columns-grids")
     */
    public function shortcodeColumnsGrids()
    {
        return $this->render('shortcode-columns-grids.twig');
    }
    /**
     * @Route("/shortcode-charts", name="shortcode-charts")
     */
    public function shortcodeCharts()
    {
        return $this->render('shortcode-charts.twig');
    }
    /**
     * @Route("/shortcode-call-to-actions", name="shortcode-call-to-actions")
     */
    public function shortcodeCallToActions()
    {
        return $this->render('shortcode-call-to-actions.twig');
    }
    /**
     * @Route("/shortcode-buttons", name="shortcode-buttons")
     */
    public function shortcodeButtons()
    {
        return $this->render('shortcode-buttons.twig');
    }
    /**
     * @Route("/shortcode-button-hover-effect", name="shortcode-button-hover-effect")
     */
    public function shortcodeButtonHoverEffect()
    {
        return $this->render('shortcode-button-hover-effect.twig');
    }
    /**
     * @Route("/shortcode-button-groups-and-dropdowns", name="shortcode-button-groups-and-dropdowns")
     */
    public function shortcodeButtonGroupsAndDropdowns()
    {
        return $this->render('shortcode-button-groups-and-dropdowns.twig');
    }
    /**
     * @Route("/shortcode-blockquotes", name="shortcode-blockquotes")
     */
    public function shortcodeBlockquotes()
    {
        return $this->render('shortcode-blockquotes.twig');
    }
    /**
     * @Route("/shortcode-background-html5-video", name="shortcode-background-html5-video")
     */
    public function shortcodeBackgroundHtml5Video()
    {
        return $this->render('shortcode-background-html5-video.twig');
    }
    /**
     * @Route("/shortcode-animations", name="shortcode-animations")
     */
    public function shortcodeAnimations()
    {
        return $this->render('shortcode-animations.twig');
    }
    /**
     * @Route("/shortcode-alerts", name="shortcode-alerts")
     */
    public function shortcodeAlerts()
    {
        return $this->render('shortcode-alerts.twig');
    }
    /**
     * @Route("/shortcode-accordion", name="shortcode-accordion")
     */
    public function shortcodeAccordion()
    {
        return $this->render('shortcode-accordion.twig');
    }
    /**
     * @Route("/blog-single-right-sidebar", name="blog-single-right-sidebar")
     */
    public function blogSingleRightSidebar()
    {
        return $this->render('blog-single-right-sidebar.twig');
    }
    /**
     * @Route("/blog-single-no-sidebar", name="blog-single-no-sidebar")
     */
    public function blogSingleNoSidebar()
    {
        return $this->render('blog-single-no-sidebar.twig');
    }
    /**
     * @Route("/blog-grid-4-column", name="blog-grid-4-column")
     */
    public function blogGrid4Column()
    {
        return $this->render('blog-grid-4-column.twig');
    }
    /**
     * @Route("/blog-grid-3-column", name="blog-grid-3-column")
     */
    public function blogGrid3Column()
    {
        return $this->render('blog-grid-3-column.twig');
    }
    /**
     * @Route("/blog-grid-2-column", name="blog-grid-2-column")
     */
    public function blogGrid2Column()
    {
        return $this->render('blog-grid-2-column.twig');
    }

    /**
     * @Route("/blog-classic-right-sidebar", name="blog-classic-right-sidebar")
     */
    public function blogClassicRightSidebar()
    {
        return $this->render('blog-classic-right-sidebar.twig');
    }
    /**
     * @Route("/blog-classic-left-sidebar", name="blog-classic-left-sidebar")
     */
    public function blogClassicLeftSidebar()
    {
        return $this->render('blog-classic-left-sidebar.twig');
    }
    /**
     * @Route("/blog-classic-no-sidebar", name="blog-classic-no-sidebar")
     */
    public function blogClassicNoSidebar()
    {
        return $this->render('blog-classic-no-sidebar.twig');
    }
    /**
     * @Route("/shop-product-details", name="shop-product-details")
     */
    public function shopProductDetails()
    {
        return $this->render('shop-product-details.twig');
    }
    /**
     * @Route("/shop-category", name="shop-category")
     */
    public function shopCategory()
    {
        return $this->render('shop-category.twig');
    }
    /**
     * @Route("/page-faq-style4", name="page-faq-style4")
     */
    public function pageFaqStyle4()
    {
        return $this->render('page-faq-style4.twig');
    }
    /**
     * @Route("/page-faq-style3", name="page-faq-style3")
     */
    public function pageFaqStyle3()
    {
        return $this->render('page-faq-style3.twig');
    }
    /**
     * @Route("/page-faq-style2", name="page-faq-style2")
     */
    public function pageFaqStyle2()
    {
        return $this->render('page-faq-style2.twig');
    }
    /**
     * @Route("/page-faq-style1", name="page-faq-style1")
     */
    public function pageFaqStyle1()
    {
        return $this->render('page-faq-style1.twig');
    }
    /**
     * @Route("/page-pricing-style2", name="page-pricing-style2")
     */
    public function pagePricingStyle2()
    {
        return $this->render('page-pricing-style2.twig');
    }
    /**
     * @Route("/page-pricing-style1", name="page-pricing-style1")
     */
    public function pagePricingStyle1()
    {
        return $this->render('page-pricing-style1.twig');
    }
    /**
     * @Route("/page-booking-form", name="page-booking-form")
     */
    public function pageBookingForm()
    {
        return $this->render('page-booking-form.twig');
    }
    /**
     * @Route("/page-events", name="page-events")
     */
    public function pageEvents()
    {
        return $this->render('page-events.twig');
    }
    /**
     * @Route("/page-facilities", name="page-facilities")
     */
    public function pageFacilities()
    {
        return $this->render('page-facilities.twig');
    }
    /**
     * @Route("/page-trainers-style2", name="page-trainers-style2")
     */
    public function pageTrainersStyle2()
    {
        return $this->render('page-trainers-style2.twig');
    }
    /**
     * @Route("/page-teachers-details", name="page-teachers-details")
     */
    public function pageteachersdetails()
    {
        return $this->render('page-trainers-style2.twig');
    }
    /**
     * @Route("/page-trainers-style1", name="page-trainers-style1")
     */
    public function pageTrainersStyle1()
    {
        return $this->render('page-trainers-style1.twig');
    }
    /**
     * @Route("/page-course-list-4col", name="page-course-list-4col")
     */
    public function pageCourseList4col()
    {
        return $this->render('page-course-list-4col.twig');
    }
    /**
     * @Route("/page-course-list-3col", name="page-course-list-3col")
     */
    public function pageCourseList3col()
    {
        return $this->render('page-course-list-3col.twig');
    }
    /**
     * @Route("/page-video-gallery-4col", name="page-video-gallery-4col")
     */
    public function pageVideoGallery4col()
    {
        return $this->render('page-video-gallery-4col.twig');
    }
    /**
     * @Route("/page-video-gallery-3col", name="page-video-gallery-3col")
     */
    public function pageVideoGallery3col()
    {
        return $this->render('page-video-gallery-3col.twig');
    }
    /**
     * @Route("/page-video-gallery", name="page-video-gallery")
     */
    public function pageVideoGallery()
    {
        return $this->render('page-video-gallery.twig');
    }
    /**
     * @Route("/page-image-gallery-4col", name="page-image-gallery-4col")
     */
    public function pageImageGallery4col()
    {
        return $this->render('page-image-gallery-4col.twig');
    }
    /**
     * @Route("/page-image-gallery-3col", name="page-image-gallery-3col")
     */
    public function pageImageGallery3col()
    {
        return $this->render('page-image-gallery-3col.twig');
    }
    /**
     * @Route("/page-image-gallery", name="page-image-gallery")
     */
    public function pageImageGallery()
    {
        return $this->render('page-image-gallery.twig');
    }
    /**
     * @Route("/page-about-style2", name="page-about-style2")
     */
    public function pageAboutStyle2()
    {
        return $this->render('page-about-style2.twig');
    }
    /**
     * @Route("/features-popup-promo-box-cookie-enabled", name="features-popup-promo-box-cookie-enabled")
     */
    public function featuresPopupPromoBoxCookieEnabled()
    {
        return $this->render('features-popup-promo-box-cookie-enabled.twig');
    }
    /**
     * @Route("/features-popup-promo-box", name="features-popup-promo-box")
     */
    public function featuresPopupPromoBox()
    {
        return $this->render('features-popup-promo-box.twig');
    }
    /**
     * @Route("/form-paypal-order-style2", name="form-paypal-order-style2")
     */
    public function formPaypalOrderStyle2()
    {
        return $this->render('form-paypal-order-style2.twig');
    }
    /**
     * @Route("/form-paypal-order-style1", name="form-paypal-order-style1")
     */
    public function formPaypalOrderStyle1()
    {
        return $this->render('form-paypal-order-style1.twig');
    }
    /**
     * @Route("/form-paypal-cart-style1", name="form-paypal-cart-style1")
     */
    public function formPaypalCartStyle1()
    {
        return $this->render('form-paypal-cart-style1.twig');
    }
    /**
     * @Route("/form-paypal-donate-both-onetime-recurring-style4", name="form-paypal-donate-both-onetime-recurring-style4")
     */
    public function formPaypalDonateBothOnetimeRecurringStyle4()
    {
        return $this->render('form-paypal-donate-both-onetime-recurring-style4.twig');
    }
    /**
     * @Route("/form-paypal-donate-both-onetime-recurring-style3", name="form-paypal-donate-both-onetime-recurring-style3")
     */
    public function formPaypalDonateBothOnetimeRecurringStyle3()
    {
        return $this->render('form-paypal-donate-both-onetime-recurring-style3.twig');
    }
    /**
     * @Route("/form-paypal-donate-both-onetime-recurring-style2", name="form-paypal-donate-both-onetime-recurring-style2")
     */
    public function formPaypalDonateBothOnetimeRecurringStyle2()
    {
        return $this->render('form-paypal-donate-both-onetime-recurring-style2.twig');
    }
    /**
     * @Route("/form-paypal-donate-both-onetime-recurring-style1", name="form-paypal-donate-both-onetime-recurring-style1")
     */
    public function formPaypalDonateBothOnetimeRecurringStyle1()
    {
        return $this->render('form-paypal-donate-both-onetime-recurring-style1.twig');
    }
    /**
     * @Route("/form-paypal-donate-recurring-style5", name="form-paypal-donate-recurring-style5")
     */
    public function formPaypalDonateRecurringStyle5()
    {
        return $this->render('form-paypal-donate-recurring-style5.twig');
    }
    /**
     * @Route("/form-paypal-donate-recurring-style4", name="form-paypal-donate-recurring-style4")
     */
    public function formPaypalDonateRecurringStyle4()
    {
        return $this->render('form-paypal-donate-recurring-style4.twig');
    }
    /**
     * @Route("/form-paypal-donate-recurring-style3", name="form-paypal-donate-recurring-style3")
     */
    public function formPaypalDonateRecurringStyle3()
    {
        return $this->render('form-paypal-donate-recurring-style3.twig');
    }
    /**
     * @Route("/form-paypal-donate-recurring-style2", name="form-paypal-donate-recurring-style2")
     */
    public function formPaypalDonateRecurringStyle2()
    {
        return $this->render('form-paypal-donate-recurring-style2.twig');
    }
    /**
     * @Route("/form-paypal-donate-recurring-style1", name="form-paypal-donate-recurring-style1")
     */
    public function formPaypalDonateRecurringStyle1()
    {
        return $this->render('form-paypal-donate-recurring-style1.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style7", name="form-paypal-donate-onetime-style7")
     */
    public function formPaypalDonateOnetimeStyle7()
    {
        return $this->render('form-paypal-donate-onetime-style7.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style6", name="form-paypal-donate-onetime-style6")
     */
    public function formPaypalDonateOnetimeStyle6()
    {
        return $this->render('form-paypal-donate-onetime-style6.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style5", name="form-paypal-donate-onetime-style5")
     */
    public function formPaypalDonateOnetimeStyle5()
    {
        return $this->render('form-paypal-donate-onetime-style5.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style4", name="form-paypal-donate-onetime-style4")
     */
    public function formPaypalDonateOnetimeStyle4()
    {
        return $this->render('form-paypal-donate-onetime-style4.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style3", name="form-paypal-donate-onetime-style3")
     */
    public function formPaypalDonateOnetimeStyle3()
    {
        return $this->render('form-paypal-donate-onetime-style3.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style2", name="form-paypal-donate-onetime-style2")
     */
    public function formPaypalDonateOnetimeStyle2()
    {
        return $this->render('form-paypal-donate-onetime-style2.twig');
    }
    /**
     * @Route("/form-paypal-donate-onetime-style1", name="form-paypal-donate-onetime-style1")
     */
    public function formPaypalDonateOnetimeStyle1()
    {
        return $this->render('form-paypal-donate-onetime-style1.twig');
    }
    /**
     * @Route("/form-job-apply-style1", name="form-job-apply-style1")
     */
    public function formJobApplyStyle1()
    {
        return $this->render('form-job-apply-style1.twig');
    }
    /**
     * @Route("/form-quick-contact-style1", name="form-quick-contact-style1")
     */
    public function formQuickContactStyle1()
    {
        return $this->render('form-quick-contact-style1.twig');
    }
    /**
     * @Route("/form-appointment-style1", name="form-appointment-style1")
     */
    public function formAppointmentStyle1()
    {
        return $this->render('form-appointment-style1.twig');
    }
    /**
     * @Route("/form-subscribe", name="form-subscribe")
     */
    public function formSubscribe()
    {
        return $this->render('form-subscribe.twig');
    }
    /**
     * @Route("/form-register-style1", name="form-register-style1")
     */
    public function formRegisterStyle1()
    {
        return $this->render('form-register-style1.twig');
    }
    /**
     * @Route("/form-login-style1", name="form-login-style1")
     */
    public function formLoginStyle1()
    {
        return $this->render('form-login-style1.twig');
    }
    /**
     * @Route("/form-login-register-style2", name="form-login-register-style2")
     */
    public function formLoginRegisterStyle2()
    {
        return $this->render('form-login-register-style2.twig');
    }
    /**
     * @Route("/form-login-register-style1", name="form-login-register-style1")
     */
    public function formLoginRegisterStyle1()
    {
        return $this->render('form-login-register-style1.twig');
    }
    /**
     * @Route("/page-contact6-with-multiple-marker", name="page-contact6-with-multiple-marker")
     */
    public function pageContact6WithMultipleMarker()
    {
        return $this->render('page-contact6-with-multiple-marker.twig');
    }
    /**
     * @Route("/page-contact5-with-multiple-marker", name="page-contact5-with-multiple-marker")
     */
    public function pageContact5WithMultipleMarker()
    {
        return $this->render('page-contact5-with-multiple-marker.twig');
    }
    /**
     * @Route("/page-contact-style4", name="page-contact-style4")
     */
    public function pageContactStyle4()
    {
        return $this->render('page-contact-style4.twig');
    }
    /**
     * @Route("/page-contact-style3", name="page-contact-style3")
     */
    public function pageContactStyle3()
    {
        return $this->render('page-contact-style3.twig');
    }
    /**
     * @Route("/page-contact-style2", name="page-contact-style2")
     */
    public function pageContactStyle2()
    {
        return $this->render('page-contact-style2.twig');
    }
    /**
     * @Route("/page-contact-style1", name="page-contact-style1")
     */
    public function pageContactStyle1()
    {
        return $this->render('page-contact-style1.twig');
    }
    /**
     * @Route("/features-home-owl-fullwidth-carousel", name="features-home-owl-fullwidth-carousel")
     */
    public function featuresHomeOwlFullwidthCarousel()
    {
        return $this->render('features-home-owl-fullwidth-carousel.twig');
    }
    /**
     * @Route("/features-home-bg-image-slider", name="features-home-bg-image-slider")
     */
    public function featuresHomeBgImageSlider()
    {
        return $this->render('features-home-bg-image-slider.twig');
    }
    /**
     * @Route("/features-rev-slider-premium-templates", name="features-rev-slider-premium-templates")
     */
    public function featuresRevSliderPremiumTemplates()
    {
        return $this->render('features-rev-slider-premium-templates.twig');
    }
    /**
     * @Route("/features-home-revslider", name="features-home-revslider")
     */
    public function featuresHomeRevslider()
    {
        return $this->render('features-home-revslider.twig');
    }
    /**
     * @Route("/features-side-push-panel-right-push", name="features-side-push-panel-right-push")
     */
    public function featuresSidePushPanelRightPush()
    {
        return $this->render('features-side-push-panel-right-push.twig');
    }
    /**
     * @Route("/features-side-push-panel-right-overlay", name="features-side-push-panel-right-overlay")
     */
    public function featuresSidePushPanelRightOverlay()
    {
        return $this->render('features-side-push-panel-right-overlay.twig');
    }
    /**
     * @Route("/features-side-push-panel-left-push", name="features-side-push-panel-left-push")
     */
    public function featuresSidePushPanelLeftPush()
    {
        return $this->render('features-side-push-panel-left-push.twig');
    }
    /**
     * @Route("/features-side-push-panel-left-overlay", name="features-side-push-panel-left-overlay")
     */
    public function featuresSidePushPanelLeftOverlay()
    {
        return $this->render('features-side-push-panel-left-overlay.twig');
    }
    /**
     * @Route("/features-page-title-full-transparent", name="features-page-title-full-transparent")
     */
    public function featuresPageTitleFullTransparent()
    {
        return $this->render('features-page-title-full-transparent.twig');
    }
    /**
     * @Route("/features-page-title-bg-video", name="features-page-title-bg-video")
     */
    public function featuresPageTitleBgVideo()
    {
        return $this->render('features-page-title-bg-video.twig');
    }
    /**
     * @Route("/features-page-title-bg-image-parallax", name="features-page-title-bg-image-parallax")
     */
    public function featuresPageTitleBgImageParallax()
    {
        return $this->render('features-page-title-bg-image-parallax.twig');
    }
    /**
     * @Route("/features-page-title-bg-image", name="features-page-title-bg-image")
     */
    public function featuresPageTitleBgImage()
    {
        return $this->render('features-page-title-bg-image.twig');
    }
    /**
     * @Route("/features-page-title-bg-white", name="features-page-title-bg-white")
     */
    public function featuresPageTitleBgWhite()
    {
        return $this->render('features-page-title-bg-white.twig');
    }
    /**
     * @Route("/features-page-title-extra-big-version", name="features-page-title-extra-big-version")
     */
    public function featuresPageTitleExtraBigVersion()
    {
        return $this->render('features-page-title-extra-big-version.twig');
    }
    /**
     * @Route("/features-page-title-big-version", name="features-page-title-big-version")
     */
    public function featuresPageTitleBigVersion()
    {
        return $this->render('features-page-title-big-version.twig');
    }
    /**
     * @Route("/features-page-title-mini-version", name="features-page-title-mini-version")
     */
    public function featuresPageTitleMiniVersion()
    {
        return $this->render('features-page-title-mini-version.twig');
    }
    /**
     * @Route("/features-page-title-text-right", name="features-page-title-text-right")
     */
    public function featuresPageTitleTextRight()
    {
        return $this->render('features-page-title-text-right.twig');
    }
    /**
     * @Route("/features-page-title-text-center", name="features-page-title-text-center")
     */
    public function featuresPageTitleTextCenter()
    {
        return $this->render('features-page-title-text-center.twig');
    }
    /**
     * @Route("/features-page-title-text-left", name="features-page-title-text-left")
     */
    public function featuresPageTitleTextLeft()
    {
        return $this->render('features-page-title-text-left.twig');
    }
    /**
     * @Route("/features-header-vertical-nav", name="features-header-vertical-nav")
     */
    public function featuresHeaderVerticalNav()
    {
        return $this->render('features-header-vertical-nav.twig');
    }
    /**
     * @Route("/features-header-style7", name="features-header-style7")
     */
    public function featuresHeaderStyle7()
    {
        return $this->render('features-header-style7.twig');
    }
    /**
     * @Route("/features-header-style6", name="features-header-style6")
     */
    public function featuresHeaderStyle6()
    {
        return $this->render('features-header-style6.twig');
    }
    /**
     * @Route("/features-header-style5", name="features-header-style5")
     */
    public function featuresHeaderStyle5()
    {
        return $this->render('features-header-style5.twig');
    }
    /**
     * @Route("/features-header-style4", name="features-header-style4")
     */
    public function featuresHeaderStyle4()
    {
        return $this->render('features-header-style4.twig');
    }
    /**
     * @Route("/features-header-style3", name="features-header-style3")
     */
    public function featuresHeaderStyle3()
    {
        return $this->render('features-header-style3.twig');
    }
    /**
     * @Route("/features-header-style2", name="features-header-style2")
     */
    public function featuresHeaderStyle2()
    {
        return $this->render('features-header-style2.twig');
    }
    /**
     * @Route("/features-header-style1", name="features-header-style1")
     */
    public function featuresHeaderStyle1()
    {
        return $this->render('features-header-style1.twig');
    }
    /**
     * @Route("/features-preloader", name="features-preloader")
     */
    public function featuresPreloader()
    {
        return $this->render('features-preloader.twig');
    }
    /**
     * @Route("/index-home-variation-appointment-form-style2", name="index-home-variation-appointment-form-style2")
     */
    public function indexHomeVariationAppointmentFormStyle2()
    {
        return $this->render('index-home-variation-appointment-form-style2.twig');
    }
    /**
     * @Route("/index-home-variation-appointment-form-style1", name="index-home-variation-appointment-form-style1")
     */
    public function indexHomeVariationAppointmentFormStyle1()
    {
        return $this->render('index-home-variation-appointment-form-style1.twig');
    }
    /**
     * @Route("/index-home-variation-bg-static", name="index-home-variation-bg-static")
     */
    public function indexHomeVariationBgStatic()
    {
        return $this->render('index-home-variation-bg-static.twig');
    }
    /**
     * @Route("/index-home-variation-bg-image-parallax", name="index-home-variation-bg-image-parallax")
     */
    public function indexHomeVariationBgImageParallax()
    {
        return $this->render('index-home-variation-bg-image-parallax.twig');
    }
    /**
     * @Route("/index-home-variation-html5-video", name="index-home-variation-html5-video")
     */
    public function indexHomeVariationHtml5Video()
    {
        return $this->render('index-home-variation-html5-video.twig');
    }
    /**
     * @Route("/index-home-variation-video-background", name="index-home-variation-video-background")
     */
    public function indexHomeVariationVideoBackground()
    {
        return $this->render('index-home-variation-video-background.twig');
    }
    /**
     * @Route("/index-home-variation-typed-text", name="index-home-variation-typed-text")
     */
    public function indexHomeVariationTypedText()
    {
        return $this->render('index-home-variation-typed-text.twig');
    }
    /**
     * @Route("/index-home-variation-owl-carousel", name="index-home-variation-owl-carousel")
     */
    public function indexHomeVariationOwlCarousel()
    {
        return $this->render('index-home-variation-owl-carousel.twig');
    }
    /**
     * @Route("/index-home-variation-maximageslider-style3", name="index-home-variation-maximageslider-style3")
     */
    public function indexHomeVariationMaximagesliderStyle3()
    {
        return $this->render('index-home-variation-maximageslider-style3.twig');
    }
    /**
     * @Route("/index-home-variation-maximageslider-style2", name="index-home-variation-maximageslider-style2")
     */
    public function indexHomeVariationMaximagesliderStyle2()
    {
        return $this->render('index-home-variation-maximageslider-style2.twig');
    }
    /**
     * @Route("/index-home-variation-maximageslider-style1", name="index-home-variation-maximageslider-style1")
     */
    public function indexHomeVariationMaximagesliderStyle1()
    {
        return $this->render('index-home-variation-maximageslider-style1.twig');
    }
    /**
     * @Route("/index-home-variation-revslider-style2", name="index-home-variation-revslider-style2")
     */
    public function indexHomeVariationRevsliderStyle2()
    {
        return $this->render('index-home-variation-revslider-style2.twig');
    }
    /**
     * @Route("/index-home-variation-revslider-style1", name="index-home-variation-revslider-style1")
     */
    public function indexHomeVariationRevsliderStyle1()
    {
        return $this->render('index-home-variation-revslider-style1.twig');
    }
    /**
     * @Route("/index-hot-shop-home", name="index-hot-shop-home")
     */
    public function indexHotShopHome()
    {
        return $this->render('index-hot-shop-home.twig');
    }
    /**
     * @Route("/index-dark-mp-layout4", name="index-dark-mp-layout4")
     */
    public function indexDarkMpLayout4()
    {
        return $this->render('index-dark-mp-layout4.twig');
    }
    /**
     * @Route("/index-dark-mp-layout3", name="index-dark-mp-layout3")
     */
    public function indexDarkMpLayout3()
    {
        return $this->render('index-dark-mp-layout3.twig');
    }
    /**
     * @Route("/index-dark-mp-layout2", name="index-dark-mp-layout2")
     */
    public function indexDarkMpLayout2()
    {
        return $this->render('index-dark-mp-layout2.twig');
    }
    /**
     * @Route("/index-dark-mp-layout1", name="index-dark-mp-layout1")
     */
    public function indexDarkMpLayout1()
    {
        return $this->render('index-dark-mp-layout1.twig');
    }
    /**
     * @Route("/shop-category-sidebar", name="shop-category-sidebar")
     */
    public function shopCategorySidebar()
    {
        return $this->render('shop-category-sidebar.twig');
    }
    /**
     * @Route("/index-rtl-sp-layout1", name="index-rtl-sp-layout1")
     */
    public function indexRtlSpLayout1()
    {
        return $this->render('index-rtl-sp-layout1.twig');
    }
    /**
     * @Route("/index-rtl-mp-layout4", name="index-rtl-mp-layout4")
     */
    public function indexRtlMpLayout4()
    {
        return $this->render('index-rtl-mp-layout4.twig');
    }
    /**
     * @Route("/index-rtl-mp-layout3", name="index-rtl-mp-layout3")
     */
    public function indexRtlMpLayout3()
    {
        return $this->render('index-rtl-mp-layout3.twig');
    }
    /**
     * @Route("/index-rtl-mp-layout2", name="index-rtl-mp-layout2")
     */
    public function indexRtlMpLayout2()
    {
        return $this->render('index-rtl-mp-layout2.twig');
    }
    /**
     * @Route("/index-rtl-mp-layout1", name="index-rtl-mp-layout1")
     */
    public function indexRtlMpLayout1()
    {
        return $this->render('index-rtl-mp-layout1.twig');
    }
    /**
     * @Route("/page-our-horses", name="page-our-horses")
     */
    public function pageOurHorses()
    {
        return $this->render('page-our-horses.twig');
    }
    /**
     * @Route("/index-boxed-sp-layout4", name="index-boxed-sp-layout4")
     */
    public function indexBoxedSpLayout4()
    {
        return $this->render('index-boxed-sp-layout4.twig');
    }
    /**
     * @Route("/page-riding-school", name="page-riding-school")
     */
    public function pageRidingSchool()
    {
        return $this->render('page-riding-school.twig');
    }
    /**
     * @Route("/index-boxed-sp-layout3", name="index-boxed-sp-layout3")
     */
    public function indexBoxedSpLayout3()
    {
        return $this->render('index-boxed-sp-layout3.twig');
    }
    /**
     * @Route("/page-horse-details", name="page-horse-details")
     */
    public function pageHorseDetails()
    {
        return $this->render('page-horse-details.twig');
    }
    /**
     * @Route("/index-boxed-sp-layout2", name="index-boxed-sp-layout2")
     */
    public function indexBoxedSpLayout2()
    {
        return $this->render('index-boxed-sp-layout2.twig');
    }
    /**
     * @Route("/page-membership", name="page-membership")
     */
    public function pageMembership()
    {
        return $this->render('page-membership.twig');
    }
    /**
     * @Route("/index-boxed-sp-layout1", name="index-boxed-sp-layout1")
     */
    public function indexBoxedSpLayout1()
    {
        return $this->render('index-boxed-sp-layout1.twig');
    }
    /**
     * @Route("/index-boxed-mp-layout4", name="index-boxed-mp-layout4")
     */
    public function indexBoxedMpLayout4()
    {
        return $this->render('index-boxed-mp-layout4.twig');
    }
    /**
     * @Route("/index-boxed-mp-layout3", name="index-boxed-mp-layout3")
     */
    public function indexBoxedMpLayout3()
    {
        return $this->render('index-boxed-mp-layout3.twig');
    }
    /**
     * @Route("/index-boxed-mp-layout2", name="index-boxed-mp-layout2")
     */
    public function indexBoxedMpLayout2()
    {
        return $this->render('index-boxed-mp-layout2.twig');
    }
    /**
     * @Route("/index-boxed-mp-layout1", name="index-boxed-mp-layout1")
     */
    public function indexBoxedMpLayout1()
    {
        return $this->render('index-boxed-mp-layout1.twig');
    }
    /**
     * @Route("/page-trainer-details", name="page-trainer-details")
     */
    public function pageTrainerDetails()
    {
        return $this->render('page-trainer-details.twig');
    }
    /**
     * @Route("/index-sp-layout4", name="index-sp-layout4")
     */
    public function indexSpLayout4()
    {
        return $this->render('index-sp-layout4.twig');
    }
    /**
     * @Route("/blog-single-left-sidebar", name="blog-single-left-sidebar")
     */
    public function blogSingleLeftSidebar()
    {
        return $this->render('blog-single-left-sidebar.twig');
    }
    /**
     * @Route("/index-sp-layout3", name="index-sp-layout3")
     */
    public function indexSpLayout3()
    {
        return $this->render('index-sp-layout3.twig');
    }
    /**
     * @Route("/page-course-details", name="page-course-details")
     */
    public function pageCourseDetails()
    {
        return $this->render('page-course-details.twig');
    }
    /**
     * @Route("/index-sp-layout2", name="index-sp-layout2")
     */
    public function indexSpLayout2()
    {
        return $this->render('index-sp-layout2.twig');
    }
    /**
     * @Route("/page-about-style1", name="page-about-style1")
     */
    public function pageAboutStyle1()
    {
        return $this->render('page-about-style1.twig');
    }
    /**
     * @Route("/index-sp-layout1", name="index-sp-layout1")
     */
    public function indexSpLayout1()
    {
        return $this->render('index-sp-layout1.twig');
    }
    /**
     * @Route("/index-mp-layout4", name="index-mp-layout4")
     */
    public function indexMpLayout4()
    {
        return $this->render('index-mp-layout4.twig');
    }
    /**
     * @Route("/index-mp-layout3", name="index-mp-layout3")
     */
    public function indexMpLayout3()
    {
        return $this->render('index-mp-layout3.twig');
    }
    /**
     * @Route("/index-mp-layout2", name="index-mp-layout2")
     */
    public function indexMpLayout2()
    {
        return $this->render('index-mp-layout2.twig');
    }
    /**
     * @Route("/index-mp-layout1", name="index-mp-layout1")
     */
    public function indexMpLayout1()
    {
        return $this->render('index-mp-layout1.twig');
    }
    /**
     * @Route("/shop-checkout", name="shop-checkout")
     */
    public function shopCheckout()
    {
        return $this->render('shop-checkout.twig');
    }
    /**
     * @Route("/shop-cart", name="shop-cart")
     */
    public function shopCart()
    {
        return $this->render('shop-cart.twig');
    }
    /**
     * @Route("/blog-classic-both-sidebar", name="blog-classic-both-sidebar")
     */
    public function blogClassicBothSidebar()
    {
        return $this->render('blog-classic-both-sidebar.twig');
    }
    /**
     * @Route("/features-footer-style1", name="features-footer-style1")
     */
    public function featuresFooterStyle1()
    {
        return $this->render('features-footer-style1.twig');
    }
    /**
     * @Route("/features-footer-style2", name="features-footer-style2")
     */
    public function featuresFooterStyle2()
    {
        return $this->render('features-footer-style2.twig');
    }
    /**
     * @Route("/features-footer-style3", name="features-footer-style3")
     */
    public function featuresFooterStyle3()
    {
        return $this->render('features-footer-style3.twig');
    }
    /**
     * @Route("/features-footer-style4", name="features-footer-style4")
     */
    public function featuresFooterStyle4()
    {
        return $this->render('features-footer-style4.twig');
    }
    /**
     * @Route("/features-footer-style5", name="features-footer-style5")
     */
    public function featuresFooterStyle5()
    {
        return $this->render('features-footer-style5.twig');
    }
    /**
     * @Route("/features-footer-style6", name="features-footer-style6")
     */
    public function featuresFooterStyle6()
    {
        return $this->render('features-footer-style6.twig');
    }
    /**
     * @Route("/features-footer-style7", name="features-footer-style7")
     */
    public function featuresFooterStyle7()
    {
        return $this->render('features-footer-style7.twig');
    }
    /**
     * @Route("/form-paypal-donate-both-onetime-recurring-style5", name="form-paypal-donate-both-onetime-recurring-style5")
     */
    public function formPaypalDonateBothOnetimeRecurringStyle5()
    {
        return $this->render('form-paypal-donate-both-onetime-recurring-style5.twig');
    }
    /**
     * @Route("/rev-slider-1-agency-website", name="rev-slider-1-agency-website")
     */
    public function revSlider1AgencyWebsite()
    {
        return $this->render('rev-slider-1-agency-website.twig');
    }
    /**
     * @Route("/rev-slider-2-app-landing-page", name="rev-slider-2-app-landing-page")
     */
    public function revSlider2AppLandingPage()
    {
        return $this->render('rev-slider-2-app-landing-page.twig');
    }
    /**
     * @Route("/rev-slider-3-carousel-classic", name="rev-slider-3-carousel-classic")
     */
    public function revSlider3CarouselClassic()
    {
        return $this->render('rev-slider-3-carousel-classic.twig');
    }
    /**
     * @Route("/rev-slider-4-carousel-gallery-instagram", name="rev-slider-4-carousel-gallery-instagram")
     */
    public function revSlider4CarouselGalleryInstagram()
    {
        return $this->render('rev-slider-4-carousel-gallery-instagram.twig');
    }
    /**
     * @Route("/rev-slider-5-carousel-highlight", name="rev-slider-5-carousel-highlight")
     */
    public function revSlider5CarouselHighlight()
    {
        return $this->render('rev-slider-5-carousel-highlight.twig');
    }
    /**
     * @Route("/rev-slider-6-carousel-media", name="rev-slider-6-carousel-media")
     */
    public function revSlider6CarouselMedia()
    {
        return $this->render('rev-slider-6-carousel-media.twig');
    }
    /**
     * @Route("/rev-slider-7-carousel-photography", name="rev-slider-7-carousel-photography")
     */
    public function revSlider7CarouselPhotography()
    {
        return $this->render('rev-slider-7-carousel-photography.twig');
    }
    /**
     * @Route("/rev-slider-8-carousel-showcase", name="rev-slider-8-carousel-showcase")
     */
    public function revSlider8CarouselShowcase()
    {
        return $this->render('rev-slider-8-carousel-showcase.twig');
    }
    /**
     * @Route("/rev-slider-9-christmas-snow", name="rev-slider-9-christmas-snow")
     */
    public function revSlider9ChristmasSnow()
    {
        return $this->render('rev-slider-9-christmas-snow.twig');
    }
    /**
     * @Route("/rev-slider-10-clean-news-slider", name="rev-slider-10-clean-news-slider")
     */
    public function revSlider10CleanNewsSlider()
    {
        return $this->render('rev-slider-10-clean-news-slider.twig');
    }
    /**
     * @Route("/rev-slider-11-coming-soon", name="rev-slider-11-coming-soon")
     */
    public function revSlider11ComingSoon()
    {
        return $this->render('rev-slider-11-coming-soon.twig');
    }
    /**
     * @Route("/rev-slider-12-content-tabs", name="rev-slider-12-content-tabs")
     */
    public function revSlider12ContentTabs()
    {
        return $this->render('rev-slider-12-content-tabs.twig');
    }
    /**
     * @Route("/rev-slider-13-desk-scene", name="rev-slider-13-desk-scene")
     */
    public function revSlider13DeskScene()
    {
        return $this->render('rev-slider-13-desk-scene.twig');
    }
    /**
     * @Route("/rev-slider-14-gallery-dark", name="rev-slider-14-gallery-dark")
     */
    public function revSlider14GalleryDark()
    {
        return $this->render('rev-slider-14-gallery-dark.twig');
    }
    /**
     * @Route("/rev-slider-15-gallery-light", name="rev-slider-15-gallery-light")
     */
    public function revSlider15GalleryLight()
    {
        return $this->render('rev-slider-15-gallery-light.twig');
    }
    /**
     * @Route("/rev-slider-16-gallery-news", name="rev-slider-16-gallery-news")
     */
    public function revSlider16GalleryNews()
    {
        return $this->render('rev-slider-16-gallery-news.twig');
    }
    /**
     * @Route("/rev-slider-17-gallery-slideshow", name="rev-slider-17-gallery-slideshow")
     */
    public function revSlider17GallerySlideshow()
    {
        return $this->render('rev-slider-17-gallery-slideshow.twig');
    }
    /**
     * @Route("/rev-slider-18-gallery-vimeo", name="rev-slider-18-gallery-vimeo")
     */
    public function revSlider18GalleryVimeo()
    {
        return $this->render('rev-slider-18-gallery-vimeo.twig');
    }
    /**
     * @Route("/rev-slider-19-gallery-youtube", name="rev-slider-19-gallery-youtube")
     */
    public function revSlider19GalleryYoutube()
    {
        return $this->render('rev-slider-19-gallery-youtube.twig');
    }
    /**
     * @Route("/rev-slider-20-hero-image", name="rev-slider-20-hero-image")
     */
    public function revSlider20HeroImage()
    {
        return $this->render('rev-slider-20-hero-image.twig');
    }
    /**
     * @Route("/rev-slider-21-hero-news", name="rev-slider-21-hero-news")
     */
    public function revSlider21HeroNews()
    {
        return $this->render('rev-slider-21-hero-news.twig');
    }
    /**
     * @Route("/rev-slider-22-hero-newsletter", name="rev-slider-22-hero-newsletter")
     */
    public function revSlider22HeroNewsletter()
    {
        return $this->render('rev-slider-22-hero-newsletter.twig');
    }
    /**
     * @Route("/rev-slider-23-hero-search-form", name="rev-slider-23-hero-search-form")
     */
    public function revSlider23HeroSearchForm()
    {
        return $this->render('rev-slider-23-hero-search-form.twig');
    }
    /**
     * @Route("/rev-slider-24-hero-sports", name="rev-slider-24-hero-sports")
     */
    public function revSlider24HeroSports()
    {
        return $this->render('rev-slider-24-hero-sports.twig');
    }
    /**
     * @Route("/rev-slider-25-hero-vimeo", name="rev-slider-25-hero-vimeo")
     */
    public function revSlider25HeroVimeo()
    {
        return $this->render('rev-slider-25-hero-vimeo.twig');
    }
    /**
     * @Route("/rev-slider-26-hero-web-product-dark", name="rev-slider-26-hero-web-product-dark")
     */
    public function revSlider26HeroWebProductDark()
    {
        return $this->render('rev-slider-26-hero-web-product-dark.twig');
    }
    /**
     * @Route("/rev-slider-27-hero-web-product-light", name="rev-slider-27-hero-web-product-light")
     */
    public function revSlider27HeroWebProductLight()
    {
        return $this->render('rev-slider-27-hero-web-product-light.twig');
    }
    /**
     * @Route("/rev-slider-28-hero-youtube", name="rev-slider-28-hero-youtube")
     */
    public function revSlider28HeroYoutube()
    {
        return $this->render('rev-slider-28-hero-youtube.twig');
    }
    /**
     * @Route("/rev-slider-29-image-gallery", name="rev-slider-29-image-gallery")
     */
    public function revSlider29ImageGallery()
    {
        return $this->render('rev-slider-29-image-gallery.twig');
    }
    /**
     * @Route("/rev-slider-30-image-gallery", name="rev-slider-30-image-gallery")
     */
    public function revSlider30ImageGallery()
    {
        return $this->render('rev-slider-30-image-gallery.twig');
    }
    /**
     * @Route("/rev-slider-31-main-feature-slider", name="rev-slider-31-main-feature-slider")
     */
    public function revSlider31MainFeatureSlider()
    {
        return $this->render('rev-slider-31-main-feature-slider.twig');
    }
    /**
     * @Route("/rev-slider-32-news-video", name="rev-slider-32-news-video")
     */
    public function revSlider32NewsVideo()
    {
        return $this->render('rev-slider-32-news-video.twig');
    }
    /**
     * @Route("/rev-slider-33-premium-4kvideos", name="rev-slider-33-premium-4kvideos")
     */
    public function revSlider33Premium4kvideos()
    {
        return $this->render('rev-slider-33-premium-4kvideos.twig');
    }
    /**
     * @Route("/rev-slider-34-premium-agency", name="rev-slider-34-premium-agency")
     */
    public function revSlider34PremiumAgency()
    {
        return $this->render('rev-slider-34-premium-agency.twig');
    }
    /**
     * @Route("/rev-slider-35-premium-concept", name="rev-slider-35-premium-concept")
     */
    public function revSlider35PremiumConcept()
    {
        return $this->render('rev-slider-35-premium-concept.twig');
    }
    /**
     * @Route("/rev-slider-36-premium-content-zoom", name="rev-slider-36-premium-content-zoom")
     */
    public function revSlider36PremiumContentZoom()
    {
        return $this->render('rev-slider-36-premium-content-zoom.twig');
    }
    /**
     * @Route("/rev-slider-37-premium-creative-freedom", name="rev-slider-37-premium-creative-freedom")
     */
    public function revSlider37PremiumCreativeFreedom()
    {
        return $this->render('rev-slider-37-premium-creative-freedom.twig');
    }
    /**
     * @Route("/rev-slider-38-premium-food-carousel", name="rev-slider-38-premium-food-carousel")
     */
    public function revSlider38PremiumFoodCarousel()
    {
        return $this->render('rev-slider-38-premium-food-carousel.twig');
    }
    /**
     * @Route("/rev-slider-39-premium-fullscreen-button", name="rev-slider-39-premium-fullscreen-button")
     */
    public function revSlider39PremiumFullscreenButton()
    {
        return $this->render('rev-slider-39-premium-fullscreen-button.twig');
    }
    /**
     * @Route("/rev-slider-40-premium-parallax-scene", name="rev-slider-40-premium-parallax-scene")
     */
    public function revSlider40PremiumParallaxScene()
    {
        return $this->render('rev-slider-40-premium-parallax-scene.twig');
    }
    /**
     * @Route("/rev-slider-41-premium-restaurant", name="rev-slider-41-premium-restaurant")
     */
    public function revSlider41PremiumRestaurant()
    {
        return $this->render('rev-slider-41-premium-restaurant.twig');
    }
    /**
     * @Route("/rev-slider-42-premium-rotating-words", name="rev-slider-42-premium-rotating-words")
     */
    public function revSlider42PremiumRotatingWords()
    {
        return $this->render('rev-slider-42-premium-rotating-words.twig');
    }
    /**
     * @Route("/rev-slider-43-premium-scroll-effects", name="rev-slider-43-premium-scroll-effects")
     */
    public function revSlider43PremiumScrollEffects()
    {
        return $this->render('rev-slider-43-premium-scroll-effects.twig');
    }
    /**
     * @Route("/rev-slider-44-premium-sliding-overlays", name="rev-slider-44-premium-sliding-overlays")
     */
    public function revSlider44PremiumSlidingOverlays()
    {
        return $this->render('rev-slider-44-premium-sliding-overlays.twig');
    }
    /**
     * @Route("/rev-slider-45-premium-team-carousel", name="rev-slider-45-premium-team-carousel")
     */
    public function revSlider45PremiumTeamCarousel()
    {
        return $this->render('rev-slider-45-premium-team-carousel.twig');
    }
    /**
     * @Route("/rev-slider-46-premium-team-slider", name="rev-slider-46-premium-team-slider")
     */
    public function revSlider46PremiumTeamSlider()
    {
        return $this->render('rev-slider-46-premium-team-slider.twig');
    }
    /**
     * @Route("/rev-slider-47-premium-travel", name="rev-slider-47-premium-travel")
     */
    public function revSlider47PremiumTravel()
    {
        return $this->render('rev-slider-47-premium-travel.twig');
    }
    /**
     * @Route("/rev-slider-48-premium-webproduct-hero", name="rev-slider-48-premium-webproduct-hero")
     */
    public function revSlider48PremiumWebproductHero()
    {
        return $this->render('rev-slider-48-premium-webproduct-hero.twig');
    }
    /**
     * @Route("/rev-slider-49-premium-woocommerce", name="rev-slider-49-premium-woocommerce")
     */
    public function revSlider49PremiumWoocommerce()
    {
        return $this->render('rev-slider-49-premium-woocommerce.twig');
    }
    /**
     * @Route("/rev-slider-50-sleek-landing-page", name="rev-slider-50-sleek-landing-page")
     */
    public function revSlider50SleekLandingPage()
    {
        return $this->render('rev-slider-50-sleek-landing-page.twig');
    }
    /**
     * @Route("/rev-slider-51-slider-classic", name="rev-slider-51-slider-classic")
     */
    public function revSlider51SliderClassic()
    {
        return $this->render('rev-slider-51-slider-classic.twig');
    }
    /**
     * @Route("/rev-slider-52-slider-classic-full", name="rev-slider-52-slider-classic-full")
     */
    public function revSlider52SliderClassicFull()
    {
        return $this->render('rev-slider-52-slider-classic-full.twig');
    }
    /**
     * @Route("/rev-slider-53-slider-fashion", name="rev-slider-53-slider-fashion")
     */
    public function revSlider53SliderFashion()
    {
        return $this->render('rev-slider-53-slider-fashion.twig');
    }
    /**
     * @Route("/rev-slider-54-slider-gym", name="rev-slider-54-slider-gym")
     */
    public function revSlider54SliderGym()
    {
        return $this->render('rev-slider-54-slider-gym.twig');
    }
    /**
     * @Route("/rev-slider-55-slider-highlight-showcase", name="rev-slider-55-slider-highlight-showcase")
     */
    public function revSlider55SliderHighlightShowcase()
    {
        return $this->render('rev-slider-55-slider-highlight-showcase.twig');
    }
    /**
     * @Route("/rev-slider-56-slider-highlight-showcase", name="rev-slider-56-slider-highlight-showcase")
     */
    public function revSlider56SliderHighlightShowcase()
    {
        return $this->render('rev-slider-56-slider-highlight-showcase.twig');
    }
    /**
     * @Route("/rev-slider-57-slider-media", name="rev-slider-57-slider-media")
     */
    public function revSlider57SliderMedia()
    {
        return $this->render('rev-slider-57-slider-media.twig');
    }
    /**
     * @Route("/rev-slider-58-slider-notgeneric", name="rev-slider-58-slider-notgeneric")
     */
    public function revSlider58SliderNotgeneric()
    {
        return $this->render('rev-slider-58-slider-notgeneric.twig');
    }
    /**
     * @Route("/rev-slider-59-slider-photography", name="rev-slider-59-slider-photography")
     */
    public function revSlider59SliderPhotography()
    {
        return $this->render('rev-slider-59-slider-photography.twig');
    }
    /**
     * @Route("/rev-slider-60-slider-standard", name="rev-slider-60-slider-standard")
     */
    public function revSlider60SliderStandard()
    {
        return $this->render('rev-slider-60-slider-standard.twig');
    }
    /**
     * @Route("/rev-slider-61-slider-verysimple", name="rev-slider-61-slider-verysimple")
     */
    public function revSlider61SliderVerysimple()
    {
        return $this->render('rev-slider-61-slider-verysimple.twig');
    }
    /**
     * @Route("/rev-slider-62-web-product-dark", name="rev-slider-62-web-product-dark")
     */
    public function revSlider62WebProductDark()
    {
        return $this->render('rev-slider-62-web-product-dark.twig');
    }
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index.twig');
    }
    /**
     * @Route("/page-404", name="page-404")
     */
    public function page404()
    {
        return $this->render('page-404.twig');
    }
    /**
     * @Route("/page-coming-soon", name="page-coming-soon")
     */
    public function pageComingSoon()
    {
        return $this->render('page-coming-soon.twig');
    }
    /**
     * @Route("/page-under-construction", name="page-under-construction")
     */
    public function pageUnderConstruction()
    {
        return $this->render('page-under-construction.twig');
    }
    /**
     * @Route("/rev-slider-63-web-product-light", name="rev-slider-63-web-product-light")
     */
    public function revSlider63WebProductLight()
    {
        return $this->render('rev-slider-63-web-product-light.twig');
    }
    /**
     * @Route("/shortcode-flex-sliders", name="shortcode-flex-sliders")
     */
    public function shortcodeFlexSliders()
    {
        return $this->render('shortcode-flex-sliders.twig');
    }
}
