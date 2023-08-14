<form action="{{ route ('book.submit') }}" method="post" ></form>
    @csrf
    
    <input type="text" name="name" placeholder="enter your full name">
    <input type="email" name="email" placeholder="enter your email">
    <input type="number" name="phone" placeholder="enter your number">
    <input type="text" name="address" placeholder="enter your address">
    <input type="text" name="location" placeholder="enter your destination">
    <input type="number" name="guests" placeholder="number of guests">
    <input type="date" name="arrivals" placeholder="dd/mm/yyyy">
    <input type="date" name="leaving" placeholder="dd/mm/yyyy">
    
    <input type="submit" value="submit" class="btn" name="send">
 

</form>