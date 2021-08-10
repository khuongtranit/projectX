<h2>Thank you for using service !</h2>
<p>Tour name: <b>{{ $data['name'] }}</b></p>
<h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px; color: #02acea;">Booking detail</h3>
<table border="0" cellpadding="0" cellspacing="0" style="background: #f5f5f5; width: 100%">
    <thead>
        <tr bgcolor="#02acea" style="color: #fff; line-height: 14px">
            <th></th>
            <th align="left">Slot</th>
            <th align="right">Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left" valign="top">Adult</th>
            <td align="left" valign="top">{{ $data['adult_slot'] }}</td>
            <td align="right" valign="top">{{ $data['adult_price'] }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Youth</th>
            <td align="left" valign="top">{{ $data['youth_slot'] }}</td>
            <td align="right" valign="top">{{ $data['youth_price'] }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Child</th>
            <td align="left" valign="top">{{ $data['child_slot'] }}</td>
            <td align="right" valign="top">{{ $data['child_price'] }}</td>
        </tr>
        <tr>
            <th align="left" valign="top">Young child</th>
            <td align="left" valign="top">{{ $data['young_child_slot'] }}</td>
            <td align="right" valign="top">{{ $data['young_child_price'] }}</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th align="right">Total</th>
            <td align="left">
                {{ $data['adult_slot'] + $data['youth_slot'] + $data['child_slot'] + $data['young_child_slot'] }}
            </td>
            <td align="right">
                {{ $data['adult_price'] + $data['youth_price'] + $data['child_price'] + $data['young_child_price'] }}
            </td>
        </tr>
    </tfoot>
</table>
<h4>Thank you again !</h4>
<p style="right: 0">chen logo - align right</p>
