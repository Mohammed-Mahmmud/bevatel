 <td class="left">
     <b style="text-decoration: underline;"> {{ $data->desc_header }}</b><br><br>
     {{ $data->desc_content }}<br>
     <b>DIAMETER:</b> {{ $data->diameter }} {{ $data->diameter_unit }} <br>
     <b>LENGTH:</b> {{ $data->length }} {{ $data->length_unit }} <br>
     @if (isset($data->location))
         <b>LOCATION:</b> {{ $data->location }} <br>
     @endif
     EXAMINED ACCORDING TO <br>
     BS EN 13414-2:2003+A2:2008
 </td>
 <td>{{ $data->manufature_date }}</td>
 <td>{{ $data->swl }}</td>
