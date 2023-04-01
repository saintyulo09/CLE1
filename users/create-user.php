<h3>Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.user.php?action=new">
        <div id="form-block-half">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" placeholder="First Name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" placeholder="Last Name..">

            <label for="access">Access Level</label>
            <select id="access" name="access">
              <option value="staff">Staff</option>
              <option value="Manager">Manager</option>
              <option value="Owner">Owner</option>
            </select>
        </div>
        <div id="form-block-half">
            <label for="email">Email</label>
            <input type="email" id="email" class="input" name="email" placeholder="Email..">

            <label for="password">Password</label>
            <input type="password" id="password" class="input" name="password" placeholder="Enter Password..">

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" class="input" name="confirmpassword" placeholder="Confirm Password..">
            
        </div>
        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>