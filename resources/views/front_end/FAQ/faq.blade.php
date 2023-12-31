
@extends('front_end.layout.index')
@section('frontend_content')

<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$pageheading->faqheading }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="accordion" id="accordionExample">

    @php
      $i = 0;
    @endphp
    @foreach ($faq as $faqs)

	@php
	  $i++;
    @endphp

	<div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $i }}">
        <button class="accordion-button @if($i!=1) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i ==1) true @else false @endif" aria-controls="collapse{{ $i }}">
        {{ $faqs->question }}
        </button>
        </h2>
		<div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i ==1) show @endif" aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
		 <div class="accordion-body">
            {!! $faqs->anwser !!}
         </div>
		</div>
	</div>


     @endforeach






    </div>
    </div>
    </div>
    </div>
</div>



@endsection
