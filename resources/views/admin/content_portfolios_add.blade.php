<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('portfolioAdd'), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('name','Название:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('name','Фильтр:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('filter',old('filter'),['class'=>'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
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
