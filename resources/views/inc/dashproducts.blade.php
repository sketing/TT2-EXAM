@if(count($products)>0)
@foreach($products as $product)
    <tr>
        <td><a href="/products/{{$product->id}}">{{$product->title}}</a></td>
        <td> </td>
        <td> 
            <div class="btn-toolbar float-right" role="toolbar">
                <div class="btn-group mr-2" role="group">
                    <a href="/products/{{$product->id}}/edit" class="btn btn-success" style="">
                        Edit
                    </a>
                </div>
                <div class="btn-group" role="group">
                    {!!Form::open(['action' => ['ProductsController@destroy', $product->id],'method' => 'POST', 'class' => ''])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </td>
    </tr>
@endforeach
@else
<tr>
    <td> </td>
    <td class="text-align: center;">You have no posts</td>
    <td> </td>
</tr>
@endif