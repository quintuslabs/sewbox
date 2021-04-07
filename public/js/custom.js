$('#edit_category').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('name') // Extract info from data-* attributes
  var id = button.data('id') // Extract info from data-* attributes
 
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #id').val(id)
})

$('#edit_expense_type').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var expense_type = button.data('expense_type') // Extract info from data-* attributes
  var id = button.data('id') // Extract info from data-* attributes
  //console.log(expense_type);
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body #expense_type').val(expense_type)
  modal.find('.modal-body #id').val(id)
})
$('#edit_raw_material').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var material_name = button.data('material_name') // Extract info from data-* attributes
  var id = button.data('id') // Extract info from data-* attributes
  //console.log(material_name);
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body #material_name').val(material_name)
  modal.find('.modal-body #id').val(id)
})
