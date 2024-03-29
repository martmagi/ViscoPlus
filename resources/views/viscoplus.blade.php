@extends('layouts.layout')

@section('title', trans('viscoplus.title'))

@section('content')
    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="whatis">{{ trans('viscoplus.whatisvp') }}</h2>
            <p>{{ trans('viscoplus.whatistext1') }}</p>
            <p>{{ trans('viscoplus.whatistext2') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th><h2 class="text-center">ViscoPlus Matrix</h2></th>
                    <th><h2 class="text-center">ViscoPlus Gel</h2></th>
                    <th><h2 class="text-center">ViscoPlus One</h2></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="col-md-3">{{ trans('viscoplus.tableheading1') }}</th>
                    <td>1</td>
                    <td>1</td>
                    <td>3-5</td>
                </tr>
                <tr>
                    <th class="col-md-3">{{ trans('viscoplus.tableheading2') }}</th>
                    <td>{{ trans('viscoplus.tablecontent2_1') }}</td>
                    <td>{{ trans('viscoplus.tablecontent2_2') }}</td>
                    <td>{{ trans('viscoplus.tablecontent2_2') }}</td>
                </tr>
                <tr>
                    <th class="col-md-3">{{ trans('viscoplus.tableheading3') }}</th>
                    <td>{{ trans('viscoplus.tablecontent3_1') }}</td>
                    <td>{{ trans('viscoplus.tablecontent3_1') }}</td>
                    <td>{{ trans('viscoplus.tablecontent3_2') }}</td>
                </tr>
                <tr>
                    <th class="col-md-3">{{ trans('viscoplus.tableheading4') }}</th>
                    <td>{{ trans('viscoplus.tablecontent4_1') }}</td>
                    <td>{{ trans('viscoplus.tablecontent4_1') }}</td>
                    <td>{{ trans('viscoplus.tablecontent4_2') }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2>{{ trans('viscoplus.whatisnahy') }}</h2>
            <p>{{ trans('viscoplus.whatisnahytext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2>{{ trans('viscoplus.howworks') }}</h2>
            <p>{{ trans('viscoplus.howworkstext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2>{{ trans('viscoplus.procedure') }}</h2>
            <p>{{ trans('viscoplus.proceduretext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2>{{ trans('viscoplus.additionalinfo') }}</h2>
            <p>{{ trans('viscoplus.additionalinfotext1') }}
                <a href="http://www.biomedical-baumann.com/joint_health.php" target="_blank">BioMedical</a>
                {{trans('viscoplus.additionalinfotext2')}}
            </p>
        </div>
    </div>

@stop