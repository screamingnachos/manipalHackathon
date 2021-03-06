@extends('layouts.master')

@section('content')

<div>
    <form>
        <div class="form-row" style="padding: 10px">
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="keyword" placeholder="Keyword">
            </div>
            <div class="form-group col-md-3">
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
            
            <div class="form-group col-md-3">     
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
    
            <div class="form-group col-md-3"> 
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </form>


    @foreach ($applicants as $applicant)

    <main role="main" class="container" style="padding-top:50px">
      <div class="jumbotron">
        <h1>Applicantion details</h1>
        <p class="lead"><b>SKILLS</b> - {{ $applicant->skills }}</p>
        <a href="/downloadResume/{{$applicant->user_id}}"><b>DOWNLOAD RESUME - </b>{{ $applicant->resume }}</a>
      </div>
    </main>

    @endforeach
</div>

@endsection