<form action="formexample2" method="post">
    @csrf
    <div>
        <h2>Form Example 2</h2>
    </div>
    <div>
        <h4>Coding skills</h4>
        <input type="checkbox" name="skills[]" id="php" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skills[]" id="java" value="java">
        <label for="java">Java</label>
        <input type="checkbox" name="skills[]" id="python" value="python">
        <label for="python">Python</label>
    </div>
    <div>
        <h4>Gender</h4>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
    </div>
    <div>
        <h4>Select city</h4>
        <select name="city" id="city">
            <option value="delhi">Delhi</option>
            <option value="kanpur">Kanpur</option>
            <option value="varanasi">Banaras</option>
        </select>
    </div>
    <div>
        <label for="age">Age</label>
        <input type="range" name="age" id="age" min="18" max="30">
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
