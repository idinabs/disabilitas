@extends('home')

@section('content')
<!-- .sections_group -->

<div class="mfn-main-slider" id="mfn-custom-slider">
                    <div class="n2-section-smartslider " role="region" aria-label="Slider">
                        <style>
                            div#n2-ss-2 {
                                width: 1200px;
                                float: left;
                                margin: 0px 0px 0px 0px;
                            }

                            html[dir="rtl"] div#n2-ss-2 {
                                float: right;
                            }

                            div#n2-ss-2 .n2-ss-slider-1 {
                                position: relative;
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-bottom: 0px;
                                padding-left: 0px;
                                height: 500px;
                                border-style: solid;
                                border-width: 0px;
                                border-color: #3e3e3e;
                                border-color: RGBA(62, 62, 62, 1);
                                border-radius: 0px;
                                background-clip: padding-box;
                                background-repeat: repeat;
                                background-position: 50% 50%;
                                background-size: cover;
                                background-attachment: scroll;
                            }

                            div#n2-ss-2 .n2-ss-slider-background-video-container {
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                                overflow: hidden;
                            }

                            div#n2-ss-2 .n2-ss-slider-2 {
                                position: relative;
                                width: 100%;
                                height: 100%;
                            }

                            .x-firefox div#n2-ss-2 .n2-ss-slider-2 {
                                opacity: 0.99999;
                            }

                            div#n2-ss-2 .n2-ss-slider-3 {
                                position: relative;
                                width: 100%;
                                height: 100%;
                                overflow: hidden;
                                outline: 1px solid rgba(0, 0, 0, 0);
                                z-index: 10;
                            }

                            div#n2-ss-2 .n2-ss-slide-backgrounds,
                            div#n2-ss-2 .n2-ss-slider-3>.n-particles-js-canvas-el,
                            div#n2-ss-2 .n2-ss-slider-3>.n2-ss-divider {
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 100%;
                            }

                            div#n2-ss-2 .n2-ss-slide-backgrounds {
                                z-index: 10;
                            }

                            div#n2-ss-2 .n2-ss-slider-3>.n-particles-js-canvas-el {
                                z-index: 12;
                            }

                            div#n2-ss-2 .n2-ss-slide-backgrounds>* {
                                overflow: hidden;
                            }

                            div#n2-ss-2 .n2-ss-slide {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                z-index: 20;
                                display: block;
                                -webkit-backface-visibility: hidden;
                            }

                            div#n2-ss-2 .n2-ss-layers-container {
                                position: relative;
                                width: 1200px;
                                height: 500px;
                            }

                            div#n2-ss-2 .n2-ss-parallax-clip>.n2-ss-layers-container {
                                position: absolute;
                                right: 0;
                            }

                            div#n2-ss-2 .n2-ss-slide {
                                perspective: 1500px;
                            }

                            div#n2-ss-2[data-ie] .n2-ss-slide {
                                perspective: none;
                                transform: perspective(1500px);
                            }

                            div#n2-ss-2 .n2-ss-slide-active {
                                z-index: 21;
                            }

                            div#n2-ss-2 .nextend-arrow {
                                cursor: pointer;
                                overflow: hidden;
                                line-height: 0 !important;
                                z-index: 20;
                            }

                            div#n2-ss-2 .nextend-arrow img {
                                position: relative;
                                min-height: 0;
                                min-width: 0;
                                vertical-align: top;
                                width: auto;
                                height: auto;
                                max-width: 100%;
                                max-height: 100%;
                                display: inline;
                            }

                            div#n2-ss-2 .nextend-arrow img.n2-arrow-hover-img {
                                display: none;
                            }

                            div#n2-ss-2 .nextend-arrow:HOVER img.n2-arrow-hover-img {
                                display: inline;
                            }

                            div#n2-ss-2 .nextend-arrow:HOVER img.n2-arrow-normal-img {
                                display: none;
                            }

                            div#n2-ss-2 .nextend-arrow-animated {
                                overflow: hidden;
                            }

                            div#n2-ss-2 .nextend-arrow-animated>div {
                                position: relative;
                            }

                            div#n2-ss-2 .nextend-arrow-animated .n2-active {
                                position: absolute;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-fade {
                                transition: background 0.3s, opacity 0.4s;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-horizontal>div {
                                transition: all 0.4s;
                                left: 0;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-horizontal .n2-active {
                                top: 0;
                            }

                            div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-horizontal:HOVER>div,
                            div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-horizontal .n2-active {
                                left: -100%;
                            }

                            div#n2-ss-2 .nextend-arrow-previous.nextend-arrow-animated-horizontal .n2-active,
                            div#n2-ss-2 .nextend-arrow-next.nextend-arrow-animated-horizontal:HOVER>div {
                                left: 100%;
                            }

                            div#n2-ss-2 .nextend-arrow.nextend-arrow-animated-horizontal:HOVER .n2-active {
                                left: 0;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-vertical>div {
                                transition: all 0.4s;
                                top: 0;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-vertical .n2-active {
                                left: 0;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-vertical .n2-active {
                                top: -100%;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-vertical:HOVER>div {
                                top: 100%;
                            }

                            div#n2-ss-2 .nextend-arrow-animated-vertical:HOVER .n2-active {
                                top: 0;
                            }

                            div#n2-ss-2 .nextend-autoplay {
                                cursor: pointer;
                                z-index: 10;
                                line-height: 1;
                            }

                            div#n2-ss-2 .nextend-autoplay img {
                                vertical-align: top;
                                width: auto;
                                height: auto;
                                max-width: 100%;
                                max-height: 100%;
                                display: block;
                            }

                            div#n2-ss-2 .nextend-autoplay .nextend-autoplay-play {
                                display: none;
                            }

                            div#n2-ss-2 .nextend-autoplay.n2-autoplay-paused .nextend-autoplay-play {
                                display: block;
                            }

                            div#n2-ss-2 .nextend-autoplay.n2-autoplay-paused .nextend-autoplay-pause {
                                display: none;
                            }

                            div#n2-ss-2 .n2-style-07b80f0c82484b6d6258ed0a5cead109-heading {
                                background: #000000;
                                background: RGBA(0, 0, 0, 0.67);
                                opacity: 1;
                                padding: 10px 10px 10px 10px;
                                box-shadow: none;
                                border-width: 0px;
                                border-style: solid;
                                border-color: #000000;
                                border-color: RGBA(0, 0, 0, 1);
                                border-radius: 3px;
                            }

                            div#n2-ss-2 .n2-style-07b80f0c82484b6d6258ed0a5cead109-heading:Hover,
                            div#n2-ss-2 .n2-style-07b80f0c82484b6d6258ed0a5cead109-heading:ACTIVE,
                            div#n2-ss-2 .n2-style-07b80f0c82484b6d6258ed0a5cead109-heading:FOCUS {
                                background: #000000;
                                background: RGBA(0, 0, 0, 0.67);
                            }
                        </style>
                        <div id="n2-ss-2-align" class="n2-ss-align">
                            <div class="n2-padding">
                                <div id="n2-ss-2" data-creator="Smart Slider 3" class="n2-ss-slider n2-ow n2-has-hover n2notransition  n2-ss-load-fade " data-minFontSizedesktopPortrait="4" data-minFontSizedesktopLandscape="4" data-minFontSizetabletPortrait="4"
                                    data-minFontSizetabletLandscape="4" data-minFontSizemobilePortrait="4" data-minFontSizemobileLandscape="4" style="font-size: 1rem;" data-fontsize="16">
                                    <div class="n2-ss-slider-1 n2-ss-swipe-element n2-ow" style="">
                                    <div class="n2-ss-slider-2 n2-ow">
                                        <div class="n2-ss-slider-3 n2-ow" style="position: relative; width: 100vw; height: 100vh; overflow: hidden;">
                                            <div class="n2-ss-slide-backgrounds"></div>
                                            <div data-slide-duration="0" data-id="174" class="n2-ss-slide n2-ss-canvas n2-ow n2-ss-slide-174">
                                                <div class="n2-ss-slide-background n2-ow" data-mode="fill">
                                                    <div data-hash="74ece31c700f79debcfb06cf3be699c9" class="n2-ss-slide-background-image" data-blur="0" style="width: 100vw; height: 100vh; position: relative; object-fit: cover;">
                                                        @foreach($news->take(3) as $item)
                                                            @if($item->image)
                                                                <img class="slider-image" src="{{ asset('storage/' . $item->image) }}" alt="" style="width: 100vw; height: 100vh; object-fit: cover; position: absolute; top: 0; left: 0; opacity: 0; transition: opacity 1s ease;" />
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="n2-ss-layers-container n2-ow" data-csstextalign="center"></div>
                                        </div>
                                    </div>

                                    <script>
                                        const images = document.querySelectorAll('.slider-image');
                                        let currentIndex = 0;

                                        // Function to show the current image and hide the others
                                        function showImage(index) {
                                            images.forEach((img, i) => {
                                                img.style.opacity = (i === index) ? '1' : '0';
                                            });
                                        }

                                        // Initialize first image
                                        showImage(currentIndex);

                                        // Change image every 3 seconds
                                        setInterval(() => {
                                            currentIndex = (currentIndex + 1) % images.length;
                                            showImage(currentIndex);
                                        }, 10000); // 3000ms = 3 seconds
                                    </script>

                                    
                                </div>
                                <div class="n2-clear"></div>
                                <div id="n2-ss-2-spinner" style="display: none;">
                                    <div>
                                        <div class="n2-ss-spinner-simple-white-container">
                                            <div class="n2-ss-spinner-simple-white"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="n2-ss-2-placeholder" style="position: relative;z-index:2;background-color:RGBA(0,0,0,0);max-height:3000px; background-color:RGBA(255,255,255,0);">
                            <img style="width: 100%; max-width:450px; display: block;opacity:0;margin:0px;" class="n2-ow" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMCIgd2lkdGg9IjEyMDAiIGhlaWdodD0iNTAwIiA+PC9zdmc+"
                                alt="Slider" /></div>
                    </div>
                </div>
   <!-- .sections_group -->
   <div class="sections_group">

<div class="entry-content" itemprop="mainContentOfPage">

    <div class="section the_content has_content">
        <div class="section_wrapper">
            <div class="the_content_wrapper">
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1605025042287 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1605025026915">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h2 style="font-family: Montserrat; text-align: center; color: white;">Universitas Islam Riset Terdepan Berbasis Kesatuan Ilmu Pengetahuan</h2>
                                        <h2 style="font-family: Montserrat; text-align: center; color: white;">untuk Kemanusiaan dan Peradaban pada Tahun 2038</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1627702790298 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1506588382366 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1513230473731">
                                            <div class="wpb_wrapper">
                                                <h2 style="font-size: 18px;text-align: center;font-family:Montserrat;font-weight:700;font-style:normal" class="vc_custom_heading">BERITA UTAMA</h2>
                                                <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_20 vc_sep_border_width_5 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_green"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
                                                </div>
                                                <!-- vc_grid start -->
                                                <div class="vc_grid-container-wrapper vc_clearfix">
                                                    <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid vc_custom_1515291390607" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:4656,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1665026540079-3aa8719621684f66831628562ee75f28-5&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}"
                                                        data-vc-post-id="4656" data-vc-public-nonce="55165b4a5e">
                                                        <style type="text/css" data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1513922206821{margin-top: 10px !important;}
                                                        </style>
                                                        <link rel="stylesheet" id="wpa-css-css" href="https://walisongo.ac.id/wp-content/plugins/wp-attachments/styles/0/wpa.css?ver=5.6.8" media="all">
                                                        <link rel="stylesheet" id="vc_google_fonts_montserratregular700-css" href="//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;ver=5.6.8" media="all">
                                                        
                                                        <div class="vc_grid vc_row vc_grid-gutter-35px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
                                                            <div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true">
                                                                @foreach($news as $item)
                                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-4 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                                        <div class="vc_grid-item-mini vc_clearfix vc_is-hover">
                                                                            <div class="vc_gitem-animated-block">
                                                                                @if($item->image)
                                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-16-9" style="background-image: url('{{ asset('storage/' . $item->image) }}') !important;">
                                                                                        <img src="{{ asset('storage/' . $item->image) }}" class="vc_gitem-zone-img" alt="">
                                                                                    <div class="vc_gitem-zone-mini">
                                                                                    </div>
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1513922206821 vc-text-audio">
                                                                                <div class="vc_gitem-zone-mini">
                                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                                <div style="font-size: 18px;text-align: left;font-family:Montserrat;font-weight:700;font-style:normal">
                                                                                                    <a href="{{ $item->link }}" class="vc_gitem-link" title="{{ Str::limit($item->title, 100) }}">{{ Str::limit($item->title, 100) }}</a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_excerpt">
                                                                                                <div style="font-size: 13px;text-align: justify;font-family:Montserrat;font-weight:400;font-style:normal">
                                                                                                    <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="vc_btn3-container vc_btn3-inline" style="float: left; flex; align-items: right; justify-content: right;">
                                                                                                <a href="{{ route('news.show', $item->id) }}" class="vc_gitem-link vc_general vc_btn3 vc_btn3-size-xs vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-color-success" title="Baca Selengkapnya">Baca Selengkapnya</a>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_clearfix"></div>
                                                                    </div>
                                                                    
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- vc_grid end -->
                                                <div class="vc_btn3-container vc_btn3-center">
                                                    <a style="float: right;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-square vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-grey" href="{{ route('berita') }}" title="" target="_blank"><i class="vc_btn3-icon fa fa-newspaper-o"></i> Berita Lainnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex" style="display: flex; align-items: center; justify-content: center;">
                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill" style="display: flex; justify-content: center; align-items: center;">
                    <div class="vc_column-inner vc_custom_1513793394115">
                        <div class="wpb_wrapper" style="text-align: center;">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                            <h2 style="font-size: 18px; color: #000000; text-align: left; font-family: Montserrat; font-weight: 700; display: flex; align-items: left; justify-content: left;">
                                                PRESTASI
                                            </h2>
                                            

                                            <!-- Start Loop -->
                                            @foreach($prestasi as $item)
                                            <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                                <!-- Image Section -->
                                                @if($item->image)
                                                    <div style="flex: 0 0 84px; margin-right: 20px; text-align: center;">
                                                        <a href="https://ppid.walisongo.ac.id/" target="_blank" class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="84" height="84" src="{{ asset('storage/' . $item->image) }}" class="vc_single_image-img" style="border-radius: 10px; object-fit: cover; width: 84px; height: 84px;" alt="Image Description" />
                                                        </a>
                                                    </div>
                                                @endif
                                                
                                                <!-- Text Section -->
                                                <div style="flex: 1; text-align: left;">
                                                <p style="font-size: 16px; font-family: PT Sans; font-weight: 400;" >
                                                    <a href="{{ route('news.show', $item->id) }}">
                                                    {{ Str::limit($item->deskripsi, 100) }} &nbsp;

                                                    </a>
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- End Loop -->

                                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill" style="display: flex; justify-content: center; align-items: center;">
                    <div class="vc_column-inner vc_custom_1513793394115">
                        <div class="wpb_wrapper" style="text-align: center;">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                            <h2 style="font-size: 18px; color: #000000; text-align: center; font-family: Montserrat; font-weight: 700; display: flex; align-items: left; justify-content: left;">
                                                INFORMASI AKADEMIK
                                            </h2>
                                            

                                            <!-- Start Loop -->
                                            @foreach($akademis as $item)
                                            
                                            <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                                <!-- Image Section -->
                                                @if($item->image)
                                                    <div style="flex: 0 0 84px; margin-right: 20px; text-align: center;">
                                                        <a href="https://ppid.walisongo.ac.id/" target="_blank" class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img width="84" height="84" src="{{ asset('storage/' . $item->image) }}" class="vc_single_image-img" style="border-radius: 10px; object-fit: cover; width: 84px; height: 84px;" alt="Image Description" />
                                                        </a>
                                                    </div>
                                                @endif
                                                
                                                <!-- Text Section -->
                                                <div style="flex: 1; text-align: left;">
                                                    <p style="font-size: 16px; font-family: PT Sans; font-weight: 400;">
                                                    <a href="{{ route('akademis.show', $item->id) }}">
                                                    {{ Str::limit($item->deskripsi, 100) }} &nbsp;

                                                    </a>
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- End Loop -->

                                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </div>

    <div class="section section-page-footer">
        <div class="section_wrapper clearfix">

            <div class="column one page-pager">
            </div>

        </div>
    </div>

</div>
</div>
@endsection