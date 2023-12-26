<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hotel booking</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='../view/assets/style.css'>
    <script src='https://code.jquery.com/jquery-3.7.1.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        // full day
        $("#f").click(function(){
            $("#half").hide();
            $("#full").slideToggle();
            
        })

        // half day
        $("#h").click(function(){
            $("#full").hide();
            $("#half").slideToggle();
        })

        // custom
        $("#c").click(function(){
          $("#half").hide();
          $("#full").hide();
        })

      })
    </script>
</head>
<body>
    
        <div class="shadow p-5 w-25">
        <h2>Hotel booking</h2><br>
        <form method="post">
        <select name="nm" required class="form-control">
          <option value="">-select option-</option>
          <option value="full" id="f">Full day</option>
          <option value="half" id="h">Half day</option>
          <option value="custom" id="c">custom</option>
        </select>
        </form>
        <!-- full -->
        <form method="post">
        <div id="full">
          <option value=""><label>chake in date</label><input type="date" name="in" required class="form-control mt-1"></option>
            <option value=""><label>chake out date</label>
              <input type="date" name="out" required class="form-control mt-1"></option>
              <button type="submit" name="sub" class="btn btn sm btn-primary mt-4" style="margin-left: 90px;">book</button>
            </div>
          </form>

            <!-- half -->
             <form method="post">
            <div id="half">
              <option value=""><label>chake in date</label>
                <input type="date" name="in" required class="form-control mt-1"></option>
                <option value=""> <h5 align="center">morning</h5>
        
                  <input type="radio" name="m" value="8AM to 6PM">
                   <input type="text"  value="8AM to 6PM" readonly  required class="form-control"></option>

                  <option value=""><h5 align="center">evening</h5>

                   <input type="radio" name="m" value="7PM to 7AM">
                    <div><input type="text"  value="7PM to 7AM" readonly  required class="form-control"></option>
                    <input type="submit" name="sub" class="btn btn sm btn-primary mt-4" value="book" style="margin-left: 90px;">
                </div>
             </form>
  
        </div>
        
    

      
      
</body>
</html>



