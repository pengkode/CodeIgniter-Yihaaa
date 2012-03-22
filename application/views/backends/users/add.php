<div class="row">
    <div class="span12">

        <?php if ( isset($freeze) ): ?>
            <div class="alert alert-success">
                <h4 class="alert-heading">User Successfully added</h4>
                <p>
                    User telah berhasil ditambahkan
                </p>

            </div>
        <?php else: ?>

            <form class="form-horizontal" action="<?php echo current_url() ?>" method="POST">
                <?php if ( validation_errors() ): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php echo validation_errors('<li>', '</li>'); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <fieldset>
                    <legend>Add User</legend>

                    <div class="control-group">
                        <label class="control-label" for="fullname">Fullname</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="fullname" name="fullname" value="<?php echo set_value('fullname') ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" value="<?php echo set_value('email') ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="password" name="password" value="">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="passwordconf">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="passwordconf" name="passwordconf" value="">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>
        <?php endif; ?>
    </div>

</div>