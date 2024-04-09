<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New Employee</h1>
    <form method="post" action="{{route('employee.saveNewEmployee')}}">
         @csrf
         @method('post')
        <div>
            <label>Firstname</label>
            <input type="text" name="firstname" placeholder="Firstname"/>
        </div>
        <div>
            <label>Middlename</label>
            <input type="text" name="middlename" placeholder="Middlename"/>
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" name="lastname" placeholder="Lastname"/>
        </div>
        <div>
            <label>Birthdate</label>
            <input type="date" name="birthdate" placeholder="Birthdate"/>
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address"/>
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Phone"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div>
            <input type="submit" value="Save New Employee"/>
        </div>

</form>

</body>
</html>