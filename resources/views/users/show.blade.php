@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <i class="fas fa-user-alt"></i>
        </div>
        <div class="col-sm-7">
            <h2>{{ $user->name }}</h2>
            <table class="table mt-4" style="margin-top: 30px;">
                <tr>
                    <th style="border-style: none;">Gender</th>
                    <td style="border-style: none;">{{ $user->gender }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Age</th>
                    <td style="border-style: none;">{{ $age }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Country</th>
                    <td style="border-style: none;">{{ $user->country }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Native Language</th>
                    <td style="border-style: none;">{{ $user->native_language }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Second Language</th>
                    <td style="border-style: none;">{{ $user->second_language }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Japanese Level</th>
                    <td style="border-style: none;">{{ $japanese_level }}</td>
                </tr>
                <tr>
                    <th style="border-style: none;">Self Instruction</th>
                    <td style="border-style: none;">{{ $user->self_introduction }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection