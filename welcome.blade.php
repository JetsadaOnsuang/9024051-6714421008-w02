@extends('layouts.app')

@section('title')
Home
@endsection

@section('banner')
<h1 class="sriracha-regular" style="font-size: 36px; margin: 0; color: white; letter-spacing: -1px;">Jetsada Onsuang</h1>
@endsection

@section('content')
<style>
    .intro-section {
        margin-bottom: 50px;
        line-height: 1.8;
    }

    .intro-section h2 {
        font-size: 28px;
        color: #1a1a1a;
        margin: 0 0 20px 0;
        font-weight: 600;
        letter-spacing: -0.5px;
    }

    .intro-section p {
        font-size: 16px;
        color: #404040;
        margin: 0 0 16px 0;
    }

    .intro-section a {
        color: #d2ea66;
        text-decoration: none;
        font-weight: 500;
        border-bottom: 1px solid #667eea;
        transition: all 0.2s ease;
    }

    .intro-section a:hover {
        color: #764ba2;
        border-bottom-color: #764ba2;
    }

    .section-divider {
        height: 1px;
        background: #e0e0e0;
        margin: 50px 0;
    }

    .nav-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin: 40px 0;
    }

    .nav-card {
        padding: 24px;
        background: #fafafa;
        border-radius: 8px;
        border: 1px solid #e8e8e8;
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .nav-card:hover {
        border-color: #667eea;
        background: #f3f4ff;
        transform: translateY(-2px);
    }

    .nav-card h3 {
        font-size: 18px;
        color: #1a1a1a;
        margin: 0 0 8px 0;
        font-weight: 600;
    }

    .nav-card p {
        font-size: 14px;
        color: #606060;
        margin: 0;
        line-height: 1.5;
    }

    .footer-note {
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid #e0e0e0;
        font-size: 14px;
        color: #888;
    }

    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 12px;
    }

    .tech-badge {
        display: inline-block;
        padding: 4px 12px;
        background: #e8e8e8;
        border-radius: 20px;
        font-size: 12px;
        color: #404040;
        font-weight: 500;
    }

    @media (max-width: 640px) {
        .nav-section {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="intro-section">
    <h2>Welcome</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat odio tempora omnis numquam vero voluptates enim accusantium sint iste animi aperiam ab voluptas, molestiae error porro, blanditiis iusto adipisci quis.
</p>
</div>

<div class="section-divider"></div>

<div class="nav-section">
    <a href="/bio" class="nav-card">
        <h3>About</h3>
        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </a>
    <a href="/assignment" class="nav-card">
        <h3>Projects</h3>
        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </a>
</div>

<div class="section-divider"></div>
    <p style="margin-top: 20px; color: #999; font-style: italic;">Jetsada Onsuang</p>
</div>
@endsection
