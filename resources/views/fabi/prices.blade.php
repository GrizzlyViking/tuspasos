@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            prices
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9"><table>
            <tr>
                <td colspan="3" style="padding-bottom: 10px;"><b>Individual Treatments</b></td>
            </tr>
            <tr>
                <td style="min-width: 200px;">Foot Reflexology</td><td style="min-width: 150px;">1hr.</td><td>£ 35</td>
            </tr>
            <tr>
                <td>Hand Reflexology</td><td>50 mins.</td><td>£ 25</td>
            </tr>
            <tr>
                <td>Facial Reflexology </td><td>1hr.</td><td>£ 30</td>
            </tr>
            <tr>
                <td>Facial Reflexology</td><td>30 mins.</td><td>£ 15</td>
            </tr>
            <tr>
                <td>Lymph Drainage</td><td>1hr.</td><td>£ 35</td>
            </tr>
            <tr>
                <td>Taster sessions</td><td>&nbsp;</td><td>£ 5</td>
            </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td colspan="3"  style="padding-bottom: 10px;"><b>Combined Treatments</b></td>
            </tr>
            <tr>
                <td>Foot & Hand Reflexology</td><td>1hr 50</td><td>£ 45</td>
            </tr>
            <tr>
                <td>Foot & Facial Reflexology</td><td>2 hr</td><td>£ 60</td>
            </tr>
            <tr>
                <td>Facial & Hand Reflexology</td><td>1hr. 50</td><td>£ 45</td>
            </tr>
        </table></div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-sm-9">
            <p><b style="padding-bottom: 20px;">Treatment Package</b><br>

            Pay for 5 treatments in advance and have 1 treatment free (not applicable with
            already discounted treatments).</p>

            <p><b>Gift Vouchers Available</b></p>

            <p><b>Payments can be made via cash, cheque, debit and credit cards.</b></p>

            <div class="panel panel-default" style="background-color: #f8f8f8;">
                <div class="panel-body">
                    Medical Insurance: You may have a Medical Health Cash Plan and be able to reclaim all or part of the cost
                    of your treatment.<br><br>

                    Bupa | Paycare | Medicash | Simplyhealth | Sovereign | Westfield Health
                </div>
            </div>
        </div>
    </div>
@stop