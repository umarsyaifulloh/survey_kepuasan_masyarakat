   <!--begin::Root-->
   <div class="d-flex flex-column flex-root">
       <!--begin::Page-->
       <div class="page d-flex flex-row flex-column-fluid">
           <!-- SideBar yang Ada Logonya-->
           <!--begin::Aside-->
           <div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
               <!--begin::Workspace-->
               <div class="aside-primary my-5 p-3 mt-8" id="kt_aside_wordspace">
                   <div class="d-flex h-100 flex-column">
                       <!--begin::Wrapper-->
                       <div class="flex-column-fluid" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                           <!--begin::Tab content-->
                           <div class="tab-content">
                               <!--begin::Tab pane-->
                               <div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
                                   <!--begin::User-->
                                   <div class="d-flex align-items-center mb-10 px-5" id="kt_header_user_menu_toggle">
                                       <!--begin::Menu wrapper-->
                                       <div class="cursor-pointer symbol symbol-50px px-0 text-center" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click">
                                           <img alt="Logo" src="<?= base_url(); ?>/img/logoopd/<?= $users['opd_logo']; ?>" class="h-50px" />
                                       </div>
                                       <!--end::Menu wrapper-->
                                   </div>
                                   <!--end::User-->
                                   <!--begin::Menu-->
                                   <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                       <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Dashboard">
                                           <!--begin::Nav link-->
                                           <a href="<?= site_url('/dashboard/'); ?>">
                                               <div class="nav-link menu-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'dashboard' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                   <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                   <span class="svg-icon svg-icon-2x">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                           <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                           <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                           <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                           <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                       </svg>
                                                   </span>
                                                   <!--end::Svg Icon-->
                                               </div>
                                           </a>
                                           <!--end::Nav link-->
                                       </div>
                                   </div>
                                   <!--end::Menu-->
                                   <?php if (session()->get('users_role_id') == 1) : ?>
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="OPD">
                                               <!--begin::Nav link-->
                                               <a href="<?= site_url('/opd/index'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'opd' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
                                                               <path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                       <!--end::Svg Icon-->
                                                   </div>
                                               </a>
                                               <!--end::Nav link-->
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Opsi">
                                               <!--begin::Nav link-->
                                               <a href="<?= site_url('/opsi'); ?>">
                                                   <div class=" nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'opsi' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                               <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                           </svg>
                                                       </span>
                                                       <!--end::Svg Icon-->
                                                   </div>
                                               </a>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                   <?php endif; ?>
                                   <?php if (session()->get('users_role_id') == 2) : ?>
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Survey">
                                               <!--begin::Nav link-->
                                               <a href="<?= site_url('/survey'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'survey' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black" />
                                                               <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="black" />
                                                               <rect x="7" y="13" width="10" height="2" rx="1" fill="black" />
                                                               <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                       <!--end::Svg Icon-->
                                                   </div>
                                               </a>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                   <?php endif; ?>
                                   <!--begin::Menu-->
                                   <?php if (session()->get('users_role_id') == 3) : ?>
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Grafik">
                                               <!--begin::Nav link-->
                                               <?php if (session()->get('users_role_id') == 1) : ?>
                                                   <a href="<?= site_url('grafik/listopd'); ?>">
                                                       <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'grafik' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                           <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                           <span class="svg-icon svg-icon-2x">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                   <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                                   <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                                   <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                                   <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                               </svg>
                                                           </span>
                                                           <!--end::Svg Icon-->
                                                       </div>
                                                   </a>
                                               <?php else : ?>
                                                   <a href="<?= site_url('grafik/listtahun'); ?>">
                                                       <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'grafik' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                           <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                           <span class="svg-icon svg-icon-2x">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                   <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                                   <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                                   <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                                   <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                               </svg>
                                                           </span>
                                                           <!--end::Svg Icon-->
                                                       </div>
                                                   </a>
                                               <?php endif; ?>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                   <?php endif; ?>
                                   <!--begin::Menu-->
                                   <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                       <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Laporan">
                                           <!--begin::Nav link-->
                                           <?php if (session()->get('users_role_id') == 1) : ?>
                                               <a href="<?= site_url('/laporan/listopd'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'laporan' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black" />
                                                               <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
                                                               <path d="M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                   </div>
                                                   <!--end::Svg Icon-->
                                               </a>
                                           <?php else : ?>
                                               <a href="<?= site_url('/laporan/listtahun'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'laporan' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black" />
                                                               <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
                                                               <path d="M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                   </div>
                                                   <!--end::Svg Icon-->
                                               </a>
                                           <?php endif ?>
                                       </div>
                                   </div>
                                   <!--end::Menu-->
                                   <!--begin::Menu-->
                                   <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                       <div class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Berita">
                                           <!--begin::Nav link-->
                                           <?php if (session()->get('users_role_id') == 1) : ?>
                                               <a href="<?= site_url('berita/listopd'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'berita' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                               <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                       <!--end::Svg Icon-->
                                                   </div>
                                               </a>
                                           <?php else : ?>
                                               <a href="<?= site_url('berita/index'); ?>">
                                                   <div class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light <?= current_url(true)->getSegment(1) == 'berita' ? 'active' : ''; ?>" data-bs-toggle="tab">
                                                       <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                       <span class="svg-icon svg-icon-2x">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                               <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                               <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                           </svg>
                                                       </span>
                                                       <!--end::Svg Icon-->
                                                   </div>
                                               </a>
                                           <?php endif; ?>
                                       </div>
                                   </div>
                                   <!--end::Menu-->
                               </div>
                               <!--end::Tab pane-->
                           </div>
                           <!--end::Tab content-->
                       </div>
                       <!--end::Wrapper-->
                       <!--begin::Footer-->
                       <div class="flex-column-auto pt-10 px-7 text-center" id="kt_aside_secondary_footer">
                           <!--begin::User-->
                           <!--begin::Menu wrapper-->
                           <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Profil">
                               <img src="<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>" alt="image" />
                           </div>
                           <!--begin::User account menu-->
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                               <!--begin::Menu item-->
                               <div class="menu-item px-3">
                                   <div class="menu-content d-flex align-items-center px-3">
                                       <!--begin::Avatar-->
                                       <div class="symbol symbol-50px me-5">
                                           <img alt="Logo" src="<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>" />
                                       </div>
                                       <!--end::Avatar-->
                                       <!--begin::Username-->
                                       <div class="d-flex flex-column">
                                           <div class="fw-bolder d-flex align-items-center fs-5">
                                               <?= session()->get('users_nama'); ?>
                                               <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><?= $users['role_nama']; ?></span>
                                           </div>
                                           <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?= session()->get('users_email'); ?></a>
                                       </div>
                                       <!--end::Username-->
                                   </div>
                               </div>
                               <!--end::Menu item-->
                               <!--begin::Menu separator-->
                               <div class="separator my-2"></div>
                               <!--end::Menu separator-->
                               <?php if (session()->get('users_role_id') == 2) : ?>
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-5">
                                       <a href="<?= site_url('/users/profil'); ?>" class="menu-link px-5">Lihat Profil
                                           Admin</a>
                                   </div>
                                   <!--end::Menu item-->
                               <?php elseif (session()->get('users_role_id') == 1) : ?>
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-5">
                                       <a href="<?= site_url('/users/profil'); ?>" class="menu-link px-5">Lihat Profil Super
                                           Admin</a>
                                   </div>
                                   <!--end::Menu item-->
                               <?php endif; ?>
                               <!--begin::Menu item-->
                               <div class="menu-item px-5">
                                   <a href="<?= site_url('/opd/profil'); ?>" class="menu-link px-5">Lihat Profil OPD</a>
                               </div>
                               <!--end::Menu item-->
                               <!--begin::Menu item-->
                               <div class="menu-item px-5">
                                   <?php if (session()->get('users_nip') == "") : ?>
                                       <a class="menu-link px-5" href="<?= site_url('/auth/login') ?>">Masuk</a>
                                   <?php else : ?>
                                       <a href="<?= site_url('/auth/logout') ?>" class="menu-link px-5">Keluar</a>
                                   <?php endif; ?>
                               </div>
                               <!--end::Menu item-->
                               <!--begin::Menu separator-->
                               <div class="separator my-2"></div>
                               <!--end::Menu separator-->
                           </div>
                           <!--end::User account menu-->
                           <!--end::Menu wrapper-->
                       </div>
                       <!--end::Footer-->
                   </div>
               </div>
               <!--end::Workspace-->
               <!--begin::Secondary-->
               <div class="aside-secondary d-flex flex-row-fluid">
                   <!--begin::Workspace-->
                   <div class="aside-workspace my-5 p-3 mt-8" id="kt_aside_wordspace">
                       <div class="d-flex h-100 flex-column">
                           <!--begin::Wrapper-->
                           <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                               <!--begin::Tab content-->
                               <div class="tab-content">
                                   <!--begin::Tab pane-->
                                   <div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
                                       <!--begin::User-->
                                       <div class="d-flex align-items-center mb-10 px-18" id="kt_header_user_menu_toggle">
                                           <!--begin::Menu wrapper-->
                                           <div class="cursor-pointer symbol symbol-50px px-0" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Profil">
                                               <img src="<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>" alt="image" />
                                           </div>
                                           <!--begin::User account menu-->
                                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                               <!--begin::Menu item-->
                                               <div class="menu-item px-3">
                                                   <div class="menu-content d-flex align-items-center px-3">
                                                       <!--begin::Avatar-->
                                                       <div class="symbol symbol-50px me-5">
                                                           <img alt="Logo" src="<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>" />
                                                       </div>
                                                       <!--end::Avatar-->
                                                       <!--begin::Username-->
                                                       <div class="d-flex flex-column">
                                                           <div class="fw-bolder d-flex align-items-center fs-5">
                                                               <?= session()->get('users_nama'); ?>
                                                               <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><?= $users['role_nama']; ?></span>
                                                           </div>
                                                           <p class="fw-bold text-muted text-hover-primary fs-7">
                                                               <?= session()->get('users_email'); ?></p>
                                                       </div>
                                                       <!--end::Username-->
                                                   </div>
                                               </div>
                                               <!--end::Menu item-->
                                               <!--begin::Menu separator-->
                                               <div class="separator my-2"></div>
                                               <!--end::Menu separator-->
                                               <?php if (session()->get('users_role_id') == 2) : ?>
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-5">
                                                       <a href="<?= site_url('/users/profil'); ?>" class="menu-link px-5">Lihat Profil Admin</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                               <?php elseif (session()->get('users_role_id') == 1) : ?>
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-5">
                                                       <a href="<?= site_url('/users/profil'); ?>" class="menu-link px-5">Lihat Profil Super Admin</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                               <?php endif; ?>
                                               <!--begin::Menu item-->
                                               <div class="menu-item px-5">
                                                   <a href="<?= site_url('/opd/profil'); ?>" class="menu-link px-5">Lihat
                                                       Profil OPD</a>
                                               </div>
                                               <!--end::Menu item-->
                                               <!--begin::Menu item-->
                                               <div class="menu-item px-5">
                                                   <?php if (session()->get('users_nip') == "") : ?>
                                                       <a class="menu-link px-5" href="<?= base_url('/auth/login') ?>">Masuk</a>
                                                   <?php else : ?>
                                                       <a href="<?= base_url('/auth/logout') ?>" class="menu-link px-5">Keluar</a>
                                                   <?php endif; ?>
                                               </div>
                                               <!--end::Menu item-->
                                               <!--begin::Menu separator-->
                                               <div class="separator my-2"></div>
                                               <!--end::Menu separator-->
                                           </div>
                                           <!--end::User account menu-->
                                           <!--end::Menu wrapper-->
                                       </div>
                                       <!--end::User-->
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div id="kt_aside_menu_wrapper" class="menu-fit">
                                               <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                   <div class="menu-active-bg">
                                                       <div class="menu-item">
                                                           <a class="menu-link <?= current_url(true)->getSegment(1) == 'dashboard' ? 'active' : ''; ?>" href="<?= site_url('/dashboard'); ?>">
                                                               <span class="menu-title">Dashboard</span>
                                                           </a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                       <!--begin::Menu-->
                                       <?php if (session()->get('users_role_id') == 1) : ?>
                                           <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                               <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                       <div class="menu-active-bg">
                                                           <div class="menu-item">
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'opd' ? 'active' : ''; ?>" href="<?= site_url('/opd'); ?>">
                                                                   <span class="menu-title">OPD</span>
                                                               </a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <!--end::Menu-->
                                           <!--begin::Menu-->
                                           <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                               <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                       <div class="menu-active-bg">
                                                           <div class="menu-item">
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'opsi' ? 'active' : ''; ?>" href="<?= site_url('/opsi'); ?>">
                                                                   <span class="menu-title">Opsi</span>
                                                               </a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <!--end::Menu-->
                                       <?php endif; ?>
                                       <!--begin::Menu-->
                                       <?php if (session()->get('users_role_id') == 2) : ?>
                                           <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                               <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                       <div class="menu-active-bg">
                                                           <div class="menu-item">
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'survey' ? 'active' : ''; ?>" href="<?= site_url('/survey'); ?>">
                                                                   <span class="menu-title">Survey</span>
                                                               </a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <!--end::Menu-->
                                       <?php endif; ?>
                                       <?php if (session()->get('users_role_id') == 3) : ?>
                                           <!--begin::Menu-->
                                           <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                               <div id="kt_aside_menu_wrapper" class="menu-fit">
                                                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                       <div class="menu-active-bg">
                                                           <div class="menu-item">
                                                               <?php if (session()->get('users_role_id') == 1) : ?>
                                                                   <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'grafik' ? 'active' : ''; ?>" href="<?= site_url('grafik/listopd'); ?>">
                                                                       <span class="menu-title">Grafik</span>
                                                                   </a>
                                                               <?php else : ?>
                                                                   <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'grafik' ? 'active' : ''; ?>" href="<?= site_url('grafik/listtahun'); ?>">
                                                                       <span class="menu-title">Grafik</span>
                                                                   </a>
                                                               <?php endif; ?>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <!--end::Menu-->
                                       <?php endif; ?>
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div id="kt_aside_menu_wrapper" class="menu-fit">
                                               <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                   <div class="menu-active-bg">
                                                       <div class="menu-item">
                                                           <?php if (session()->get('users_role_id') == 1) : ?>
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'laporan' ? 'active' : ''; ?>" href="<?= site_url('/laporan/listopd'); ?>">
                                                                   <span class="menu-title">Laporan</span>
                                                               </a>
                                                           <?php else : ?>
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'laporan' ? 'active' : ''; ?>" href="<?= site_url('/laporan/listtahun'); ?>">
                                                                   <span class="menu-title">Laporan</span>
                                                               </a>
                                                           <?php endif; ?>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                       <!--begin::Menu-->
                                       <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                           <div id="kt_aside_menu_wrapper" class="menu-fit">
                                               <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                   <div class="menu-active-bg">
                                                       <div class="menu-item">
                                                           <?php if (session()->get('users_role_id') == 1) : ?>
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'berita' ? 'active' : ''; ?>" href="<?= site_url('/berita/listopd'); ?>">
                                                                   <span class="menu-title">Berita</span>
                                                               </a>
                                                           <?php else : ?>
                                                               <a class="menu-link mt-3 <?= current_url(true)->getSegment(1) == 'berita' ? 'active' : ''; ?>" href="<?= site_url('/berita'); ?>">
                                                                   <span class="menu-title">Berita</span>
                                                               </a>
                                                           <?php endif ?>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!--end::Menu-->
                                   </div>
                                   <!--end::Tab pane-->
                               </div>
                               <!--end::Tab content-->
                           </div>
                           <!--end::Wrapper-->
                           <!--begin::Footer-->
                           <div class="flex-column-auto pt-10 px-10" id="kt_aside_secondary_footer">
                               <?php if (session()->get('users_nip') == "") : ?>
                                   <a href="<?= site_url('/auth/login') ?>" class="btn btn-bg-light btn-secondary btn-flex btn-active-color-primary flex-center w-50" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover" data-bs-offset="0,5" data-bs-dismiss-="click">
                                       <span class="btn-label">Masuk</span>
                                   </a>
                               <?php else : ?>
                                   <a href="<?= site_url('/auth/logout') ?>" class="btn btn-bg-light btn-secondary btn-flex btn-active-color-primary flex-center w-50" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover" data-bs-offset="0,5" data-bs-dismiss-="click">
                                       <span class="btn-label">Keluar</span>
                                   </a>
                               <?php endif; ?>
                           </div>
                           <!--end::Footer-->
                       </div>
                   </div>
                   <!--end::Workspace-->
               </div>
               <!--end::Secondary-->
               <!--begin::Aside Toggle-->
               <button class="btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
                   <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                   <span class="svg-icon svg-icon-2 rotate-180">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
                           <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
                       </svg>
                   </span>
                   <!--end::Svg Icon-->
               </button>
               <!--end::Aside Toggle-->
           </div>
           <!--end::Aside-->

           <?= $this->renderSection('content'); ?>

       </div>
       <!--end::Page-->
   </div>
   <!--end::Root-->