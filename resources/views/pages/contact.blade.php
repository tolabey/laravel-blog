@extends('main')

@section('title', '| Contact')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact ME!</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email", class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject</label>
                    <input id="email" name="email", class="form-control">
                </div>

                <div class="form-group">
                    <label name=message>Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection

@section('sidebar')
@endsection