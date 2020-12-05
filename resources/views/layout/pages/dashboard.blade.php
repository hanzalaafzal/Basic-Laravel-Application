<div class="container">
  @if(empty($queries))

  <div class="col-md-5">

    <h3>No queries found</h3>

  </div>

  @else

  @if(session('success-delete'))
    <div class="alert alert-success">
      <span>Deleted Successfully</span>

    </div>

  @endif
  <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>


        @foreach($queries as $query)

        <tr>
            <th scope="row">{{ $query['id']}}</th>
            <td>{{$query['name']}}</td>
            <td>{{$query['email']}}</td>
            <td>{{$query['subject']}}</td>
            <td class="col-md-2">
              <form action="{{route('contact.destroy',$query['id'])}}" method="post" style="position:absolute">
                {{ @method_field('DELETE') }}
                @csrf
                <button href="#" type="submit" class="float-left" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
              </form>
              <button id="_viewMessage" class="float-right" href="#" onClick="TriggerModal({{$query['id']}})">View</button>
            </td>
        </tr>

        @endforeach


  </tbody>
</table>
<ul class="pagination">
 <li class="page-item {{$queries->onFirstPage() ? 'disabled' : ''}}"><a class="page-link" href="{{$queries->previousPageUrl()}}">Previous</a></li>
 <li class="page-item {{$queries->hasMorePages() ? '' : 'disabled'}}"><a class="page-link" href="{{$queries->nextPageUrl()}}">Next</a></li>
</ul>


    @endif

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="_MessageModal">
      T
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
