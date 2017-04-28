<!DOCTYPE html>
<html lang="en">
<body>

    <form method="POST" action="{{route('app.cities')}}">
        <input type="text" name="city" placeholder="City Name" />
        <br/>
        <input type="submit" value="Submit"/>
        {{csrf_field()}}
    </form>

</body>
</html>