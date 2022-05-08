@if(session('success'))
    <div class="message">
        {{ session('success') }}
        <div class="message-cross"><i class="fa-solid fa-xmark"></i></div>
    </div>
@endif
