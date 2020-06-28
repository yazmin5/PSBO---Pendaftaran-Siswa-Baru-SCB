@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'FAQ'
])

@section('content')
<div class="row">
    <div class="col-sm-12 mt-5">
        <div class="card mt-4 ml-3 mr-3">
            <div class="message mt-2 ml-2 mr-2" >
                @if (session()->has('success'))
                    <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-header">
                <h4 class="card-title mt-0">Tambah FAQ</h4>
            </div>

            <div class="card-body">
                <form id="create-faq" class="form-horizontal" action="{{route('create-faq')}}" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="question">Pertanyaan<span class="text-danger">*</span></label>
                        <input class="form-control" name="question" required="" maxlength = "200" type="text" id="question" placeholder="Enter title">
                    </div>
                    <input id="faq-answer" type="text" name="answer" value="" hidden>
                    <div class="form-group">
                        <label for="answer">Jawaban<span class="text-danger">*</span></label>
                        <!-- <br> -->
                        <div id="snow-editor" style="height: 300px;"></div>
                        <!-- <textarea name="answer" id="answer" required></textarea> -->
                    </div>
                    <div class="form-group account-btn m-t-10">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Buat FAQ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
