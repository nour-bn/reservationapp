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
                <th>num</th>
                <th>floor</th>
                <th>capacity</th>
                <th>Type</th>
                <th>Material</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roomamphi as $roomamphi )
                <tr>
                    <td>{{$roomamphi -> num}}</td>
                    <td>{{$roomamphi -> floor}}</td>
                    <td>{{$roomamphi ->  capacity}}</td>
                    <td>{{$roomamphi -> type}}</td>
                    <td>{{$roomamphi -> Type}}</td>
                    <td>
                        <a href="#" class="btn btn-primary" onclick="myfunctionedit()" >Edit</a>
                        <a herf="#" class="btn btn-danger"  onclick="myfunction('{{$roomamphi -> idroomamphi}}')">Delete</a>
                    </td>
                </tr>
                <!--fenetre delet-->
                <div style="display: none;" id="{{$roomamphi -> idroomamphi}}" class="formdelete" >

                    <div class="form-delet">
                        <div>
                            <h1> Delete Confirmation</h1>
                        </div>
                        <a href="{{url('dele/'.$roomamphi -> idroomamphi)}}" class="btn btn-primary">Yes,Delete</a>
                        <button  class="bott" id="bott" onclick="myfunction('{{$roomamphi -> idroomamphi}}')">Cancel</button>

                    </div>
                </div>


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
        <form action="{{route('createrooAmph')}}" method="POST">
            @method("put")
            @csrf
            <div><label>Room number</label></div>
                <input type="text" id="num" name="num"  placeholder="  01">

            <div><label>Floor</label></div>
                <input type="text" id="floor" name="floor" placeholder="  01">

            <div><label>Capacity</label></div>
                <input type="text" id="capacity" name="capacity" placeholder="  Enter the Capacity" >

            <div>
                <div><label>Type</label></div>
                <select  name="types" >
                    @foreach($roomamphitype as $roomamphitype)
                        <option  id="types" value="{{$roomamphitype ->idroomamphitype}}" {{$roomamphitype->type == $roomamphitype ->idroomamphitype ? 'selected' : ''}}>{{$roomamphitype ->type}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <div><label>Material</label></div>
                <select  name="material" >
                    @foreach($material as $material)
                        <option  id="types" value="{{$material ->idmaterial}}" {{$material->Type == $material ->idmaterial ? 'selected' : ''}}>{{$material ->Type}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <button  class="bot" id="bout">Cancel</button>

    </div>
</div>

<!-- fenetre edit-->
<div id="edit" class="formedit">

    <div class="form-content">
        <div>
            <h1> Edit New</h1>
        </div>
        <form action="{{ url('upda/'.$roomamphi -> idroomamphi)}}" method="POST">
            @method("put")
            @csrf
            <div>
                <label>num</label>
                <input type="text" id="num" name="num"  value="{{ $roomamphi -> num }}" >
            </div>

            <div>
                <label>floor</label>
                <input type="text" id="floor" name="floor" value="{{ $roomamphi ->  floor }}" >
            </div>

            <div>
                <label>capacity</label>
                <input type="number" id="capacity" name="capacity" value="{{ $roomamphi ->  capacity}}">
            </div>

            <div>
                <div><label>Type</label></div>
                <select  name="types" >
                        <option  id="types" value="{{$roomamphitype ->idroomamphitype}}" {{$roomamphitype->type == $roomamphitype ->idroomamphitype ? 'selected' : ''}}>{{$roomamphitype ->type}}</option>
                </select>
            </div>


            <div>
                <div><label>Material</label></div>
                <select  name="material" >
                        <option  id="types" value="{{$material ->idmaterial}}" {{$material->Type == $material ->idmaterial ? 'selected' : ''}}>{{$material ->Type}}</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </form>
        <button   class="bottn" id="bott" >Cancel</button>

    </div>
</div>



@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>

