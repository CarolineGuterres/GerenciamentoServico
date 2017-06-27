<?php

//echo "<pre>",print_r($_GET);

$border_color   = "#791679";
$project_name   = "Caroline";
$project_email  = "site@email.com";
$suport_email   = "carolguterres.silva@gmail.com";


if(isset($_GET['email'])){
  $user_email = trim($_GET['email']);
// echo "<pre>",print_r($_GET);
  ob_start();
?>

<html>
	  <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;line-height:100%!important;margin:0;padding:0;width:100%!important">
			<tbody>
			<tr>
				<td>
					<table style="border-collapse:collapse;margin:auto;max-width:600px;min-width:320px">
						<tbody>
							<tr>
								<td height="20" valign="top">
									<div style="min-height:20px;overflow:hidden">
										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#c0c0c0;font-family:&#39;Helvetica Neue&#39;,Arial,sans-serif;font-size:13px;line-height:26px;margin:0 auto 26px;width:100%"></table>
								</td>
							</tr>
							<tr>
								<td style="padding:0 20px" valign="top">
									<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-radius:3px;color:#545454;font-family:&#39;Helvetica Neue&#39;,Arial,sans-serif;font-size:13px;line-height:20px;margin:0 auto;width:100%">
										<tbody>
											<tr>
												<td valign="top">
													<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;border-radius:3px 3px 0 0;border:1px solid <?= $border_color ?>;font-size:1px;height:3px;line-height:3px;width:100%">
														<tbody>
															<tr>
																<td bgcolor="<?= $border_color ?>" style="background:<?= $border_color ?>;border-top-color:<?= $border_color ?>;border-top-style:solid;border-top-width:1px;font-family:&#39;Helvetica Neue&#39;,Arial,sans-serif" valign="top">
																	&nbsp;
																</td>
															</tr>
														</tbody>
													</table>
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;border-color:<? $bg_color ?>;border-radius:0 0 3px 3px;border-style:solid;border-width:0 1px 1px;width:100%">
                              <tbody>
                                <tr>
                                  <td style="border-radius:0 0 3px 3px;color:#545454;font-family:&#39;Helvetica Neue&#39;,Arial,sans-serif;font-size:13px;line-height:20px;overflow:hidden;padding:3px 30px 15px">
                                    <h1 style="margin:20px 0; text-align: center;">
                                        <strong> Avaliação de Serviço</strong>
                                    </h1>
                                   
                                    <p style="margin:20px 0">
                                      <strong>EMAIL:</strong> <?= $user_email  ?>
                                    </p>
                                    <p style="margin:20px 0">
                                      <strong>MENSAGEM</strong></br> Olá caríssimo(a),
                                       Por gentileza, solicitamos que realize avaliação do serviço de <?= trim($_GET['nomeCategoria']) ?> realizado pelo fornecedor <?= trim($_GET['nomeUsuarioForn'])?> 
                                        Realize Login no sistema, e no botão "MEUS INTERESSES", disponibilizado a opção de "AVALIAÇÃO".

                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#545454;font-family:&#39;Helvetica Neue&#39;,Arial,sans-serif;font-size:13px;line-height:20px;margin:0 auto;max-width:100%;width:100%">
                              <tbody>
                                <tr>
                                  <td align="center" style="overflow:hidden;padding:15px 0px" valign="top">
                                    <p style="text-align:center;font-size: 18px;"></p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
    </table>
  </body>
</html>
<?php
    $html = ob_get_contents();
    ob_end_clean();
    include_once "swift/swift_required.php";
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername('carolguterres.silva@gmail.com');
    $transport->setPassword('100206caroline');
    $swift = Swift_Mailer::newInstance($transport);
    $message = new Swift_Message("Avaliação servico"." <".$user_email.">");
    $message->setFrom( array($project_email) );
    $message->setTo  ( array($project_email, $suport_email) );
    $message->setBody( $html, 'text/html');
    $message->setReplyTo($user_email);

    if ($recipients = $swift->send($message, $failures))
       echo "ok";
    else
     echo "<script> console.log('send-php-error:print_r($failures);');</script>";
  }


  else
    echo "EMAIL INVALIDO\n";

  echo "<script> window.alert('Servico finalizado');</script>";
  echo"<script> self.location='../view/finalizarServico.php' ;</script>";
?>
