@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            about
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p><span class="turquoise">Tus Pasos Reflexology</span> was established by Fabiana Vogt with the aim to provide high standard
            clinical reflexology treatments in Andover and Wilton.</p>

            <p>Fabiana has had a long standing interest in complementary and holistic therapies and first
            became aware of reflexology many years ago when she discovered for herself its benefits and
            how therapeutic it can be.</p>

            <p>She holds the ABC level 3 Diploma in reflexology, which includes anatomy, physiology and
            pathology and trained at the London School of Reflexology with Louise Keet, Britain's
            leading reflexology practitioner. In order to provide the highest clinical practice standard,
            Fabiana continues training in different areas within Reflexology.</p>

            <p>Fabiana is a full member of the Association of Reflexologists (AoR), governed by their ethics
            and code of practice and Complementary & Natural Healthcare Council (CNHC). She is also
            trained in First Aid for Appointed Persons and holds a full professional
            indemnity insurance.</p>


            <ul>
                <li>ABC Level 3 diploma in Reflexology</li>
                <li>ABC Level 3 certificate in Anatomy, Physiology and Pathology for Complementary
                    Therapies
                </li>
                <li>Reflexology Lymph Drainage (RLD)</li>
                <li>Advanced Hand Reflexology diploma</li>
                <li>Diploma in Facial Reflexology</li>
                <li>Advanced Reflexology Technique (ART)</li>
            </ul>
        </div>
        <div class="col-sm-5">
            <div class="row" style="padding: 25px;">{!! HTML::image('images/Fabi.jpg', 'picture of Fabi', ['class' => 'img-responsive']) !!}</div>
            <div class="row" style="padding: 10px;">
                <div class="col-sm-3 col-sm-offset-2">
                    {!! HTML::image('images/member-reflex.png', 'Member of reflexology Association', ['class' => 'img-responsive']) !!}
                </div>
                <div class="col-sm-4">
                    {!! HTML::image('images/CNHC_Quality_Mark.jpg', 'CNHC Quality Mark', ['class' => 'img-responsive']) !!}
                </div>
            </div>
        </div>
    </div>
@stop