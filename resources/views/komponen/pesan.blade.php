@if (Session::has('success'))
      <div class="pt-3"></div>
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
          
      @endif

      @if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif