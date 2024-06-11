@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')
@section('page-title','Dashboard')
@php
    $breadcrumbItems = [
        ['title' => 'Dashboard', 'url' => route('dashboard'), 'active' => false],
    ];
@endphp

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="{{route('dashboard')}}">
            <svg class="stroke-icon">
                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
            </svg>
        </a>
    </li>
    @foreach ($breadcrumbItems as $index => $item)
        @if (!$item['active'])
            <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
        @else
            @if ($index < count($breadcrumbItems) - 1)
                <li class="breadcrumb-item">{{ $item['title'] }}</li>
            @else
                <li class="breadcrumb-item active">{{ $item['title'] }}</li>
            @endif
        @endif
    @endforeach
@endsection
{{-- <div class="row">
    <div class="col-sm-12">
        <div class="card alert alert-primary" role="alert">
            <h5>Tip!</h5>
            <p>Add the class="dark-only" to the body tag to get this layout.</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Title</h4>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-spin fa-cog"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-body"><span>Start Here</span>
                <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard"
                        data-clipboard-target="#example-head" title="Copy"><i
                            class="icofont icofont-copy-alt"></i></button>
                  
                </div>
            </div>
            <div class="card-footer">
                <h6 class="mb-0">Card Footer</h6>
            </div>
        </div>
    </div>
</div> --}}
@endsection