<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/enigma-top-menu-login-page", name="enigma-top-menu-login-page")
     */
    public function enigmaTopMenuLoginPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-login-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-register-page", name="enigma-top-menu-register-page")
     */
    public function enigmaTopMenuRegisterPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-register-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-error-page-page", name="enigma-top-menu-error-page-page")
     */
    public function enigmaTopMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-error-page-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-image-zoom-page", name="enigma-top-menu-image-zoom-page")
     */
    public function enigmaTopMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-slider-page", name="enigma-top-menu-slider-page")
     */
    public function enigmaTopMenuSliderPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-slider-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-chart-page", name="enigma-top-menu-chart-page")
     */
    public function enigmaTopMenuChartPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-chart-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-validation-page", name="enigma-top-menu-validation-page")
     */
    public function enigmaTopMenuValidationPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-validation-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wysiwyg-editor-document-page", name="enigma-top-menu-wysiwyg-editor-document-page")
     */
    public function enigmaTopMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wysiwyg-editor-balloon-block-page", name="enigma-top-menu-wysiwyg-editor-balloon-block-page")
     */
    public function enigmaTopMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wysiwyg-editor-balloon-page", name="enigma-top-menu-wysiwyg-editor-balloon-page")
     */
    public function enigmaTopMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wysiwyg-editor-inline-page", name="enigma-top-menu-wysiwyg-editor-inline-page")
     */
    public function enigmaTopMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wysiwyg-editor-classic-page", name="enigma-top-menu-wysiwyg-editor-classic-page")
     */
    public function enigmaTopMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-file-upload-page", name="enigma-top-menu-file-upload-page")
     */
    public function enigmaTopMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-file-upload-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-tom-select-page", name="enigma-top-menu-tom-select-page")
     */
    public function enigmaTopMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-tom-select-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-datepicker-page", name="enigma-top-menu-datepicker-page")
     */
    public function enigmaTopMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-datepicker-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-regular-form-page", name="enigma-top-menu-regular-form-page")
     */
    public function enigmaTopMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-regular-form-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-loading-icon-page", name="enigma-top-menu-loading-icon-page")
     */
    public function enigmaTopMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-icon-page", name="enigma-top-menu-icon-page")
     */
    public function enigmaTopMenuIconPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-icon-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-typography-page", name="enigma-top-menu-typography-page")
     */
    public function enigmaTopMenuTypographyPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-typography-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-dropdown-page", name="enigma-top-menu-dropdown-page")
     */
    public function enigmaTopMenuDropdownPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-dropdown-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-tooltip-page", name="enigma-top-menu-tooltip-page")
     */
    public function enigmaTopMenuTooltipPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-tooltip-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-progress-bar-page", name="enigma-top-menu-progress-bar-page")
     */
    public function enigmaTopMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-alert-page", name="enigma-top-menu-alert-page")
     */
    public function enigmaTopMenuAlertPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-alert-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-button-page", name="enigma-top-menu-button-page")
     */
    public function enigmaTopMenuButtonPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-button-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-accordion-page", name="enigma-top-menu-accordion-page")
     */
    public function enigmaTopMenuAccordionPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-accordion-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-tab-page", name="enigma-top-menu-tab-page")
     */
    public function enigmaTopMenuTabPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-tab-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-notification-page", name="enigma-top-menu-notification-page")
     */
    public function enigmaTopMenuNotificationPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-notification-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-slide-over-page", name="enigma-top-menu-slide-over-page")
     */
    public function enigmaTopMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-slide-over-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-modal-page", name="enigma-top-menu-modal-page")
     */
    public function enigmaTopMenuModalPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-modal-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-tabulator-page", name="enigma-top-menu-tabulator-page")
     */
    public function enigmaTopMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-tabulator-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-regular-table-page", name="enigma-top-menu-regular-table-page")
     */
    public function enigmaTopMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-regular-table-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-change-password-page", name="enigma-top-menu-change-password-page")
     */
    public function enigmaTopMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-change-password-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-update-profile-page", name="enigma-top-menu-update-profile-page")
     */
    public function enigmaTopMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-update-profile-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-faq-layout-3-page", name="enigma-top-menu-faq-layout-3-page")
     */
    public function enigmaTopMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-faq-layout-2-page", name="enigma-top-menu-faq-layout-2-page")
     */
    public function enigmaTopMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-faq-layout-1-page", name="enigma-top-menu-faq-layout-1-page")
     */
    public function enigmaTopMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-invoice-layout-2-page", name="enigma-top-menu-invoice-layout-2-page")
     */
    public function enigmaTopMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-invoice-layout-1-page", name="enigma-top-menu-invoice-layout-1-page")
     */
    public function enigmaTopMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-pricing-layout-2-page", name="enigma-top-menu-pricing-layout-2-page")
     */
    public function enigmaTopMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-pricing-layout-1-page", name="enigma-top-menu-pricing-layout-1-page")
     */
    public function enigmaTopMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-blog-layout-3-page", name="enigma-top-menu-blog-layout-3-page")
     */
    public function enigmaTopMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-blog-layout-2-page", name="enigma-top-menu-blog-layout-2-page")
     */
    public function enigmaTopMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-blog-layout-1-page", name="enigma-top-menu-blog-layout-1-page")
     */
    public function enigmaTopMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wizard-layout-3-page", name="enigma-top-menu-wizard-layout-3-page")
     */
    public function enigmaTopMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wizard-layout-2-page", name="enigma-top-menu-wizard-layout-2-page")
     */
    public function enigmaTopMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-wizard-layout-1-page", name="enigma-top-menu-wizard-layout-1-page")
     */
    public function enigmaTopMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-crud-form-page", name="enigma-top-menu-crud-form-page")
     */
    public function enigmaTopMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-crud-form-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-crud-data-list-page", name="enigma-top-menu-crud-data-list-page")
     */
    public function enigmaTopMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-calendar-page", name="enigma-top-menu-calendar-page")
     */
    public function enigmaTopMenuCalendarPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-calendar-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-post-page", name="enigma-top-menu-post-page")
     */
    public function enigmaTopMenuPostPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-post-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-chat-page", name="enigma-top-menu-chat-page")
     */
    public function enigmaTopMenuChatPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-chat-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-point-of-sale-page", name="enigma-top-menu-point-of-sale-page")
     */
    public function enigmaTopMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-file-manager-page", name="enigma-top-menu-file-manager-page")
     */
    public function enigmaTopMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-file-manager-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-inbox-page", name="enigma-top-menu-inbox-page")
     */
    public function enigmaTopMenuInboxPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-inbox-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-reviews-page", name="enigma-top-menu-reviews-page")
     */
    public function enigmaTopMenuReviewsPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-reviews-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-seller-detail-page", name="enigma-top-menu-seller-detail-page")
     */
    public function enigmaTopMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-seller-list-page", name="enigma-top-menu-seller-list-page")
     */
    public function enigmaTopMenuSellerListPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-seller-list-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-transaction-detail-page", name="enigma-top-menu-transaction-detail-page")
     */
    public function enigmaTopMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-transaction-list-page", name="enigma-top-menu-transaction-list-page")
     */
    public function enigmaTopMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-product-grid-page", name="enigma-top-menu-product-grid-page")
     */
    public function enigmaTopMenuProductGridPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-product-grid-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-product-list-page", name="enigma-top-menu-product-list-page")
     */
    public function enigmaTopMenuProductListPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-product-list-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-add-product-page", name="enigma-top-menu-add-product-page")
     */
    public function enigmaTopMenuAddProductPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-add-product-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-categories-page", name="enigma-top-menu-categories-page")
     */
    public function enigmaTopMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/enigma-top-menu-categories-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-profile-overview-3-page", name="enigma-top-menu-profile-overview-3-page")
     */
    public function enigmaTopMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-profile-overview-2-page", name="enigma-top-menu-profile-overview-2-page")
     */
    public function enigmaTopMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-profile-overview-1-page", name="enigma-top-menu-profile-overview-1-page")
     */
    public function enigmaTopMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-users-layout-3-page", name="enigma-top-menu-users-layout-3-page")
     */
    public function enigmaTopMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-users-layout-2-page", name="enigma-top-menu-users-layout-2-page")
     */
    public function enigmaTopMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-users-layout-1-page", name="enigma-top-menu-users-layout-1-page")
     */
    public function enigmaTopMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-dashboard-overview-4-page", name="enigma-top-menu-dashboard-overview-4-page")
     */
    public function enigmaTopMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-dashboard-overview-3-page", name="enigma-top-menu-dashboard-overview-3-page")
     */
    public function enigmaTopMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-dashboard-overview-2-page", name="enigma-top-menu-dashboard-overview-2-page")
     */
    public function enigmaTopMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-top-menu-dashboard-overview-1-page", name="enigma-top-menu-dashboard-overview-1-page")
     */
    public function enigmaTopMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-top-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-login-page", name="icewall-top-menu-login-page")
     */
    public function icewallTopMenuLoginPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-login-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-register-page", name="icewall-top-menu-register-page")
     */
    public function icewallTopMenuRegisterPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-register-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-error-page-page", name="icewall-top-menu-error-page-page")
     */
    public function icewallTopMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-error-page-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-image-zoom-page", name="icewall-top-menu-image-zoom-page")
     */
    public function icewallTopMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-slider-page", name="icewall-top-menu-slider-page")
     */
    public function icewallTopMenuSliderPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-slider-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-chart-page", name="icewall-top-menu-chart-page")
     */
    public function icewallTopMenuChartPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-chart-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-validation-page", name="icewall-top-menu-validation-page")
     */
    public function icewallTopMenuValidationPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-validation-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wysiwyg-editor-document-page", name="icewall-top-menu-wysiwyg-editor-document-page")
     */
    public function icewallTopMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wysiwyg-editor-balloon-block-page", name="icewall-top-menu-wysiwyg-editor-balloon-block-page")
     */
    public function icewallTopMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wysiwyg-editor-balloon-page", name="icewall-top-menu-wysiwyg-editor-balloon-page")
     */
    public function icewallTopMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wysiwyg-editor-inline-page", name="icewall-top-menu-wysiwyg-editor-inline-page")
     */
    public function icewallTopMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wysiwyg-editor-classic-page", name="icewall-top-menu-wysiwyg-editor-classic-page")
     */
    public function icewallTopMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-file-upload-page", name="icewall-top-menu-file-upload-page")
     */
    public function icewallTopMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-file-upload-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-tom-select-page", name="icewall-top-menu-tom-select-page")
     */
    public function icewallTopMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-tom-select-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-datepicker-page", name="icewall-top-menu-datepicker-page")
     */
    public function icewallTopMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-datepicker-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-regular-form-page", name="icewall-top-menu-regular-form-page")
     */
    public function icewallTopMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-regular-form-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-loading-icon-page", name="icewall-top-menu-loading-icon-page")
     */
    public function icewallTopMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-icon-page", name="icewall-top-menu-icon-page")
     */
    public function icewallTopMenuIconPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-icon-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-typography-page", name="icewall-top-menu-typography-page")
     */
    public function icewallTopMenuTypographyPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-typography-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-dropdown-page", name="icewall-top-menu-dropdown-page")
     */
    public function icewallTopMenuDropdownPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-dropdown-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-tooltip-page", name="icewall-top-menu-tooltip-page")
     */
    public function icewallTopMenuTooltipPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-tooltip-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-progress-bar-page", name="icewall-top-menu-progress-bar-page")
     */
    public function icewallTopMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-alert-page", name="icewall-top-menu-alert-page")
     */
    public function icewallTopMenuAlertPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-alert-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-button-page", name="icewall-top-menu-button-page")
     */
    public function icewallTopMenuButtonPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-button-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-accordion-page", name="icewall-top-menu-accordion-page")
     */
    public function icewallTopMenuAccordionPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-accordion-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-tab-page", name="icewall-top-menu-tab-page")
     */
    public function icewallTopMenuTabPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-tab-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-notification-page", name="icewall-top-menu-notification-page")
     */
    public function icewallTopMenuNotificationPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-notification-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-slide-over-page", name="icewall-top-menu-slide-over-page")
     */
    public function icewallTopMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-slide-over-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-modal-page", name="icewall-top-menu-modal-page")
     */
    public function icewallTopMenuModalPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-modal-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-tabulator-page", name="icewall-top-menu-tabulator-page")
     */
    public function icewallTopMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-tabulator-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-regular-table-page", name="icewall-top-menu-regular-table-page")
     */
    public function icewallTopMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-regular-table-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-change-password-page", name="icewall-top-menu-change-password-page")
     */
    public function icewallTopMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-change-password-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-update-profile-page", name="icewall-top-menu-update-profile-page")
     */
    public function icewallTopMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-update-profile-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-faq-layout-3-page", name="icewall-top-menu-faq-layout-3-page")
     */
    public function icewallTopMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-faq-layout-2-page", name="icewall-top-menu-faq-layout-2-page")
     */
    public function icewallTopMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-faq-layout-1-page", name="icewall-top-menu-faq-layout-1-page")
     */
    public function icewallTopMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-invoice-layout-2-page", name="icewall-top-menu-invoice-layout-2-page")
     */
    public function icewallTopMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-invoice-layout-1-page", name="icewall-top-menu-invoice-layout-1-page")
     */
    public function icewallTopMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-pricing-layout-2-page", name="icewall-top-menu-pricing-layout-2-page")
     */
    public function icewallTopMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-pricing-layout-1-page", name="icewall-top-menu-pricing-layout-1-page")
     */
    public function icewallTopMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-blog-layout-3-page", name="icewall-top-menu-blog-layout-3-page")
     */
    public function icewallTopMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-blog-layout-2-page", name="icewall-top-menu-blog-layout-2-page")
     */
    public function icewallTopMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-blog-layout-1-page", name="icewall-top-menu-blog-layout-1-page")
     */
    public function icewallTopMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wizard-layout-3-page", name="icewall-top-menu-wizard-layout-3-page")
     */
    public function icewallTopMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wizard-layout-2-page", name="icewall-top-menu-wizard-layout-2-page")
     */
    public function icewallTopMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-wizard-layout-1-page", name="icewall-top-menu-wizard-layout-1-page")
     */
    public function icewallTopMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-crud-form-page", name="icewall-top-menu-crud-form-page")
     */
    public function icewallTopMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-crud-form-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-crud-data-list-page", name="icewall-top-menu-crud-data-list-page")
     */
    public function icewallTopMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-calendar-page", name="icewall-top-menu-calendar-page")
     */
    public function icewallTopMenuCalendarPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-calendar-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-post-page", name="icewall-top-menu-post-page")
     */
    public function icewallTopMenuPostPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-post-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-chat-page", name="icewall-top-menu-chat-page")
     */
    public function icewallTopMenuChatPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-chat-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-point-of-sale-page", name="icewall-top-menu-point-of-sale-page")
     */
    public function icewallTopMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-file-manager-page", name="icewall-top-menu-file-manager-page")
     */
    public function icewallTopMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-file-manager-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-inbox-page", name="icewall-top-menu-inbox-page")
     */
    public function icewallTopMenuInboxPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-inbox-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-reviews-page", name="icewall-top-menu-reviews-page")
     */
    public function icewallTopMenuReviewsPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-reviews-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-seller-detail-page", name="icewall-top-menu-seller-detail-page")
     */
    public function icewallTopMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-seller-list-page", name="icewall-top-menu-seller-list-page")
     */
    public function icewallTopMenuSellerListPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-seller-list-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-transaction-detail-page", name="icewall-top-menu-transaction-detail-page")
     */
    public function icewallTopMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-transaction-list-page", name="icewall-top-menu-transaction-list-page")
     */
    public function icewallTopMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-product-grid-page", name="icewall-top-menu-product-grid-page")
     */
    public function icewallTopMenuProductGridPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-product-grid-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-product-list-page", name="icewall-top-menu-product-list-page")
     */
    public function icewallTopMenuProductListPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-product-list-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-add-product-page", name="icewall-top-menu-add-product-page")
     */
    public function icewallTopMenuAddProductPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-add-product-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-categories-page", name="icewall-top-menu-categories-page")
     */
    public function icewallTopMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/icewall-top-menu-categories-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-profile-overview-3-page", name="icewall-top-menu-profile-overview-3-page")
     */
    public function icewallTopMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-profile-overview-2-page", name="icewall-top-menu-profile-overview-2-page")
     */
    public function icewallTopMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-profile-overview-1-page", name="icewall-top-menu-profile-overview-1-page")
     */
    public function icewallTopMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-users-layout-3-page", name="icewall-top-menu-users-layout-3-page")
     */
    public function icewallTopMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-users-layout-2-page", name="icewall-top-menu-users-layout-2-page")
     */
    public function icewallTopMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-users-layout-1-page", name="icewall-top-menu-users-layout-1-page")
     */
    public function icewallTopMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-dashboard-overview-4-page", name="icewall-top-menu-dashboard-overview-4-page")
     */
    public function icewallTopMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-dashboard-overview-3-page", name="icewall-top-menu-dashboard-overview-3-page")
     */
    public function icewallTopMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-dashboard-overview-2-page", name="icewall-top-menu-dashboard-overview-2-page")
     */
    public function icewallTopMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-top-menu-dashboard-overview-1-page", name="icewall-top-menu-dashboard-overview-1-page")
     */
    public function icewallTopMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-top-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-login-page", name="rubick-top-menu-login-page")
     */
    public function rubickTopMenuLoginPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-login-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-register-page", name="rubick-top-menu-register-page")
     */
    public function rubickTopMenuRegisterPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-register-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-error-page-page", name="rubick-top-menu-error-page-page")
     */
    public function rubickTopMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-error-page-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-image-zoom-page", name="rubick-top-menu-image-zoom-page")
     */
    public function rubickTopMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-slider-page", name="rubick-top-menu-slider-page")
     */
    public function rubickTopMenuSliderPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-slider-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-chart-page", name="rubick-top-menu-chart-page")
     */
    public function rubickTopMenuChartPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-chart-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-validation-page", name="rubick-top-menu-validation-page")
     */
    public function rubickTopMenuValidationPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-validation-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wysiwyg-editor-document-page", name="rubick-top-menu-wysiwyg-editor-document-page")
     */
    public function rubickTopMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wysiwyg-editor-balloon-block-page", name="rubick-top-menu-wysiwyg-editor-balloon-block-page")
     */
    public function rubickTopMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wysiwyg-editor-balloon-page", name="rubick-top-menu-wysiwyg-editor-balloon-page")
     */
    public function rubickTopMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wysiwyg-editor-inline-page", name="rubick-top-menu-wysiwyg-editor-inline-page")
     */
    public function rubickTopMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wysiwyg-editor-classic-page", name="rubick-top-menu-wysiwyg-editor-classic-page")
     */
    public function rubickTopMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-file-upload-page", name="rubick-top-menu-file-upload-page")
     */
    public function rubickTopMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-file-upload-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-tom-select-page", name="rubick-top-menu-tom-select-page")
     */
    public function rubickTopMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-tom-select-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-datepicker-page", name="rubick-top-menu-datepicker-page")
     */
    public function rubickTopMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-datepicker-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-regular-form-page", name="rubick-top-menu-regular-form-page")
     */
    public function rubickTopMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-regular-form-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-loading-icon-page", name="rubick-top-menu-loading-icon-page")
     */
    public function rubickTopMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-icon-page", name="rubick-top-menu-icon-page")
     */
    public function rubickTopMenuIconPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-icon-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-typography-page", name="rubick-top-menu-typography-page")
     */
    public function rubickTopMenuTypographyPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-typography-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-dropdown-page", name="rubick-top-menu-dropdown-page")
     */
    public function rubickTopMenuDropdownPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-dropdown-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-tooltip-page", name="rubick-top-menu-tooltip-page")
     */
    public function rubickTopMenuTooltipPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-tooltip-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-progress-bar-page", name="rubick-top-menu-progress-bar-page")
     */
    public function rubickTopMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-alert-page", name="rubick-top-menu-alert-page")
     */
    public function rubickTopMenuAlertPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-alert-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-button-page", name="rubick-top-menu-button-page")
     */
    public function rubickTopMenuButtonPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-button-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-accordion-page", name="rubick-top-menu-accordion-page")
     */
    public function rubickTopMenuAccordionPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-accordion-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-tab-page", name="rubick-top-menu-tab-page")
     */
    public function rubickTopMenuTabPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-tab-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-notification-page", name="rubick-top-menu-notification-page")
     */
    public function rubickTopMenuNotificationPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-notification-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-slide-over-page", name="rubick-top-menu-slide-over-page")
     */
    public function rubickTopMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-slide-over-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-modal-page", name="rubick-top-menu-modal-page")
     */
    public function rubickTopMenuModalPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-modal-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-tabulator-page", name="rubick-top-menu-tabulator-page")
     */
    public function rubickTopMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-tabulator-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-regular-table-page", name="rubick-top-menu-regular-table-page")
     */
    public function rubickTopMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-regular-table-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-change-password-page", name="rubick-top-menu-change-password-page")
     */
    public function rubickTopMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-change-password-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-update-profile-page", name="rubick-top-menu-update-profile-page")
     */
    public function rubickTopMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-update-profile-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-faq-layout-3-page", name="rubick-top-menu-faq-layout-3-page")
     */
    public function rubickTopMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-faq-layout-2-page", name="rubick-top-menu-faq-layout-2-page")
     */
    public function rubickTopMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-faq-layout-1-page", name="rubick-top-menu-faq-layout-1-page")
     */
    public function rubickTopMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-invoice-layout-2-page", name="rubick-top-menu-invoice-layout-2-page")
     */
    public function rubickTopMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-invoice-layout-1-page", name="rubick-top-menu-invoice-layout-1-page")
     */
    public function rubickTopMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-pricing-layout-2-page", name="rubick-top-menu-pricing-layout-2-page")
     */
    public function rubickTopMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-pricing-layout-1-page", name="rubick-top-menu-pricing-layout-1-page")
     */
    public function rubickTopMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-blog-layout-3-page", name="rubick-top-menu-blog-layout-3-page")
     */
    public function rubickTopMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-blog-layout-2-page", name="rubick-top-menu-blog-layout-2-page")
     */
    public function rubickTopMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-blog-layout-1-page", name="rubick-top-menu-blog-layout-1-page")
     */
    public function rubickTopMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wizard-layout-3-page", name="rubick-top-menu-wizard-layout-3-page")
     */
    public function rubickTopMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wizard-layout-2-page", name="rubick-top-menu-wizard-layout-2-page")
     */
    public function rubickTopMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-wizard-layout-1-page", name="rubick-top-menu-wizard-layout-1-page")
     */
    public function rubickTopMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-crud-form-page", name="rubick-top-menu-crud-form-page")
     */
    public function rubickTopMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-crud-form-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-crud-data-list-page", name="rubick-top-menu-crud-data-list-page")
     */
    public function rubickTopMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-calendar-page", name="rubick-top-menu-calendar-page")
     */
    public function rubickTopMenuCalendarPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-calendar-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-post-page", name="rubick-top-menu-post-page")
     */
    public function rubickTopMenuPostPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-post-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-chat-page", name="rubick-top-menu-chat-page")
     */
    public function rubickTopMenuChatPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-chat-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-point-of-sale-page", name="rubick-top-menu-point-of-sale-page")
     */
    public function rubickTopMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-file-manager-page", name="rubick-top-menu-file-manager-page")
     */
    public function rubickTopMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-file-manager-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-inbox-page", name="rubick-top-menu-inbox-page")
     */
    public function rubickTopMenuInboxPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-inbox-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-reviews-page", name="rubick-top-menu-reviews-page")
     */
    public function rubickTopMenuReviewsPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-reviews-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-seller-detail-page", name="rubick-top-menu-seller-detail-page")
     */
    public function rubickTopMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-seller-list-page", name="rubick-top-menu-seller-list-page")
     */
    public function rubickTopMenuSellerListPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-seller-list-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-transaction-detail-page", name="rubick-top-menu-transaction-detail-page")
     */
    public function rubickTopMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-transaction-list-page", name="rubick-top-menu-transaction-list-page")
     */
    public function rubickTopMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-product-grid-page", name="rubick-top-menu-product-grid-page")
     */
    public function rubickTopMenuProductGridPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-product-grid-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-product-list-page", name="rubick-top-menu-product-list-page")
     */
    public function rubickTopMenuProductListPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-product-list-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-add-product-page", name="rubick-top-menu-add-product-page")
     */
    public function rubickTopMenuAddProductPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-add-product-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-categories-page", name="rubick-top-menu-categories-page")
     */
    public function rubickTopMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/rubick-top-menu-categories-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-profile-overview-3-page", name="rubick-top-menu-profile-overview-3-page")
     */
    public function rubickTopMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-profile-overview-2-page", name="rubick-top-menu-profile-overview-2-page")
     */
    public function rubickTopMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-profile-overview-1-page", name="rubick-top-menu-profile-overview-1-page")
     */
    public function rubickTopMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-users-layout-3-page", name="rubick-top-menu-users-layout-3-page")
     */
    public function rubickTopMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-users-layout-2-page", name="rubick-top-menu-users-layout-2-page")
     */
    public function rubickTopMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-users-layout-1-page", name="rubick-top-menu-users-layout-1-page")
     */
    public function rubickTopMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-dashboard-overview-4-page", name="rubick-top-menu-dashboard-overview-4-page")
     */
    public function rubickTopMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-dashboard-overview-3-page", name="rubick-top-menu-dashboard-overview-3-page")
     */
    public function rubickTopMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-dashboard-overview-2-page", name="rubick-top-menu-dashboard-overview-2-page")
     */
    public function rubickTopMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-top-menu-dashboard-overview-1-page", name="rubick-top-menu-dashboard-overview-1-page")
     */
    public function rubickTopMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-top-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-login-page", name="tinker-top-menu-login-page")
     */
    public function tinkerTopMenuLoginPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-login-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-register-page", name="tinker-top-menu-register-page")
     */
    public function tinkerTopMenuRegisterPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-register-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-error-page-page", name="tinker-top-menu-error-page-page")
     */
    public function tinkerTopMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-error-page-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-image-zoom-page", name="tinker-top-menu-image-zoom-page")
     */
    public function tinkerTopMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-slider-page", name="tinker-top-menu-slider-page")
     */
    public function tinkerTopMenuSliderPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-slider-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-chart-page", name="tinker-top-menu-chart-page")
     */
    public function tinkerTopMenuChartPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-chart-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-validation-page", name="tinker-top-menu-validation-page")
     */
    public function tinkerTopMenuValidationPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-validation-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wysiwyg-editor-document-page", name="tinker-top-menu-wysiwyg-editor-document-page")
     */
    public function tinkerTopMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wysiwyg-editor-balloon-block-page", name="tinker-top-menu-wysiwyg-editor-balloon-block-page")
     */
    public function tinkerTopMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wysiwyg-editor-balloon-page", name="tinker-top-menu-wysiwyg-editor-balloon-page")
     */
    public function tinkerTopMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wysiwyg-editor-inline-page", name="tinker-top-menu-wysiwyg-editor-inline-page")
     */
    public function tinkerTopMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wysiwyg-editor-classic-page", name="tinker-top-menu-wysiwyg-editor-classic-page")
     */
    public function tinkerTopMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-file-upload-page", name="tinker-top-menu-file-upload-page")
     */
    public function tinkerTopMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-file-upload-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-tom-select-page", name="tinker-top-menu-tom-select-page")
     */
    public function tinkerTopMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-tom-select-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-datepicker-page", name="tinker-top-menu-datepicker-page")
     */
    public function tinkerTopMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-datepicker-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-regular-form-page", name="tinker-top-menu-regular-form-page")
     */
    public function tinkerTopMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-regular-form-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-loading-icon-page", name="tinker-top-menu-loading-icon-page")
     */
    public function tinkerTopMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-icon-page", name="tinker-top-menu-icon-page")
     */
    public function tinkerTopMenuIconPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-icon-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-typography-page", name="tinker-top-menu-typography-page")
     */
    public function tinkerTopMenuTypographyPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-typography-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-dropdown-page", name="tinker-top-menu-dropdown-page")
     */
    public function tinkerTopMenuDropdownPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-dropdown-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-tooltip-page", name="tinker-top-menu-tooltip-page")
     */
    public function tinkerTopMenuTooltipPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-tooltip-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-progress-bar-page", name="tinker-top-menu-progress-bar-page")
     */
    public function tinkerTopMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-alert-page", name="tinker-top-menu-alert-page")
     */
    public function tinkerTopMenuAlertPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-alert-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-button-page", name="tinker-top-menu-button-page")
     */
    public function tinkerTopMenuButtonPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-button-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-accordion-page", name="tinker-top-menu-accordion-page")
     */
    public function tinkerTopMenuAccordionPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-accordion-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-tab-page", name="tinker-top-menu-tab-page")
     */
    public function tinkerTopMenuTabPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-tab-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-notification-page", name="tinker-top-menu-notification-page")
     */
    public function tinkerTopMenuNotificationPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-notification-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-slide-over-page", name="tinker-top-menu-slide-over-page")
     */
    public function tinkerTopMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-slide-over-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-modal-page", name="tinker-top-menu-modal-page")
     */
    public function tinkerTopMenuModalPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-modal-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-tabulator-page", name="tinker-top-menu-tabulator-page")
     */
    public function tinkerTopMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-tabulator-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-regular-table-page", name="tinker-top-menu-regular-table-page")
     */
    public function tinkerTopMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-regular-table-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-change-password-page", name="tinker-top-menu-change-password-page")
     */
    public function tinkerTopMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-change-password-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-update-profile-page", name="tinker-top-menu-update-profile-page")
     */
    public function tinkerTopMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-update-profile-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-faq-layout-3-page", name="tinker-top-menu-faq-layout-3-page")
     */
    public function tinkerTopMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-faq-layout-2-page", name="tinker-top-menu-faq-layout-2-page")
     */
    public function tinkerTopMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-faq-layout-1-page", name="tinker-top-menu-faq-layout-1-page")
     */
    public function tinkerTopMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-invoice-layout-2-page", name="tinker-top-menu-invoice-layout-2-page")
     */
    public function tinkerTopMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-invoice-layout-1-page", name="tinker-top-menu-invoice-layout-1-page")
     */
    public function tinkerTopMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-pricing-layout-2-page", name="tinker-top-menu-pricing-layout-2-page")
     */
    public function tinkerTopMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-pricing-layout-1-page", name="tinker-top-menu-pricing-layout-1-page")
     */
    public function tinkerTopMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-blog-layout-3-page", name="tinker-top-menu-blog-layout-3-page")
     */
    public function tinkerTopMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-blog-layout-2-page", name="tinker-top-menu-blog-layout-2-page")
     */
    public function tinkerTopMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-blog-layout-1-page", name="tinker-top-menu-blog-layout-1-page")
     */
    public function tinkerTopMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wizard-layout-3-page", name="tinker-top-menu-wizard-layout-3-page")
     */
    public function tinkerTopMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wizard-layout-2-page", name="tinker-top-menu-wizard-layout-2-page")
     */
    public function tinkerTopMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-wizard-layout-1-page", name="tinker-top-menu-wizard-layout-1-page")
     */
    public function tinkerTopMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-crud-form-page", name="tinker-top-menu-crud-form-page")
     */
    public function tinkerTopMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-crud-form-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-crud-data-list-page", name="tinker-top-menu-crud-data-list-page")
     */
    public function tinkerTopMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-calendar-page", name="tinker-top-menu-calendar-page")
     */
    public function tinkerTopMenuCalendarPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-calendar-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-post-page", name="tinker-top-menu-post-page")
     */
    public function tinkerTopMenuPostPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-post-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-chat-page", name="tinker-top-menu-chat-page")
     */
    public function tinkerTopMenuChatPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-chat-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-point-of-sale-page", name="tinker-top-menu-point-of-sale-page")
     */
    public function tinkerTopMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-file-manager-page", name="tinker-top-menu-file-manager-page")
     */
    public function tinkerTopMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-file-manager-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-inbox-page", name="tinker-top-menu-inbox-page")
     */
    public function tinkerTopMenuInboxPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-inbox-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-reviews-page", name="tinker-top-menu-reviews-page")
     */
    public function tinkerTopMenuReviewsPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-reviews-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-seller-detail-page", name="tinker-top-menu-seller-detail-page")
     */
    public function tinkerTopMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-seller-list-page", name="tinker-top-menu-seller-list-page")
     */
    public function tinkerTopMenuSellerListPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-seller-list-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-transaction-detail-page", name="tinker-top-menu-transaction-detail-page")
     */
    public function tinkerTopMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-transaction-list-page", name="tinker-top-menu-transaction-list-page")
     */
    public function tinkerTopMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-product-grid-page", name="tinker-top-menu-product-grid-page")
     */
    public function tinkerTopMenuProductGridPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-product-grid-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-product-list-page", name="tinker-top-menu-product-list-page")
     */
    public function tinkerTopMenuProductListPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-product-list-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-add-product-page", name="tinker-top-menu-add-product-page")
     */
    public function tinkerTopMenuAddProductPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-add-product-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-categories-page", name="tinker-top-menu-categories-page")
     */
    public function tinkerTopMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/tinker-top-menu-categories-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-profile-overview-3-page", name="tinker-top-menu-profile-overview-3-page")
     */
    public function tinkerTopMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-profile-overview-2-page", name="tinker-top-menu-profile-overview-2-page")
     */
    public function tinkerTopMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-profile-overview-1-page", name="tinker-top-menu-profile-overview-1-page")
     */
    public function tinkerTopMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-users-layout-3-page", name="tinker-top-menu-users-layout-3-page")
     */
    public function tinkerTopMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-users-layout-2-page", name="tinker-top-menu-users-layout-2-page")
     */
    public function tinkerTopMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-users-layout-1-page", name="tinker-top-menu-users-layout-1-page")
     */
    public function tinkerTopMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-dashboard-overview-4-page", name="tinker-top-menu-dashboard-overview-4-page")
     */
    public function tinkerTopMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-dashboard-overview-3-page", name="tinker-top-menu-dashboard-overview-3-page")
     */
    public function tinkerTopMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-dashboard-overview-2-page", name="tinker-top-menu-dashboard-overview-2-page")
     */
    public function tinkerTopMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-top-menu-dashboard-overview-1-page", name="tinker-top-menu-dashboard-overview-1-page")
     */
    public function tinkerTopMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-top-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-login-page", name="tinker-simple-menu-login-page")
     */
    public function tinkerSimpleMenuLoginPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-login-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-register-page", name="tinker-simple-menu-register-page")
     */
    public function tinkerSimpleMenuRegisterPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-register-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-error-page-page", name="tinker-simple-menu-error-page-page")
     */
    public function tinkerSimpleMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-error-page-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-image-zoom-page", name="tinker-simple-menu-image-zoom-page")
     */
    public function tinkerSimpleMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-slider-page", name="tinker-simple-menu-slider-page")
     */
    public function tinkerSimpleMenuSliderPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-slider-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-chart-page", name="tinker-simple-menu-chart-page")
     */
    public function tinkerSimpleMenuChartPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-chart-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-validation-page", name="tinker-simple-menu-validation-page")
     */
    public function tinkerSimpleMenuValidationPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-validation-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wysiwyg-editor-document-page", name="tinker-simple-menu-wysiwyg-editor-document-page")
     */
    public function tinkerSimpleMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wysiwyg-editor-balloon-block-page", name="tinker-simple-menu-wysiwyg-editor-balloon-block-page")
     */
    public function tinkerSimpleMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wysiwyg-editor-balloon-page", name="tinker-simple-menu-wysiwyg-editor-balloon-page")
     */
    public function tinkerSimpleMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wysiwyg-editor-inline-page", name="tinker-simple-menu-wysiwyg-editor-inline-page")
     */
    public function tinkerSimpleMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wysiwyg-editor-classic-page", name="tinker-simple-menu-wysiwyg-editor-classic-page")
     */
    public function tinkerSimpleMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-file-upload-page", name="tinker-simple-menu-file-upload-page")
     */
    public function tinkerSimpleMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-file-upload-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-tom-select-page", name="tinker-simple-menu-tom-select-page")
     */
    public function tinkerSimpleMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-tom-select-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-datepicker-page", name="tinker-simple-menu-datepicker-page")
     */
    public function tinkerSimpleMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-datepicker-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-regular-form-page", name="tinker-simple-menu-regular-form-page")
     */
    public function tinkerSimpleMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-regular-form-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-loading-icon-page", name="tinker-simple-menu-loading-icon-page")
     */
    public function tinkerSimpleMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-icon-page", name="tinker-simple-menu-icon-page")
     */
    public function tinkerSimpleMenuIconPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-icon-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-typography-page", name="tinker-simple-menu-typography-page")
     */
    public function tinkerSimpleMenuTypographyPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-typography-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-dropdown-page", name="tinker-simple-menu-dropdown-page")
     */
    public function tinkerSimpleMenuDropdownPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-dropdown-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-tooltip-page", name="tinker-simple-menu-tooltip-page")
     */
    public function tinkerSimpleMenuTooltipPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-tooltip-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-progress-bar-page", name="tinker-simple-menu-progress-bar-page")
     */
    public function tinkerSimpleMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-alert-page", name="tinker-simple-menu-alert-page")
     */
    public function tinkerSimpleMenuAlertPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-alert-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-button-page", name="tinker-simple-menu-button-page")
     */
    public function tinkerSimpleMenuButtonPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-button-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-accordion-page", name="tinker-simple-menu-accordion-page")
     */
    public function tinkerSimpleMenuAccordionPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-accordion-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-tab-page", name="tinker-simple-menu-tab-page")
     */
    public function tinkerSimpleMenuTabPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-tab-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-notification-page", name="tinker-simple-menu-notification-page")
     */
    public function tinkerSimpleMenuNotificationPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-notification-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-slide-over-page", name="tinker-simple-menu-slide-over-page")
     */
    public function tinkerSimpleMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-slide-over-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-modal-page", name="tinker-simple-menu-modal-page")
     */
    public function tinkerSimpleMenuModalPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-modal-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-tabulator-page", name="tinker-simple-menu-tabulator-page")
     */
    public function tinkerSimpleMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-tabulator-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-regular-table-page", name="tinker-simple-menu-regular-table-page")
     */
    public function tinkerSimpleMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-regular-table-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-change-password-page", name="tinker-simple-menu-change-password-page")
     */
    public function tinkerSimpleMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-change-password-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-update-profile-page", name="tinker-simple-menu-update-profile-page")
     */
    public function tinkerSimpleMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-update-profile-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-faq-layout-3-page", name="tinker-simple-menu-faq-layout-3-page")
     */
    public function tinkerSimpleMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-faq-layout-2-page", name="tinker-simple-menu-faq-layout-2-page")
     */
    public function tinkerSimpleMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-faq-layout-1-page", name="tinker-simple-menu-faq-layout-1-page")
     */
    public function tinkerSimpleMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-invoice-layout-2-page", name="tinker-simple-menu-invoice-layout-2-page")
     */
    public function tinkerSimpleMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-invoice-layout-1-page", name="tinker-simple-menu-invoice-layout-1-page")
     */
    public function tinkerSimpleMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-pricing-layout-2-page", name="tinker-simple-menu-pricing-layout-2-page")
     */
    public function tinkerSimpleMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-pricing-layout-1-page", name="tinker-simple-menu-pricing-layout-1-page")
     */
    public function tinkerSimpleMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-blog-layout-3-page", name="tinker-simple-menu-blog-layout-3-page")
     */
    public function tinkerSimpleMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-blog-layout-2-page", name="tinker-simple-menu-blog-layout-2-page")
     */
    public function tinkerSimpleMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-blog-layout-1-page", name="tinker-simple-menu-blog-layout-1-page")
     */
    public function tinkerSimpleMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wizard-layout-3-page", name="tinker-simple-menu-wizard-layout-3-page")
     */
    public function tinkerSimpleMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wizard-layout-2-page", name="tinker-simple-menu-wizard-layout-2-page")
     */
    public function tinkerSimpleMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-wizard-layout-1-page", name="tinker-simple-menu-wizard-layout-1-page")
     */
    public function tinkerSimpleMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-profile-overview-3-page", name="tinker-simple-menu-profile-overview-3-page")
     */
    public function tinkerSimpleMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-profile-overview-2-page", name="tinker-simple-menu-profile-overview-2-page")
     */
    public function tinkerSimpleMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-profile-overview-1-page", name="tinker-simple-menu-profile-overview-1-page")
     */
    public function tinkerSimpleMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-users-layout-3-page", name="tinker-simple-menu-users-layout-3-page")
     */
    public function tinkerSimpleMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-users-layout-2-page", name="tinker-simple-menu-users-layout-2-page")
     */
    public function tinkerSimpleMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-users-layout-1-page", name="tinker-simple-menu-users-layout-1-page")
     */
    public function tinkerSimpleMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-crud-form-page", name="tinker-simple-menu-crud-form-page")
     */
    public function tinkerSimpleMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-crud-form-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-crud-data-list-page", name="tinker-simple-menu-crud-data-list-page")
     */
    public function tinkerSimpleMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-calendar-page", name="tinker-simple-menu-calendar-page")
     */
    public function tinkerSimpleMenuCalendarPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-calendar-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-post-page", name="tinker-simple-menu-post-page")
     */
    public function tinkerSimpleMenuPostPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-post-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-chat-page", name="tinker-simple-menu-chat-page")
     */
    public function tinkerSimpleMenuChatPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-chat-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-point-of-sale-page", name="tinker-simple-menu-point-of-sale-page")
     */
    public function tinkerSimpleMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-file-manager-page", name="tinker-simple-menu-file-manager-page")
     */
    public function tinkerSimpleMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-file-manager-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-inbox-page", name="tinker-simple-menu-inbox-page")
     */
    public function tinkerSimpleMenuInboxPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-inbox-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-reviews-page", name="tinker-simple-menu-reviews-page")
     */
    public function tinkerSimpleMenuReviewsPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-reviews-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-seller-detail-page", name="tinker-simple-menu-seller-detail-page")
     */
    public function tinkerSimpleMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-seller-list-page", name="tinker-simple-menu-seller-list-page")
     */
    public function tinkerSimpleMenuSellerListPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-seller-list-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-transaction-detail-page", name="tinker-simple-menu-transaction-detail-page")
     */
    public function tinkerSimpleMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-transaction-list-page", name="tinker-simple-menu-transaction-list-page")
     */
    public function tinkerSimpleMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-product-grid-page", name="tinker-simple-menu-product-grid-page")
     */
    public function tinkerSimpleMenuProductGridPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-product-grid-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-product-list-page", name="tinker-simple-menu-product-list-page")
     */
    public function tinkerSimpleMenuProductListPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-product-list-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-add-product-page", name="tinker-simple-menu-add-product-page")
     */
    public function tinkerSimpleMenuAddProductPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-add-product-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-categories-page", name="tinker-simple-menu-categories-page")
     */
    public function tinkerSimpleMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-categories-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-dashboard-overview-4-page", name="tinker-simple-menu-dashboard-overview-4-page")
     */
    public function tinkerSimpleMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-dashboard-overview-3-page", name="tinker-simple-menu-dashboard-overview-3-page")
     */
    public function tinkerSimpleMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-dashboard-overview-2-page", name="tinker-simple-menu-dashboard-overview-2-page")
     */
    public function tinkerSimpleMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-simple-menu-dashboard-overview-1-page", name="tinker-simple-menu-dashboard-overview-1-page")
     */
    public function tinkerSimpleMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-simple-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-login-page", name="icewall-simple-menu-login-page")
     */
    public function icewallSimpleMenuLoginPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-login-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-register-page", name="icewall-simple-menu-register-page")
     */
    public function icewallSimpleMenuRegisterPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-register-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-error-page-page", name="icewall-simple-menu-error-page-page")
     */
    public function icewallSimpleMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-error-page-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-image-zoom-page", name="icewall-simple-menu-image-zoom-page")
     */
    public function icewallSimpleMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-slider-page", name="icewall-simple-menu-slider-page")
     */
    public function icewallSimpleMenuSliderPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-slider-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-chart-page", name="icewall-simple-menu-chart-page")
     */
    public function icewallSimpleMenuChartPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-chart-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-validation-page", name="icewall-simple-menu-validation-page")
     */
    public function icewallSimpleMenuValidationPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-validation-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wysiwyg-editor-document-page", name="icewall-simple-menu-wysiwyg-editor-document-page")
     */
    public function icewallSimpleMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wysiwyg-editor-balloon-block-page", name="icewall-simple-menu-wysiwyg-editor-balloon-block-page")
     */
    public function icewallSimpleMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wysiwyg-editor-balloon-page", name="icewall-simple-menu-wysiwyg-editor-balloon-page")
     */
    public function icewallSimpleMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wysiwyg-editor-inline-page", name="icewall-simple-menu-wysiwyg-editor-inline-page")
     */
    public function icewallSimpleMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wysiwyg-editor-classic-page", name="icewall-simple-menu-wysiwyg-editor-classic-page")
     */
    public function icewallSimpleMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-file-upload-page", name="icewall-simple-menu-file-upload-page")
     */
    public function icewallSimpleMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-file-upload-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-tom-select-page", name="icewall-simple-menu-tom-select-page")
     */
    public function icewallSimpleMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-tom-select-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-datepicker-page", name="icewall-simple-menu-datepicker-page")
     */
    public function icewallSimpleMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-datepicker-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-regular-form-page", name="icewall-simple-menu-regular-form-page")
     */
    public function icewallSimpleMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-regular-form-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-loading-icon-page", name="icewall-simple-menu-loading-icon-page")
     */
    public function icewallSimpleMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-icon-page", name="icewall-simple-menu-icon-page")
     */
    public function icewallSimpleMenuIconPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-icon-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-typography-page", name="icewall-simple-menu-typography-page")
     */
    public function icewallSimpleMenuTypographyPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-typography-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-dropdown-page", name="icewall-simple-menu-dropdown-page")
     */
    public function icewallSimpleMenuDropdownPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-dropdown-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-tooltip-page", name="icewall-simple-menu-tooltip-page")
     */
    public function icewallSimpleMenuTooltipPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-tooltip-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-progress-bar-page", name="icewall-simple-menu-progress-bar-page")
     */
    public function icewallSimpleMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-alert-page", name="icewall-simple-menu-alert-page")
     */
    public function icewallSimpleMenuAlertPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-alert-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-button-page", name="icewall-simple-menu-button-page")
     */
    public function icewallSimpleMenuButtonPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-button-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-accordion-page", name="icewall-simple-menu-accordion-page")
     */
    public function icewallSimpleMenuAccordionPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-accordion-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-tab-page", name="icewall-simple-menu-tab-page")
     */
    public function icewallSimpleMenuTabPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-tab-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-notification-page", name="icewall-simple-menu-notification-page")
     */
    public function icewallSimpleMenuNotificationPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-notification-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-slide-over-page", name="icewall-simple-menu-slide-over-page")
     */
    public function icewallSimpleMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-slide-over-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-modal-page", name="icewall-simple-menu-modal-page")
     */
    public function icewallSimpleMenuModalPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-modal-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-tabulator-page", name="icewall-simple-menu-tabulator-page")
     */
    public function icewallSimpleMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-tabulator-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-regular-table-page", name="icewall-simple-menu-regular-table-page")
     */
    public function icewallSimpleMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-regular-table-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-change-password-page", name="icewall-simple-menu-change-password-page")
     */
    public function icewallSimpleMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-change-password-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-update-profile-page", name="icewall-simple-menu-update-profile-page")
     */
    public function icewallSimpleMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-update-profile-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-faq-layout-3-page", name="icewall-simple-menu-faq-layout-3-page")
     */
    public function icewallSimpleMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-faq-layout-2-page", name="icewall-simple-menu-faq-layout-2-page")
     */
    public function icewallSimpleMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-faq-layout-1-page", name="icewall-simple-menu-faq-layout-1-page")
     */
    public function icewallSimpleMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-invoice-layout-2-page", name="icewall-simple-menu-invoice-layout-2-page")
     */
    public function icewallSimpleMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-invoice-layout-1-page", name="icewall-simple-menu-invoice-layout-1-page")
     */
    public function icewallSimpleMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-pricing-layout-2-page", name="icewall-simple-menu-pricing-layout-2-page")
     */
    public function icewallSimpleMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-pricing-layout-1-page", name="icewall-simple-menu-pricing-layout-1-page")
     */
    public function icewallSimpleMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-blog-layout-3-page", name="icewall-simple-menu-blog-layout-3-page")
     */
    public function icewallSimpleMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-blog-layout-2-page", name="icewall-simple-menu-blog-layout-2-page")
     */
    public function icewallSimpleMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-blog-layout-1-page", name="icewall-simple-menu-blog-layout-1-page")
     */
    public function icewallSimpleMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wizard-layout-3-page", name="icewall-simple-menu-wizard-layout-3-page")
     */
    public function icewallSimpleMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wizard-layout-2-page", name="icewall-simple-menu-wizard-layout-2-page")
     */
    public function icewallSimpleMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-wizard-layout-1-page", name="icewall-simple-menu-wizard-layout-1-page")
     */
    public function icewallSimpleMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-profile-overview-3-page", name="icewall-simple-menu-profile-overview-3-page")
     */
    public function icewallSimpleMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-profile-overview-2-page", name="icewall-simple-menu-profile-overview-2-page")
     */
    public function icewallSimpleMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-profile-overview-1-page", name="icewall-simple-menu-profile-overview-1-page")
     */
    public function icewallSimpleMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-users-layout-3-page", name="icewall-simple-menu-users-layout-3-page")
     */
    public function icewallSimpleMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-users-layout-2-page", name="icewall-simple-menu-users-layout-2-page")
     */
    public function icewallSimpleMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-users-layout-1-page", name="icewall-simple-menu-users-layout-1-page")
     */
    public function icewallSimpleMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-crud-form-page", name="icewall-simple-menu-crud-form-page")
     */
    public function icewallSimpleMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-crud-form-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-crud-data-list-page", name="icewall-simple-menu-crud-data-list-page")
     */
    public function icewallSimpleMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-calendar-page", name="icewall-simple-menu-calendar-page")
     */
    public function icewallSimpleMenuCalendarPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-calendar-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-post-page", name="icewall-simple-menu-post-page")
     */
    public function icewallSimpleMenuPostPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-post-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-chat-page", name="icewall-simple-menu-chat-page")
     */
    public function icewallSimpleMenuChatPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-chat-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-point-of-sale-page", name="icewall-simple-menu-point-of-sale-page")
     */
    public function icewallSimpleMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-file-manager-page", name="icewall-simple-menu-file-manager-page")
     */
    public function icewallSimpleMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-file-manager-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-inbox-page", name="icewall-simple-menu-inbox-page")
     */
    public function icewallSimpleMenuInboxPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-inbox-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-reviews-page", name="icewall-simple-menu-reviews-page")
     */
    public function icewallSimpleMenuReviewsPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-reviews-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-seller-detail-page", name="icewall-simple-menu-seller-detail-page")
     */
    public function icewallSimpleMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-seller-list-page", name="icewall-simple-menu-seller-list-page")
     */
    public function icewallSimpleMenuSellerListPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-seller-list-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-transaction-detail-page", name="icewall-simple-menu-transaction-detail-page")
     */
    public function icewallSimpleMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-transaction-list-page", name="icewall-simple-menu-transaction-list-page")
     */
    public function icewallSimpleMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-product-grid-page", name="icewall-simple-menu-product-grid-page")
     */
    public function icewallSimpleMenuProductGridPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-product-grid-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-product-list-page", name="icewall-simple-menu-product-list-page")
     */
    public function icewallSimpleMenuProductListPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-product-list-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-add-product-page", name="icewall-simple-menu-add-product-page")
     */
    public function icewallSimpleMenuAddProductPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-add-product-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-categories-page", name="icewall-simple-menu-categories-page")
     */
    public function icewallSimpleMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-categories-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-dashboard-overview-4-page", name="icewall-simple-menu-dashboard-overview-4-page")
     */
    public function icewallSimpleMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-dashboard-overview-3-page", name="icewall-simple-menu-dashboard-overview-3-page")
     */
    public function icewallSimpleMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-dashboard-overview-2-page", name="icewall-simple-menu-dashboard-overview-2-page")
     */
    public function icewallSimpleMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-simple-menu-dashboard-overview-1-page", name="icewall-simple-menu-dashboard-overview-1-page")
     */
    public function icewallSimpleMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-simple-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-login-page", name="rubick-simple-menu-login-page")
     */
    public function rubickSimpleMenuLoginPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-login-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-register-page", name="rubick-simple-menu-register-page")
     */
    public function rubickSimpleMenuRegisterPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-register-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-error-page-page", name="rubick-simple-menu-error-page-page")
     */
    public function rubickSimpleMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-error-page-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-image-zoom-page", name="rubick-simple-menu-image-zoom-page")
     */
    public function rubickSimpleMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-slider-page", name="rubick-simple-menu-slider-page")
     */
    public function rubickSimpleMenuSliderPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-slider-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-chart-page", name="rubick-simple-menu-chart-page")
     */
    public function rubickSimpleMenuChartPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-chart-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-validation-page", name="rubick-simple-menu-validation-page")
     */
    public function rubickSimpleMenuValidationPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-validation-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wysiwyg-editor-document-page", name="rubick-simple-menu-wysiwyg-editor-document-page")
     */
    public function rubickSimpleMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wysiwyg-editor-balloon-block-page", name="rubick-simple-menu-wysiwyg-editor-balloon-block-page")
     */
    public function rubickSimpleMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wysiwyg-editor-balloon-page", name="rubick-simple-menu-wysiwyg-editor-balloon-page")
     */
    public function rubickSimpleMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wysiwyg-editor-inline-page", name="rubick-simple-menu-wysiwyg-editor-inline-page")
     */
    public function rubickSimpleMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wysiwyg-editor-classic-page", name="rubick-simple-menu-wysiwyg-editor-classic-page")
     */
    public function rubickSimpleMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-file-upload-page", name="rubick-simple-menu-file-upload-page")
     */
    public function rubickSimpleMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-file-upload-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-tom-select-page", name="rubick-simple-menu-tom-select-page")
     */
    public function rubickSimpleMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-tom-select-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-datepicker-page", name="rubick-simple-menu-datepicker-page")
     */
    public function rubickSimpleMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-datepicker-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-regular-form-page", name="rubick-simple-menu-regular-form-page")
     */
    public function rubickSimpleMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-regular-form-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-loading-icon-page", name="rubick-simple-menu-loading-icon-page")
     */
    public function rubickSimpleMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-icon-page", name="rubick-simple-menu-icon-page")
     */
    public function rubickSimpleMenuIconPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-icon-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-typography-page", name="rubick-simple-menu-typography-page")
     */
    public function rubickSimpleMenuTypographyPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-typography-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-dropdown-page", name="rubick-simple-menu-dropdown-page")
     */
    public function rubickSimpleMenuDropdownPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-dropdown-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-tooltip-page", name="rubick-simple-menu-tooltip-page")
     */
    public function rubickSimpleMenuTooltipPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-tooltip-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-progress-bar-page", name="rubick-simple-menu-progress-bar-page")
     */
    public function rubickSimpleMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-alert-page", name="rubick-simple-menu-alert-page")
     */
    public function rubickSimpleMenuAlertPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-alert-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-button-page", name="rubick-simple-menu-button-page")
     */
    public function rubickSimpleMenuButtonPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-button-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-accordion-page", name="rubick-simple-menu-accordion-page")
     */
    public function rubickSimpleMenuAccordionPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-accordion-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-tab-page", name="rubick-simple-menu-tab-page")
     */
    public function rubickSimpleMenuTabPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-tab-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-notification-page", name="rubick-simple-menu-notification-page")
     */
    public function rubickSimpleMenuNotificationPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-notification-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-slide-over-page", name="rubick-simple-menu-slide-over-page")
     */
    public function rubickSimpleMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-slide-over-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-modal-page", name="rubick-simple-menu-modal-page")
     */
    public function rubickSimpleMenuModalPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-modal-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-tabulator-page", name="rubick-simple-menu-tabulator-page")
     */
    public function rubickSimpleMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-tabulator-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-regular-table-page", name="rubick-simple-menu-regular-table-page")
     */
    public function rubickSimpleMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-regular-table-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-change-password-page", name="rubick-simple-menu-change-password-page")
     */
    public function rubickSimpleMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-change-password-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-update-profile-page", name="rubick-simple-menu-update-profile-page")
     */
    public function rubickSimpleMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-update-profile-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-faq-layout-3-page", name="rubick-simple-menu-faq-layout-3-page")
     */
    public function rubickSimpleMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-faq-layout-2-page", name="rubick-simple-menu-faq-layout-2-page")
     */
    public function rubickSimpleMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-faq-layout-1-page", name="rubick-simple-menu-faq-layout-1-page")
     */
    public function rubickSimpleMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-invoice-layout-2-page", name="rubick-simple-menu-invoice-layout-2-page")
     */
    public function rubickSimpleMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-invoice-layout-1-page", name="rubick-simple-menu-invoice-layout-1-page")
     */
    public function rubickSimpleMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-pricing-layout-2-page", name="rubick-simple-menu-pricing-layout-2-page")
     */
    public function rubickSimpleMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-pricing-layout-1-page", name="rubick-simple-menu-pricing-layout-1-page")
     */
    public function rubickSimpleMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-blog-layout-3-page", name="rubick-simple-menu-blog-layout-3-page")
     */
    public function rubickSimpleMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-blog-layout-2-page", name="rubick-simple-menu-blog-layout-2-page")
     */
    public function rubickSimpleMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-blog-layout-1-page", name="rubick-simple-menu-blog-layout-1-page")
     */
    public function rubickSimpleMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wizard-layout-3-page", name="rubick-simple-menu-wizard-layout-3-page")
     */
    public function rubickSimpleMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wizard-layout-2-page", name="rubick-simple-menu-wizard-layout-2-page")
     */
    public function rubickSimpleMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-wizard-layout-1-page", name="rubick-simple-menu-wizard-layout-1-page")
     */
    public function rubickSimpleMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-profile-overview-3-page", name="rubick-simple-menu-profile-overview-3-page")
     */
    public function rubickSimpleMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-profile-overview-2-page", name="rubick-simple-menu-profile-overview-2-page")
     */
    public function rubickSimpleMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-profile-overview-1-page", name="rubick-simple-menu-profile-overview-1-page")
     */
    public function rubickSimpleMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-users-layout-3-page", name="rubick-simple-menu-users-layout-3-page")
     */
    public function rubickSimpleMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-users-layout-2-page", name="rubick-simple-menu-users-layout-2-page")
     */
    public function rubickSimpleMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-users-layout-1-page", name="rubick-simple-menu-users-layout-1-page")
     */
    public function rubickSimpleMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-crud-form-page", name="rubick-simple-menu-crud-form-page")
     */
    public function rubickSimpleMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-crud-form-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-crud-data-list-page", name="rubick-simple-menu-crud-data-list-page")
     */
    public function rubickSimpleMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-calendar-page", name="rubick-simple-menu-calendar-page")
     */
    public function rubickSimpleMenuCalendarPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-calendar-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-post-page", name="rubick-simple-menu-post-page")
     */
    public function rubickSimpleMenuPostPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-post-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-chat-page", name="rubick-simple-menu-chat-page")
     */
    public function rubickSimpleMenuChatPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-chat-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-point-of-sale-page", name="rubick-simple-menu-point-of-sale-page")
     */
    public function rubickSimpleMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-file-manager-page", name="rubick-simple-menu-file-manager-page")
     */
    public function rubickSimpleMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-file-manager-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-inbox-page", name="rubick-simple-menu-inbox-page")
     */
    public function rubickSimpleMenuInboxPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-inbox-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-reviews-page", name="rubick-simple-menu-reviews-page")
     */
    public function rubickSimpleMenuReviewsPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-reviews-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-seller-detail-page", name="rubick-simple-menu-seller-detail-page")
     */
    public function rubickSimpleMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-seller-list-page", name="rubick-simple-menu-seller-list-page")
     */
    public function rubickSimpleMenuSellerListPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-seller-list-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-transaction-detail-page", name="rubick-simple-menu-transaction-detail-page")
     */
    public function rubickSimpleMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-transaction-list-page", name="rubick-simple-menu-transaction-list-page")
     */
    public function rubickSimpleMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-product-grid-page", name="rubick-simple-menu-product-grid-page")
     */
    public function rubickSimpleMenuProductGridPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-product-grid-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-product-list-page", name="rubick-simple-menu-product-list-page")
     */
    public function rubickSimpleMenuProductListPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-product-list-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-add-product-page", name="rubick-simple-menu-add-product-page")
     */
    public function rubickSimpleMenuAddProductPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-add-product-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-categories-page", name="rubick-simple-menu-categories-page")
     */
    public function rubickSimpleMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-categories-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-dashboard-overview-4-page", name="rubick-simple-menu-dashboard-overview-4-page")
     */
    public function rubickSimpleMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-dashboard-overview-3-page", name="rubick-simple-menu-dashboard-overview-3-page")
     */
    public function rubickSimpleMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-dashboard-overview-2-page", name="rubick-simple-menu-dashboard-overview-2-page")
     */
    public function rubickSimpleMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-simple-menu-dashboard-overview-1-page", name="rubick-simple-menu-dashboard-overview-1-page")
     */
    public function rubickSimpleMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-simple-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-login-page", name="enigma-simple-menu-login-page")
     */
    public function enigmaSimpleMenuLoginPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-login-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-register-page", name="enigma-simple-menu-register-page")
     */
    public function enigmaSimpleMenuRegisterPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-register-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-error-page-page", name="enigma-simple-menu-error-page-page")
     */
    public function enigmaSimpleMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-error-page-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-image-zoom-page", name="enigma-simple-menu-image-zoom-page")
     */
    public function enigmaSimpleMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-slider-page", name="enigma-simple-menu-slider-page")
     */
    public function enigmaSimpleMenuSliderPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-slider-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-chart-page", name="enigma-simple-menu-chart-page")
     */
    public function enigmaSimpleMenuChartPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-chart-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-validation-page", name="enigma-simple-menu-validation-page")
     */
    public function enigmaSimpleMenuValidationPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-validation-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wysiwyg-editor-document-page", name="enigma-simple-menu-wysiwyg-editor-document-page")
     */
    public function enigmaSimpleMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wysiwyg-editor-balloon-block-page", name="enigma-simple-menu-wysiwyg-editor-balloon-block-page")
     */
    public function enigmaSimpleMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wysiwyg-editor-balloon-page", name="enigma-simple-menu-wysiwyg-editor-balloon-page")
     */
    public function enigmaSimpleMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wysiwyg-editor-inline-page", name="enigma-simple-menu-wysiwyg-editor-inline-page")
     */
    public function enigmaSimpleMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wysiwyg-editor-classic-page", name="enigma-simple-menu-wysiwyg-editor-classic-page")
     */
    public function enigmaSimpleMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-file-upload-page", name="enigma-simple-menu-file-upload-page")
     */
    public function enigmaSimpleMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-file-upload-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-tom-select-page", name="enigma-simple-menu-tom-select-page")
     */
    public function enigmaSimpleMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-tom-select-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-datepicker-page", name="enigma-simple-menu-datepicker-page")
     */
    public function enigmaSimpleMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-datepicker-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-regular-form-page", name="enigma-simple-menu-regular-form-page")
     */
    public function enigmaSimpleMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-regular-form-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-loading-icon-page", name="enigma-simple-menu-loading-icon-page")
     */
    public function enigmaSimpleMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-icon-page", name="enigma-simple-menu-icon-page")
     */
    public function enigmaSimpleMenuIconPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-icon-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-typography-page", name="enigma-simple-menu-typography-page")
     */
    public function enigmaSimpleMenuTypographyPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-typography-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-dropdown-page", name="enigma-simple-menu-dropdown-page")
     */
    public function enigmaSimpleMenuDropdownPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-dropdown-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-tooltip-page", name="enigma-simple-menu-tooltip-page")
     */
    public function enigmaSimpleMenuTooltipPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-tooltip-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-progress-bar-page", name="enigma-simple-menu-progress-bar-page")
     */
    public function enigmaSimpleMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-alert-page", name="enigma-simple-menu-alert-page")
     */
    public function enigmaSimpleMenuAlertPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-alert-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-button-page", name="enigma-simple-menu-button-page")
     */
    public function enigmaSimpleMenuButtonPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-button-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-accordion-page", name="enigma-simple-menu-accordion-page")
     */
    public function enigmaSimpleMenuAccordionPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-accordion-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-tab-page", name="enigma-simple-menu-tab-page")
     */
    public function enigmaSimpleMenuTabPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-tab-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-notification-page", name="enigma-simple-menu-notification-page")
     */
    public function enigmaSimpleMenuNotificationPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-notification-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-slide-over-page", name="enigma-simple-menu-slide-over-page")
     */
    public function enigmaSimpleMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-slide-over-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-modal-page", name="enigma-simple-menu-modal-page")
     */
    public function enigmaSimpleMenuModalPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-modal-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-tabulator-page", name="enigma-simple-menu-tabulator-page")
     */
    public function enigmaSimpleMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-tabulator-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-regular-table-page", name="enigma-simple-menu-regular-table-page")
     */
    public function enigmaSimpleMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-regular-table-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-change-password-page", name="enigma-simple-menu-change-password-page")
     */
    public function enigmaSimpleMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-change-password-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-update-profile-page", name="enigma-simple-menu-update-profile-page")
     */
    public function enigmaSimpleMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-update-profile-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-faq-layout-3-page", name="enigma-simple-menu-faq-layout-3-page")
     */
    public function enigmaSimpleMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-faq-layout-2-page", name="enigma-simple-menu-faq-layout-2-page")
     */
    public function enigmaSimpleMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-faq-layout-1-page", name="enigma-simple-menu-faq-layout-1-page")
     */
    public function enigmaSimpleMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-invoice-layout-2-page", name="enigma-simple-menu-invoice-layout-2-page")
     */
    public function enigmaSimpleMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-invoice-layout-1-page", name="enigma-simple-menu-invoice-layout-1-page")
     */
    public function enigmaSimpleMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-pricing-layout-2-page", name="enigma-simple-menu-pricing-layout-2-page")
     */
    public function enigmaSimpleMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-pricing-layout-1-page", name="enigma-simple-menu-pricing-layout-1-page")
     */
    public function enigmaSimpleMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-blog-layout-3-page", name="enigma-simple-menu-blog-layout-3-page")
     */
    public function enigmaSimpleMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-blog-layout-2-page", name="enigma-simple-menu-blog-layout-2-page")
     */
    public function enigmaSimpleMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-blog-layout-1-page", name="enigma-simple-menu-blog-layout-1-page")
     */
    public function enigmaSimpleMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wizard-layout-3-page", name="enigma-simple-menu-wizard-layout-3-page")
     */
    public function enigmaSimpleMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wizard-layout-2-page", name="enigma-simple-menu-wizard-layout-2-page")
     */
    public function enigmaSimpleMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-wizard-layout-1-page", name="enigma-simple-menu-wizard-layout-1-page")
     */
    public function enigmaSimpleMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-profile-overview-3-page", name="enigma-simple-menu-profile-overview-3-page")
     */
    public function enigmaSimpleMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-profile-overview-2-page", name="enigma-simple-menu-profile-overview-2-page")
     */
    public function enigmaSimpleMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-profile-overview-1-page", name="enigma-simple-menu-profile-overview-1-page")
     */
    public function enigmaSimpleMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-users-layout-3-page", name="enigma-simple-menu-users-layout-3-page")
     */
    public function enigmaSimpleMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-users-layout-2-page", name="enigma-simple-menu-users-layout-2-page")
     */
    public function enigmaSimpleMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-users-layout-1-page", name="enigma-simple-menu-users-layout-1-page")
     */
    public function enigmaSimpleMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-crud-form-page", name="enigma-simple-menu-crud-form-page")
     */
    public function enigmaSimpleMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-crud-form-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-crud-data-list-page", name="enigma-simple-menu-crud-data-list-page")
     */
    public function enigmaSimpleMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-calendar-page", name="enigma-simple-menu-calendar-page")
     */
    public function enigmaSimpleMenuCalendarPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-calendar-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-post-page", name="enigma-simple-menu-post-page")
     */
    public function enigmaSimpleMenuPostPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-post-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-chat-page", name="enigma-simple-menu-chat-page")
     */
    public function enigmaSimpleMenuChatPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-chat-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-point-of-sale-page", name="enigma-simple-menu-point-of-sale-page")
     */
    public function enigmaSimpleMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-file-manager-page", name="enigma-simple-menu-file-manager-page")
     */
    public function enigmaSimpleMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-file-manager-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-inbox-page", name="enigma-simple-menu-inbox-page")
     */
    public function enigmaSimpleMenuInboxPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-inbox-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-reviews-page", name="enigma-simple-menu-reviews-page")
     */
    public function enigmaSimpleMenuReviewsPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-reviews-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-seller-detail-page", name="enigma-simple-menu-seller-detail-page")
     */
    public function enigmaSimpleMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-seller-list-page", name="enigma-simple-menu-seller-list-page")
     */
    public function enigmaSimpleMenuSellerListPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-seller-list-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-transaction-detail-page", name="enigma-simple-menu-transaction-detail-page")
     */
    public function enigmaSimpleMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-transaction-list-page", name="enigma-simple-menu-transaction-list-page")
     */
    public function enigmaSimpleMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-product-grid-page", name="enigma-simple-menu-product-grid-page")
     */
    public function enigmaSimpleMenuProductGridPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-product-grid-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-product-list-page", name="enigma-simple-menu-product-list-page")
     */
    public function enigmaSimpleMenuProductListPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-product-list-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-add-product-page", name="enigma-simple-menu-add-product-page")
     */
    public function enigmaSimpleMenuAddProductPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-add-product-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-categories-page", name="enigma-simple-menu-categories-page")
     */
    public function enigmaSimpleMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-categories-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-dashboard-overview-4-page", name="enigma-simple-menu-dashboard-overview-4-page")
     */
    public function enigmaSimpleMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-dashboard-overview-3-page", name="enigma-simple-menu-dashboard-overview-3-page")
     */
    public function enigmaSimpleMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-dashboard-overview-2-page", name="enigma-simple-menu-dashboard-overview-2-page")
     */
    public function enigmaSimpleMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-simple-menu-dashboard-overview-1-page", name="enigma-simple-menu-dashboard-overview-1-page")
     */
    public function enigmaSimpleMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-simple-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-login-page", name="enigma-side-menu-login-page")
     */
    public function enigmaSideMenuLoginPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-login-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-register-page", name="enigma-side-menu-register-page")
     */
    public function enigmaSideMenuRegisterPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-register-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-error-page-page", name="enigma-side-menu-error-page-page")
     */
    public function enigmaSideMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-error-page-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-image-zoom-page", name="enigma-side-menu-image-zoom-page")
     */
    public function enigmaSideMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-slider-page", name="enigma-side-menu-slider-page")
     */
    public function enigmaSideMenuSliderPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-slider-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-chart-page", name="enigma-side-menu-chart-page")
     */
    public function enigmaSideMenuChartPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-chart-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-validation-page", name="enigma-side-menu-validation-page")
     */
    public function enigmaSideMenuValidationPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-validation-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wysiwyg-editor-document-page", name="enigma-side-menu-wysiwyg-editor-document-page")
     */
    public function enigmaSideMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wysiwyg-editor-balloon-block-page", name="enigma-side-menu-wysiwyg-editor-balloon-block-page")
     */
    public function enigmaSideMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wysiwyg-editor-balloon-page", name="enigma-side-menu-wysiwyg-editor-balloon-page")
     */
    public function enigmaSideMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wysiwyg-editor-inline-page", name="enigma-side-menu-wysiwyg-editor-inline-page")
     */
    public function enigmaSideMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wysiwyg-editor-classic-page", name="enigma-side-menu-wysiwyg-editor-classic-page")
     */
    public function enigmaSideMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-file-upload-page", name="enigma-side-menu-file-upload-page")
     */
    public function enigmaSideMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-file-upload-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-tom-select-page", name="enigma-side-menu-tom-select-page")
     */
    public function enigmaSideMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-tom-select-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-datepicker-page", name="enigma-side-menu-datepicker-page")
     */
    public function enigmaSideMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-datepicker-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-regular-form-page", name="enigma-side-menu-regular-form-page")
     */
    public function enigmaSideMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-regular-form-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-loading-icon-page", name="enigma-side-menu-loading-icon-page")
     */
    public function enigmaSideMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-icon-page", name="enigma-side-menu-icon-page")
     */
    public function enigmaSideMenuIconPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-icon-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-typography-page", name="enigma-side-menu-typography-page")
     */
    public function enigmaSideMenuTypographyPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-typography-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-dropdown-page", name="enigma-side-menu-dropdown-page")
     */
    public function enigmaSideMenuDropdownPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-dropdown-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-tooltip-page", name="enigma-side-menu-tooltip-page")
     */
    public function enigmaSideMenuTooltipPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-tooltip-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-progress-bar-page", name="enigma-side-menu-progress-bar-page")
     */
    public function enigmaSideMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-alert-page", name="enigma-side-menu-alert-page")
     */
    public function enigmaSideMenuAlertPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-alert-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-button-page", name="enigma-side-menu-button-page")
     */
    public function enigmaSideMenuButtonPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-button-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-accordion-page", name="enigma-side-menu-accordion-page")
     */
    public function enigmaSideMenuAccordionPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-accordion-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-tab-page", name="enigma-side-menu-tab-page")
     */
    public function enigmaSideMenuTabPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-tab-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-notification-page", name="enigma-side-menu-notification-page")
     */
    public function enigmaSideMenuNotificationPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-notification-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-slide-over-page", name="enigma-side-menu-slide-over-page")
     */
    public function enigmaSideMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-slide-over-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-modal-page", name="enigma-side-menu-modal-page")
     */
    public function enigmaSideMenuModalPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-modal-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-tabulator-page", name="enigma-side-menu-tabulator-page")
     */
    public function enigmaSideMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-tabulator-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-regular-table-page", name="enigma-side-menu-regular-table-page")
     */
    public function enigmaSideMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-regular-table-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-change-password-page", name="enigma-side-menu-change-password-page")
     */
    public function enigmaSideMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-change-password-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-update-profile-page", name="enigma-side-menu-update-profile-page")
     */
    public function enigmaSideMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-update-profile-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-faq-layout-3-page", name="enigma-side-menu-faq-layout-3-page")
     */
    public function enigmaSideMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-faq-layout-2-page", name="enigma-side-menu-faq-layout-2-page")
     */
    public function enigmaSideMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-faq-layout-1-page", name="enigma-side-menu-faq-layout-1-page")
     */
    public function enigmaSideMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-invoice-layout-2-page", name="enigma-side-menu-invoice-layout-2-page")
     */
    public function enigmaSideMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-invoice-layout-1-page", name="enigma-side-menu-invoice-layout-1-page")
     */
    public function enigmaSideMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-pricing-layout-2-page", name="enigma-side-menu-pricing-layout-2-page")
     */
    public function enigmaSideMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-pricing-layout-1-page", name="enigma-side-menu-pricing-layout-1-page")
     */
    public function enigmaSideMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-blog-layout-3-page", name="enigma-side-menu-blog-layout-3-page")
     */
    public function enigmaSideMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-blog-layout-2-page", name="enigma-side-menu-blog-layout-2-page")
     */
    public function enigmaSideMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-blog-layout-1-page", name="enigma-side-menu-blog-layout-1-page")
     */
    public function enigmaSideMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wizard-layout-3-page", name="enigma-side-menu-wizard-layout-3-page")
     */
    public function enigmaSideMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wizard-layout-2-page", name="enigma-side-menu-wizard-layout-2-page")
     */
    public function enigmaSideMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-wizard-layout-1-page", name="enigma-side-menu-wizard-layout-1-page")
     */
    public function enigmaSideMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-profile-overview-3-page", name="enigma-side-menu-profile-overview-3-page")
     */
    public function enigmaSideMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-profile-overview-2-page", name="enigma-side-menu-profile-overview-2-page")
     */
    public function enigmaSideMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-profile-overview-1-page", name="enigma-side-menu-profile-overview-1-page")
     */
    public function enigmaSideMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-users-layout-3-page", name="enigma-side-menu-users-layout-3-page")
     */
    public function enigmaSideMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-users-layout-2-page", name="enigma-side-menu-users-layout-2-page")
     */
    public function enigmaSideMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-users-layout-1-page", name="enigma-side-menu-users-layout-1-page")
     */
    public function enigmaSideMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-crud-form-page", name="enigma-side-menu-crud-form-page")
     */
    public function enigmaSideMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-crud-form-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-crud-data-list-page", name="enigma-side-menu-crud-data-list-page")
     */
    public function enigmaSideMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-calendar-page", name="enigma-side-menu-calendar-page")
     */
    public function enigmaSideMenuCalendarPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-calendar-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-post-page", name="enigma-side-menu-post-page")
     */
    public function enigmaSideMenuPostPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-post-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-chat-page", name="enigma-side-menu-chat-page")
     */
    public function enigmaSideMenuChatPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-chat-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-point-of-sale-page", name="enigma-side-menu-point-of-sale-page")
     */
    public function enigmaSideMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-file-manager-page", name="enigma-side-menu-file-manager-page")
     */
    public function enigmaSideMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-file-manager-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-inbox-page", name="enigma-side-menu-inbox-page")
     */
    public function enigmaSideMenuInboxPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-inbox-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-reviews-page", name="enigma-side-menu-reviews-page")
     */
    public function enigmaSideMenuReviewsPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-reviews-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-seller-detail-page", name="enigma-side-menu-seller-detail-page")
     */
    public function enigmaSideMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-seller-list-page", name="enigma-side-menu-seller-list-page")
     */
    public function enigmaSideMenuSellerListPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-seller-list-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-transaction-detail-page", name="enigma-side-menu-transaction-detail-page")
     */
    public function enigmaSideMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-transaction-list-page", name="enigma-side-menu-transaction-list-page")
     */
    public function enigmaSideMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-product-grid-page", name="enigma-side-menu-product-grid-page")
     */
    public function enigmaSideMenuProductGridPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-product-grid-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-product-list-page", name="enigma-side-menu-product-list-page")
     */
    public function enigmaSideMenuProductListPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-product-list-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-add-product-page", name="enigma-side-menu-add-product-page")
     */
    public function enigmaSideMenuAddProductPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-add-product-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-categories-page", name="enigma-side-menu-categories-page")
     */
    public function enigmaSideMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/enigma-side-menu-categories-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-dashboard-overview-4-page", name="enigma-side-menu-dashboard-overview-4-page")
     */
    public function enigmaSideMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-dashboard-overview-3-page", name="enigma-side-menu-dashboard-overview-3-page")
     */
    public function enigmaSideMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-dashboard-overview-2-page", name="enigma-side-menu-dashboard-overview-2-page")
     */
    public function enigmaSideMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/enigma-side-menu-dashboard-overview-1-page", name="enigma-side-menu-dashboard-overview-1-page")
     */
    public function enigmaSideMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/enigma-side-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-login-page", name="tinker-side-menu-login-page")
     */
    public function tinkerSideMenuLoginPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-login-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-register-page", name="tinker-side-menu-register-page")
     */
    public function tinkerSideMenuRegisterPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-register-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-error-page-page", name="tinker-side-menu-error-page-page")
     */
    public function tinkerSideMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-error-page-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-image-zoom-page", name="tinker-side-menu-image-zoom-page")
     */
    public function tinkerSideMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-slider-page", name="tinker-side-menu-slider-page")
     */
    public function tinkerSideMenuSliderPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-slider-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-chart-page", name="tinker-side-menu-chart-page")
     */
    public function tinkerSideMenuChartPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-chart-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-validation-page", name="tinker-side-menu-validation-page")
     */
    public function tinkerSideMenuValidationPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-validation-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wysiwyg-editor-document-page", name="tinker-side-menu-wysiwyg-editor-document-page")
     */
    public function tinkerSideMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wysiwyg-editor-balloon-block-page", name="tinker-side-menu-wysiwyg-editor-balloon-block-page")
     */
    public function tinkerSideMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wysiwyg-editor-balloon-page", name="tinker-side-menu-wysiwyg-editor-balloon-page")
     */
    public function tinkerSideMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wysiwyg-editor-inline-page", name="tinker-side-menu-wysiwyg-editor-inline-page")
     */
    public function tinkerSideMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wysiwyg-editor-classic-page", name="tinker-side-menu-wysiwyg-editor-classic-page")
     */
    public function tinkerSideMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-file-upload-page", name="tinker-side-menu-file-upload-page")
     */
    public function tinkerSideMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-file-upload-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-tom-select-page", name="tinker-side-menu-tom-select-page")
     */
    public function tinkerSideMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-tom-select-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-datepicker-page", name="tinker-side-menu-datepicker-page")
     */
    public function tinkerSideMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-datepicker-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-regular-form-page", name="tinker-side-menu-regular-form-page")
     */
    public function tinkerSideMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-regular-form-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-loading-icon-page", name="tinker-side-menu-loading-icon-page")
     */
    public function tinkerSideMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-icon-page", name="tinker-side-menu-icon-page")
     */
    public function tinkerSideMenuIconPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-icon-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-typography-page", name="tinker-side-menu-typography-page")
     */
    public function tinkerSideMenuTypographyPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-typography-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-dropdown-page", name="tinker-side-menu-dropdown-page")
     */
    public function tinkerSideMenuDropdownPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-dropdown-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-tooltip-page", name="tinker-side-menu-tooltip-page")
     */
    public function tinkerSideMenuTooltipPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-tooltip-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-progress-bar-page", name="tinker-side-menu-progress-bar-page")
     */
    public function tinkerSideMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-alert-page", name="tinker-side-menu-alert-page")
     */
    public function tinkerSideMenuAlertPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-alert-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-button-page", name="tinker-side-menu-button-page")
     */
    public function tinkerSideMenuButtonPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-button-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-accordion-page", name="tinker-side-menu-accordion-page")
     */
    public function tinkerSideMenuAccordionPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-accordion-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-tab-page", name="tinker-side-menu-tab-page")
     */
    public function tinkerSideMenuTabPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-tab-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-notification-page", name="tinker-side-menu-notification-page")
     */
    public function tinkerSideMenuNotificationPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-notification-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-slide-over-page", name="tinker-side-menu-slide-over-page")
     */
    public function tinkerSideMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-slide-over-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-modal-page", name="tinker-side-menu-modal-page")
     */
    public function tinkerSideMenuModalPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-modal-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-tabulator-page", name="tinker-side-menu-tabulator-page")
     */
    public function tinkerSideMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-tabulator-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-regular-table-page", name="tinker-side-menu-regular-table-page")
     */
    public function tinkerSideMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-regular-table-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-change-password-page", name="tinker-side-menu-change-password-page")
     */
    public function tinkerSideMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-change-password-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-update-profile-page", name="tinker-side-menu-update-profile-page")
     */
    public function tinkerSideMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-update-profile-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-faq-layout-3-page", name="tinker-side-menu-faq-layout-3-page")
     */
    public function tinkerSideMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-faq-layout-2-page", name="tinker-side-menu-faq-layout-2-page")
     */
    public function tinkerSideMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-faq-layout-1-page", name="tinker-side-menu-faq-layout-1-page")
     */
    public function tinkerSideMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-invoice-layout-2-page", name="tinker-side-menu-invoice-layout-2-page")
     */
    public function tinkerSideMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-invoice-layout-1-page", name="tinker-side-menu-invoice-layout-1-page")
     */
    public function tinkerSideMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-pricing-layout-2-page", name="tinker-side-menu-pricing-layout-2-page")
     */
    public function tinkerSideMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-pricing-layout-1-page", name="tinker-side-menu-pricing-layout-1-page")
     */
    public function tinkerSideMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-blog-layout-3-page", name="tinker-side-menu-blog-layout-3-page")
     */
    public function tinkerSideMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-blog-layout-2-page", name="tinker-side-menu-blog-layout-2-page")
     */
    public function tinkerSideMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-blog-layout-1-page", name="tinker-side-menu-blog-layout-1-page")
     */
    public function tinkerSideMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wizard-layout-3-page", name="tinker-side-menu-wizard-layout-3-page")
     */
    public function tinkerSideMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wizard-layout-2-page", name="tinker-side-menu-wizard-layout-2-page")
     */
    public function tinkerSideMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-wizard-layout-1-page", name="tinker-side-menu-wizard-layout-1-page")
     */
    public function tinkerSideMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-profile-overview-3-page", name="tinker-side-menu-profile-overview-3-page")
     */
    public function tinkerSideMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-profile-overview-2-page", name="tinker-side-menu-profile-overview-2-page")
     */
    public function tinkerSideMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-profile-overview-1-page", name="tinker-side-menu-profile-overview-1-page")
     */
    public function tinkerSideMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-users-layout-3-page", name="tinker-side-menu-users-layout-3-page")
     */
    public function tinkerSideMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-users-layout-2-page", name="tinker-side-menu-users-layout-2-page")
     */
    public function tinkerSideMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-users-layout-1-page", name="tinker-side-menu-users-layout-1-page")
     */
    public function tinkerSideMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-crud-form-page", name="tinker-side-menu-crud-form-page")
     */
    public function tinkerSideMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-crud-form-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-crud-data-list-page", name="tinker-side-menu-crud-data-list-page")
     */
    public function tinkerSideMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-calendar-page", name="tinker-side-menu-calendar-page")
     */
    public function tinkerSideMenuCalendarPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-calendar-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-post-page", name="tinker-side-menu-post-page")
     */
    public function tinkerSideMenuPostPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-post-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-chat-page", name="tinker-side-menu-chat-page")
     */
    public function tinkerSideMenuChatPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-chat-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-point-of-sale-page", name="tinker-side-menu-point-of-sale-page")
     */
    public function tinkerSideMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-file-manager-page", name="tinker-side-menu-file-manager-page")
     */
    public function tinkerSideMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-file-manager-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-inbox-page", name="tinker-side-menu-inbox-page")
     */
    public function tinkerSideMenuInboxPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-inbox-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-reviews-page", name="tinker-side-menu-reviews-page")
     */
    public function tinkerSideMenuReviewsPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-reviews-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-seller-detail-page", name="tinker-side-menu-seller-detail-page")
     */
    public function tinkerSideMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-seller-list-page", name="tinker-side-menu-seller-list-page")
     */
    public function tinkerSideMenuSellerListPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-seller-list-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-transaction-detail-page", name="tinker-side-menu-transaction-detail-page")
     */
    public function tinkerSideMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-transaction-list-page", name="tinker-side-menu-transaction-list-page")
     */
    public function tinkerSideMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-product-grid-page", name="tinker-side-menu-product-grid-page")
     */
    public function tinkerSideMenuProductGridPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-product-grid-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-product-list-page", name="tinker-side-menu-product-list-page")
     */
    public function tinkerSideMenuProductListPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-product-list-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-add-product-page", name="tinker-side-menu-add-product-page")
     */
    public function tinkerSideMenuAddProductPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-add-product-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-categories-page", name="tinker-side-menu-categories-page")
     */
    public function tinkerSideMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/tinker-side-menu-categories-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-dashboard-overview-4-page", name="tinker-side-menu-dashboard-overview-4-page")
     */
    public function tinkerSideMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-dashboard-overview-3-page", name="tinker-side-menu-dashboard-overview-3-page")
     */
    public function tinkerSideMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-dashboard-overview-2-page", name="tinker-side-menu-dashboard-overview-2-page")
     */
    public function tinkerSideMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/tinker-side-menu-dashboard-overview-1-page", name="tinker-side-menu-dashboard-overview-1-page")
     */
    public function tinkerSideMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/tinker-side-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-login-page", name="icewall-side-menu-login-page")
     */
    public function icewallSideMenuLoginPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-login-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-register-page", name="icewall-side-menu-register-page")
     */
    public function icewallSideMenuRegisterPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-register-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-error-page-page", name="icewall-side-menu-error-page-page")
     */
    public function icewallSideMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-error-page-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-image-zoom-page", name="icewall-side-menu-image-zoom-page")
     */
    public function icewallSideMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-slider-page", name="icewall-side-menu-slider-page")
     */
    public function icewallSideMenuSliderPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-slider-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-chart-page", name="icewall-side-menu-chart-page")
     */
    public function icewallSideMenuChartPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-chart-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-validation-page", name="icewall-side-menu-validation-page")
     */
    public function icewallSideMenuValidationPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-validation-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wysiwyg-editor-document-page", name="icewall-side-menu-wysiwyg-editor-document-page")
     */
    public function icewallSideMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wysiwyg-editor-balloon-block-page", name="icewall-side-menu-wysiwyg-editor-balloon-block-page")
     */
    public function icewallSideMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wysiwyg-editor-balloon-page", name="icewall-side-menu-wysiwyg-editor-balloon-page")
     */
    public function icewallSideMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wysiwyg-editor-inline-page", name="icewall-side-menu-wysiwyg-editor-inline-page")
     */
    public function icewallSideMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wysiwyg-editor-classic-page", name="icewall-side-menu-wysiwyg-editor-classic-page")
     */
    public function icewallSideMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-file-upload-page", name="icewall-side-menu-file-upload-page")
     */
    public function icewallSideMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-file-upload-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-tom-select-page", name="icewall-side-menu-tom-select-page")
     */
    public function icewallSideMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-tom-select-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-datepicker-page", name="icewall-side-menu-datepicker-page")
     */
    public function icewallSideMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-datepicker-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-regular-form-page", name="icewall-side-menu-regular-form-page")
     */
    public function icewallSideMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-regular-form-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-loading-icon-page", name="icewall-side-menu-loading-icon-page")
     */
    public function icewallSideMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-icon-page", name="icewall-side-menu-icon-page")
     */
    public function icewallSideMenuIconPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-icon-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-typography-page", name="icewall-side-menu-typography-page")
     */
    public function icewallSideMenuTypographyPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-typography-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-dropdown-page", name="icewall-side-menu-dropdown-page")
     */
    public function icewallSideMenuDropdownPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-dropdown-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-tooltip-page", name="icewall-side-menu-tooltip-page")
     */
    public function icewallSideMenuTooltipPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-tooltip-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-progress-bar-page", name="icewall-side-menu-progress-bar-page")
     */
    public function icewallSideMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-alert-page", name="icewall-side-menu-alert-page")
     */
    public function icewallSideMenuAlertPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-alert-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-button-page", name="icewall-side-menu-button-page")
     */
    public function icewallSideMenuButtonPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-button-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-accordion-page", name="icewall-side-menu-accordion-page")
     */
    public function icewallSideMenuAccordionPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-accordion-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-tab-page", name="icewall-side-menu-tab-page")
     */
    public function icewallSideMenuTabPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-tab-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-notification-page", name="icewall-side-menu-notification-page")
     */
    public function icewallSideMenuNotificationPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-notification-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-slide-over-page", name="icewall-side-menu-slide-over-page")
     */
    public function icewallSideMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-slide-over-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-modal-page", name="icewall-side-menu-modal-page")
     */
    public function icewallSideMenuModalPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-modal-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-tabulator-page", name="icewall-side-menu-tabulator-page")
     */
    public function icewallSideMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-tabulator-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-regular-table-page", name="icewall-side-menu-regular-table-page")
     */
    public function icewallSideMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-regular-table-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-change-password-page", name="icewall-side-menu-change-password-page")
     */
    public function icewallSideMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-change-password-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-update-profile-page", name="icewall-side-menu-update-profile-page")
     */
    public function icewallSideMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-update-profile-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-faq-layout-3-page", name="icewall-side-menu-faq-layout-3-page")
     */
    public function icewallSideMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-faq-layout-2-page", name="icewall-side-menu-faq-layout-2-page")
     */
    public function icewallSideMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-faq-layout-1-page", name="icewall-side-menu-faq-layout-1-page")
     */
    public function icewallSideMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-invoice-layout-2-page", name="icewall-side-menu-invoice-layout-2-page")
     */
    public function icewallSideMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-invoice-layout-1-page", name="icewall-side-menu-invoice-layout-1-page")
     */
    public function icewallSideMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-pricing-layout-2-page", name="icewall-side-menu-pricing-layout-2-page")
     */
    public function icewallSideMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-pricing-layout-1-page", name="icewall-side-menu-pricing-layout-1-page")
     */
    public function icewallSideMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-blog-layout-3-page", name="icewall-side-menu-blog-layout-3-page")
     */
    public function icewallSideMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-blog-layout-2-page", name="icewall-side-menu-blog-layout-2-page")
     */
    public function icewallSideMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-blog-layout-1-page", name="icewall-side-menu-blog-layout-1-page")
     */
    public function icewallSideMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wizard-layout-3-page", name="icewall-side-menu-wizard-layout-3-page")
     */
    public function icewallSideMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wizard-layout-2-page", name="icewall-side-menu-wizard-layout-2-page")
     */
    public function icewallSideMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-wizard-layout-1-page", name="icewall-side-menu-wizard-layout-1-page")
     */
    public function icewallSideMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-profile-overview-3-page", name="icewall-side-menu-profile-overview-3-page")
     */
    public function icewallSideMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-profile-overview-2-page", name="icewall-side-menu-profile-overview-2-page")
     */
    public function icewallSideMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-profile-overview-1-page", name="icewall-side-menu-profile-overview-1-page")
     */
    public function icewallSideMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-users-layout-3-page", name="icewall-side-menu-users-layout-3-page")
     */
    public function icewallSideMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-users-layout-2-page", name="icewall-side-menu-users-layout-2-page")
     */
    public function icewallSideMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-users-layout-1-page", name="icewall-side-menu-users-layout-1-page")
     */
    public function icewallSideMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-crud-form-page", name="icewall-side-menu-crud-form-page")
     */
    public function icewallSideMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-crud-form-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-crud-data-list-page", name="icewall-side-menu-crud-data-list-page")
     */
    public function icewallSideMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-calendar-page", name="icewall-side-menu-calendar-page")
     */
    public function icewallSideMenuCalendarPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-calendar-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-post-page", name="icewall-side-menu-post-page")
     */
    public function icewallSideMenuPostPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-post-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-chat-page", name="icewall-side-menu-chat-page")
     */
    public function icewallSideMenuChatPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-chat-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-point-of-sale-page", name="icewall-side-menu-point-of-sale-page")
     */
    public function icewallSideMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-file-manager-page", name="icewall-side-menu-file-manager-page")
     */
    public function icewallSideMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-file-manager-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-inbox-page", name="icewall-side-menu-inbox-page")
     */
    public function icewallSideMenuInboxPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-inbox-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-reviews-page", name="icewall-side-menu-reviews-page")
     */
    public function icewallSideMenuReviewsPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-reviews-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-seller-detail-page", name="icewall-side-menu-seller-detail-page")
     */
    public function icewallSideMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-seller-list-page", name="icewall-side-menu-seller-list-page")
     */
    public function icewallSideMenuSellerListPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-seller-list-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-transaction-detail-page", name="icewall-side-menu-transaction-detail-page")
     */
    public function icewallSideMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-transaction-list-page", name="icewall-side-menu-transaction-list-page")
     */
    public function icewallSideMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-product-grid-page", name="icewall-side-menu-product-grid-page")
     */
    public function icewallSideMenuProductGridPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-product-grid-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-product-list-page", name="icewall-side-menu-product-list-page")
     */
    public function icewallSideMenuProductListPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-product-list-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-add-product-page", name="icewall-side-menu-add-product-page")
     */
    public function icewallSideMenuAddProductPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-add-product-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-categories-page", name="icewall-side-menu-categories-page")
     */
    public function icewallSideMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/icewall-side-menu-categories-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-dashboard-overview-4-page", name="icewall-side-menu-dashboard-overview-4-page")
     */
    public function icewallSideMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-dashboard-overview-3-page", name="icewall-side-menu-dashboard-overview-3-page")
     */
    public function icewallSideMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-dashboard-overview-2-page", name="icewall-side-menu-dashboard-overview-2-page")
     */
    public function icewallSideMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/icewall-side-menu-dashboard-overview-1-page", name="icewall-side-menu-dashboard-overview-1-page")
     */
    public function icewallSideMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/icewall-side-menu-dashboard-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-login-page", name="rubick-side-menu-login-page")
     */
    public function rubickSideMenuLoginPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-login-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-register-page", name="rubick-side-menu-register-page")
     */
    public function rubickSideMenuRegisterPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-register-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-error-page-page", name="rubick-side-menu-error-page-page")
     */
    public function rubickSideMenuErrorPagePage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-error-page-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-image-zoom-page", name="rubick-side-menu-image-zoom-page")
     */
    public function rubickSideMenuImageZoomPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-image-zoom-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-slider-page", name="rubick-side-menu-slider-page")
     */
    public function rubickSideMenuSliderPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-slider-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-chart-page", name="rubick-side-menu-chart-page")
     */
    public function rubickSideMenuChartPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-chart-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-validation-page", name="rubick-side-menu-validation-page")
     */
    public function rubickSideMenuValidationPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-validation-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wysiwyg-editor-document-page", name="rubick-side-menu-wysiwyg-editor-document-page")
     */
    public function rubickSideMenuWysiwygEditorDocumentPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wysiwyg-editor-document-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wysiwyg-editor-balloon-block-page", name="rubick-side-menu-wysiwyg-editor-balloon-block-page")
     */
    public function rubickSideMenuWysiwygEditorBalloonBlockPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wysiwyg-editor-balloon-block-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wysiwyg-editor-balloon-page", name="rubick-side-menu-wysiwyg-editor-balloon-page")
     */
    public function rubickSideMenuWysiwygEditorBalloonPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wysiwyg-editor-balloon-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wysiwyg-editor-inline-page", name="rubick-side-menu-wysiwyg-editor-inline-page")
     */
    public function rubickSideMenuWysiwygEditorInlinePage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wysiwyg-editor-inline-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wysiwyg-editor-classic-page", name="rubick-side-menu-wysiwyg-editor-classic-page")
     */
    public function rubickSideMenuWysiwygEditorClassicPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wysiwyg-editor-classic-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-file-upload-page", name="rubick-side-menu-file-upload-page")
     */
    public function rubickSideMenuFileUploadPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-file-upload-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-tom-select-page", name="rubick-side-menu-tom-select-page")
     */
    public function rubickSideMenuTomSelectPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-tom-select-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-datepicker-page", name="rubick-side-menu-datepicker-page")
     */
    public function rubickSideMenuDatepickerPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-datepicker-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-regular-form-page", name="rubick-side-menu-regular-form-page")
     */
    public function rubickSideMenuRegularFormPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-regular-form-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-loading-icon-page", name="rubick-side-menu-loading-icon-page")
     */
    public function rubickSideMenuLoadingIconPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-loading-icon-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-icon-page", name="rubick-side-menu-icon-page")
     */
    public function rubickSideMenuIconPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-icon-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-typography-page", name="rubick-side-menu-typography-page")
     */
    public function rubickSideMenuTypographyPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-typography-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-dropdown-page", name="rubick-side-menu-dropdown-page")
     */
    public function rubickSideMenuDropdownPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-dropdown-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-tooltip-page", name="rubick-side-menu-tooltip-page")
     */
    public function rubickSideMenuTooltipPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-tooltip-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-progress-bar-page", name="rubick-side-menu-progress-bar-page")
     */
    public function rubickSideMenuProgressBarPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-progress-bar-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-alert-page", name="rubick-side-menu-alert-page")
     */
    public function rubickSideMenuAlertPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-alert-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-button-page", name="rubick-side-menu-button-page")
     */
    public function rubickSideMenuButtonPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-button-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-accordion-page", name="rubick-side-menu-accordion-page")
     */
    public function rubickSideMenuAccordionPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-accordion-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-tab-page", name="rubick-side-menu-tab-page")
     */
    public function rubickSideMenuTabPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-tab-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-notification-page", name="rubick-side-menu-notification-page")
     */
    public function rubickSideMenuNotificationPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-notification-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-slide-over-page", name="rubick-side-menu-slide-over-page")
     */
    public function rubickSideMenuSlideOverPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-slide-over-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-modal-page", name="rubick-side-menu-modal-page")
     */
    public function rubickSideMenuModalPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-modal-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-tabulator-page", name="rubick-side-menu-tabulator-page")
     */
    public function rubickSideMenuTabulatorPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-tabulator-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-regular-table-page", name="rubick-side-menu-regular-table-page")
     */
    public function rubickSideMenuRegularTablePage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-regular-table-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-change-password-page", name="rubick-side-menu-change-password-page")
     */
    public function rubickSideMenuChangePasswordPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-change-password-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-update-profile-page", name="rubick-side-menu-update-profile-page")
     */
    public function rubickSideMenuUpdateProfilePage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-update-profile-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-faq-layout-3-page", name="rubick-side-menu-faq-layout-3-page")
     */
    public function rubickSideMenuFaqLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-faq-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-faq-layout-2-page", name="rubick-side-menu-faq-layout-2-page")
     */
    public function rubickSideMenuFaqLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-faq-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-faq-layout-1-page", name="rubick-side-menu-faq-layout-1-page")
     */
    public function rubickSideMenuFaqLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-faq-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-invoice-layout-2-page", name="rubick-side-menu-invoice-layout-2-page")
     */
    public function rubickSideMenuInvoiceLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-invoice-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-invoice-layout-1-page", name="rubick-side-menu-invoice-layout-1-page")
     */
    public function rubickSideMenuInvoiceLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-invoice-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-pricing-layout-2-page", name="rubick-side-menu-pricing-layout-2-page")
     */
    public function rubickSideMenuPricingLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-pricing-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-pricing-layout-1-page", name="rubick-side-menu-pricing-layout-1-page")
     */
    public function rubickSideMenuPricingLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-pricing-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-blog-layout-3-page", name="rubick-side-menu-blog-layout-3-page")
     */
    public function rubickSideMenuBlogLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-blog-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-blog-layout-2-page", name="rubick-side-menu-blog-layout-2-page")
     */
    public function rubickSideMenuBlogLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-blog-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-blog-layout-1-page", name="rubick-side-menu-blog-layout-1-page")
     */
    public function rubickSideMenuBlogLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-blog-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wizard-layout-3-page", name="rubick-side-menu-wizard-layout-3-page")
     */
    public function rubickSideMenuWizardLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wizard-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wizard-layout-2-page", name="rubick-side-menu-wizard-layout-2-page")
     */
    public function rubickSideMenuWizardLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wizard-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-wizard-layout-1-page", name="rubick-side-menu-wizard-layout-1-page")
     */
    public function rubickSideMenuWizardLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-wizard-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-profile-overview-3-page", name="rubick-side-menu-profile-overview-3-page")
     */
    public function rubickSideMenuProfileOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-profile-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-profile-overview-2-page", name="rubick-side-menu-profile-overview-2-page")
     */
    public function rubickSideMenuProfileOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-profile-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-profile-overview-1-page", name="rubick-side-menu-profile-overview-1-page")
     */
    public function rubickSideMenuProfileOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-profile-overview-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-users-layout-3-page", name="rubick-side-menu-users-layout-3-page")
     */
    public function rubickSideMenuUsersLayout3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-users-layout-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-users-layout-2-page", name="rubick-side-menu-users-layout-2-page")
     */
    public function rubickSideMenuUsersLayout2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-users-layout-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-users-layout-1-page", name="rubick-side-menu-users-layout-1-page")
     */
    public function rubickSideMenuUsersLayout1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-users-layout-1-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-crud-form-page", name="rubick-side-menu-crud-form-page")
     */
    public function rubickSideMenuCrudFormPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-crud-form-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-crud-data-list-page", name="rubick-side-menu-crud-data-list-page")
     */
    public function rubickSideMenuCrudDataListPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-crud-data-list-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-calendar-page", name="rubick-side-menu-calendar-page")
     */
    public function rubickSideMenuCalendarPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-calendar-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-post-page", name="rubick-side-menu-post-page")
     */
    public function rubickSideMenuPostPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-post-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-chat-page", name="rubick-side-menu-chat-page")
     */
    public function rubickSideMenuChatPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-chat-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-point-of-sale-page", name="rubick-side-menu-point-of-sale-page")
     */
    public function rubickSideMenuPointOfSalePage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-point-of-sale-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-file-manager-page", name="rubick-side-menu-file-manager-page")
     */
    public function rubickSideMenuFileManagerPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-file-manager-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-inbox-page", name="rubick-side-menu-inbox-page")
     */
    public function rubickSideMenuInboxPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-inbox-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-reviews-page", name="rubick-side-menu-reviews-page")
     */
    public function rubickSideMenuReviewsPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-reviews-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-seller-detail-page", name="rubick-side-menu-seller-detail-page")
     */
    public function rubickSideMenuSellerDetailPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-seller-detail-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-seller-list-page", name="rubick-side-menu-seller-list-page")
     */
    public function rubickSideMenuSellerListPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-seller-list-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-transaction-detail-page", name="rubick-side-menu-transaction-detail-page")
     */
    public function rubickSideMenuTransactionDetailPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-transaction-detail-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-transaction-list-page", name="rubick-side-menu-transaction-list-page")
     */
    public function rubickSideMenuTransactionListPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-transaction-list-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-product-grid-page", name="rubick-side-menu-product-grid-page")
     */
    public function rubickSideMenuProductGridPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-product-grid-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-product-list-page", name="rubick-side-menu-product-list-page")
     */
    public function rubickSideMenuProductListPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-product-list-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-add-product-page", name="rubick-side-menu-add-product-page")
     */
    public function rubickSideMenuAddProductPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-add-product-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-categories-page", name="rubick-side-menu-categories-page")
     */
    public function rubickSideMenuCategoriesPage()
    {
        return $this->render('/adminDashboard/rubick-side-menu-categories-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-dashboard-overview-4-page", name="rubick-side-menu-dashboard-overview-4-page")
     */
    public function rubickSideMenuDashboardOverview4Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-dashboard-overview-4-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-dashboard-overview-3-page", name="rubick-side-menu-dashboard-overview-3-page")
     */
    public function rubickSideMenuDashboardOverview3Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-dashboard-overview-3-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-dashboard-overview-2-page", name="rubick-side-menu-dashboard-overview-2-page")
     */
    public function rubickSideMenuDashboardOverview2Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-dashboard-overview-2-page.twig');
    }
    /**
     * @Route("/rubick-side-menu-dashboard-overview-1-page", name="rubick-side-menu-dashboard-overview-1-page")
     */
    public function rubickSideMenuDashboardOverview1Page()
    {
        return $this->render('/adminDashboard/rubick-side-menu-dashboard-overview-1-page.twig');
    }

    /**
     * @Route("/dashboard/index", name="dashboard")
     */
    public function index()
    {
        return $this->render('/adminDashboard/index.twig');
    }
}
