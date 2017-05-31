 <script>
							$(function() {
								$("#data").datepicker({
									dateFormat: 'yy/dd/mm',
									dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
									dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
									dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
									monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
									monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
								});
							});

							$(function formataDouble(obj) {
						var expressao = /^([0-9]+)(\.([0-9]+)?)?$/;
						if(!expressao.test(obj.value)) {
								if(obj.value.indexOf(".") > 0) {
										var value = obj.value.split(".");
										obj.value = value[0] + "." + value[1];
	                }
	        }
})
                    </script>