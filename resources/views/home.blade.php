@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<img src="https://t3.ftcdn.net/jpg/02/20/14/38/360_F_220143804_fc4xRygvJ8bn8JPQumtHJieDN4ORNyjs.jpg" class="card-img-top" alt="...">
                <div class="card-header">Student Management System</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are successfully logged in!
                        <p>You will be redirected in <span id="counter">3</span> second(s).</p>
                        <script type="text/javascript">
                            function countdown() {
                                var i = document.getElementById('counter');
                                if (parseInt(i.innerHTML)<=0) {
                                    location.href = 'students',true;
                                }
                                if (parseInt(i.innerHTML)!=0) {
                                    i.innerHTML = parseInt(i.innerHTML)-1;
                                }
                            }
                            setInterval(function(){ countdown(); },1000);
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
