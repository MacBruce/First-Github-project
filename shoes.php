<?php include ("includes/top.php");?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-6">
            <h1>Shoe info!</h1>
            <p>Sign up for our email list, tell us what day you're free and if enough people sign up, we will 
            do an unveiling of our products live on youtube. Plus every viewer will have the chance for a deep discount. 
            So what are you waiting for? Sign up now!
            </p>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-lg-12 col-md-6">
            <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
        <div class="form-group">
            <p class="help-block">Pick a date that you're available below!</p>
            <input type="text" id="datepicker">
        </div>
        <div class="form-group">
            <fieldset>
            <legend>What field of work are you in?</legend>
                <label for="radio-1">Engineering</label>
                <input type="radio" name="radio-1" class="radios">
                <label for="radio-2">Math</label>
                <input type="radio" name="radio-1" class="radios">
                <label for="radio-3">Science</label>
                <input type="radio" name="radio-1" class="radios">
                <label for="radio-4">Math</label>
                <input type="radio" name="radio-1" class="radios">
             </fieldset>
        </div>
        <button type="submit" id="button" class="btn btn-default"><span class="ui-icon-gear"></span>Submit</button>
            </form>
        </div>
    </div> 

</div>

	
    

<?php include ("includes/bottom.php");?>