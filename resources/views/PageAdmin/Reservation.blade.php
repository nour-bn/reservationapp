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

<section>
    <div class="sect">
        <table class="table_Border">
            <thead>
            <tr>
                <th>teacher-lastName</th>
                <th>teacher-firstName</th>
                <th>Num-Room</th>
                <th>start_time--end_time</th>
                <th>Date-reservation</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservation as $reservation )
                <tr>
                   <td>{{$reservation -> lname}}</td>
                    <td>{{$reservation -> fname}}</td>
                    <td>{{$reservation -> num}}</td>
                    <td>{{$reservation -> start_time}}--{{$reservation ->  end_time}}</td>
                    <td>{{$reservation -> dateres}}</td>
                    <td>
                        <a href="#" class="btn btn-primary" onclick="myfunctionedit()" >Edit</a>
                        <a herf="#" class="btn btn-danger"  onclick="myfunction('{{$reservation -> idreservation}}')">Delete</a>
                    </td>
                </tr>


                <!--fenetre delet-->
                <div style="display: none;" id="{{$reservation -> idreservation}}" class="formdelete" >

                    <div class="form-delet">
                        <div>
                            <h1> Delete Confirmation</h1>
                        </div>
                        <a href="{{url('deleted/'.$reservation -> idreservation)}}" class="btn btn-primary">Yes,Delete</a>
                        <button  class="bott" id="bott" onclick="myfunction('{{$reservation -> idreservation}}')">Cancel</button>

                    </div>
                </div>

            @endforeach
            </tbody>

        </table>
    </div>
</section>


<!-- fenetre edit-->
<div id="edit" class="formedit">

    <div class="form-content">
        <div>
            <h1> Edit New</h1>
        </div>
        <form action="{{ url('updated/'.$reservation -> idreservation)}}" method="POST">
            @method("put")
            @csrf
            <div><label>teacher-lastName</label> </div>
                <input type="text" id="lastName" name="lastName"  value="{{ $reservation -> lname}}" >


            <div><label>teacher-firstName</label></div>
                <input type="text" id="firstName" name="firstName" value="{{ $reservation -> fname }}" >



            <div><label>start_time--end_time </label> </div>
            <input type="text" id="time" name="time" value="{{$reservation -> start_time}}--{{$reservation ->  end_time}}">


            <div><label>Date-reservation </label> </div>
                <input type="text" id="Date" name="Date" value="{{ $reservation -> dateres}}">


                <div><label>Num-Room</label></div>
                <input type="text" id="num" name="num" value="{{ $reservation ->num }}" >

<div>
    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    <button   class="bbton" id="bott"  >Cancel</button>
</div>
        </form>
    </div>
</div>


@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>

