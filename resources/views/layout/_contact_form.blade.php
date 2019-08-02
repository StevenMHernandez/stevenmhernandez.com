<aside class="contact" id="contact">
    <p class="contact_header">Contact. <span class="accent">Steven M. Hernandez</span></p>
    @if(isset($errors) && $errors->has())
        @foreach ($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    @if(array_key_exists('success', app('request')->input()) )
        <p style="color: #44cc44">Your message has been sent. Thank you.</p>
    @endif
    <form action="{{route('contact.send')}}" method="POST">
        <input type="hidden" name="_token" id="_token" value="{{ app('session')->get('_token') }}"/>
        <label for="name">Name.</label>
        <input id="name" name="name" required/>
	<input class="hidden" id="name2" name="name2"/>

        <label for="email">Email.</label>
        <input type="email" id="email" name="email" required/>

        <label for="message">Message.</label>
        <textarea id="message" name="message" required></textarea>

        <input value="Send Message." type="submit">
    </form>

    <p>Alternatively, please contact me directly at: <a href="mailto:{{env('CONTACT_EMAIL')}}">{{env('CONTACT_EMAIL')}}</a></p>
    <p>I look forward to talking to you</p>
</aside>

