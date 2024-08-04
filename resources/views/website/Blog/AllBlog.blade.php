@extends('website.layouts.main', ['cus' => $cus])
@section('section')
    <div class="short-banner primary7">
        <h2 class="heading2 text-center">News And Blog</h2>
        <a class='heading5 text-center d-block' href='{{ url('/') }}'>Home / News And Blog</a>
    </div>
    <!-- Header Short Banner End -->

    <section class="py-4 my-5 container main-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="event-div border-0 content-div">

            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="sub-header">
                    <div class="paper_wrapper">
                        <img src="{{ asset('public/website/images/home2/paper.svg') }}" alt="" class="img-fluid" />
                    </div>
                    <!--<h4 class="heading7 mb-30">Events</h4>-->
                </div>
                <h2 class="heading7 mb-30 fs-t">Blog</h2>
            </div>

            <div class="container px-0 px-md-3 ">
                <div class="row mx-auto">
                    @foreach ($data as $event)
                        <div class="col-lg-3 col-md-4  ">
                            <a href="{{ url('blog') . '/' . $event->id ?? '' }}">
                                <div class="eventCard">
                                    <img src="{{ asset('website/images/demo.jpg') }}" alt="Event Image">
                                    <div class="overlay">
                                        <div class="event-initial-content">
                                            <div class="d-flex justify-content-between">
                                                <p class="event-date fs-t"><i
                                                        class="fa fa-calendar me-1"></i>{{ $event->created_at ?? '' }}</p>
                                                <!--<p class="event-date"><i class="fa fa-clock-o"></i> 9:00 AM</p>-->
                                            </div>
                                            <p class="event-title fs-t">{{ $event->title ?? '' }}</p>
                                        </div>
                                        <div class="event-short">
                                            <p class="event-short-details ">{!! $event->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </section>
@endsection
