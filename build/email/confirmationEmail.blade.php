<table width="100%" style="min-height: 500px;" border="0" cellspacing="0" cellpadding="20" background="http://l-contract.uran.tk/assets/img/bg.png">
    <tr style="vertical-align: top; text-align: center;">
        <td>
            <a href="http://l-contract.uran.tk/" target="_blank"><img style="margin-bottom: 40px;" src="http://l-contract.uran.tk/assets/img/logo.png"></a>
            <h3 style="font-family: Arial, sans-serif;">Please confirm your email address</h3>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 14px;">To change email address to this one please confirm it using the link below.</p>
            <a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;" href="{{ route('email.confirmEmail', ['token' => $token->token]) }}">Click here to change email for your account</a>
        </td>
    </tr>
    <tr style="vertical-align: bottom; text-align: center;">
        <td>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;">Best regards, L-Contract TEAM</p>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;"><i>Please do not reply on this e-mail</i></p>
        </td>
    </tr>
</table>
