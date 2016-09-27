<table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    #
                                                </th>
                                                <th>Parent Menu </th>
                                                <th>Controller </th>
                                                <th>Role </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php $no = 1;
                                         foreach($list->result_array() as $row){ ?>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <?php echo $no ?>
                                                </td>
                                                <td class=" "><?php echo $row['nameOption'] ?></td>
                                                <td class=" "><?php echo $row['controller'] ?> </td>
                                                <td class=" "><?php echo $row['posName'] ?> </td>
                                                <td class=" "><button id="<?php echo $row['controller'] ?>" class="click btn btn-success">Choose</button></td>
                                            </tr>
                                            <?php $no++;
                                            } ?>
                                        </tbody>
</table>
<script>
$(function(){
    $('.click').click(function(){
        var idPar = $(this).attr("id");
        $("#parentID").val(idPar);
    });
});
</script>