@extends('auditwise_theme.layouts.default')

@section('content')
    <div id="google_maps_container">
        <iframe id="google_map" src="//www.google.com/maps/embed/v1/place?q=Auditwise,Nicosia,%20CY&zoom=16&key=AIzaSyB165ZXH0MizYqAzFNGqle5WwnfJ6WBx_g"></iframe>
        <div id="contact_header"><h1>Contact Us</h1></div>
        <div id="contact_header_sm"><h1>Contact Us</h1></div>
    </div>
    <form>
        <div id="contact_page_form_container">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="row">
                        <div class="form-group">
                            <label for="name" class="sr-only">name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="email" class="sr-only">email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group phone_input">
                            <label for="phone" class="sr-only">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 textarea_container">
                    <label for="comment" class="sr-only">Comment:</label>
                    <textarea class="form-control" id="comment"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
@stop
