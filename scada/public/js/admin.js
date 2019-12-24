$(document).ready(function() {
    $( '#tasksData' ).DataTable( {
        "order": [
            [ 2, "desc" ]
        ]
    } );
});
function add_task() {
    $('#add_task').modal('show');
}
