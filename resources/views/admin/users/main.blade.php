@extends('layouts.admin.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">وضعیت پلتفرم</h5>
            <h6 class="card-subtitle mb-2 text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h6>
            <div class="card-controls">
                <a href="#" class="js-card-refresh">
                    <i class="fa fa-refresh"></i>
                </a>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">عمل</a>
                        <a href="#" class="dropdown-item">عمل دیگر</a>
                        <a href="#" class="dropdown-item">یک عمل دیگر</a>
                    </div>
                </div>
            </div>
            <canvas id="chart_demo_1"></canvas>
        </div>
    </div>
    @endsection
