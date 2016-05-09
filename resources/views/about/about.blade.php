
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{!! Html::style('main.css') !!}

{!! Form::open(array('route' => 'About', 'class' => 'form')) !!}

<div class="form-group">
    <label class="section-left"> Name <span class="required">*</span></label>    
    <label class="section-right">&nbsp;</label>    
</div>
<div class="form-group">   
    {!! Form::text('name', null,
        array('placeholder'=>'First Name','class'=>'section-left')) !!}
        {!! Form::text('name', null, 
        array('placeholder'=>'Last Name','class'=>'section-right')) !!}
</div>
<div class="form-group">
    <label class="section-left">Date of Birth <span class="required">*</span></label>
    <label class="section-right">Gender</label>
</div>
<div class="form-group">
    <div class="section-left">    
    {!! Form::selectRange('number',1,31)!!}
    {!! Form::selectMonth('month')!!}
    {!! Form::selectYear('year',1900,3000)!!}    
    </div>
    <div class="section-right">
        {!! Form::radio('gender','Male',false,array('id'=>'male'))!!} <span class="text-bebas" id='male'>Male</span>
        {!! Form::radio('gender','Female',false,array('id'=>'female'))!!} <span class="text-bebas" id='female'>Female</span>
    </div>
</div>
<div class="form-group">
    <label class="section-left">Email <span class="required">*</span></label>
    <label class="section-right">&nbsp</label>
</div>
<div class="form-group">
    {!! Form::email('email address',null,['class'=>'section-left'])!!}
</div>
<div class="form-group">
    <label class="section-left">Mobile Number <span class="required">*</span></label>
    <label class="section-right">Other Number</label>    
</div>
<div class="form-group">
    {!! Form::text('',null,array('class'=>'section-left'))!!}
    {!! Form::text('',null,array('class'=>'section-right'))!!}
</div>

<div class="form-group">
    <label class="section-left">Residing Address <span class="required">*</span></label>
    <label class="section-right">&nbsp;</label>    
</div>
<div class="form-group">
{!! Form::text('',null,array('class'=>'section-left'))!!}
{!! Form::text('',null,array('class'=>'section-right'))!!}
</div>
<div class="form-group">
    <label class="section-left">City <span class="required">*</span></label>
    <label class="section-right">Postal Code</label> 
</div>
<div class="form-group">
{!! Form::text('',null,array('class'=>'section-left'))!!}
{!! Form::text('',null,array('class'=>'section-right'))!!}
</div>
<div class="form-group">
    <label class="section-left">Country <span class="required">*</span></label>
    <label class="section-right">State/Region</label>
</div>
<div class="form-group">
{!! Form::text('',null,array('class'=>'section-left'))!!}
{!! Form::text('',null,array('class'=>'section-right'))!!}
</div>
<div class="form-group">
    <label class="section-left">Nationality <span class="required">*</span></label>
    <label class="section-right">Permanent Resident</label>
</div>
<div class="form-group">
{!! Form::text('',null,array('class'=>'section-left'))!!}
{!! Form::text('',null,array('class'=>'section-right'))!!}
</div>
<div class="form-group">
{!! Form::label('Identification') !!}
{!! Form::text('')!!}

{!! Form::label('identifications No') !!}
{!! Form::text('')!!}
</div>
<div class="form-group">
{!! Form::Submit('SAVE')!!}
{!! Form::Submit('CANCEL')!!}
</div>

{!! Form::close() !!}