@extends('_layouts.app')

@section('content')
<div class="container">
  <div class="row">
    
    <div class="col-8">
      @if($create == true)
      {{Form::open(['route' => 'departments.store'])}}
      @else
      {{Form::model($department, ['route' => ['departments.update', $department->id], 'method' => 'PUT'])}}
      @endif      

      @include('templates.form-text', ['space'=>'department', 'tag' => 'name'])
      @include('templates.form-text', ['space'=>'department', 'tag' => 'abbreviation'])
      @include('templates.form-text', ['space'=>'department', 'tag' => 'number_employees'])
      @include('templates.form-select', ['space'=>'department', 'tag' => 'director_id', 'list' => $userList])

      {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
      
      {{Form::close()}}      
    </div>
    
  </div>
</div>
@endsection