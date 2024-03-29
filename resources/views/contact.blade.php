
 @extends('layout.header')
 @section('contact')
<html>
    <header>
        <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " >
           </header>


<body >

<div id="form-main">
    <div id="form-div">
      <form class="montform" id="reused_form"  >
        <p class="name">
            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
        </p>
        <p class="email">
          <input name="email" type="email" required  class="feedback-input" id="email" placeholder="Email" />
        </p>
        <p class="text">
          <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
        </p>
              <div class="submit">
          <button type="submit" class="button-blue">SUBMIT</button>
          <div class="ease"></div>
        </div>
      </form>
            <div id="error_message" style="width:100%; height:100%; display:none; ">
                  <h4>Error</h4>
                  Sorry there was an error sending your form.
            </div>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h2>Success! Your Message was Sent Successfully.</h2>
            </div>
      </div>
  </div>
</body></html>
  @endsection