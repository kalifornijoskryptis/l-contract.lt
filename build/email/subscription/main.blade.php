<table width="100%" style="min-height: 500px;" border="0" cellspacing="0" cellpadding="20" background="http://l-contract.uran.tk/assets/img/bg.png">
    <tr style="vertical-align: top; text-align: center;">
        <td>
            <a href="http://l-contract.uran.tk/" target="_blank"><img style="margin-bottom: 40px;" src="http://l-contract.uran.tk/assets/img/logo.png"></a>
            <h3 style="font-family: Arial, sans-serif;">New contests available</h3>
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 14px;">New contests are available for your company. Please look the list below.</p>
            
            @if ( count($onetime) > 0)
            <h4 style="font-family: Arial, sans-serif;">Onetime contests</h4>
            <table width="100%" style="text-align: center; font-family: Arial, sans-serif; color: #505050; font-size: 14px;">
                
              <tr style="color: #000000; background: #E2E2E2;">
                <th>Customer</th>
                <th>Cargo description</th>
                <th>Loading dates and place</th>
                <th>Delivery dates and place</th>
                <th>Valid till</th>
                <th>Offers</th>
              </tr>
              
              @foreach($onetime as $contest)
              <tr>
                <td><a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;"  href="_COMPANY_URL">{{$contest->company->name}}</a></td>
                <td>{{$contest->description}}</td>
                <td>_LOADING_COUNTRY, _LOADING_CITY _LOADING_DATE_FROM - _LOADING_DATE_TILL</td>
                <td>_DELIVERY_COUNTRY, _DELIVERY_CITY _DELIVERY_DATE_FROM - _DELIVERY_DATE_TILL</td>
                <td>_VALID_TILL</td>
                <td><a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;"  href="{{ 'http://l-contract.uran.tk/onetime-contest/view/'.$contest->id }}">Make an offer</a></td>
              </tr>
              @endforeach
                
            </table>
            @endif
            
            @if ( count($longterm) > 0)
            <h4 style="font-family: Arial, sans-serif;">Longterm contests</h4>
            <table width="100%" style="text-align: center; font-family: Arial, sans-serif; color: #505050; font-size: 14px;">
                
              <tr style="color: #000000; background: #E2E2E2;">
                <th>Customer</th>
                <th>Description</th>
                <th>Requirements</th>
                <th>Terms</th>
                <th>Valid till</th>
                <th>Offers</th>
              </tr>
              
              @foreach($longterm as $contest)
              <tr>
                <td><a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;"  href="_COMPANY_URL">{{$contest->company->name}}</a></td>
                <td>{{$contest->description}}</td>
                <td>_REQUIREMENTS</td>
                <td>_TERMS</td>
                <td>_VALID_TILL</td>
                <td><a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;"  href="{{ 'http://l-contract.uran.tk/contest/view/'.$contest->id }}">Make an offer</a></td>
              </tr>
              @endforeach
                
            </table>
            @endif
            
            <p style="font-family: Arial, sans-serif; color: #505050; font-size: 14px;">If you don't want to receive this emails anymore, you can unsubscribe by the link below.</b></p>
            <a style="font-family: Arial, sans-serif; color: #e31a27; text-decoration: underline;" href="http://l-contract.uran.tk/profile/unsubscribe/{{ $token }}">Click here to unsubscribe</a>
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
Remove direct links starts from http://l-contract.uran.tk -> replace by baseurl
_COMPANY_URL - output company URL here
_DELIVERY_COUNTRY, _DELIVERY_CITY _DELIVERY_DATE_FROM - _DELIVERY_DATE_TILL - output delivery dates and place
_LOADING_COUNTRY, _LOADING_CITY _LOADING_DATE_FROM - _LOADING_DATE_TILL - output loading dates and place
_REQUIREMENTS - output requirements
_TERMS - output terms
_VALID_TILL - output valid till
-->