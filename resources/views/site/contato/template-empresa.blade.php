<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; line-height:20px; font-size:14px; color:#313131; text-align:justify;">
    <tbody cellpadding="10">
        <tr>
            <th height="146" colspan="2" style="text-align: center" scope="col"><img src="https://centroesotericodonamorgana.com.br/images/logo-h.png" width="245" height="130" alt=""/></th>
        </tr>
        <tr>
            <td>
				<table width="100%"  cellspacing="0" cellpadding="20">
					<tbody>
						<tr>
							<td  colspan="2" style="color: #FFF; font-size: 18px; background-color: #fff">SOLICITÃO DE CONTATO PELO SITE</td>
						</tr>

						<tr>
							<td width="54%" >
								<span style="font-weight: bolder">Nome:</span><br/>
								<span>{{ $dados->nomeContato}}</span>
							</td>
							<td width="54%">
								<span style="font-weight: bolder">Telefone:</span><br/>
								<span>{{ $dados->telContato}}</span>
							</td>
						</tr>


						<tr>
							<td width="54%">
								<span style="font-weight: bolder">E-mail:</span><br/>
								<span>{{ $dados->emailContato }}</span>
							</td>

							<td width="54%">
								<span style="font-weight: bolder">Assunto:</span><br/>
								<span>{{  $dados->assuntoContato }}</span>
							</td>
						</tr>

						<tr>
							<td colspan="2">
								<span style="font-weight: bolder">Mensagem:</span><br/>
								<span>{{  $dados->mensagemContato }}</span>
							</td>
						</tr>

						<tr>
							<td colspan="2" style="color: #777; text-align: center;">
                                <p>Centroe soterico Dona Morgana.com.br<br/>Tv. Antônio Baena, 70 - Pedreira, Belém - PA, 66087-082 </p>
							</td>
						</tr>
					</tbody>
            	</table>
            </td>
        </tr>
    </tbody>
</table>
