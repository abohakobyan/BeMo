<!DOCTYPE html>
<head>
<style>
.container {
    padding: 2rem 0rem;
  }

  h4 {
    margin: 2rem 0rem 1rem;
  }

  .table-image {
    td, th {
      vertical-align: middle;
    }
  }
</style>
<script>
function changeIndex(id){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", 'changePageIndex/' + id, true );
    xmlHttp.send( null );
}


</script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ URL::asset('open-iconic-master/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Title</th>

              <th scope="col">Index</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pages as $page)


            <tr>
              <th scope="row">{{ $page->id}}</th>
              <td>{{ $page->title}}</td>

              <td>
              <div class="custom-control custom-switch">
                <input onclick="changeIndex({{ $page->id}})" {{$page->indexed}} type="checkbox" class="custom-control-input" id="page{{ $page->id}}">
                <label class="custom-control-label" for="page{{ $page->id}}"></label>
              </div>
            </td>
              <td>


               <a href="pages/{{ $page->id}}/edit"> <button type="button" title= "Edit" class="btn btn-success"><span class="oi oi-pencil"></span></i></button> </a>

              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

        <a href="index">Main Page</a>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
