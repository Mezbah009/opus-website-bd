@extends('front.layouts.app')

@php
    use Illuminate\Support\Str;

    $title = ($leaderPost->name ?? 'Leader') . ' - ' . ($leaderPost->designation ?? '') . ' | Opus Technology Limited';

    $description = $leaderPost->sub_description
        ? Str::limit(strip_tags($leaderPost->sub_description), 160)
        : Str::limit(strip_tags($leaderPost->description), 160);

    $keywords = implode(', ', array_filter([
        $leaderPost->name,
        $leaderPost->designation,
        'Leadership',
        'Opus Technology',
        'Tech Industry',
        'Innovation'
    ]));
@endphp

@section('content')
    <style>
        .containerss {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            margin-top: 90px;
            margin-bottom: 90px;
            display: flex;
            flex-wrap: wrap;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .profile-card {
            background: #0E72B4;
            color: white;
            flex: 1;
            min-width: 300px;
            padding: 20px;
            text-align: center;
        }

        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-card h2 {
            margin: 10px 0;
        }

        .profile-card h3 {
            margin: 10px 0;
            font-size: 1.2em;
            font-weight: normal;
        }

        .profile-card p {
            font-size: 0.9em;
        }

        .social-icons {
            margin-top: 20px;

        }

        .social-icons a {
            margin: 0 10px;
            display: inline-block;
            color: #fff;
            font-size: 24px;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
        }

        .about-section {
            flex: 2;
            padding: 20px;
            min-width: 300px;
        }

        .about-section h2 {
            color: #333;
        }

        .about-section p {
            margin: 10px 0;
            color: #666;
        }
    </style>



    <div class="containerss">
        <div class="profile-card">
            <div class="profile-image">
                <img src="{{ asset('uploads/first_section/' . $leaderPost->image) }}" loading="lazy" alt="{{ $leaderPost->name }}">
            </div>

            <h2>{{ $leaderPost->name }}</h2>
            <h3>{{ $leaderPost->designation }}</h3>
            <p style="text-align: justify">{{ $leaderPost->sub_description }}</p>
            <div class="social-icons">
                <a href="{{ $leaderPost->facebook }}"><i class="bi bi-facebook"></i></a>
                <a href="{{ $leaderPost->linkedin }}"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="about-section">
            <h2>About {{ $leaderPost->name }}</h2>
            <p style="text-align: justify">{!! $leaderPost->details !!}</p>
        </div>
    </div>
@endsection
