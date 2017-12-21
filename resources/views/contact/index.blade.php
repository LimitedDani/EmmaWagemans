@include ('layouts.errors')

<form action="/contact" method="POST">

    {{ csrf_field() }}

    <label for="title">Naam:</label>
    <input type="text" class="" id="name" name="name" required>
    
    <br>

    <label for="email">Email:</label>
    <input type="email" class="" id="email" name="email" required>
    
    <br>

    <label for="text">Bericht:</label>
    <textarea class="" id="text" name="text" required></textarea>
    
    <br>

    <button type="submit" class="">Verstuur</button>

</form>