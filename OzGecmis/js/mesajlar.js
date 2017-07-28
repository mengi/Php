/**
 * 
 */
$(document).ready(function(){
			$('#registerHere input').hover(function()
			{
			$(this).popover('show')
		});
			$("#registerHere").validate({
				
				// Kurallar� burda tan�mla input text name ile
				// Alan doldurulmas� zorunlu bir alan m�?
				rules:{
					name:"required",
					user_email:{
							required:true,
							email: true
						},
					dogumtarihi:"required",
					secim01:"required"
			
				},
				
				//  Hatal� bilgi girildi�inde verilecek hata mesajlar�
				messages:{
					name:"Ad giriniz",
					user_email:{
						required:"E-mail giriniz",
						email:"Ge�ersiz e-mail adresi"
					},
					dogumtarihi:"G�n/Ay/Y�l �eklinde giriniz",
					secim01:"S�f�r ka�"
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.control-group').addClass('error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.control-group').removeClass('error');
					$(element).parents('.control-group').addClass('success');
				}
			});
		
		});
