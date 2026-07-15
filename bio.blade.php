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
    <p>ผมชื่อ Jetsada Onsuang พัฒนาเวบแอปพลิเคชันด้วย Laravel และสนใจในการสร้างระบบที่มีประสิทธิภาพ</p>
    <p>เริ่มเดินทางเข้าสู่โลกของ Web Development ตั้งแต่สักพักก่อน ชอบที่จะเขียนโค้ดที่สะอาดและเข้าใจง่าย นักเรียนยังคงศึกษาต่อเรื่อยๆ เพื่อให้ทักษะดีขึ้น</p>
</div>

<div class="bio-section">
    <h2>ทักษะและเทคโนโลยี</h2>
    <div class="skill-grid">
        <div class="skill-tag">Laravel</div>
        <div class="skill-tag">PHP</div>
        <div class="skill-tag">MySQL</div>
        <div class="skill-tag">Tailwind CSS</div>
        <div class="skill-tag">JavaScript</div>
        <div class="skill-tag">Git</div>
        <div class="skill-tag">REST API</div>
        <div class="skill-tag">Pest Testing</div>
    </div>
</div>

<div class="bio-section">
    <h2>กำลังศึกษา</h2>
    <ul>
        <li>Laravel Patterns และ Architecture ที่ดีๆ</li>
        <li>Test-Driven Development กับ Pest</li>
        <li>การสร้างระบบที่ scalable และ maintainable</li>
        <li>Frontend และ UI/UX ที่ดีขึ้น</li>
    </ul>
</div>

<div class="bio-section">
    <h2>ประสบการณ์</h2>
    <p>ได้ทำโปรเจคต่างๆ มากมาย ตั้งแต่เว็บไซต์เล็กๆ ไปจนถึงระบบที่ซับซ้อนกว่า</p>
    <p>เว็บไซต์นี้เองคือหนึ่งในโปรเจคที่สำเร็จ สร้างขึ้นเพื่อเรียนรู้และลองใช้เทคโนโลยีต่างๆ</p>
</div>

<div class="bio-section">
    <h2>ติดต่อ</h2>
    <p>สามารถดูโปรเจคของผมได้ในส่วน <a href="/assignment" style="color: #667eea; text-decoration: none; border-bottom: 1px solid #667eea;">โปรเจค</a> หรือสามารถส่งข้อความมาก็ได้</p>
</div>
@endsection
