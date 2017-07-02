@extends('master.layout')

@section('content')
    <div class="container">
        <h1 class="post-nav-heading">
            Live Statistics
        </h1>
        <p class="lead">
            last Updated: 02/07/2017 11:30am
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

            <tr>
                <td>
                    <span class="badge badge-success"> Online</span>
                </td>
                <td width="10px">
                    <img src="/img/servers/game_icons/sm/cs16.gif"
                         alt="Counter Strike 1.6">
                </td>
                <td>
                    148.251.78.214:27017
                </td>
                <td>
                    Assault . hsCorp . de [JETPACK|RESPAWN|CSDM|FUN]
                </td>
                <td>
                    cs_assault_blizzard_final
                </td>
                <td>
                    27 / 31
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="steam://connect/148.251.78.214:27017/" ><i class="fa fa-external-link" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Connect"></i></a>
                    <a class="btn btn-secondary btn-sm" href="/servers/assault"><i class="fa fa-bars" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="View"></i></a>

                </td>
            </tr>

            </tbody>

        </table>

    </div>
@endsection