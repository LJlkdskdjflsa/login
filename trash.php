<form method="POST" action="">
    <div  class="form-group">
    <label for="username">Username: </label>
    <input  class="form-control"name="username" id="username" type="text" value="" autocomplete="off" value="<?php echo escape(Input::get('username'));?>" required>
    <label for='password'>name: </label>
    <input  class="form-control"name="name" id="name" value="<?php echo escape(Input::get('name'));?>"  required>
    <label for='password'>Email: </label>
    <input  class="form-control"name="email" id="email" value="<?php echo escape(Input::get('email'));?>"  required>
    <label for='password'>Password: </label>
    <input  class="form-control"name="password" id="password" type="password"  required>
    <label>Confirm Password:  </label>
    <input  class="form-control"name="passwordConfirm" id="passwordConfirm" type="password"  required>

    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </div>
</form>