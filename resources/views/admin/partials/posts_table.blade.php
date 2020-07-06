<table class="table">
    <thead>
      <tr>
        <th>Type</th>
        <th>Section</th>
        <th>Title</th>
        <th>Image</th>
        <th>Message</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $posts)

        <tr>
            <td>{{$posts->type}}</td>
            <td>{{$posts->section}}</td>
            <td>{{$posts->title}}</td>
            <td>
                <img src="{{URL::asset('storage/'.$posts->image)}}" alt="profile Pic" height="100" width="100">
            </td>
            <td>{{$posts->body}}</td>

            @if ($posts->publish==1)
                <td> <button class="btn btn-warning"><a href="{{ URL::route('unpublish', $posts->id) }}">unpublish</a></button></td>
            @else
                {{-- <td><a href="{{ URL::route('unpublish', $posts->id) }}">Publish</a></td> --}}
            @endif

        </tr>
      @endforeach

    </tbody>
</table>
