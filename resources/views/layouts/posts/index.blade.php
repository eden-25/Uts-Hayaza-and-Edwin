@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<style>
    .posts-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 3rem 2rem;
    }
    
    .post-list {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    
    .post-item {
        background: white;
        border-radius: 8px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .post-item h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #333;
    }
    
    .post-meta {
        color: #666;
        font-size: 14px;
        margin-bottom: 1rem;
    }
    
    .post-item p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .back-link {
        color: #007bff;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 2rem;
    }
    
    .back-link:hover {
        text-decoration: underline;
    }
</style>

<div class="posts-container">
    <a href="{{ route('home') }}" class="back-link">← kembali</a>
    
    <div class="post-list">
        @forelse($posts as $post)
        <article class="post-item">
            <h2>{{ $post['title'] }}</h2>
            <div class="post-meta">
                Oleh: {{ $post['author'] }} | {{ $post['date'] }} | {{ $post['category'] }}
            </div>
            <p>{{ $post['excerpt'] }}</p>
        </article>
        @empty
        <div class="post-item">
            <p>Belum ada postingan tersedia.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection