
@extends('home')

@section('content')
<title>Berita</title>
    <style>
        /* Reset dan pengaturan dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f1f1f1; /* Warna latar belakang yang lebih terang */
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            gap: 20px; /* Meningkatkan jarak antara konten utama dan berita terbaru */
        }

        /* Konten Utama */
        .news-detail {
            flex: 3;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .news-meta {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .news-image {
            display: flex;
            justify-content: center; /* Center the image horizontally */
            margin-bottom: 15px; /* Add some spacing below the image */
        }

        .news-image img {
            width: 100%; /* Take full width of the parent */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Transisi untuk efek zoom */
        }

        .news-image img:hover {
            transform: scale(1.05); /* Zoom in saat hover */
        }

        .news-content {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Style for images inserted via CKEditor */
        .news-content img {
            width: 100%; /* Full width of the container */
            height: auto; /* Height will adjust based on aspect ratio */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Box shadow effect */
            margin-bottom: 15px; /* Spacing below the image */
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        /* Sidebar Berita Terbaru */
        .latest-news {
            flex: 1;
            padding: 15px;
            height: 310px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .latest-news h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .latest-news ul {
            list-style-type: none;
            padding: 0;
        }

        .latest-news li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .latest-news li a {
            display: flex;
            align-items: center;
            color: #333;
            text-decoration: none;
        }

        .latest-news li img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .latest-news li a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                gap: 20px; /* Kurangi jarak pada layar kecil */
            }
        
        }
    </style>

    <div class="container">
       
        <main class="content">
            <!-- Konten Utama -->
            <article class="news-detail">
            <div class="avia_textblock" itemprop="text">
                    <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1627702790298 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1506588382366 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1513230473731">
                                            <div class="wpb_wrapper">
                                                <!-- vc_grid start -->
                                                <div class="vc_grid-container-wrapper vc_clearfix">
                                                    <div style="margin-right: 0 !important;margin-bottom: -20px !important;margin-left: 0 !important;" class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid vc_custom_1515291390607" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:4656,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1665026540079-3aa8719621684f66831628562ee75f28-5&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}"
                                                        data-vc-post-id="4656" data-vc-public-nonce="55165b4a5e">
                                                        <style type="text/css" data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1513922206821{margin-top: 10px !important;}
                                                        </style>
                                                        <link rel="stylesheet" id="wpa-css-css" href="https://walisongo.ac.id/wp-content/plugins/wp-attachments/styles/0/wpa.css?ver=5.6.8" media="all">
                                                        <link rel="stylesheet" id="vc_google_fonts_montserratregular700-css" href="//fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;ver=5.6.8" media="all">
                                                        
                                                        <div class="vc_grid vc_row vc_grid-gutter-35px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
                                                            <div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true">
                                                                @foreach($mahasiswa as $item)
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
                                                                                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_excerpt">
                                                                                                <div style="font-size: 13px;text-align: justify;font-family:Montserrat;font-weight:400;font-style:normal">
                                                                                                    <p>{{ Str::limit($item->title, 100) }}</p>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigasi Pagination -->
                
                </div>
                <div class="pagination">
                        {{ $mahasiswa->links() }}
                    </div>
            </article>
            
            <!-- Berita Terbaru -->
            <aside class="latest-news">
                <h3>Berita Terbaru</h3>
                @foreach($beritaterbaru as $item)

                <ul>
                    <li>
                        @if($item->image)
                        <a href="#">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Thumbnail Berita 2">
                            {{ $item->title }}

                        </a>
                        @endif
                    </li>
                    
                </ul>
                @endforeach
            </aside>
        </main>
    </div>
@endsection