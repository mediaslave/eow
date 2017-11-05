@if (session('status'))
    <div class="alert alert-dissmisable fade show alert-{{ session('status')['type'] ?? 'info' }} m-2 mx-auto col-11" role="alert">
        @if(session('status')['header'])
            <h4 class="alert-heading">{{ session('status')['header'] }}</h4>
        @endif
        <p>
            {{ session('status')['message'] }}
        </p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif