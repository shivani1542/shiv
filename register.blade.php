@extends('common.app')
@section('content')


    <h2>Registration Form</h2>

    <form action="/user/register" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
       name: <input type="text" name="name"> <br>  
        uname: <input type="text" name="uname"><br> 
password:<input type="password" name="password"><br>
        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">

    </form>

@endsection