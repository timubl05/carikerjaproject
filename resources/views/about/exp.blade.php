<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{!! Html::style('main.css') !!}
{!! Form::open(array('route' => 'About', 'class' => 'form')) !!}

<div class="form-group">
    <label class="section-label"> Position Title <span class="required">*</span> </label>
    {!! Form::text('pos_title', null,
        array('placeholder'=>'Position Title','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <label class="section-label"> Company Name <span class="required">*</span> </label>
    {!! Form::text('comp_name', null,
        array('placeholder'=>'Company Name','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <div  class="section-label">
    <label> Join Duration <span class="required">*</span> </label>
    </div>
    <div  class="section-input">
        {!! Form::selectYear('year',1900,3000)!!}
        {!! Form::selectMonth('month')!!}
    </div>    
</div>
<div class="form-group">
    <label class="section-label">&nbsp;</label>
    <label class="section-input">To</label>
</div>
<div class="form-group">
    <div  class="section-label">
        <label> &nbsp;</label>
    </div>
    <div  class="section-input">
        {!! Form::selectYear('year',1900,3000)!!}
        {!! Form::selectMonth('month')!!}
        {!! Form::checkbox('present','yes')!!}<span class="text-bebas">Present</span>
    </div>
</div>
<div class="form-group">
    <label class="section-label"> Specialization <span class="required">*</span> </label>
    {!! Form::text('specialization', null,
        array('placeholder'=>'specialization','class'=>'text-width','class'=>'section-input')) !!}     
</div>

<div class="form-group">
    <label class="section-label"> Role <span class="required">*</span> </label>
    {!! Form::text('role', null,
        array('placeholder'=>'role','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <label class="section-label"> Country <span class="required">*</span> </label>
    {!! Form::text('country', null,
        array('placeholder'=>'Country','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <label class="section-label"> State <span class="required">*</span> </label>
    {!! Form::text('state', null,
        array('placeholder'=>'State','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <label class="section-label"> Industry <span class="required">*</span> </label>
    {!! Form::text('industry', null,
        array('placeholder'=>'industry','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <label class="section-label"> Position Level <span class="required">*</span> </label>
    {!! Form::text('pos_lvl', null,
        array('placeholder'=>'Position Level','class'=>'text-width','class'=>'section-input')) !!}     
</div>
<div class="form-group">
    <div  class="section-label">
    <label> Monthly Salary  </label>
    </div>
    <div  class="section-input">
        {!! Form::select('currency',[
        'IDR'=>'IDR','USD'=>'USD'])!!}
        {!! Form::text('sal_value', null,
        array('placeholder'=>'0')) !!}
    </div>    
</div>
<div class="form-group">
    <label class="section-label"> Experiance Description <span class="required">*</span> </label>
    {!! Form::textarea('exp_desc', null,['size'=>'30x10','class'=>'section-input']) !!}     
</div>
{!! Form::close() !!}