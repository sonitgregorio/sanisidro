
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/datatables.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#dataTable').DataTable();
		$('#add_branch').click(function(){
			// alert('x');
			$('.show_modal').modal('show');




		});
		$('.edit_emp').click(function(){
				var pid = $(this).data('param');
				$.post('/user/get_user_specific', {pid: pid}, function(data){
					var users = JSON.parse(data);

					$('input[name=firstname]').val(users.firstname);
	                $('input[name=lastname]').val(users.lastname);
	                $('input[name=address]').val(users.address);
	                $('input[name=contact]').val(users.contact);
	                $('input[name=email_add]').val(users.email);
	                $('#pos').val(users.position).change();
	                $('input[name=pid]').val(users.id);
	                $('input[name=username]').val(users.username);
	                $('input[name=password]').val(users.password);
	                $('input[name=cpassword]').val(users.password);
	                $('.creds').css('display', 'none');
				});
			})
	});
</script>
<script type="text/javascript">
	$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
</script>
</body>

