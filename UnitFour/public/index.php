<?php
include_once 'header.php';
?>

    <body class = "bg-info">
    <div class = "container-fluid col-md-10 offset-md-1">
        <div class = "row">
            <div class = "card mt-3 px-2 py-2">
                <h1 text-align ="center">Stationary Application</h1>
                <p><br>Welcome to this fictional stationary application page created
                    for COMP2001 Example. To continue please accept our terms and
                    conditions.</p>
                <form action="agreement.php" method="GET">
                    <div class = "form-check">
                        <input type ='radio' name = 'Agreement' value='true' id='Agree' class="form-check-input"/>
                        <label class="form-check-label" for="Agree">I Agree</label><br>
                    </div>

                    <div class = "form-check">
                        <input type ='radio' name = 'Agreement' value='false' id='Disagree' class="form-check-input"/>
                        <label class="form-check-label" for="Disagree">I Disagree</label><br>
                    </div>

                    <div class = form-group>
                        <input type="submit" value = "Submit" id="Submit" class="btn-primary mb-2">
                    </div>

                </form>
            </div>
        </div>
    </div>




<?php
include_once 'footer.php';
?>


