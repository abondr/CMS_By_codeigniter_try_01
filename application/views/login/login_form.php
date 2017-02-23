<?= form_open('login/auth_login', ['class' => "form-horizontal"]) ?>
<fieldset>
    <legend>Login Form</legend>
    <ul><?=  validation_errors("<li><h3 class='text-error'>", "</h3></li>")?></ul>
    
    <div class = "form-group">
        <?= form_label("User Name", 'username', ['class' => "col-lg-2 control-label"]) ?>
        <div class="col-lg-8">
            <?= form_input(["name" => "username", "class" => "form-control", "placeholder" => "User Name", "id" => "username"]) ?>
        </div>
    </div>
    <div class = "form-group">
        <?= form_label("Password", 'password', ['class' => "col-lg-2 control-label"]) ?>
        <div class="col-lg-8"> 
            <?= form_password(["name" => "password", "class" => "form-control", "placeholder" => "Password", "id" => "password"]) ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <?= form_reset(['class' => 'btn btn-warning', 'id' => 'cancel', 'name' => "cancel", 'value' => 'Cancel']) ?>
            <?= form_submit(['class' => 'btn btn-primary', 'id' => 'login', 'name' => "login", 'value' => 'Log In']) ?>
        </div>
    </div>
    <div class="form-group">
    </div>
</fieldset>
<?=
form_close()?>