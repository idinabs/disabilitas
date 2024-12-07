@extends('home')

@section('content')
<style>
    .section-margin {
        margin: 40px 20px;
        padding: 20px;
    }
    .heading {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .team-table {
        width: 100%;
        border-collapse: collapse; /* Combine borders for a cleaner look */
    }
    .team-table th, .team-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center; /* Center-align text in all cells */
    }
    .team-table th {
        background-color: #f2f2f2; /* Light gray background for headers */
    }
    .team-table tr:nth-child(even) {
        background-color: #f9f9f9; /* Zebra striping for rows */
    }
    /* Adjust width for the 'No' column */
    .team-table .number-column {
        width: 50px; /* Adjust width to a suitable size */
    }

    @media (max-width: 600px) {
        .team-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
</style>

<section class="section-margin" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="text" style="margin-top: -50px">
        <h3 class="heading"><strong>ALUR TUGAS AKHIR</strong></h3>
        <div style="text-align: center; margin-top: 50px">
            {!! $alur->content !!}

            <a href="{{ asset('storage/' . $panduan->file_path) }}" download style="margin-top: 40px;">
                <button class="btn btn-warning">Download Panduan Akademik</button>
            </a>
        </div>
    </div>
</section>
@endsection