 <td class="left">
     <b style="text-decoration: underline;"> {{ $data->desc_header }}</b><br>
     MANUFACTURER : {{ $data->desc_manufature }}<br>
     SIZE: {{ $data->getShakleSize->size }}<br>
     @if (isset($data->desc_type))
         TYPE: {{ $data->desc_type }} <br>
     @endif
     <br>
     EXAMINED ACCORDING TO BS EN<br>
     13889:2003+A1:2008
     <br>

 </td>
 <td>{{ $data->manufature_date }}</td>
 <td>{{ $data->getShakleSize->swl }}</td>
