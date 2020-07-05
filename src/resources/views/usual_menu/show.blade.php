
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">usual_menu {{ $usual_menu->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("usual_menu") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("usual_menu") ."/". $usual_menu->id . "/edit" }}" title="Edit usual_menu"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/usual_menu/{{ $usual_menu->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$usual_menu->id}} </td></tr>
										<tr><th>name</th><td>{{$usual_menu->name}} </td></tr>
										<tr><th>img</th><td>{{$usual_menu->img}} </td></tr>
										<tr><th>user_id</th><td>{{$usual_menu->user_id}} </td></tr>
										<tr><th>name</th><td>{{$usual_menu->name}} </td></tr>
										<tr><th>email</th><td>{{$usual_menu->email}} </td></tr>
										<tr><th>password</th><td>{{$usual_menu->password}} </td></tr>
										<tr><th>phone</th><td>{{$usual_menu->phone}} </td></tr>
										<tr><th>credit_name</th><td>{{$usual_menu->credit_name}} </td></tr>
										<tr><th>credit_number</th><td>{{$usual_menu->credit_number}} </td></tr>
										<tr><th>credit_exmonth</th><td>{{$usual_menu->credit_exmonth}} </td></tr>
										<tr><th>credit_exyear</th><td>{{$usual_menu->credit_exyear}} </td></tr>
										<tr><th>credit_cvv</th><td>{{$usual_menu->credit_cvv}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    