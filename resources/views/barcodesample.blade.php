@extends('layouts.app')
    
@include('layouts.header')

@section('container')
<div id="app">
  {{-- アットマークはbladeと競合することがあるから、v-onの方が無難 --}}
<stream-barcode-reader v-on:decode="onDecode" v-on:loaded="onLoaded"></stream-barcode-reader>
  <!--<image-barcode-reader v-on:decode="onDecode" v-on:error="onError"></image-barcode-reader>-->
</div>
@endsection

@section('script')
<script src="{{ mix('js/barcode.js') }}"></script>
@endsection