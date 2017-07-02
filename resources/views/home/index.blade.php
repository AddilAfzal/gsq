@extends('master.layout')

@section('content')
    <div class="container">
        <h1 class="post-nav-heading">
            Live Statistics
        </h1>
        <p class="lead">
            last Updated: {{\Carbon\Carbon::now()}}
        </p>

        <table class="table table-sm">
            <thead>
            <th>Status</th>
            <th>Game</th>
            <th>IP</th>
            <th>Server Name</th>
            <th>Current Map</th>
            <th>Players</th>
            </thead>

            <tbody>
            @foreach($servers as $server)
                <tr>
                    <td>
                        @if($server['gq_online'] == true)
                            <span class="badge badge-success"> Online</span>
                        @else
                            <span class="badge badge-danger"> Offline</span>

                        @endif
                    </td>
                    <td width="10px">
                        <img src="/img/game_icons/sm/{{$server['gq_type']}}.gif" alt="{{$server['gq_type']}}">
                    </td>
                    <td>
                        {{$server['gq_address']}}:{{$server['gq_port_client']}}
                    </td>
                    <td>
                        {{$server['gq_hostname']}}
                    </td>
                    <td>
                        {{isset($server['gq_mapname']) ? $server['gq_mapname'] : "-"}}
                    </td>
                    <td>
                        {{isset($server['gq_numplayers']) ? $server['gq_numplayers'] : "-"}} / {{isset($server['gq_maxplayers']) ? $server['gq_maxplayers'] : "-"}}
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{$server['gq_joinlink']}}"><i
                                    class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip"
                                    data-placement="top" title="Connect"></i></a>
                        <a class="btn btn-secondary btn-sm" href=""><i class="fa fa-bars"
                                                                                       aria-hidden="true"
                                                                                       data-toggle="tooltip"
                                                                                       data-placement="top"
                                                                                       title="View"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
@endsection