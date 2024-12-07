@extends('home')

@section('slider')
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
@endsection