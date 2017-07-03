@extends('master.layout')

@section('content')
    <div class="container">
        <h1 class="post-nav-heading">
            Live Statistics
        </h1>
        <p class="lead" id="update-time">
            Last Updated: Never
        </p>
        <div id="servers-table">
            @include('home.table')
        </div>
    </div>
@endsection

@section('js-body')
    <script>
        setInterval(reloadData, 15000);
        function reloadData() {
            $.ajax({
                type: 'POST',
                url: '/table/',
                dataType: 'html',
                data: { '_token': '{{csrf_token()}}' },
                success: success
            });
        }
        function success(response) {
            $("#servers-table").html(response);
            $("#update-time").html("Last Updated: " + moment().format('YYYY-MM-DD, HH:mm:ss'));
        }
    </script>
@endsection

