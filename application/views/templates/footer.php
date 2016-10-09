
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
	                $('input[name=pid]').val(users.id);
	                $('input[name=username]').val(users.username);
	                $('input[name=password]').val(users.password);
	                $('input[name=cpassword]').val(users.password);
	                $('.creds').css('display', 'none');
				});
			})
	});
</script>
</body>

