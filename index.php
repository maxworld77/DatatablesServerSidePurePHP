<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<style>
			#table1_filter{
				display:none;
			}
		</style>
    </head>
    <body>
        <div class="container" id="">
        <br>
        <div class="panel panel-default" id="advance_filter" >
            <div class="panel-heading">
                <h3 class="panel-title" >Advanced Filter : </h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="email" class="col-sm-3 col-xs-3 control-label">Email</label>
                            <div class="col-sm-9 col-xs-9">
                                <input type="text" class="form-control" id="user_E800_email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="input-group radioBtns">
                                <div id="radioBtn" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E801_radioEmail" title="Start with.." data-title="S">S</a>
                                    <a class="btn btn-primary btn-sm active" data-toggle="user_E801_radioEmail" title="Contains.." data-title="C">C</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E801_radioEmail" title="Finish with.." data-title="F">F</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E801_radioEmail" title="Whole word" data-title="W">W</a>
                                </div>
                                <input type="hidden" name="user_E801_radioEmail" id="user_E801_radioEmail" value="C">
                                <div id="radioBtn2" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E802_radioEmail2" title="Match case" data-title="A" value="a">Aa</a>
                                </div>
                                <input type="hidden" name="user_E802_radioEmail2" id="user_E802_radioEmail2" value="a">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="first_name" class="col-sm-3 col-xs-3 control-label">First name</label>
                            <div class="col-sm-9 col-xs-9">
                                <input type="text" class="form-control" id="user_E803_first_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="input-group radioBtns">
                                <div id="radioBtn" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E804_radioFirstname" title="Start with.." data-title="S">S</a>
                                    <a class="btn btn-primary btn-sm active" data-toggle="user_E804_radioFirstname" title="Contains.." data-title="C">C</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E804_radioFirstname" title="Finish with.." data-title="F">F</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E804_radioFirstname" title="Whole word" data-title="W">W</a>
                                </div>
                                <input type="hidden" name="user_E804_radioFirstname" id="user_E804_radioFirstname" value="C">
                                <div id="radioBtn2" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E805_radioFirstname2" title="Match case" data-title="A" value="A">Aa</a>
                                </div>
                                <input type="hidden" name="user_E805_radioFirstname2" id="user_E805_radioFirstname2" value="a">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="last_name" class="col-sm-3 col-xs-3 control-label">Last name</label>
                            <div class="col-sm-9 col-xs-9">
                                <input type="text" class="form-control" id="user_E806_last_name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="input-group radioBtns">
                                <div id="radioBtn" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E807_radioLastname" title="Start with.." data-title="S">S</a>
                                    <a class="btn btn-primary btn-sm active" data-toggle="user_E807_radioLastname" title="Contains.." data-title="C">C</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E807_radioLastname" title="Finish with.." data-title="F">F</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E807_radioLastname" title="Whole word" data-title="W">W</a>
                                </div>
                                <input type="hidden" name="user_E807_radioLastname" id="user_E807_radioLastname" value="C">
                                <div id="radioBtn2" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E808_radioLastname2" title="Match case" data-title="A" value="A">Aa</a>
                                </div>
                                <input type="hidden" name="user_E808_radioLastname2" id="user_E808_radioLastname2" value="a">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="employee_id" class="col-sm-3 col-xs-3 control-label">Employee ID</label>
                            <div class="col-sm-9 col-xs-9">
                                <input type="text" class="form-control" id="user_E809_employee_id">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="input-group radioBtns">
                                <div id="radioBtn" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E810_radioEmployee_id" title="Start with.." data-title="S">S</a>
                                    <a class="btn btn-primary btn-sm active" data-toggle="user_E810_radioEmployee_id" title="Contains.." data-title="C">C</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E810_radioEmployee_id" title="Finish with.." data-title="F">F</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E810_radioEmployee_id" title="Whole word" data-title="W">W</a>
                                </div>
                                <input type="hidden" name="user_E810_radioEmployee_id" id="user_E810_radioEmployee_id" value="C">
                                <div id="radioBtn2" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E811_radioEmployee_id2" title="Match case" data-title="A" value="A">Aa</a>
                                </div>
                                <input type="hidden" name="user_E811_radioEmployee_id2" id="user_E811_radioEmployee_id2" value="a">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="status" class="col-sm-3 col-xs-3 control-label">Status</label>
                            <div class="col-sm-9 col-xs-9">
                                <input type="text" class="form-control" id="user_E812_status">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="input-group radioBtns">
                                <div id="radioBtn" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E813_radioStatus" title="Start with.." data-title="S">S</a>
                                    <a class="btn btn-primary btn-sm active" data-toggle="user_E813_radioStatus" title="Contains.." data-title="C">C</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E813_radioStatus" title="Finish with.." data-title="F">F</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E813_radioStatus" title="Whole word" data-title="W">W</a>
                                </div>
                                <input type="hidden" name="user_E813_radioStatus" id="user_E813_radioStatus" value="C">
                                <div id="radioBtn2" class="btn-group">
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="user_E814_radioStatus2" title="Match case" data-title="A" value="A">Aa</a>
                                </div>
                                <input type="hidden" name="user_E814_radioStatus2" id="user_E814_radioStatus2" value="a">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12" style="text-align:center;">
                            <button type="button" id="B114_btn_filter" class="btn btn-primary btn-sm">Filter</button>
                            <button type="button" id="B115_btn_reset" class="btn btn-default btn-sm">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <form id="F110_gen_form" name="myForm" method="post" action="" onSubmit="" enctype = text/plain  >
            <div class="table-responsive">
                <table
                id="table1"
                data-order="[]"
                data-columnDefs='[{"targets":[0],"orderable":false}]'
                data-columnFilter='{"aoColumns": [ null, {"type": "text"}, {"type": "text"} ]}'
                data-columnFilter-select2="true"
                class="table table-striped table-sorted table-hover table-bordered table-columnfilter datatable">

               <thead class="table-head-alt">
                   <tr>
                     <th id="filterCheck">
                         <label class="control1 control-checkbox1">
                             &nbsp;
                             <input id="C111_gen_master_checkbox" type="checkbox" name="C111_gen_master_checkbox" class="checkbox"/>
                             <div class="control_indicator1"></div>
                         </label>
                     </th>
                     <th class="col-lg-2 col-md-2 col-sm-1 col-xs-1">Email</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Employee ID</th>
                     <th>Status</th>
                   </tr>
               </thead>

                 <tbody>
                 </tbody>

             </table>
            </div>
         </form>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            var oTable;

            /* DATATABLE-------------------------------------------*/
                oTable = $('#table1').DataTable({

					//"sDom": '<"top"i>rt<"bottom"flp><"clear">',
                    //"bAutoWidth": false,
                    //"dom": '<Bpl><rt><ip>',

                    /* To change the appearance of the NAV BUTTONs */
                    /*"pagingType": "full_numbers",*/
                    /*"pagingType": "full",*/
                    //"pagingType": "input",

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.

                    /* To order the list taking into account the first column*/
                    /*
                    "order": [[ 0, "asc" ]],
                    */
                    /* To disable the initial sortering (the table is not sorted initially) */
                    "order": [],
                    /*Another way: "aaSorting": [ ],*/


                    // Load data for the table's content from an Ajax source
                    "ajax": {
                            "url": "ajax.php",
                            "type": "POST",
                            "data": function ( data ) {
                                data.email = $('#user_E800_email').val();
                                data.first_name = $('#user_E803_first_name').val();
                                data.last_name = $('#user_E806_last_name').val();
                                data.employee_id = $('#user_E809_employee_id').val();
                                data.status = $('#user_E812_status').val();
                                data.radioEmail = $('#user_E801_radioEmail').val();
                                data.radioFirstname = $('#user_E804_radioFirstname').val();
                                data.radioLastname = $('#user_E807_radioLastname').val();
                                data.radioEmployee_id = $('#user_E810_radioEmployee_id').val();
                                data.radioStatus = $('#user_E813_radioStatus').val();
                                data.radioEmail2 = $('#user_E802_radioEmail2').val();
                                data.radioFirstname2 = $('#user_E805_radioFirstname2').val();
                                data.radioLastname2 = $('#user_E808_radioLastname2').val();
                                data.radioEmployee_id2 = $('#user_E811_radioEmployee_id2').val();
                                data.radioStatus2 = $('#user_E814_radioStatus2').val();
                            }           
                        },

                    /* Disable column SORT (No sort icon on the affected column)*/

                    "aoColumnDefs": [
                                        { 
                                            'bSortable': false,
                                            'aTargets': [ 0 ],
                                            "render": function ( data, type, row, meta ) {
                                                return '<label class="control control-checkbox"> &nbsp;<input id="'+data+'" type="checkbox" name="C112_gen_checkbox" value="'+data+'" class="checkbox"/><div class="control_indicator"></div></label>';
                                            }
                                        }
                                   ],

                    /* To set the initial value to 50 */
                    "iDisplayLength": 10,

                    /* To change the values displayed in the DIAPLAYLENGHT*/
                    "oLanguage": {
                        "sLengthMenu": 'Display <select>'+
                                           '<option value="10">10</option>'+
                                           '<option value="25">25</option>'+
                                           '<option value="50">50</option>'+
                                           '<option value="100">100</option>'+
                                           '<option value="500">500</option>'+
                                           '<option value="1000">1000</option>'+
                                           '<option value="-1">All</option>'+
                                        '</select> records'
                    },

                    //buttons: []

                });

                //------------------------------------------------
           
            $('#B114_btn_filter').click(function(){ //button filter event click
                $('#B114_btn_filter').blur();
                oTable.ajax.reload();  //just reload table
            });
            $('#B115_btn_reset').click(function(){ //button reset event click
                $('#B115_btn_reset').blur();
                $('#form-filter')[0].reset();
                oTable.ajax.reload();  //just reload table
            });
	
        }); 
        
        $('#radioBtn a').tooltip();
    
    $('#radioBtn a').on('click', function(){
        var sel = $(this).data('title');
        console.log(sel);
        var tog = $(this).data('toggle');
        console.log(tog);
        $('#'+tog).prop('value', sel);

        $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
        $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
    });
    
    $('#radioBtn2 a').tooltip();
    
    $('#radioBtn2 a').on('click', function(){
        var sel = $(this).data('title');
        var tog = $(this).data('toggle');

        if($('#'+tog).attr("value")==="a"){
            $('#'+tog).attr("value", "A");
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
        }else{
            $('#'+tog).attr("value", "a");
            $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('active').addClass('notActive');
        }
    })
    </script>
    
</html>