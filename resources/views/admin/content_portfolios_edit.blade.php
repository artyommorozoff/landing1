<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('portfolioEdit', array('portfolio'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('name','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name',$data['name'],['class'=>'form-control','placeholder'=>'Введите название портфолио']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('name','Фильтр:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('filter',$data['filter'],['class'=>'form-control','placeholder'=>'Введите название фильтра']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('old_images','Изображение',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-offset-2 col-xs-10">
            {!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
            {!! Form::hidden('old_images', $data['images']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images','Изображение',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images',['class'=>'filestyle','data-placeholder'=>'Файла нет','data-buttonName'=>'btn btn-primary','data-btnClass'=>'btn btn-primary','data-text'=>'Выбрать изображение']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить',['class'=>'btn btn-primary', 'type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}

</div>
