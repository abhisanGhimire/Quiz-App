@extends('backend.layouts.master')

	@section('title','user result')

	@section('content')
    <div class="span9">
                    <div class="content">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    @if(Session::has('messages'))
                    <div class="alert alert-danger">
                        {{Session::get('messages')}}
                    </div>
                    @endif
                   <div class="module">
                         <div class="module-head">
                                <h3> User Result</h3>
                            </div>

                            <div class="module-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Name</th>
									  <th>Quiz</th>
                                      <th></th>
									</tr>
								  </thead>
								  <tbody>
                                      @if(count($quizzes)>0)
                                      @foreach($quizzes as $quiz)
                                      @foreach($quiz->users as $key=>$user)
									<tr>
									  <td>{{$key+1}}</td>
									  <td>{{$user->name}}</td>
                                      <td>{{$quiz->name}}</td>
                                      <td>
                                      <a href="{{route('quiz.question',$quiz->id)}}" class="btn btn-inverse">
                                      View Questions
                                      </a>
                                      </td>
                                      <td>
                                       <a href="{{$user->id}}/{{$quiz->id}}" class="btn btn-primary">View Result</a>
                                      </td>
									</tr>
                                    @endforeach
                                    @endforeach
                                     @else
                                     <td>Sorry! No Users To Display....<td>
                                     @endif
								  </tbody>
								</table>
                       		</div> 
                   		</div>
                		
                		</div>
           			 
           			</div>
        		</div> 

    @endsection