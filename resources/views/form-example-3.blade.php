<form action="formexample3" method="post"> <!-- form is by defalut uses get method -->
    @csrf

    <!-- {{print_r($errors)}} This is a worst method to print errors -->


    <!-- This is method is shown all the errors perfectly at in one place -->
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div>
        {{$error}}
    </div>
    @endforeach
    @endif -->

    <!-- There is an error function we must use this to print one error in single place -->
    <div class="form-head">
        <h2>Enter you detail here.</h2>
    </div>
    <div class="form-inputs">
        <div>
            <label for="name"></label>
            <input class="input" type="text" name="name" placeholder="Name" id="name" value="{{old('name')}}">
            <span>@error('name'){{$message}}@enderror
            </span>
        </div>
        <div>
            <label for="age"></label>
            <input class="input" type="text" name="age" placeholder="Age" id="age" value="{{old('name')}}">
            <span>@error('age'){{$message}}@enderror
            </span>
        </div>
        <div>
            <label for="email"></label>
            <input class="input" type="email" name="email" placeholder="Email" id="email" value="{{old('name')}}">
            <span>@error('email'){{$message}}@enderror
            </span>
        </div>
        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" id="male" value="{{old('name')}}">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="{{old('name')}}">
            <label for="female">Female</label>
        </div>
        <span>@error('gender'){{$message}}@enderror</span>
        <div>
            <h4>Select city</h4>
            <select name="city" id="city" value="{{old('name')}}">
                <option value="delhi">Delhi</option>
                <option value="kanpur">Kanpur</option>
                <option value="varanasi">Banaras</option>
            </select>
            <span>@error('city'){{$message}}@enderror
            </span>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>

<style>
    .input {
        border: 3px solid orange;
        border-radius: 4px;
        height: 50px;
        width: 200px;
        padding: 4px;
        margin: 5px;
    }

    button {
        border: 3px solid green;
        border-radius: 4px;
        height: 40px;
        width: 100px;

        margin: 5px;
    }
    span{
        color: red;
    }
</style>