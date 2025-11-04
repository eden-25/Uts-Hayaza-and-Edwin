@extends('layouts.app')

@section('title', 'About')

@section('content')
<style>
    .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 3rem 2rem;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 3rem;
        margin-top: 2rem;
    }
    
    .team-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .team-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    
    .team-content {
        padding: 2rem;
    }
    
    .team-content h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .team-content p {
        color: #666;
        line-height: 1.6;
        margin: 0.5rem 0;
    }
    
    .team-content .nim {
        color: #333;
        font-weight: 600;
        margin-top: 1rem;
    }
</style>

<div class="about-container">
    <div class="team-grid">
        <!-- JulHadi -->
        <div class="team-card">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&h=300&fit=crop" alt="JulHadi" class="team-image">
            <div class="team-content">
                <h3>Hayaza Warizkan</h3>
                <p>begandang is in my blood cause all the projects wont solve itself 😎</p>
                <p class="nim">2301010018</p>
            </div>
        </div>

        <!-- iMAM RRR -->
        <div class="team-card">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600&h=300&fit=crop" alt="iMAM RRR" class="team-image">
            <div class="team-content">
                <h3>Edwin Adriansyah</h3>
                <p>professional front end designer</p>
                <p class="nim">2301010038</p>
            </div>
        </div>
    </div>
</div>
@endsection