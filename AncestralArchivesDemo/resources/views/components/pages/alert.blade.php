<div {{$attributes->merge(['class' => 'alert alert-dismissible fade show alert-'.$alertType])}} role="alert">
   <h5>{{$message}}</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
   
  </div>
 