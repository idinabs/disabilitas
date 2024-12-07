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
    .team-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }
    .team-member {
        display: inline-block; /* Allow the box to fit content */
        text-align: center;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-sizing: border-box;
        max-width: 200px; /* Optional: limit maximum width */
        width: auto; /* Auto width to fit content */
    }
    .team-member img {
        max-width: 100px; /* Limit the maximum width of the images */
        width: 100%; /* Make image responsive */
        height: auto;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    .team-member h4 {
        margin: 10px 0 5px;
        font-size: 1.1em;
        font-weight: bold; /* Make the name bold */
    }
    .team-member p {
        margin: 0;
        font-size: 0.9em;
        color: #666;
    }
</style>

<section class="section-margin" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="text">
        <h3 class="heading"><strong>STRUKTURAL PIMPINAN</strong></h3>
        <div class="team-row">
            @foreach ($strukturalMembers as $member)
                @if ($member->jabatan == 'Pejabat-Prodi') <!-- Only display members with the 'Pejabat' jabatan -->
                    <div class="team-member">
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->nama }}">
                        <h4>{{ $member->nama }}</h4> <!-- Name displayed in bold -->
                        <p>{{ $member->jenis_jabatan }}</p>
                        <!-- NIP, Bidang, and Pangkat are not displayed -->
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
