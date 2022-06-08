<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('titre') PersonAdmin Management @endsection
    @include('PageAdmin.PageCss')

</head>
<body>
@include('PageAdmin.navBar')

@include('PageAdmin.sideBar')

<section class="wrapper">
    <div class="sect">
        <div class="row">
            <a herf="#" class="butoon" id="button">Add New</a>
        </div>
        <table class="table_Border">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($AdminPer as $AdminPer )
                <tr>
                    <td>{{$AdminPer -> fname}}</td>
                    <td>{{$AdminPer ->  lname}}</td>
                    <td>{{$AdminPer ->  email}}</td>
                    <td>{{$AdminPer ->  password}}</td>
                    <td>
                        <a href="#" class="btn btn-primary"  onclick="myfunctionedit()">Edit</a>
                        <a herf="#" class="btn btn-danger"  onclick="myfunction()">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>

<!-- fenetre forme-->
<div class="form">

    <div class="form-content">
        <div>
            <h1> Add New</h1>
        </div>
        <form action="{{ url('crea/')}}"   method="POST">
            @method("put")
            @csrf
            <div><label>First Name</label></div>
                <input type="text" id="fname" name="fname" >


            <div><label>Last Name</label></div>
                <input type="text" id="lname" name="lname" >


            <div><label>Email</label></div>
                <input type="email" id="email" name="email" >


            <div><label>Password</label></div>
                <input type="password" id="password" name="password" >



            <<button type="submit" class="btn btn-primary">Add</button>
        </form>
        <button  class="bot" id="bout">Cancel</button>
    </div>
</div>

<!-- fenetre edit-->
<div class="formedit">

            <div class="form-content">
                <div>
                    <h1> Edit New</h1>
                </div>
                <form action="{{ url('updat/'.$AdminPer->idpadmin)}}" method="POST">
                    @method("put")
                    @csrf
                    <div>
                        <label>First Name</label>
                        <input type="text" id="fname" name="fname"  value="{{ $AdminPer -> fname }}" >
                    </div>

                    <div>
                        <label>Last Name</label>
                        <input type="text" id="lname" name="lname" value="{{ $AdminPer ->  lname }}" >
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="text" id="email" name="email" value="{{ $AdminPer -> email}}"  >
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="text" id="password" name="password" value="{{ $AdminPer ->  password }}" >
                    </div>

                    <button type="submit" name="submit" class="btnedit">Edit</button>
                    <button  class="bottn" id="bott">Cancel</button>

                </form>

            </div>
        </div>

<!--fenetre delet-->
<div class="formdelete" id="delete">

    <div class="form-delet">
        <div>
            <h1> Delete Confirmation</h1>
        </div>
        <a href="{{url('delet/'.$AdminPer->idpadmin)}}" class="btn btn-second">Yes,Delete</a>

        <button  class="bott" id="bott">NO</button>

    </div>
</div>

@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>
