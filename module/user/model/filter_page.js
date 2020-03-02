$(document).ready(function () {
    var url = "module/user/controller/controller_user.php?op=datatable";  
    // prepare the data
    var source =
    {
        dataType: "json",
        dataFields: [
            { name: 'name', type: 'string' },
            { name: 'pegi', type: 'string' },
            { name: 'edition', type: 'string' },
            { name: 'languages', type: 'string' }
        ],
        id: 'id',
        url: url
    };
    
    var dataAdapter = new $.jqx.dataAdapter(source);
    if ($("#dataTable").length !=0) {
        $("#dataTable").jqxDataTable(
            {
                width: getWidth("dataTable"),
                pageable: true,
                pagerButtonsCount: 10,
                source: dataAdapter,
                sortable: true,
                pageable: true,
                altRows: true,
                filterable: true,
                columnsResize: true,
                pagerMode: 'advanced',
                columns: [
                  { text: 'Name', dataField: 'name'},
                  { text: 'Pegi', dataField: 'pegi' },
                  { text: 'Edition', dataField: 'edition'},
                  { text: 'Languages', dataField: 'languages' }
              ]
            }
        );  
    }
});