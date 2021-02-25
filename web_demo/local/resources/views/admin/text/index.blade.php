@extends('admin.layout.main')

@section('title') Ngôn ngữ ứng dụng @endsection

@section('icon') mdi-map-marker @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-12 mx-auto  mt-0">

{!! Form::model($data, ['url' => [$form_url],'files' => true],['class' => 'col s12']) !!}

@include('admin.text.form')

</form>

</div>
</div>
</div>
</section>

@endsection