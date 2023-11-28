<?php get_header() ?>
<div>
    <h4>Selamat Datang <?=auth()->name?></h4>
</div>
<div class="card">
    <div class="card-header">
        <b>Jadwal Ujian</b>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover table-sales">
            <table class="table table-bordered datatable-crud" style="width:100%">
                <thead>
                    <tr>
                        <th width="20px">#</th>
                        <?php 
                        foreach($fields as $field): 
                            $label = $field;
                            if(is_array($field))
                            {
                                $label = $field['label'];
                            }
                            $label = _ucwords($label);
                        ?>
                        <th><?=$label?></th>
                        <?php endforeach ?>
                        <th class="text-right">
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?php get_footer() ?>