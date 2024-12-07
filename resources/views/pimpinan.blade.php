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
    }
    .team-table th {
        background-color: #f2f2f2; /* Light gray background for headers */
        text-align: center; /* Center-align header text */
    }
    .team-table td {
        text-align: left; /* Default left-align for data cells */
    }
    .team-table .number-column {
        text-align: center; /* Center-align for "No" column cells */
        width: 50px; /* Set fixed width for "No" column */
    }
    .team-table tr:nth-child(even) {
        background-color: #f9f9f9; /* Zebra striping for rows */
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
    <div itemprop="text">
        <h3 class="heading"><strong>Pimpinan & Dosen</strong></h3>
        <table class="team-table">
            <thead>
                <tr>
                    <th scope="col" class="number-column">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Jenis Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @if ($pimpinan->isEmpty())
                    <tr>
                        <td colspan="5" style="text-align: center;">Tidak ada data</td>
                    </tr>
                @else
                    @foreach ($pimpinan as $index => $member)
                        <tr>
                            <td class="number-column">{{ $index + 1 }}</td> <!-- Centered numbering -->
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->nip }}</td>
                            <td>{{ $member->pangkat }}</td>
                            <td>{{ $member->jenis_jabatan }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</section>
@endsection
