<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <th>grade</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($TeachGrade as $TeachGrade )
                <tr>
                    <td>{{$TeachGrade -> grade}}</td>
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
        <form action="{{route('creategrad')}}" method="POST">
            @method("put")
            @csrf
            <div><label>Grade</label></div>
                <input type="text" id="grade" name="grade" >


            <button type="submit" class="btn btn-primary">Add</button>

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
        <form action="{{ url('updd/'.$TeachGrade->idgrade)}}" method="POST">
            @method("put")
            @csrf
            <div>
                <label>Grade </label>
                <input type="text" id="grade" name="grade"  value="{{ $TeachGrade -> grade }}" >
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
        <a href="{{url('del/'.$TeachGrade->idgrade)}}" class="btn btn-second">Yes,Delete</a>
        <button  class="bott" id="bott">NO</button>>

    </div>
</div>

@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>

