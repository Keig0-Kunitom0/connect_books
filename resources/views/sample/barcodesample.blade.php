@extends('layouts.app')
    
@include('layouts.header')

@section('container')
  <div id="app">
    {{-- アットマークはbladeと競合することがあるから、v-onの方が無難 --}}
    <div id="cameraArea" style="border:1px solid #ccc"></div>
    <button class="btn btn-primary" v-on:click="barcode">解析</button>
    <!--<image-barcode-reader v-on:decode="onDecode" v-on:error="onError"></image-barcode-reader>-->
  </div>
@endsection

@section('script')
  <script src="{{ mix('js/barcode.js') }}"></script>
@endsection