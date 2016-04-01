{!! Form::open(['route'  =>  ['auth.register']  ,   'role'  =>  'form']) !!}

    <div class="container">
        
        <div class="row">
            {!! Form::hidden('active' , 1 ,['class'  =>   'form-control']) !!}
            
            <div class="col-md-4">
                &nbsp{!! Form::label('Name') !!}
                {!! Form::text('name' , null , ['class' =>  'form-control']) !!}
            </div>

            <div class="col-md-4">
                &nbsp{!! Form::label('Email') !!}
                {!! Form::text('email' , null , ['class' =>  'form-control']) !!}
            </div>

        </div>

        <br/>
        
        <div class="row">

            <div class="col-md-2">
                &nbsp{!! Form::label('Password') !!}
                <br/>
                {!! Form::password('password' , null , ['class' =>  'form-control']) !!}
            </div>

            <div class="col-md-4">
                &nbsp{!! Form::label('Password Confirmation') !!}
                <br/>
                {!! Form::password('password_confirmation' , null , ['class' =>  'form-control']) !!}
            </div>

        </div>

        <br/>

        <div class="row">
            <div class="container">
                {!! Form::submit('Register now' , ['class'  =>  'btn btn-primary']) !!}
            </div>
        </div>

    </div>

{!! Form::close() !!}