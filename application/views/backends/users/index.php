<div class="row">
    <div class="span12">
        
        <h3>Modul User</h3>
        <hr/>
        <div style="text-align: right">
            <a href="#" class="btn btn-success"><i class="icon-plus icon-white"></i> add user</a>
        </div>
        <table class="table table-condensed table-striped">
            <colgroup>
                <col class="span3">
                <col class="span6">
                <col class="span3">
            </colgroup>
            <thead>
                <tr>
                    <th>User</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users['data'] as $r): ?>
                    <tr>
                        <td><?php echo $r->email ?></td>
                        <td><?php echo $r->fullname ?></td>
                        <td style="text-align: right">
                            <a href="#" class="btn btn-mini btn-info"><i class="icon-user icon-white"></i> &nbsp;PROFILE</a>
                            <a href="#" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> &nbsp;DELETE</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php echo $pagination ?>

        <h3>Search form</h3>
    </div>
</div>