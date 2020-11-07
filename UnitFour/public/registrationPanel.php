<div class = "container col-md-12">
    <div class = "card mt-3 px2 py-2">
        <div class = "card-header">
            <h2>User Login</h2>
        </div>
        <div class = "card-body">
            <form method = "post" action = "process_registration.php" id = "registration" class = "login-form">
                <div class = "form-group text-center">
                    <p><span>Please input registration details below</span></p>
                </div>
                <hr/>
                <div class = "form-group">
                    <label for="customer_name">Customer Name:</label>
                    <input type = "text" id = "customer_name" placeholder="Customer Name..."
                    minlength="1" name = "customer_name" class="form_control" required>
                </div>
                <div class = "form-group">
                    <label for = "postcode">Postcode:</label>
                    <input type = "text" id = "postcode" placeholder="Postcode..."
                           minlength="1" name = "postcode" class="form_control" required>
                </div>
                <div class = form-group>
                    <label for="email">email:</label>
                    <input type = "text" id = "email" placeholder = "email..." name = "email" class = "form-control" required>
                </div>
                <div class = form-group>
                    <button type = "submit" name = "register" id = "register" class = "btn btn-info">Register</button>
                </div>

            </form>

        </div>

    </div>

</div>
