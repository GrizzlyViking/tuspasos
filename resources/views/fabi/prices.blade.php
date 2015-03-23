@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            prices
        </div>
    </div>

    <div class="row">
        <table>
            <tr>
                <td colspan="3">Individual Treatments</td>
            </tr>
            <tr>
                <td>Foot Reflexology</td><td>1hr.</td><td>£ 35</td>
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
                <td>Taster sessions</td><td>&nbsp;</td><td>£ 5</td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="3">Combined Treatments</td>
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
        </table>
    </div>

    <div class="row">
        <div class="col-sm-9">
            <p><b>Treatment Package</b><br><br>

            Pay for 5 treatments in advance and have 1 treatment free (not applicable with
            already discounted treatments).</p>

            <p><b>Gift Vouchers Available</b></p>

            <p><b>Payments can be made via cash, cheque, debit and credit cards.</b></p>

            <div class="panel panel-default" style="background-color: lightgray;">
                <div class="panel-body">
                    Medical Insurance: You may have a Medical Health Cash Plan and be able to reclaim all or part of the cost
                    of your treatment.<br><br>

                    Bupa | Paycare | Medicash | Simplyhealth | Sovereign | Westfield Health
                </div>
            </div>
        </div>
    </div>
@stop