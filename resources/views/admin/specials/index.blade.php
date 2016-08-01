@extends('admin.layout')

@section('title') Specials @stop

@section('content')
    <div class="block">
        <div class="block-title">
            <div class="block-options pull-right">
                {!! toolbar_link('admin.specials.create', 'fa-plus', 'New Special') !!}
            </div>
            <h2>Specials</h2>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th class="min">ID</th>
                <th>Name</th>
                <th>Enabled</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if($specials->count() > 0)
                @foreach($specials as $special)
                    <tr>
                        <td>{{$special->id}}</td>
                        <td>{{$special->name}}</td>
                        <td>{{$special->is_enabled}}</td>
                        <td>
                            @if($specials->media->count() > 0)
                                <img src="{!! $special->media->first()->getUrl('adminThumb')!!}"/>
                            @endif
                        </td>
                        <td class="min">
                            {!!$special->getTableLinks()!!}
                        </td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">
                        There are no specials available
                    </td>
                </tr>
            @endif

            </tbody>
        </table>
        {!! paginate($specials) !!}
    </div>
@stop