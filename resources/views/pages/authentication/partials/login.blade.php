{!! Form::open(['route' =>  ['login.user'] , 'role'   =>  'form']) !!}

<div class="container">

    <div class="row">
        {{ csrf_field() }}
        <div class="col-md-offset-3">

            <div class="row">
                <div class="col-md-7">
                    <div class="container">
                        {!! Form::label('Email') !!}
                        <br/>   
                        {!! Form::text('email' , null , ['class'    =>  '']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="container">
                        {!! Form::label('Password') !!}
                        <br/>
                        {!! Form::password('password' , null , ['class'    =>  '']) !!}
                    </div>
                </div>
            </div>

            <br/>

            <div class="row">
                <div class="col-md-1">
                    <div class="container">
                        {!! Form::submit('Login' , ['class' =>  'btn btn-primary']) !!}
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="container">
                        <div class="btn btn-danger">Cancel</div>
                    </div>
                </div>
            </div>

        </div>


    </div>


</div>

{!! Form::close() !!}