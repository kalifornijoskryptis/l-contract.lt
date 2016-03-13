<table width="100%" style="min-height: 500px;" border="0" cellspacing="0" cellpadding="20" background="http://l-contract.uran.tk/assets/img/bg.png">
    <tr style="vertical-align: top; text-align: center;">
        <td>
            <a href="http://l-contract.uran.tk/" target="_blank"><img style="margin-bottom: 40px;" src="http://l-contract.uran.tk/assets/img/logo.png"></a>
            <h3 style="font-family: Arial, sans-serif;">Your profile has been updated</h3>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 14px;">Your profile has been successfully updated.</p>
            <p style="font-family: Arial, sans-serif; color: #e31a27; font-size: 14px;">New login: <b>{{$email}}</b></p>
            @if ($pass) 
                <p style="font-family: Arial, sans-serif; color: #e31a27; font-size: 14px;">New password: <b>{{$pass}}</b></p>
            @endif
            <a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;" href="{{$link}}">Click here to login</a>
        </td>
    </tr>
    <tr style="vertical-align: bottom; text-align: center;">
        <td>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;">Best regards, L-Contract TEAM</p>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;"><i>Please do not reply on this e-mail</i></p>
        </td>
    </tr>
</table>
