<table class="table table-responsive" id="countries-table">
    <thead>
        <th>Flag</th>
        <th>Name</th>
        <th>Full Name</th>
        <th>Iso 3166 2</th>
        <th>Capital</th>
        <th>Calling Code</th>
        <th colspan="3">Action</th>

        <!--<th>Citizenship</th>-->
        <!--<th>Country Code</th>-->
        <!--<th>Currency</th>-->
        <!--<th>Currency Code</th>-->
        <!--<th>Currency Sub Unit</th>-->
        <!--<th>Currency Symbol</th>-->
        <!--<th>Iso 3166 3</th>-->
        <!--<th>Region Code</th>-->
        <!--<th>Sub Region Code</th>-->
        <!--<th>Eea</th>-->
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>
                @if($country->flag)
                    {!! Html::image("/vendor/countries/images/flags/$country->flag", $country->iso_3166_2) !!}
                @endif
            </td>
            <td>{!! $country->name !!}</td>
            <td>{!! $country->full_name !!}</td>
            <td>{!! $country->iso_3166_2 !!}</td>
            <td>{!! $country->capital !!}</td>
            <td>{!! $country->calling_code !!}</td>

            <td>
                {!! Form::open(['route' => ['countries.destroy', $country->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('countries.show', [$country->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('countries.edit', [$country->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>

            <!--<td>{!! $country->citizenship !!}</td>-->
            <!--<td>{!! $country->country_code !!}</td>-->
            <!--<td>{!! $country->currency !!}</td>-->
            <!--<td>{!! $country->currency_code !!}</td>-->
            <!--<td>{!! $country->currency_sub_unit !!}</td>-->
            <!--<td>{!! $country->currency_symbol !!}</td>-->

            <!--<td>{!! $country->iso_3166_3 !!}</td>-->

            <!--<td>{!! $country->region_code !!}</td>-->
            <!--<td>{!! $country->sub_region_code !!}</td>-->
            <!--<td>{!! $country->eea !!}</td>-->
        </tr>
    @endforeach
    </tbody>
</table>