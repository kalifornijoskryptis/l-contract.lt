<table width="100%" style="min-height: 500px;" border="0" cellspacing="0" cellpadding="20" background="http://l-contract.uran.tk/assets/img/bg.png">
    <tr style="vertical-align: top; text-align: center;">
        <td>
            <a href="http://l-contract.uran.tk/" target="_blank"><img style="margin-bottom: 40px;" src="http://l-contract.uran.tk/assets/img/logo.png"></a>
            <h3 style="font-family: Arial, sans-serif;">Customer has updated the contest</h3>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 14px;">Customer (company <a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;" href="_CUSTOMER_URL"><b>_CUSTOMER_NAME</b></a>) with concurs for <b>_CARGO_DESCRIPTION</b> delivery from dates <b>_LOADING_DATES_FROM - _LOADING_DATES_TILL</b> (loading place: <b>_LOADING_COUNTRY, _LOADING_CITY</b>) till dates <b>_DELIVERY_DATES_FROM - _DELIVERY_DATES_TILL</b> (delivery place: <b>_DELIVERY_COUNTRY, _DELIVERY_CITY</b>) has updated the contest.<br/><br/>You can check the changes by the link below.</p>
            <a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;" href="{{ route('onetime.contest.view', ['id' => $id]) }}">Click here to view concurs</a>
        </td>
    </tr>
    <tr style="vertical-align: bottom; text-align: center;">
        <td>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;">Best regards, L-Contract TEAM</p>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 12px;"><i>Please do not reply on this e-mail</i></p>
        </td>
    </tr>
</table>

<!-- 
NOTES: 
_CUSTOMER_URL - output customer URL
_CUSTOMER_NAME - output customer name
_CARGO_DESCRIPTION - output cargo description
_DELIVERY_COUNTRY, _DELIVERY_CITY _DELIVERY_DATE_FROM - _DELIVERY_DATE_TILL - output delivery dates and place
_LOADING_COUNTRY, _LOADING_CITY _LOADING_DATE_FROM - _LOADING_DATE_TILL - output loading dates and place
-->