
    <form action="formexample" method="post">  <!-- form is by defalut uses get method -->
        @csrf
        <div class="form-head">
            <h2>Enter you detail here.</h2>
        </div>
        <div class="form-inputs">
            <div>
                <label for="name"></label>
                <input type="text" name="name" placeholder="Name" id="name">
            </div>
            <div>
                <label for="age"></label>
                <input type="text" name="age" placeholder="Age" id="age">
            </div>
            <div>
                <label for="email"></label>
                <input type="email" name="email" placeholder="Email" id="email">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    <style>
        input{
            border: 3px solid orange;
            border-radius: 4px;
            height: 50px;
            width: 200px;
            padding: 4px;
            margin: 5px;
        }
        button{
            border: 3px solid green;
            border-radius: 4px;
            height: 40px;
            width: 100px;
            
            margin: 5px;
        }
    </style>
