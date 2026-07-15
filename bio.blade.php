@extends('layouts.app')

@section('title')
Bio
@endsection

@section('banner')
<h1 class="sriracha-regular" style="font-size: 36px; margin: 0; color: white; letter-spacing: -1px;">เกี่ยวกับผม</h1>
@endsection

@section('content')
<style>
    .bio-section {
        margin-bottom: 40px;
    }

    .bio-section h2 {
        font-size: 24px;
        color: #1a1a1a;
        margin: 0 0 16px 0;
        font-weight: 600;
        border-bottom: 2px solid #667eea;
        padding-bottom: 8px;
    }

    .bio-section p {
        font-size: 16px;
        color: #404040;
        line-height: 1.8;
        margin: 0 0 12px 0;
    }

    .bio-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .bio-section li {
        font-size: 16px;
        color: #404040;
        margin: 0 0 10px 0;
        padding-left: 24px;
        position: relative;
    }

    .bio-section li:before {
        content: "→";
        position: absolute;
        left: 0;
        color: #667eea;
        font-weight: bold;
    }

    .skill-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 12px;
        margin: 16px 0;
    }

    .skill-tag {
        padding: 8px 16px;
        background: #f0f0f0;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        text-align: center;
    }
</style>

<div class="bio-section">
    <h2>Jetsada Onsuang</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, suscipit quod. Ducimus atque repudiandae quaerat, saepe fugiat libero ut? Sequi cum fugit dolore rerum ut officia ratione eum facere facilis.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, suscipit quod. Ducimus atque repudiandae quaerat, saepe fugiat libero ut? Sequi cum fugit dolore rerum ut officia ratione eum facere facilis.</p>
</div>

<div class="bio-section">
    <h2>ทักษะและเทคโนโลยี</h2>
    <div class="skill-grid">
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
        <div class="skill-tag">Lorem ipsum</div>
    </div>
</div>

<div class="bio-section">
    <h2>กำลังศึกษา</h2>
    <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Lorem ipsum dolor sit amet</li>
    </ul>
</div>

<div class="bio-section">
    <h2>ประสบการณ์</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
@endsection
