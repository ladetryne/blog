@extends('main')

@section('title', '| Contact')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
                
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-fontrol">
                    </div>
                
                    <div class="form-group">
                        <label name="subject">Email:</label>
                        <input id="subject" name="subject" class="form-fontrol">
                    </div>
                               
                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" Message"message" Message="form-fontrol"></textarea> 
                    </div>
                
                    <input type="submit" value="Send Message">
                </form>


            </div>
        </div>
    

@endsection