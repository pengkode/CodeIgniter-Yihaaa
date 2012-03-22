
<div class="row">
    <div class="offset4 span4" style="padding-top:80px;">
        <?php if ( validation_errors() ): ?>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">ERROR!</h4>
                <?php echo validation_errors() ?>
            </div>
        <?php endif; ?>
        <?php if ( $this->session->flashdata('logout_text') ): ?>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Thank You</h4>
                <p>Please come back again soon...</p>
            </div>
        <?php endif; ?>

        <div class="alert">
            <?php echo form_open("") ?>
            <div class="control-group <?php echo form_error('email') ? 'error' : '' ?> ">
                <label class="control-label" for="email"><strong>Email</strong></label>
                <div class="controls">
                    <input class="input-large" id="email" name="email" type="text" value="your@email.com">
                    <?php echo form_error('email', '<span class="help-inline">', '</span>'); ?>
                </div>
            </div>
            <div class="control-group <?php form_error('password') ? 'error' : '' ?>">
                <label class="control-label" for="password"><strong>Password</strong></label>
                <div class="controls">
                    <input class="input-large" id="password" name="password" type="password" value="">
                    <?php echo form_error('password', '<span class="help-inline">', '</span>'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label checkbox">
                    <input type="checkbox" value="1" name="remember"> Remember me
                </label>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <p style="text-align: right">

            <?php echo anchor('#', 'forgot password') ?>
        </p>
    </div>

</div>


