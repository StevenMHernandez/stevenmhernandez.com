<h1 id="contact">Contact. <span class="accent">Steven Hernandez</span></h1>
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif
@if(Session::has('success'))
  <p>{{ session('success') }}</p>
@endif
<form action="{{route('contact.send')}}" method="POST">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>
    <label for="name">Name.</label>
    <input id="name" name="name" required/>

    <label for="email">Email.</label>
    <input type="email" id="email" name="email" required/>

    <label for="message">Message.</label>
    <textarea id="message" name="message" required></textarea>

    <input value="Send Message." type="submit">
</form>

<p>Call me at : <a href="tel:{{stripNonNumeric(env('CONTACT_PHONE'))}}">{{env('CONTACT_PHONE')}}</a></p>
<p>or reach me at : <a href="mailto:{{env('CONTACT_EMAIL')}}">{{env('CONTACT_EMAIL')}}</a></p>