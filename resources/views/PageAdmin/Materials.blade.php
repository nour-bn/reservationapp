<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('titre') Matérials Management @endsection
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
                <th>num ser</th>
                <th>specs</th>
                <th>state</th>
                <th>type</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Materials as $Materials)
                <tr>
                    <td>{{$Materials->numser}}</td>
                    <td>{{$Materials->specs}}</td>
                    <td>{{$Materials->state}}</td>
                    <td>{{$Materials->Type}}</td>
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
        <form action="{{route('creatmat')}}" method="POST">
            @method("put")
            @csrf
            <div><label>num ser</label> </div>
                <input type="number" id="numser" name="numser" >


            <div><label>specs</label></div>
                <input type="text" id="specs" name="specs" >


            <div><label>state</label></div>
                <input type="text" id="state" name="state" >


            <div><label>type</label></div>
                <input type="text" id="Type" name="Type" >

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
        <form action="{{ url('updatt/'.$Materials->idmaterial)}}" method="POST">
            @method("put")
            @csrf
            <div>
                <label>Num ser</label>
                <input type="number" id="numser" name="numser"  value="{{ $Materials -> numser }}" >
            </div>

            <div>
                <label>Specs</label>
                <input type="text" id="specs" name="specs" value="{{ $Materials -> specs }}" >
            </div>

            <div>
                <label>State</label>
                <input type="text" id="state" name="state" value="{{ $Materials -> state }}"  >
            </div>
            <div>
                <label>Type</label>
                <input type="text" id="Type" name="Type" value="{{ $Materials -> Type }}"  >
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
        <a href="{{url('delett/'.$Materials->idmaterial)}}" class="btn btn-second">Yes,Delete</a>
        <button  class="bott" id="bott">NO</button>

    </div>
</div>


@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>

