@extends('contact-us')

@section('title', 'Contact Us')
@if($page->indexed=='unchecked')
    <meta name="robots" content="noindex">
@endif
@section('content')
{!!$page->content!!}
 <div id="padding">
    <div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br /><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span style="font-size:13px; "><br /></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">info@bemoacademicconsulting.com</span></div><br />

    <form action="http://cdainterview.com/contact-us_files/mailer.php" method="post" enctype="multipart/form-data">
         <div>
            <label>Name:</label> *<br />
            <input class="form-input-field" type="text" value="" name="form[element0]" size="40"/><br /><br />

            <label>Email Address:</label> *<br />
            <input class="form-input-field" type="text" value="" name="form[element1]" size="40"/><br /><br />

            <label>How can we help you?</label> *<br />
            <textarea class="form-input-field" name="form[element2]" rows="8" cols="38"></textarea><br /><br />

            <div style="display: none;">
                <label>Spam Protection: Please don't fill this in:</label>
                <textarea name="comment" rows="1" cols="1"></textarea>
            </div>
            <input type="hidden" name="form_token" value="22445065ed6dfc3a92ce" />
            <input class="form-input-button" type="reset" name="resetButton" value="Reset" />
            <input class="form-input-button" type="submit" name="submitButton" value="Submit" />
        </div>
    </form>

    <br />
    <div class="form-footer"><span style="font-size:15px; font-weight:bold; ">
        <u>Note</u></span><span style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)</span><span style="font-size:13px; "><br /></span></div><br />
    @endsection
