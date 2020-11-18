<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 
	<script>
	
    $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "lengthMenu": "Apresentar _MENU_ registros por página",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Apresentar página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Pesquisar"
        }
    } );
} );


	</script>


<div>
<div class='container-fluid'>
<table id="example" class="table table-bordered table-hover table-striped table-condensed" style="width:90%">
<thead class='bg-verde text-center'>
            <tr>
                <th>ID</th>
                 
                <th>PLACA</th>
                <th>CODIGO</th>
            </tr>
        </thead>
        <tbody>
<?php 
foreach($viatura as $vtr){
    echo '<tr>
            <th>'.$vtr['id'].'</th>
            <th>'.$vtr['placa'].'</th>
            <th>'.$vtr['codigo_vtr'].'</th>
          </tr>';
}

?>
 
           
        </tbody>
        <tfoot>
        <tr>
                <th>ID</th>
                 
                <th>PLACA</th>
                <th>CODIGO</th>
            </tr>
        </tfoot>
    </table>
</div>

</div>