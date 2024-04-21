<?
    $id = $_GET['id'];
    $tours = load('tours');
    foreach ($tours as $tour) {
        if($tour['id'] == $id){
            $tourToBook = $tour;
            break;
        }
    }
    // HW1: find the tour by ID and print its name

?>
<div style="margin: 0; text-align: center; height: 100%; ">
    <div cclass="divForm" style="display: inline-block; max-width: 500px; width: 100%; margin-top: 100px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; background-color: white;">
        <form action="/?page=order&id=<?=$id?>" method="POST" style="max-width: 500px;">
            <h4>You are about to book the tour:</h4>
            <h2><? print(htmlspecialchars($tourToBook['name']))?></h2>
            <br><br>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="quantity">
                    <option selected>Select the number of the seats</option>
                    <option value="2">2 Seats</option>
                    <option value="3">3 Seats</option>
                    <option value="4">4 Seats</option>
                    <option value="5">5 Seats</option>
                    <option value="6">6 Seats</option>
                    <option value="7">7 Seats</option>
                    <option value="8">8 Seats</option>
                    <option value="9">9 Seats</option>
                    <option value="10">10 Seats</option>
            </select>
            </div>
            
            <div class="mb-3">
                <label for="InputFullName" class="form-label">Full Name</label>
                <input  name="full_name" type="text" class="form-control" id="InputFullName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input  name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="InputPhone" class="form-label">Phone Number</label>
                <input  name="phone_number" type="text" class="form-control" id="InputPhone" aria-describedby="phoneHelp">
            </div>
            
            <div id="FullNameHelp" class="form-text">We'll never share your data with anyone else.</div>
            <br>
            <button type="submit" class="btn btn-primary">Book</button>
        </form>
    </div>
</div>
<br><br>