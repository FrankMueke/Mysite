@extends('main')
@section('title', '|Contact Us')
@section('content')
    

          <div class="row">
              <div class="col-md-12">
                  <h1>Contact Us</h1>
                  <hr>
                  <form action="">
                      <div class="form-group">
                          <label name="email">Email:</label>
                          <input name="email" type="email" id="email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input name="subject" type="text" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea name="message" id="message" class="form-control">Type Your Message Here...</textarea>
                    </div>
                    <input type="submit" value="Send Message" class="btn btn-success">
                  </form>
             </div>
          </div>
@endsection     