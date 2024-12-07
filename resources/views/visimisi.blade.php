@extends('home')

@section('content')
<style>
    .section-margin {
        margin: 40px 20px;
        padding: 20px;
    }
    .text-left {
        text-align: left;
    }
    .heading {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .row {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    .column {
        flex: 1;
        min-width: 300px;
    }
    .list {
        padding-left: 20px;
        margin: 0;
    }
</style>

<section class="section-margin text-left" itemscope itemtype="https://schema.org/CreativeWork">
    <div class="avia_textblock" itemprop="text">
        <h3 class="heading"><strong>VISI</strong></h3>
        <p>Terdepan dalam penelitian dan pengembangan ilmu teknologi informasi berdasarkan kesatuan ilmu pengetahuan untuk kemanusiaan dan peradaban pada tahun 2038.</p>

        <h3 class="heading"><strong>MISI</strong></h3>
        <div class="row">
            <div class="column">
                <ol class="list">
                    <li>1. Menyelenggarakan pendidikan dan pembelajaran bidang teknologi informasi yang partisipatif dan kreatif bercirikan kesatuan ilmu pengetahuan;</li>
                    <li>2. Menyelenggarakan penelitian dalam bidang teknologi informasi yang bercirikan kesatuan ilmu pengetahuan;</li>
                    <li>3. Menyelenggarakan pengabdian kepada masyarakat sebagai implementasi hasil penelitian untuk kemaslahatan masyarakat;</li>
                    <li>4. Menggali, mengembangkan, dan menerapkan nilai-nilai kearifan lokal;</li>
                    <li>5. Menjalin kerjasama strategis, sinergis, dan berkelanjutan di tingkat lokal, nasional, maupun internasional;</li>
                    <li>6. Menerapkan tata kelola kelembagaan yang prima berstandar nasional dan internasional.</li>
                </ol>
            </div>
        </div>

        <h3 class="heading"><strong>TUJUAN</strong></h3>
        <div class="row">
            <div class="column">
                <ol class="list">
                    <li>1. Menghasilkan lulusan yang berkompetensi tinggi dan berakhlak mulia;</li>
                    <li>2. Menghasilkan penelitian bidang teknologi informasi berdasarkan kesatuan ilmu pengetahuan;</li>
                    <li>3. Menghasilkan karya pengabdian kepada masyarakat yang responsif, inovatif, dan solutif dalam mengatasi permasalahan di masyarakat;</li>
                    <li>4. Terwujudnya internalisasi nilai-nilai kearifan lokal dalam pendidikan, penelitian, dan pengabdian kepada masyarakat;</li>
                    <li>5. Menghasilkan kerjasama saling menguntungkan dalam skala regional, nasional, dan internasional;</li>
                    <li>6. Menerapkan tata kelola kelembagaan berstandar nasional dan internasional.</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
