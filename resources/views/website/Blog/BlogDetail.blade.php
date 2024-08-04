@extends('website.layouts.main', ['cus' => $cus])
@section('section')
    <!-- Header Short Banner Start -->
    <div class="short-banner primary7">
        <h2 class="heading2 text-center">Blog Details</h2>
        <a class='heading5 text-center d-block' href='{{ url('/') }}'>Home / Blog Details</a>
    </div>
    <!-- Header Short Banner End -->


    <section class="py-4 my-5 container main-container">
        <div class="event-div border-0 content-div">

            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="sub-header">
                    <div class="paper_wrapper">
                        <img src="{{ asset('public/website/images/home2/paper.svg') }}" alt="" class="img-fluid" />
                    </div>
                    <!--<h4 class="heading7 mb-30"></h4>-->
                </div>
                <h2 class="heading7 mb-30 fs-t">{{ $data->title ?? '' }}</h2>
            </div>
            <div class="card mb-20">
                <div class="container px-0 px-md-3 ">
                    <div class="col-12 mx-auto row">

                        <div class="col-lg-9  mt-4 d-flex align-items-center">
                            <div class="table-responsive ">
                                <p>{!! $data->content !!}</p>
                                <span class="mb-20">{{ $data->created_at ?? '' }}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <form id="commentForm" action="{{ url('commenting') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                    <div>
                        <textarea name="comment" class="mb-20 " rows="4" cols="50" required></textarea>
                    </div>
                    <div>
                        <div class="login-button">
                            <button type="submit" class="mb-30 button-1">Add Comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <h3>Comments</h3>
            @foreach ($data->comments as $comment)
                <div class="align-items-center">
                    <strong>{{ $comment->customer_id ?? '' }}:-</strong>
                    <p>{{ $comment->comment ?? '' }}</p>
                    <small>{{ $comment->created_at->diffForHumans() }}</small>
                </div>
            @endforeach
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the user is logged in
            var isLoggedIn = @json($cus->id ?? false);

            // Get the form element
            var form = document.getElementById('commentForm');

            form.addEventListener('submit', function(event) {
                if (!isLoggedIn) {
                    event.preventDefault(); // Prevent form submission
                    alert("Please log in first.");
                }
            });
        });
    </script>
@endsection
