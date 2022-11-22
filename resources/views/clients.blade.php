@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <section id="page-title" data-bg-parallax="{{url('/media/1920_1280.jpg')}}">
        <div class="container">
            <div class="page-title">
                <h1>Our Clients</h1>
                <span>Our awesome clients!</span>
            </div>
            {{--<div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Pages</a>
                    </li>
                    <li class="active"><a href="#">Our Clients</a>
                    </li>
                </ul>
            </div>--}}
        </div>
    </section>
    <!-- end: Page title -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <span class="lead">Our awesome clients we've had the pleasure to work with! The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus. </span>
            </div>
            <ul class="grid grid-4-columns">
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover">
                        <img src="/media/clients/1.png" alt=""></a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/2.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/3.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/4.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/5.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/6.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/7.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/8.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/9.png" alt="">
                    </a>
                </li>
                <li>
                    <a data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-bs-placement="top" data-toggle="popover" data-container="body" data-bs-original-title="Popover title" data-trigger="hover"><img src="/media/clients/10.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="background-grey">
        <div class="container">
            <div class="text-center">
                <h2>Aliquam enim enim, pharetra in sodales</h2>
                <p class="lead">
                    Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. Nullam vulputate euis od urna non pharetra. Phasellus bland matt is ipsum, ac laoreet lorem lacinia et. interum sit amet dui.
                </p>
                <a class="btn icon-left" href="#"><span>Apply now!</span></a>
            </div>
        </div>
    </section>
@endsection

@push('modal')
<div id="success" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: rgba(0, 0, 0, 0.8);">
        <div class="modal-body">
          <button type="button" class="close text-white float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          @if (Session::has('status'))
          <h3 class="font-weight-bold mb-0 p-4 text-white">Success!</h3>
          <h5 class="font-weight-bold px-4 text-white">{!! Session::get('status') !!}</h5>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
</div>
@endpush

@push('scripts')
<script>
    @if (Session::has('status'))
    // $('#success').modal('show');
    console.log('xxx', '{!! Session::get('status') !!}');
    @endif
</script>
@endpush
