@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor1">
            <img src="http://tele-optics.com/wp-content/uploads/icon_camera1.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Access & Security</h1>
            <ul class="cardlist">
              <li>Access Controls</li>
              <li>CCTV/IP Cameras</li>
              <li>Intrusion Alarms</li>
              <li>Time Synchronization</li>
            </ul>
          </div>
        </a>
      </div>
      
      <div class="card">
        <a href="https://www.google.com">
          <div class="cardheader iconcolor2">
            <img src="http://tele-optics.com/wp-content/uploads/icon_robber.png" alt="icon_camera">
          </div>
          <div class="cardlinks">
            <h1>Residential Security</h1>
            <ul class="cardlist">
              <li>Wired &amp; Wireless Systems</li>
              <li>Landline &amp; Cellular</li>
              <li>Home Automation</li>
              <li>Video Camera Integration</li>
            </ul>
          </div>
        </a>
      </div>
@stop

@section('css')
<link rel="stylesheet" href="css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop