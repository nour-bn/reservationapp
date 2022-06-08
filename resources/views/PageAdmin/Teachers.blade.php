
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('titre') Teachers Management @endsection
    @include('PageAdmin.PageCss')

</head>
<body>
@include('PageAdmin.navBar')

@include('PageAdmin.sideBar')

<section>
    <div class="sect">
    <div class="row">
        <a herf="#" class="butoon" id="button">Add New</a>
    </div>
                <table class="table_Border">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Num Tél</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>State</th>
                        <th>Status</th>
                        <th>grade</th>
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teacher as $teacher )
                        <tr>
                            <td>{{$teacher -> fname}}</td>
                            <td>{{$teacher ->  lname}}</td>
                            <td>{{$teacher ->  numtel}}</td>
                            <td>{{$teacher ->  department}}</td>
                            <td>{{$teacher ->  email}}</td>
                            <td>{{$teacher ->  password}}</td>
                            <td>{{$teacher -> state}}</td>
                            <td>{{$teacher ->  status}}</td>
                            <td>{{$teacher -> grade -> grade}}</td>
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

    <div class="form-contentadd">
        <div>
            <h1> Add New</h1>
        </div>
        <form action="{{route('createTech')}}" method="POST">
            @method("put")
            @csrf
            <div><label >First Name</label></div>
                <input type="text" id="fname" name="fname" placeholder="  first Name">

            <div><label>Last Name</label></div>
                <input type="text" id="lname" name="lname" placeholder="  last Name" >

            <div><label>Department</label></div>
                <input type="text" id="department" name="department" placeholder="  saise department">

            <div><label>Num tél</label></div>
                <input type="number" id="numtel" name="numtel" placeholder="  Num tél" >

            <div><label>Email</label></div>
                <input type="email" id="email" name="email" placeholder="  email">

            <div><label>Password</label></div>
                <input type="password" id="password" name="password" placeholder="  password" >

            <div><label>State</label></div>
                <input type="text" id="state" name="state" placeholder="  state" >

            <div><label>Status</label></div>
                <input type="text" id="status" name="status" placeholder="  status">

            <div>
                <div><label>Grade</label></div>
            <select  name="grades" >
                @foreach($grade as $grade)
                    <option  id="grades" value="{{$grade ->idgrade}}" {{$grade->grade == $grade->idgrade ? 'selected' : ''}}>{{$grade -> grade}}</option>
                @endforeach
            </select>
            </div>

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
        <form action="{{ url('update/'.$teacher -> idteacher)}}" method="post">
            @method("put")
            @csrf
            <div><label>First Name</label> </div>
                <input type="text" name="fname" id="fname"   value="{{ $teacher -> fname }}" >


            <div><label>Last Name</label></div>
                <input type="text" id="lname" name="lname" value="{{ $teacher -> lname }}" >

            <div><label>Num tél</label></div>
                <input type="number" id="numtel" name="numtel" value="{{ $teacher -> numtel }}"  >

            <div><label>Department</label></div>
                <input type="text" id="department" name="department" value="{{ $teacher -> department }}" >

            <div><label>Email</label></div>
                <input type="email" id="email" name="email" value="{{ $teacher -> email }}">


            <div><label> Password</label> </div>
                <input type="password" id="password" name="password" value="{{ $teacher  -> password }}"  >


            <div><label>State</label></div>
                <input type="text" id="state" name="state" value="{{ $teacher  -> state }}" >



                <div><label>Status</label></div>
                <input type="text" id="status" name="status" value="{{ $teacher  -> status }}" >




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

            <a href="{{url('delete/'.$teacher -> idteacher)}}" class="btn btn-second">Yes,Delete</a>

        <button  class="bott" id="bott">NO</button>

    </div>
</div>


@include('PageAdmin.footer')
@include('PageAdmin.jsfent')
</body>
</html>
